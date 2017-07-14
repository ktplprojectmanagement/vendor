#!/bin/bash

# variables
LOG=$(mktemp /tmp/bitrix-env-XXXXX.log)
RELEASE_FILE=/etc/redhat-release
OS=$(awk '{print $1}' $RELEASE_FILE)
[[ -z $SILENT ]] && SILENT=0
[[ -z $TEST_REPOSITORY ]] && TEST_REPOSITORY=0

# common subs
print(){
    msg=$1
    notice=${2:-0}
    [[ ( $SILENT -eq 0 ) && ( $notice -eq 1 ) ]] && echo -e "${msg}"
    [[ ( $SILENT -eq 0 ) && ( $notice -eq 2 ) ]] && echo -e "\e[1;31m${msg}\e[0m"
    echo "$(date +"%FT%H:%M:%S"): $$ : $msg" >> $LOG
}

print_e(){
    msg_e=$1
    print "$msg_e" 2
    print "Installation logfile - $LOG" 1
    exit 1
}

# EPEL
configure_epel(){
    # exclude ansible1.9
    echo "exclude=ansible1.9" >> /etc/yum.conf
    is_ansible19=$(rpm -qa | grep -c ansible1.9)
    if [[ $is_ansible19 -gt 0 ]]; then
        yum -y remove ansible1.9
    fi

    # testing rpm package
    EPEL=$(rpm -qa | grep -c 'epel-release')
    if [[ $EPEL -gt 0 ]]; then
        print "EPEL repository is already configured on the server." 1
        return 0
    fi
 
    # links
    print "Getting configuration EPEL repository. Please wait." 1
    if [[ $VER -eq 6 ]]; then
        LINK="https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm"
        GPGK="https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-6"
    else
        LINK="https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm"
        GPGK="https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7"
    fi

    # configure repository
    rpm --import "$GPGK" >>$LOG 2>&1 || \
        print_e "An error occurred during importing the EPEL GPG key: $GPGK"
    rpm -Uvh "$LINK" >>$LOG 2>&1 || \
        print_e "An error occurred during installation the EPEL rpm-package: $LINK"

   
    # install packages
    yum clean all >/dev/null 2>&1 
    yum install -y yum-fastestmirror >/dev/null 2>&1

    print "Configuration EPEL repository is completed." 1
}

# REMI; php and mysql packages
configure_remi(){
    # testing rpm package
    EPEL=$(rpm -qa | grep -c 'remi-release')
    if [[ $EPEL -gt 0 ]]; then
        print "REMI repository is already configured on the server." 1
        return 0
    fi
 
    # links
    print "Getting configuration REMI repository. Please wait." 1
    GPGK="http://rpms.famillecollet.com/RPM-GPG-KEY-remi"
    if [[ $VER -eq 6 ]]; then
        LINK="http://rpms.famillecollet.com/enterprise/remi-release-6.rpm"
    else
        LINK="http://rpms.famillecollet.com/enterprise/remi-release-7.rpm"
    fi

    # configure repository
    rpm --import "$GPGK" >>$LOG 2>&1 || \
        print_e "An error occurred during importing the REMI GPG key: $GPGK"
    rpm -Uvh "$LINK" >>$LOG 2>&1 || \
        print_e "An error occurred during installation the REMI rpm-package: $LINK"
    
    
    # configure php 5.6
    sed -i -e '/\[remi\]/,/^\[/s/enabled=0/enabled=1/' /etc/yum.repos.d/remi.repo
    sed -i -e '/\[remi-php56\]/,/^\[/s/enabled=0/enabled=1/' /etc/yum.repos.d/remi.repo

    print "Configuration REMI repository is completed." 1
}

# Bitrix; bitrix-env, bx-nginx
configure_bitrix(){
    # testing bitrix repository
    EPEL=$(yum repolist enabled | grep ^bitrix -c)
    if [[ $EPEL -gt 0 ]]; then
        print "Bitrix repository is already configured on the server." 1
        return 0
    fi

    # configure testing repository
    REPO=yum
    [[ $TEST_REPOSITORY -gt 0  ]] && REPO=yum-testing
 
    # get GPG key
    print "Getting configuration Bitrix repository. Please wait." 1
    GPGK="http://repos.1c-bitrix.ru/yum/RPM-GPG-KEY-BitrixEnv"
    rpm --import "$GPGK" >>$LOG 2>&1 || \
        print_e "An error occurred during importing the Bitrix GPG key: $GPGK"

    # create yum config file
    REPOF=/etc/yum.repos.d/bitrix.repo
    echo "[bitrix]" > $REPOF
    echo "name=\$OS \$releasever - \$basearch" >> $REPOF
    echo "failovermethod=priority" >> $REPOF
    echo "baseurl=http://repos.1c-bitrix.ru/$REPO/el/$VER/\$basearch" >> $REPOF
    echo "enabled=1" >> $REPOF
    echo "gpgcheck=1" >> $REPOF
    echo "gpgkey=$GPGK" >> $REPOF

    print "Configuration Bitrix repository is completed." 1
}

# testing effective UID
[[ $EUID -ne 0 ]] && \
    print_e "This script must be run as root or it will fail" 

# testing OS name
[[ $OS != "CentOS" ]] && \
    print_e "This script is designed for use in OS CentOS Linux; Current OS=$OS"

# Notification
if [[ $SILENT -eq 0 ]]; then
    print "====================================================================" 2
    print "Bitrix Environment for Linux installation script." 2
    print "Yes will be assumed to answers, and will be defaulted." 2
    print "'n' or 'no' will result in a No answer, anything else will be a yes." 2
    print "This script MUST be run as root or it will fail" 2
    print "====================================================================" 2
fi

# testing Centos vesrion
IS_CENTOS7=$(grep -c 'CentOS Linux release' $RELEASE_FILE)
IS_X86_64=$(uname -p | grep -wc 'x86_64')
if [[ $IS_CENTOS7 -gt 0 ]]; then
    VER=$(awk '{print $4}' $RELEASE_FILE | awk -F'.' '{print $1}')
else
    VER=$(awk '{print $3}' $RELEASE_FILE | awk -F'.' '{print $1}')
fi
[[ ( $VER -eq 6 ) || ( $VER -eq 7 ) ]] || \
    print_e "The script does not support the Centos ${VER}."

# update all packages
print "Update system. Please wait." 1
yum -y update >>$LOG 2>&1 || \
    print_e "An error occurred during the update the system."

# configure repositories
configure_epel
configure_remi
configure_bitrix

# update all packages (EPEL and REMI packages)
print "Update system. Please wait." 1
yum -y update >>$LOG 2>&1 || \
        print_e "An error occurred during the update the system."

# install specific php packages (there is no dependencies in RPM)
print "Install php packages. Please wait." 1
yum -y install php php-mysql \
    php-pecl-apcu php-pecl-zendopcache >>$LOG 2>&1 || \
    print_e "An error occurred during installation of php-packages"

print "Install bitrix-env package. Please wait." 1
yum -y install bitrix-env >>$LOG 2>&1 || \
    print_e "An error occurred during installation of bitrix-env package"

print "Bitrix Environment installation is completed." 1
rm -f $LOG
