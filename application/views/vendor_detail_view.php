<div class="container" >
<div class="content_wrapper">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script>
jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {

        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});
</script>
<style type="text/css">
input[type=text]
{
width : 80%
}
label
{
font-family: "Open Sans",sans-serif;
font-size: 14px;
font-weight: normal;
}
</style>
<style type="text/css">
* {
    box-sizing: border-box;
}
.tooltip-inner {
    min-width: 500px !important;
}

#progress {
    padding: 0;
    list-style-type: none;
    font-family: arial;
    font-size: 12px;
    clear: both;
    line-height: 1em;
    margin: 0 -1px;
    text-align: center;
}

#progress li {
    float: left;
    padding: 10px 30px 10px 40px;
    background: #ccc;
    color: #fff;
    position: relative;
    /*border-top: 1px solid #666;
    border-bottom: 1px solid #666;*/
    width: 19%;
    margin: 0 1px;
}

#progress li:before {
    content: '';
 border-left: 16px solid #fff;
border-top: 41px solid transparent;
border-bottom: 42px solid transparent;
    position: absolute;
    top: 0;
    left: 0;
    
}
#progress li:after {
    content: '';
    border-left: 16px solid #ccc;
 border-top: 41px solid transparent;
border-bottom: 42px solid transparent;
    position: absolute;
    top: 0;
    left: 100%;
    z-index: 20;
}

#progress li.active {
    background: #4C87B9;
}

#progress li.active:after {
    border-left-color: #4C87B9;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<style type="text/css">
 .tooltip-inner {background-color: #f00;}
label
{
font-family: "Open Sans",sans-serif;
font-size: 14px;
font-weight: normal;
}
</style>
<style>
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links:after {
        display:block;
        clear:both;
        content:'';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
            /*padding:9px 15px;*/
            padding-top:8px;
                        display:inline-block;
            //border-radius:3px 3px 0px 0px;
            /*background:#fff;*/
            font-size:16px;
            font-weight:600;
            color:#fff;
            transition:all linear 0.15s;
        }
 
/*        .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }*/
 
/*    li.active a, li.active a:hover {
        background:#4C87B9;
        color:#fff;
    }*/
 
    /*----- Content of Tabs -----*/
    .tab-content {
        padding:15px;
        border-radius:3px;
        /*box-shadow:-1px 1px 1px rgba(0,0,0,0.15);*/
        background:#fff;
    }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }

</style>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                            <style media="all" type="text/css">      
      #err { 
      position: fixed;
    top: 1em;
    right: 1em;
    z-index: 25;
      }
      
   </style>
<style type="text/css">
    
/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  /*margin-top: 20px;
  margin-left: 50px;*/
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
div.bhoechie-tab-menu div.list-group > a.active, div.bhoechie-tab-menu div.list-group > a.active .glyphicon, div.bhoechie-tab-menu div.list-group > a.active .fa
{
    background-color: #02B7C3;
}

</style>
<style>
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links:after {
        display:block;
        clear:both;
        content:'';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
            padding:9px 15px;
            display:inline-block;
            border-radius:3px 3px 0px 0px;
            background:#02b7c3;
            font-size:16px;
            font-weight:600;
            color:#fff;
            transition:all linear 0.15s;
        }
 
        .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }
 
    li.active a, li.active a:hover {
        background:#fff;
        color:#4c4c4c;
    }
 
    /*----- Content of Tabs -----*/
    .tab-content {
        padding:15px;
        border-radius:3px;
        /*box-shadow:-1px 1px 1px rgba(0,0,0,0.15);*/
        background:#fff;
    }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }

</style>
 <a href="http://kritva.in/customer/index.php/Admindashboard" style="float: right;"><input type="button" value="Back"></a>
<div id="cancl_form" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 73%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Notify Vendor</h4>
                                    <label id="remark_id" style="float: right;"></label>
                                </div>
                                <div class="modal-body">
                                    <p> Dear Vendor, </p><br>
                                    <p>Please correct below fields which are rejected.</p>
                                    <table class="table">
                                      <thead>
                                        <th>Sr.No</th>
                                        <th>Field Name</th>
                                        <th>Remark</th>
                                      </thead>
                                      <tbody id="cancl_body_part">
                                        
                                      </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                    <button type="button" class="btn border-blue-soft" id="reject_details"  style="border-color: rgb(2, 183, 195);">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="confirm_form" class="modal fade" tabindex="-1" data-backdrop="del_goal" data-keyboard="false">
                        <div class="modal-dialog" style="width: 45%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Confirm Vendor</h4>
                                    <label id="remark_id" style="float: right;"></label>
                                </div>
                                <div class="modal-body">
                                    <p> Details are verified. </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn dark btn-outline" style="border-color: rgb(2, 183, 195);float: left;">Cancel</button>
                                    <button type="button" class="btn border-blue-soft" id="confirm_details"  style="border-color: rgb(2, 183, 195);">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-lg-12 col-md-12 bhoechie-tab-container" style="margin-top: 17px;">
<div class="tabs">
    <ul id="progress" class="tab-links" style="width: 100%;margin-left: 65px;">
        <li class="active " id="tab1_menu" style="height: 86px;font-size: 14px;font-family: 'Open Sans',sans-serif;">
       Step1<br>GST Details
        </li>
       
        <!-- <div class="triangle"></div> -->
        <li id="tab2_menu"  style="height: 86px;font-size: 14px;font-family: "Open Sans",sans-serif;">
        Step2<br>Primary Details
        </li>
        
        <li id="tab3_menu"  style="height: 86px;font-size: 14px;font-family: font-family: 'Open Sans',sans-serif;">
        Step3<br>Contact Details
        </li>
        
        <li id="tab4_menu" style="height: 86px; width: 21%;font-size: 14px;font-family: 'Open Sans',sans-serif;">
       Step4<br>Other Registration Details
        </li>        
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
 <input type="button" class="btn btn-info tab_1" value="Next" style="float: right;margin-bottom: 10px;">
                     <table  class="table">
                            <tr>
                              <td style="width: 465px;"><label for="contactName">State name as mentioned in GST Site<span class="required">*</span> </label></td>
                              <td>
                                 <select name="state_name_gst" class="state_name_gst">
                                    <option>---Select---</option>
                                    <?php
                                      foreach ($state_details as $row) { ?>
                                        <option id='<?php echo $row['state']; ?>' <?php if(isset($edit_user_details1['0']['State_Code_gst'])){ if($edit_user_details1['0']['State_Code_gst'] == $row['state_number']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['state_number']; ?>" class='cntrt_name'><?php echo $row['state_number'].'-'.$row['state_name']; ?></option>
                                    <?php }
                                    ?> 
</td>
<td>  
                                    <input type="checkbox" value="State name as mentioned in GST Site" id="title_stategst"> 
                                 </select> 
                              </td>
                          </tr>
                          <tr>
                              <td style="width: 465px;"><label for="contactName">Registered email address as on GST Site</label></td>
                              <td><input type="text"  id="gst_email_id" name="gst_email_id" class="email_validate"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['email_on_gst'])) { echo $edit_user_details1['0']['email_on_gst']; }?>" />
</td><td>
<input type="checkbox" value="Registered email address as on GST Site" id="title_gstemail"></td>
                          </tr>
                          <tr>
                              <td style="width: 465px;"><label for="contactName">Registered mobile no. as on GST Site<span class="required">*</span></label></td>
                              <td><input type="text"  id="gst_mobile_number " name="gst_mobile_number" class="gst_mobile_number"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['mobile_num_on_gst'])) { echo $edit_user_details1['0']['mobile_num_on_gst']; }?>" />
</td>
<td>
<input type="checkbox" value="Registered mobile no. as on GST Site" id="title_gstmobile"></td>
                          </tr>
                          <tr>
                              <td style="width: 465px;"><label for="contactName">Service Provider from India or Out Side India<span class="required">*</span></label></td>
                              <td>
                                <select id="gst_service_provider">
                                  <option>---Select---</option>
                                  <option <?php if(isset($edit_user_details1['0']['service_provider_on_gst'])){ echo 'selected="selected"'; } ?>>India</option>
                                  <option <?php if(isset($edit_user_details1['0']['service_provider_on_gst'])){ echo 'selected="selected"'; } ?>>Out of India</option>
                                </select>
</td>
<td>
                                <input type="checkbox" value="Service Provider from India or Out Side India" id="title_servprovider">
                              </td>
                          </tr>
                            <tr>
                                <td style="width: 465px;"><label for="contactName">Legal Name of Business as mentioned in PAN and GST Registration No</label></td>
                                <td><input type="text" class="name_validate"  id="gst_name_validate" name="gst_name_validate"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['legal_name_on_gst'])) { echo $edit_user_details1['0']['legal_name_on_gst']; }?>"/>
</td><td>
<input type="checkbox" value="Legal Name of Business as mentioned in PAN and GST Registration No" id="title_legalname"></td>
                            </tr>
                             <tr>
                                <td style="width: 465px;"><label for="contactName">Type(Nature) of Vendor by GST<span class="required">*</span></label></td>
                                <td>
                                  <select class="gst_vendor_type">  
<option value="--Select--">--Select--</option>                                        
                                            <option id="M" value="M" title="Manufacturer" <?php if(isset($edit_user_details) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_vendor'])){ if($edit_user_details1['0']['gst_vendor'] == 'M') { echo 'selected="selected"'; } } ?>>Manufacturer</option>
                                            <option  id="MD" value="MD" title="Manufacturer's Depot or Consignment Agent" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_vendor'])){ if($edit_user_details1['0']['gst_vendor'] == 'MD') { echo 'selected="selected"'; } } ?>>Manufacturer's Depot or Consignment Agent</option>
                                            <option id="FD" value="FD" title="First Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_vendor'])){ if($edit_user_details1['0']['gst_vendor'] == 'FD') { echo 'selected="selected"'; } } ?>>First Stage Dealer of indigenous excisable goods</option>
                                            <option id="SD" value="SD" title="Second Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_vendor'])){ if($edit_user_details1['0']['gst_vendor'] == 'SD') { echo 'selected="selected"'; } } ?>>Second Stage Dealer of indigenous excisable goods</option>
                                            <option id="I" value="I" title="Importer, from his depot or his consignment agent" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_vendor'])){ if($edit_user_details1['0']['gst_vendor'] == 'I') { echo 'selected="selected"'; } } ?>>Importer, from his depot or his consignment agent</option>
                                            <option id="DI" value="DI" title="First Stage or Second Stage dealer of imported goods" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_vendor'])){ if($edit_user_details1['0']['gst_vendor'] == 'DI') { echo 'selected="selected"'; } } ?>>First Stage or Second Stage dealer of imported goods</option>
<option id="DI" value="SP" title="Service Provider" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_vendor'])){ if($edit_user_details1['0']['gst_vendor'] == 'SP') { echo 'selected="selected"'; } } ?>>None</option>
                                          </select>
                                </td><td><input type="checkbox" value="Type(Nature) of Vendor by GST" id="title_vendortype"></td>
                            </tr>
   <tr id="gst11" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                <td><label for="contactName">House Number (Example: Shop Number, Flat No. Building No. etc.) as submitted for GST <span class="required">*</span></label></td>
                                <td><input type="text" class="gst_house"  id="gst_house" name="gst_house" maxlength="10" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_house_number'])) { echo $edit_user_details1['0']['gst_house_number']; }?>" /></td><td><input type="checkbox" value="House Number (Example: Shop Number, Flat No. Building No. etc.) as submitted for GST" id="title_vendortype"></td>
                            </tr>
<tr id="gst12" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                <td><label for="contactName">Street (Building Name, House Name etc.) as submitted for GST<span class="required">*</span></label></td>
                                <td><input type="text" class="gst_street_1"  id="gst_street_1" name="gst_street_1"  maxlength="60" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_street_2'])) { echo $edit_user_details1['0']['gst_street_2']; }?>" style="width: 404px;"/></td>
<td><input type="checkbox" value="Street (Building Name, House Name etc.) as submitted for GST" id="title_vendortype"></td>
                            </tr>
<tr id="gst13" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                <td><label for="contactName">Street 2 (Business Complex, Business District, Area etc.) as submitted for GST</label></td>
                                <td><input type="text" class="gst_street_2"  id="gst_street_2" name="gst_street_2"  maxlength="40" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_street_3'])) { echo $edit_user_details1['0']['gst_street_3']; }?>" style="width: 404px;"/></td>
<td><input type="checkbox" value="Street 2 (Business Complex, Business District, Area etc.) as submitted for GST" id="title_vendortype"></td>
                            </tr>
<tr id="gst14" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                <td><label for="contactName">Street 3 (Landmark, Location etc.) as submitted for GST</label></td>
                                <td><input type="text" class="gst_street_3"  id="gst_street_3" name="gst_street_3"  maxlength="40" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_street_4'])) { echo $edit_user_details1['0']['gst_street_4']; }?>" style="width: 404px;"/></td>
<td><input type="checkbox" value="Street 3 (Landmark, Location etc.) as submitted for GST" id="title_vendortype"></td>
                            </tr>
<tr id="gst15" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                <td><label for="contactName">Street 4 as submitted for GST</label></td>
                                <td><input type="text" class="gst_street_4"  id="gst_street_4" name="gst_street_4"  maxlength="40" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_street_5'])) { echo $edit_user_details1['0']['gst_street_5']; }?>" style="width: 404px;"/></td>
<td><input type="checkbox" value="Street 4 as submitted for GST" id="title_vendortype"></td>
                            </tr>
<tr id="gst16" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                <td><label for="contactName">Street 5 as submitted for GST</label></td>
                                <td><input type="text" class="gst_street_5"  id="gst_street_5" name="gst_street_5"  maxlength="40" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_street_6'])) { echo $edit_user_details1['0']['gst_street_6']; }?>" style="width: 404px;"/></td>
<td><input type="checkbox" value="Street 5 as submitted for GST" id="title_vendortype"></td>
                            </tr>
<tr id="gst17" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                <td><label for="contactName">Country as submitted for GST<span class="required">*</span></label></td>
                                <td>
 <select id="gst_country" name="gst_country">
<option <?php echo 'selected="selected"'; ?> value="IN">India</option>
                                       </select> 
</td><td><input type="checkbox" value="Country as submitted for GST" id="title_vendortype"></td>
                            </tr>
 <tr id="gst18" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                        <td><label for="contactName">City as submitted for GST<span class="required">*</span></label></td>
                                        <td><input type="text"  id="gst_City" name="gst_City" style="width: 404px;" value="<?php if(isset($edit_user_details) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_city'])) { echo $edit_user_details1['0']['gst_city']; }?>" maxlength="30"/></td> <td><input type="checkbox" value="City as submitted for GST" id="title_vendortype"></td>                                       
                                </tr>
<tr id="gst19" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                        <td><label for="contactName">District as submitted for GST<span class="required">*</span></label></td>
                                        <td><input type="text"  id="gst_district" name="gst_district" style="width: 404px;" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_district'])) { echo $edit_user_details1['0']['gst_district']; }?>" maxlength="40"/></td> <td><input type="checkbox" value="District as submitted for GST" id="title_vendortype"></td>                                       
                                    </tr>
        <tr id="gst20" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: '';width: 273px;"<?php } else { ?>style="display: none;width: 273px;"<?php } ?>>
                                        <td><label for="contactName">Postal Code as submitted for GST<span class="required">*</span></label></td>
                                        <td><input type="text"  id="gst_postal_code" name="gst_postal_code" class="postal_code_validate" style="width: 404px;" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_postal']) && $edit_user_details1['0']['gst_postal'] != '0') { echo $edit_user_details1['0']['gst_postal']; }?>"  maxlength="10"/></td>
<td><input type="checkbox" value="Postal Code as submitted for GST" id="title_vendortype"></td>
                                </tr>
                            <tr>
                                <td style="width: 465px;"><label for="contactName">GST Registration Number OR Unique ID Number<span class="required">*</span></label></td>
                                <td><input type="text" class="gst_validate"  id="GST_number" name="GST_number"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['GST_number'])) { echo $edit_user_details1['0']['GST_number']; }?>"/><?php if(isset($edit_user_details1['0']['gst_proof']) && $edit_user_details1['0']['gst_proof'] != ''){ ?>
                                        <a href="<?php echo base_url(); ?>proof/gst/<?php echo $edit_user_details1['0']['gst_proof']; ?>" target="_blank"><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Open File</u> </lable></span></a>
                                        <?php } ?></td><td><input type="checkbox" value="GST Registration Number OR Unique ID Number" id="title_gstprf"></td>
                            </tr>
                            
                            
                            <tr>
                                <td style="width: 465px;"><label for="contactName">Nature Of Invoice to be issued by Vendor(Tax Invoice or Bill Of Supply)<span class="required">*</span></label></td>
                                <td>
                                  <select name="nature_of_invoice" id="nature_of_invoice">
                                    <option>--Select--</option>
                                    <option <?php if(isset($edit_user_details1['0']['nature_of_invoice']) && $edit_user_details1['0']['nature_of_invoice'] == "Tax Invoice"){ echo 'selected="selected"'; } ?> value="Tax Invoice">Tax Invoice</option>
                                    <option <?php if(isset($edit_user_details1['0']['nature_of_invoice']) && $edit_user_details1['0']['nature_of_invoice'] == "Bill Of Supply"){ echo 'selected="selected"'; } ?> value="Bill Of Supply">Bill Of Supply</option>
                                  </select>
</td><td>
                                  <input type="checkbox" value="Nature Of Invoice to be issued by Vendor(Tax Invoice or Bill Of Supply)" id="title_natureinv">
                                </td>
                            </tr>
                             <tr>
                                <td style="width: 465px;"><label for="contactName">Composition Scheme Applicable or not?<span class="required">*</span></label></td>
                                <td><input class="compo_scheme" name="compo_scheme" type="radio" value="Yes" <?php if(isset($edit_user_details1['0']['Composition_Scheme_Applicability']) && $edit_user_details1['0']['Composition_Scheme_Applicability'] == 'Yes'){ echo 'checked="checked"'; } ?>>Yes<input type="radio"  name="compo_scheme" class="compo_scheme" value="No" <?php if(isset($edit_user_details1['0']['Composition_Scheme_Applicability']) && $edit_user_details1['0']['Composition_Scheme_Applicability'] == 'No'){ echo 'checked="checked"';  } ?>>No
</td><td>
<input type="checkbox" value="Composition Scheme Applicable or not?" id="title_composcheme"></td>
                            </tr>
                          <!--   <tr>
                                <td><label for="contactName">Service Accounting code Applicable</label></td>
                                <td><input type="text"  id="service_accounting_code" name="service_accounting_code"  value=""/></td>
                            </tr> -->
                             
                            <!--  <tr>
                                <td><label for="contactName">ECC No</label></td>
                                <td><input type="text"  id="ecc_no" name="ecc_no"  value="" disabled/></td>
                            </tr> -->
                            <tr>
                                <td style="width: 465px;"><label for="contactName">Excise Registration No</label></td>
                                <td><input type="text"  id="excise_reg_no" name="excise_reg_no"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Registration'])) { echo $edit_user_details['0']['Excise_Registration']; }?>" disabled/>   <br>
                                 <?php if(isset($edit_user_details1['0']['Excise_Registration']) && $edit_user_details1['0']['Excise_Registration'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Registration'])) { echo $edit_user_details1['0']['Excise_Registration']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Excise Registration No" id="title_exreg">
                                    <?php } ?> </td>      
                            </tr>
                            <tr> 
                                <td style="width: 465px;"><label for="contactName">Excise Range</label></td>
                                <td><input type="text"  id="excise_range" name="excise_range"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Range'])) { echo $edit_user_details['0']['Excise_Range']; }?>" disabled/>
                                <?php if(isset($edit_user_details1['0']['Excise_Range']) && $edit_user_details1['0']['Excise_Range'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Registration'])) { echo $edit_user_details1['0']['Excise_Range']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Excise Range" id="title_exreg">
                                          
                                    <?php } ?>    </td>  
                            </tr>
                             <tr>
                                <td style="width: 465px;"><label for="contactName">Excise Division</label></td>
                                <td><input type="text"  id="excise_div" name="excise_div"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Division'])) { echo $edit_user_details['0']['Excise_Division']; }?>" disabled/>   
                                <?php if(isset($edit_user_details1['0']['Excise_Division']) && $edit_user_details1['0']['Excise_Division'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Division'])) { echo $edit_user_details1['0']['Excise_Division']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Excise Division" id="title_exdiv">
                                          
                                    <?php } ?>  </td>                    
                            </tr>
                            <tr> 
                                <td style="width: 465px;"><label for="contactName">Excise Commissionerate</label></td>
                                <td><input type="text"  id="excise_commisionarate" name="excise_commisionarate"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Commissionerate'])) { echo $edit_user_details['0']['Excise_Commissionerate']; }?>" disabled/>
                               <?php if(isset($edit_user_details1['0']['Excise_Commissionerate']) && $edit_user_details1['0']['Excise_Commissionerate'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Commissionerate'])) { echo $edit_user_details1['0']['Excise_Commissionerate']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Excise Commissionerate" id="title_excom">
                                          
                                    <?php } ?>   </td> 
                            </tr>
                             <tr>
                                <td style="width: 465px;"><label for="contactName">CST number</label></td>
                                <td><input type="text"  id="cst_number" name="cst_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['cst'])) { echo $edit_user_details['0']['cst']; }?>" disabled/>
                                <?php if(isset($edit_user_details1['0']['cst']) && $edit_user_details1['0']['cst'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['cst'])) { echo $edit_user_details1['0']['cst']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="CST number" id="title_cst">
                                          
                                    <?php } ?>  </td>              
                            </tr>
                            <tr> 
                                <td style="width: 465px;"><label for="contactName">LST number</label></td>
                                <td><input type="text"  id="lst_number" name="lst_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['lst'])) { echo $edit_user_details['0']['lst']; }?>" disabled/>
                                <?php if(isset($edit_user_details1['0']['cst']) && $edit_user_details1['0']['cst'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['lst'])) { echo $edit_user_details1['0']['lst']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="LST number" id="title_lst">                                          
                                    <?php } ?> </td>   
                            </tr>
                             <tr> 
                                <td style="width: 465px;"><label for="contactName">Service Tax Reg No</label></td>
                                <td><input type="text"  id="service_tax_num" name="service_tax_num"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Service_Tax_Reg_No'])) { echo $edit_user_details['0']['lst']; }?>" disabled/>
                                <?php if(isset($edit_user_details1['0']['Service_Tax_Reg_No']) && $edit_user_details1['0']['Service_Tax_Reg_No'] != ''){ ?>
                                         <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Service_Tax_Reg_No'])) { echo $edit_user_details1['0']['Service_Tax_Reg_No']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Service Tax Reg No" id="title_Servicetax">                                         
                                    <?php } ?> </td>
                            </tr>
                             <tr>
                                <td style="width: 465px;"><label for="contactName">Exc.Tax Ind. Vendor</label></td>
                                <td><input type="text"  id="exc_tax_vendor" name="exc_tax_vendor"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Exc_Tax_Ind_Vendor'])) { echo $edit_user_details['0']['Exc_Tax_Ind_Vendor']; }?>" disabled/></td>
                            </tr>
                            <tr>
                                <td style="width: 465px;"><label for="contactName">SSI status</label></td>
                                <td><input type="text"  id="ssi_status" name="ssi_status"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['SSI_status'])) { echo $edit_user_details['0']['SSI_status']; }?>" disabled/></td>                            
                            </tr>
                            <tr> 
                                <td style="width: 465px;"><label for="contactName">CENVAT Scheme Participant</label></td>
                                <td><input type="text"  id="CENVAT_scheme" name="CENVAT_scheme"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['CENVAT'])) { echo $edit_user_details['0']['CENVAT']; }?>" disabled/>
                                   <?php if(isset($edit_user_details1['0']['CENVAT']) && $edit_user_details1['0']['CENVAT'] != '' && $edit_user_details1['0']['CENVAT'] != 'undefined'){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['CENVAT'])) { echo $edit_user_details1['0']['CENVAT']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="CENVAT Scheme Participant" id="title_CENVAT">                                          
                                    <?php } ?> 
                                </td>
                            </tr>
                        </table>
                                 <input type="button" class="btn btn-info tab_1" value="Next" style="float: right;margin-top: 29px;"> 
        </div>
 
        <div id="tab2" class="tab">
<input type="button" class="btn btn-info tab_2" value="Next"  style="float: right;"> 
            <input type="button" class="btn btn-info back_tab_1" value="Back" > 
<table  class="table" style="margin-top:10px">
                                        <tr>
                                            <td style="width: 276px;"><label for="contactName">Purchaser Name</label></td>
                                            <td style="width: 437px;width: 437px;"><input type="text" name="purchase_name"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Purchaser_Name'])) { echo $edit_user_details['0']['Purchaser_Name']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Purchaser Email ID</label></td>
                                            <td><input type="text" name="vendor_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Purchaser_Email_ID'])) { echo $edit_user_details['0']['Purchaser_Email_ID']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Sub Purchaser Name</label></td>
                                            <td><input type="text" name="vendor_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Sub_Purchaser_Name'])) { echo $edit_user_details['0']['Sub_Purchaser_Name']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Sub Purchaser Email ID</label></td>
                                            <td><input type="text" name="vendor_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Sub_Purchaser_Email_ID'])) { echo $edit_user_details['0']['Sub_Purchaser_Email_ID']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Vendor ID</label></td>
                                            <td><input type="text"  id="vendor_id" name="vendor_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Vendor_id'])) { echo $edit_user_details['0']['Vendor_id']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Company Code</label></td>
                                            <td><input type="text"  id="company_code" name="company_code"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Company_Code'])) { echo $edit_user_details['0']['Company_Code']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Purchase Organisation</label></td>
                                            <td><input type="text"  id="purchase_org" name="purchase_org"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Purch._Organization'])) { echo $edit_user_details['0']['Purch._Organization']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Purchase Organisation Description</label></td>
                                            <td><input type="text"  id="purchase_org_desc" name="purchase_org_desc"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Purchase_Organisation_Description'])) { echo $edit_user_details['0']['Purchase_Organisation_Description']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Account group</label></td>
                                            <td><input type="text"  id="acc_grp" name="acc_grp"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Account_group'])) { echo $edit_user_details['0']['Account_group']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Title</label></td>
                                            <td colspan="2">
                                              <select id="title" disabled>
                                                <option>--Select--</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'COMPANY') { echo 'selected="selected"'; } } ?>>COMPANY</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'M/S.') { echo 'selected="selected"'; } } ?>>M/S.</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Mr.') { echo 'selected="selected"'; } } ?>>Mr.</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Mr. and Mrs.') { echo 'selected="selected"'; } } ?>>Mr. and Mrs.</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Ms.') { echo 'selected="selected"'; } } ?>>Ms.</option>
                                             </select> 
                                            <label for="contactName" style="padding-left:25px">Name<span class="required">*</span></label><input type="text"  id="name1" name="name1"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Name'])) { echo $edit_user_details['0']['Name']; }?>" style="width: 300px;"  disabled/>
<input type="text"  id="name1" name="name1"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Name2'])) { echo $edit_user_details['0']['Name2']; }?>" style="width: 300px;"  disabled/>
                                           <!--  <td><label for="contactName">Name2<span class="required">*</span></label></td>
                                            <td><input type="text"  id="name2" name="name2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Name2'])) { echo $edit_user_details['0']['Name2']; }?>"  disabled/></td> -->
                                            
                                        </tr>
                                         <tr <?php if(isset($edit_user_details1['0']['Name']) && $edit_user_details1['0']['Name'] != '') { ?>style="display:''" <?php } ?>>
                                            <td><label for="contactName">Edit Title</label></td>
                                            <td colspan="2">
                                              <select id="title" disabled>
                                                <option>--Select--</option>
                                                <option <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Title'])){ if($edit_user_details1['0']['Title'] == 'COMPANY') { echo 'selected="selected"'; } } ?>>COMPANY</option>
                                                <option <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Title'])){ if($edit_user_details1['0']['Title'] == 'M/S.') { echo 'selected="selected"'; } } ?>>M/S.</option>
                                                <option <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Title'])){ if($edit_user_details1['0']['Title'] == 'Mr.') { echo 'selected="selected"'; } } ?>>Mr.</option>
                                                <option <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Title'])){ if($edit_user_details1['0']['Title'] == 'Mr. and Mrs.') { echo 'selected="selected"'; } } ?>>Mr. and Mrs.</option>
                                                <option <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Title'])){ if($edit_user_details1['0']['Title'] == 'Ms.') { echo 'selected="selected"'; } } ?>>Ms.</option>
                                             </select> 
                                            <label for="contactName" style="padding-left:25px">Name<span class="required">*</span></label><input type="text"  id="name1" name="name1"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Name'])) { echo $edit_user_details1['0']['Name']; }?>" style="width: 300px;"  disabled/>
<input type="text"  id="name1" name="name1"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Name2'])) { echo $edit_user_details1['0']['Name2']; }?>" style="width: 300px;"  disabled/><input type="checkbox" value="Name" id="title_name">
                                           <!--  <td><label for="contactName">Name2<span class="required">*</span></label></td>
                                            <td><input type="text"  id="name2" name="name2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Name2'])) { echo $edit_user_details['0']['Name2']; }?>"  disabled/></td> -->
                                            
                                        </tr>
                         
                                        <tr>
                                        <td><label for="contactName">Type(Nature) of Vendor</label></td>
                                        
                                        <td>
                                          <select class="vendor_change" disabled>                                          
                                            <option id="M" value="M" title="Manufacturer" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['vendor_type'] == 'M') { echo 'selected="selected"'; } } ?>>Manufacturer</option>
                                            <option  id="MD" value="MD" title="Manufacturer's Depot or Consignment Agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'MD') { echo 'selected="selected"'; } } ?>>Manufacturer's Depot or Consignment Agent</option>
                                            <option id="FD" value="FD" title="First Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'FD') { echo 'selected="selected"'; } } ?>>First Stage Dealer of indigenous excisable goods</option>
                                            <option id="SD" value="SD" title="Second Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'SD') { echo 'selected="selected"'; } } ?>>Second Stage Dealer of indigenous excisable goods</option>
                                            <option id="I" value="I" title="Importer, from his depot or his consignment agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'I') { echo 'selected="selected"'; } } ?>>Importer, from his depot or his consignment agent</option>
                                            <option id="DI" value="DI" title="First Stage or Second Stage dealer of imported goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'DI') { echo 'selected="selected"'; } } ?>>First Stage or Second Stage dealer of imported goods</option>
<option id="SP" value="SP" title="Service Provider" <?php if(isset($edit_user_details['0']['vendor_type']) && $edit_user_details['0']['vendor_type'] == 'SP') { echo 'selected="selected"'; } ?>>None</option>
                                          </select>
                                        </td>
                                       <!--  <td><label for="contactName">Type(Nature) Of Vendor Description</label></td>
                                        <td><lable id="vendor_desc" name="vendor_desc"></lable></td> -->
                                        <td></td>
                                    </tr>  
                                    <tr class="vendrdesc_edit" <?php if(isset($edit_user_details1['0']['vendor_type']) && $edit_user_details1['0']['vendor_type'] !='--Select--'){ ?> style="display: ''" <?php }else{ ?>style="display: none"<?php } ?>>
                                        <td><label for="contactName">Edit Type(Nature) of Vendor</label></td>
                                       
                                        <td>
                                          <select class="vendorchange_edit" disabled>
                                            <option>--Select--</option>
                                            <option id="M" value="M" title="Manufacturer" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['vendor_type'])){ if($edit_user_details1['0']['vendor_type'] == 'M') { echo 'selected="selected"'; } } ?>>Manufacturer</option>
                                            <option  id="MD" value="MD" title="Manufacturer's Depot or Consignment Agent" <?php if(isset($edit_user_details1['0']['vendor_type']) && $edit_user_details1['0']['vendor_type'] == 'MD') { echo 'selected="selected"'; } ?>>Manufacturer's Depot or Consignment Agent</option>
                                            <option id="FD" value="FD" title="First Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details1['0']['vendor_type']) && $edit_user_details1['0']['vendor_type'] == 'FD') { echo 'selected="selected"'; } ?>>First Stage Dealer of indigenous excisable goods</option>
                                            <option id="SD" value="SD" title="Second Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details1['0']['vendor_type']) && $edit_user_details1['0']['vendor_type'] == 'SD') { echo 'selected="selected"'; } ?>>Second Stage Dealer of indigenous excisable goods</option>
                                            <option id="I" value="I" title="Importer, from his depot or his consignment agent" <?php if(isset($edit_user_details1['0']['vendor_type']) && $edit_user_details1['0']['vendor_type'] == 'I') { echo 'selected="selected"';  } ?>>Importer, from his depot or his consignment agent</option>
                                            <option id="DI" value="DI" title="First Stage or Second Stage dealer of imported goods" <?php if(isset($edit_user_details1['0']['vendor_type']) && $edit_user_details1['0']['vendor_type'] == 'DI') { echo 'selected="selected"'; } ?>>First Stage or Second Stage dealer of imported goods</option>
<option id="SP" value="SP" title="Service Provider" <?php if(isset($edit_user_details1['0']['vendor_type']) && $edit_user_details1['0']['vendor_type'] == 'SP') { echo 'selected="selected"'; } ?>>None</option>
                                          </select></td><td>
                                          <input type="checkbox" id="title_vendrdesc" value="Vendor Description">
                                        </td>
                                        <!--   <td><label for="contactName">Type(Nature) Of Vendor Description</label></td>
                                          <td><input type="text"  id="vendor_desc" name="vendor_desc"  value=""  disabled/></td> -->
                                       
                                    </tr>  
                                </table>
        
                               <input type="button" class="btn btn-info tab_2" value="Next"  style="float: right;"> 
            <input type="button" class="btn btn-info back_tab_1" value="Back" >
        </div>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
                <style type="text/css">
                    .panel-heading {
  position: relative;
}
.panel-heading[data-toggle="collapse"]:after {
  font-family: 'Glyphicons Halflings';
  content: "\e072"; /* "play" icon */
  position: absolute;
  color: #02B7C3;
  font-size: 18px;
  line-height: 22px;
  right: 20px;
  top: calc(50% - 10px);

  /* rotate "play" icon from > (right arrow) to down arrow */
  -webkit-transform: rotate(-90deg);
  -moz-transform:    rotate(-90deg);
  -ms-transform:     rotate(-90deg);
  -o-transform:      rotate(-90deg);
  transform:         rotate(-90deg);
}
.panel-heading[data-toggle="collapse"].collapsed:after {
  /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
  -webkit-transform: rotate(90deg);
  -moz-transform:    rotate(90deg);
  -ms-transform:     rotate(90deg);
  -o-transform:      rotate(90deg);
  transform:         rotate(90deg);
}
                </style>
                <style type="text/css">
          .custom-file-input {
        display: inline-block;
        position: relative;
        color: #02B7C3;
      }
      .custom-file-input input[type=file] {
        visibility: hidden;
        /*width: 100px;*/
      }
      .custom-file-input:before {
        content: 'Choose File';
        display: block;
        background: -webkit-linear-gradient( -180deg, #ffdc73, #febf01);
        background: -o-linear-gradient( -180deg, #ffdc73, #febf01);
        background: -moz-linear-gradient( -180deg, #ffdc73, #febf01);
        background: linear-gradient( -180deg, #ffdc73, #febf01);
        border: 3px solid #dca602;
        border-radius: 10px;
        padding: 5px 0px;
        outline: none;
        white-space: nowrap;
        cursor: pointer;
        text-shadow: 1px 1px rgba(255,255,255,0.7);
        font-weight: bold;
        text-align: center;
        font-size: 10pt;
        position: absolute;
        left: 0;
        right: 0;
      }
      .custom-file-input:hover:before {
        border-color: #febf01;
      }
        .custom-file-input:active:before {
        background: #febf01;
      }
      .file-blue:before {
        content: 'Browse File';
        background: -webkit-linear-gradient( -180deg, #99dff5, #02b0e6);
        background: -o-linear-gradient( -180deg, #99dff5, #02b0e6);
        background: -moz-linear-gradient( -180deg, #99dff5, #02b0e6);
        background: linear-gradient( -180deg, #99dff5, #02b0e6);
        border-color: #57cff4;
        color: #FFF;
        text-shadow: 1px 1px rgba(000,000,000,0.5);
      }
      .file-blue:hover:before {
        border-color: #02b0e6;
      }
      .file-blue:active:before {
        background: #02b0e6;
      }
</style>
        <div id="tab3" class="tab">
<input type="button" class="btn btn-info tab_3" value="Next" style="float: right;"> 
            <input type="button" class="btn btn-info back_tab_2" value="Back"> 
<table  class="table" style="margin-top: 10px;">
                                    <tr>
                                        <td style="width: 264px;"><label for="contactName">State Name</label></td>
                                        <td>
                                           <select name="state_name" class="state_name_chk" disabled>
                                              <option>---Select---</option>
                                             <?php 
                                                foreach ($sap_state as $row) { ?>
                                                  <option id='<?php echo $row['state_code']; ?>' <?php if(isset($edit_user_details['0']['State_Code'])){ if($edit_user_details['0']['State_Code'] == $row['state_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['state_code']; ?>" class='cntrt_name'><?php echo $row['state_code'].'-'.$row['state_name']; ?></option>
                                              <?php }
                                              ?>    
                                           </select></td>
                                         <td></td>
                                    </tr>
                                    <tr class="statename_edit" <?php if(isset($edit_user_details1['0']['state_code']) && $edit_user_details1['0']['state_code'] != '0'){ ?> style="display: ''" <?php }else{ ?>style="display: none"<?php } ?>>
                                        <td style="width: 264px;"><label for="contactName">Edit State</label></td>
                                        <td>
                                        <select name="state_name" class="state_name_edit_chk" disabled>
                                          <option>---Select---</option>
                                             <?php 
                                                foreach ($sap_state as $row) { ?>
                                                  <option id='<?php echo $row['state_code']; ?>' <?php if(isset($edit_user_details1['0']['State_Code']) && $edit_user_details1['0']['State_Code'] == $row['state_code']){  echo 'selected="selected"'; } ?> value="<?php echo $row['state_code']; ?>" class='cntrt_name'><?php echo $row['state_code'].'-'.$row['state_name']; ?></option>
                                              <?php }
                                              ?>    
                                           </sele 
                                          </select>
</td><td>
<input type="checkbox" id="title_statename" value="State Name"></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 264px;"><label for="email">House Number</label></td>
                                        <td><input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['House_Number'])) { echo $edit_user_details['0']['House_Number']; }?>" class="required requiredField email" disabled/>
                                        <?php if(isset($edit_user_details1['0']['House_Number']) && $edit_user_details1['0']['House_Number'] != ''){ ?>
                                        <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['House_Number'])) { echo $edit_user_details1['0']['House_Number']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" id="title_housenum" value="House Number">
                                        <?php } ?></td>
                                    </tr>
                                     <tr>
                                        <td style="width: 264px;"><label for="contactName">Street</label></td>
                                        <td><input type="text"  id="street1" name="street1"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street'])) { echo $edit_user_details['0']['Street']; }?>"  disabled/>
                                        <?php if(isset($edit_user_details1['0']['Street']) && $edit_user_details1['0']['Street'] != ''){ ?>
                                        <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street'])) { echo $edit_user_details1['0']['Street']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Street" id="title_street">
                                        <?php } ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 264px;"><label for="contactName">Street 2</label></td>
                                        <td><input type="text"  id="street2" name="street2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street2'])) { echo $edit_user_details['0']['Street2']; }?>"  disabled/>
                                        <?php if(isset($edit_user_details1['0']['Street2']) && $edit_user_details1['0']['Street2'] != ''){ ?>
                                       <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street2'])) { echo $edit_user_details1['0']['Street2']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Street 2" id="title_street2">
                                        <?php } ?></td>
                                    </tr>
                                    <tr>
                                    <td style="width: 264px;"><label for="email">Street 3</label></td>
                                    <td><input type="email" name="street3" id="street3" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street3'])) { echo $edit_user_details['0']['Street3']; }?>" class="required requiredField email"  disabled/>
                                   <?php if(isset($edit_user_details1['0']['street3']) && $edit_user_details1['0']['street3'] != ''){ ?>
                                    <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['street3'])) { echo $edit_user_details1['0']['street3']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Street 3" id="title_street3">
                                    <?php } ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 264px;"><label for="contactName">Street 4</label></td>
                                    <td><input type="text"  id="street4" name="street4"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street4'])) { echo $edit_user_details['0']['Street4']; }?>"  disabled/>
                                    <?php if(isset($edit_user_details1['0']['Street4']) && $edit_user_details1['0']['Street4'] != ''){ ?>
                                    <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street4'])) { echo $edit_user_details1['0']['Street4']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Street 4" id="title_street4">
                                    <?php } ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 264px;"><label for="contactName">Street 5</label></td>
                                    <td><input type="text"  id="street5" name="street5"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street5'])) { echo $edit_user_details['0']['Street5']; }?>"  disabled/>
                                    <?php if(isset($edit_user_details1['0']['Street5']) && $edit_user_details1['0']['Street5'] != ''){ ?>
                                    <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street5'])) { echo $edit_user_details1['0']['Street5']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Street 5" id="title_street5">
                                    <?php } ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 264px;"><label for="contactName">Country</label></td>
                                   <!--  <td><input type="text"  id="country_key" name="country_key"  value=""  disabled/></td>   -->
                                    
                                    <td>
                                       <select id="countrykey_prev">
                                           <option <?php echo 'selected="selected"'; ?> value="IN">India</option>
                                       </select> 
                                    </td>  
                                     <td></td>                              
                                </tr>
                                 <tr class="countrykey_edit" <?php if(isset($edit_user_details1['0']['Country_Key']) && $edit_user_details1['0']['Country_Key'] != ''){ ?> style="display: ''" <?php }else{ ?>style="display: none"<?php } ?>>
                                    <td><label for="contactName">Edit Country</label></td>
                                    <!-- <td><input type="text"  id="country_key_edit" name="country_key"  value=""  disabled/></td>  -->
                                    <td class="country_value_edit">
                                       <select id="countrykey_now">
                                          <option <?php echo 'selected="selected"'; ?> value="IN">India</option>
                                       </select> </td><td>
                                       <input type="checkbox" id="title_countrykey" value="Country Key">
                                    </td>                                
                                </tr>
                                    <tr>
                                        <td style="width: 264px;"><label for="contactName">City</label></td>
                                        <td><input type="text"  id="City" name="City"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['City'])) { echo $edit_user_details['0']['City']; }?>" disabled/>
                                        <?php if(isset($edit_user_details1['0']['City']) && $edit_user_details1['0']['City'] != ''){ ?>
                                    <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['City'])) { echo $edit_user_details1['0']['City']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" id="title_city">
                                    <?php } ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 264px;"><label for="contactName">District</label></td>
                                        <td><input type="text"  id="district" name="district"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['District'])) { echo $edit_user_details['0']['District']; }?>" disabled/>
                                        <?php if(isset($edit_user_details1['0']['District']) && $edit_user_details1['0']['District'] != ''){ ?>
                                    <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['District'])) { echo $edit_user_details1['0']['District']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" id="title_district">
                                    <?php } ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 264px;"><label for="contactName">Postal Code</label></td>
                                        <td><input type="text"  id="postal_code" name="postal_code"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Postal_Code'])) { echo $edit_user_details['0']['Postal_Code']; }?>" disabled/>
                                        <?php if(isset($edit_user_details1['0']['Postal_Code']) && $edit_user_details1['0']['Postal_Code'] != ''){ ?>
                <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Postal_Code']) && $edit_user_details1['0']['Postal_Code'] != 0) { ?>                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Postal_Code']) && $edit_user_details1['0']['Postal_Code'] != 0) { echo $edit_user_details1['0']['Postal_Code']; }?>" class="required requiredField email" disabled/>
<?php } ?>
</td><td>
<input type="checkbox" value="Postal Code" id="title_postalcode">
                                    <?php } ?></td>
                                    </tr>
                                    <tr>                                        
                                        <td style="width: 264px;"><label for="contactName">Telephone 1</label></td>
                                        <td><input type="text"  id="telephone1" name="telephone1"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Telephone1'])) { echo $edit_user_details['0']['Telephone1']; }?>" disabled/>
                                       <?php if(isset($edit_user_details1['0']['Telephone1']) && $edit_user_details1['0']['Telephone1'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Telephone1'])) { echo $edit_user_details1['0']['Telephone1']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Telephone 1" id="title_tele1">
                                    <?php } ?></td>
                                    </tr>
                                     <tr>
                                        <td style="width: 264px;"><label for="contactName">Telephone 2</label></td>
                                        <td><input type="text"  id="telephone2" name="telephone2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Telephone2'])) { echo $edit_user_details['0']['Telephone2']; }?>" disabled/>
                                        <?php if(isset($edit_user_details1['0']['Telephone2']) && $edit_user_details1['0']['Telephone2'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Telephone2'])) { echo $edit_user_details1['0']['Telephone2']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Telephone 2" id="title_tele2">
                                    <?php } ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 264px;"><label for="contactName">Fax Number</label></td>
                                        <td><input type="text"  id="fax_number" name="fax_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Fax_Number'])) { echo $edit_user_details['0']['Fax_Number']; }?>" disabled/>
                                        <?php if(isset($edit_user_details1['0']['Fax_Number']) && $edit_user_details1['0']['Fax_Number'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Fax_Number'])) { echo $edit_user_details1['0']['Fax_Number']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Fax Number" id="title_faxnum">
                                    <?php } ?></td>
                                    </tr>
                                     <tr>
                                        <td style="width: 264px;"><label for="contactName">E-Mail Address</label></td>
                                        <td><input type="text"  id="email_id" name="email_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['EMail_id'])) { echo $edit_user_details['0']['EMail_id']; }?>" disabled/>
                                         <?php if(isset($edit_user_details1['0']['EMail_id']) && $edit_user_details1['0']['EMail_id'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['EMail_id'])) { echo $edit_user_details1['0']['EMail_id']; }?>" class="required requiredField email" disabled/>
</td><td>
<input type="checkbox" value="Email ID" id="title_email">
                                    <?php } ?></td>
                                    </tr>
                                     <tr>
                                        <td style="width: 264px;"><label for="contactName">Permanent account number</label></td>
                                        <td><input type="text"  id="pan_number" name="pan_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['pan'])) { echo $edit_user_details['0']['pan']; }?>" disabled/>
                                         <?php if(isset($edit_user_details1['0']['pan']) && $edit_user_details1['0']['pan'] != ''){ ?>
                                          <input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['pan'])) { echo $edit_user_details1['0']['pan']; }?>" class="required requiredField email" disabled/><input type="checkbox" value="PAN Number" id="title_pan">
                                    <?php } ?></td>
                                     <?php if(isset($edit_user_details1['0']['pan_proof']) && $edit_user_details1['0']['pan_proof'] != ''){ ?>
                                        <td><a href="<?php echo base_url(); ?>proof/pan/<?php echo $edit_user_details1['0']['pan_proof']; ?>" target="_blank"><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Open Document</u> </lable></span></a></td>
                                        <?php } ?>
                                    </tr>
                                </table> 
  
                        <input type="button" class="btn btn-info tab_3" value="Next" style="float: right;"> 
            <input type="button" class="btn btn-info back_tab_2" value="Back"> 
        </div>
 
        <div id="tab4" class="tab">
 <table  class="table">
                             <tr>
                                <td style="width: 264px;"><label for="contactName">VAT Registration No</label></td>
                                <td><input type="text"  id="vat_reg" name="vat_reg"  value="" disabled/></td>
                            </tr>  
                            <tr>
                                <td style="width: 264px;"><label for="email">Industry</label></td>
                                 <td>
                                   <select name="industry" id="industry">
                                    <option>---Select---</option>
                                      <?php
                                        foreach ($industry_list as $row) { ?>
                                          <option id='<?php echo $row[' industry_code']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0']['Industry'] == $row['industry_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['industry_code']; ?>" class='cntrt_name'><?php echo $row['description']; ?></option>
                                      <?php }
                                      ?>  
                                  </select>
                                </td>
                            </tr>                                                    
                            <tr>
                                <td style="width: 264px;"><label for="contactName">Reconciliation Account</label></td>
                                 <td>
                                   <select name="recon_acc" id="recon_acc">
                                    <option>---Select---</option>
                                      <?php
                                        foreach ($Reconciliation_Account as $row) { ?>
                                          <option id='<?php echo $row['reconciliation_code']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0']['Reconciliation_acct'] == $row['reconciliation_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['reconciliation_code']; ?>" class='cntrt_name'><?php echo $row['description']; ?></option>
                                      <?php }
                                      ?>  
                                  </select>
                                </td>                            
                            </tr>
                            <tr>
                                <td style="width: 264px;"><label for="contactName">Planning group</label></td>
                                 <td>
                                   <select name="planning_grp" id="planning_grp">
                                   <option>---Select---</option>
                                      <?php
                                        foreach ($planning_group as $row) { ?>
                                          <option id='<?php echo $row['planning_grp_code']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0']['Planning_group'] == $row['planning_grp_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['planning_grp_code']; ?>" class='cntrt_name'><?php echo $row['description']; ?></option>
                                      <?php }
                                      ?>  
                                  </select>
                                </td> 
                            </tr>
                            <tr>
                                <td style="width: 264px;"><label for="contactName">Payment methods</label></td>
                                <td>
                                   <select name="payment_method" id="payment_method">
                                    <option>---Select---</option>
                                      <?php
                                        foreach ($payment_code as $row) { ?>
                                          <option id='<?php echo $row['code']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0']['Payment_methods'] == $row['code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['code']; ?>" class='cntrt_name'><?php echo $row['description']; ?></option>
                                      <?php }
                                      ?>  
                                  </select>
                                </td>                               
                            </tr>
                            <tr>
                                <td style="width: 264px;"><label for="contactName">Check Double Invoice</label></td>
                                <td><input type="text"  id="doubl_chk_invoice" name="doubl_chk_invoice"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Check_double_invoice'])) { echo $edit_user_details['0']['Check_double_invoice']; }?>" disabled/></td>
                            </tr>
                            <tr>
                                <td style="width: 264px;"><label for="contactName">Previous Account no.</label></td>
                                <td><input type="text"  id="doubl_chk_invoice" name="doubl_chk_invoice"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Previous_acc'])) { echo $edit_user_details['0']['Previous_acc']; }?>" disabled/></td>
                                <!-- <td><input type="text"  id="prev_acc_no" name="prev_acc_no"  value="" disabled/></td>    -->                         
                            </tr>
                            <tr> 
                                <td style="width: 264px;"><label for="contactName">Terms of Payment</label></td>
                                <td><input type="text"  id="terms_of_paymnt" name="terms_of_paymnt"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Terms_of_Payment'])) { echo $edit_user_details['0']['Terms_of_Payment']; }?>" disabled/></td>
                            </tr>
                             <tr>
                                <td style="width: 264px;"><label for="contactName">Currency</label></td>
                                <td><input type="text"  id="currency" name="currency"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Currency'])) { echo $edit_user_details['0']['Currency']; }?>" disabled/></td>
                            </tr>
                            <tr>
                                <td style="width: 264px;"><label for="contactName">GR-Based Invoice Verification</label></td>
                                <td><input type="text"  id="gr_based_invoice" name="gr_based_invoice"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['GR-Based_Inv_Verif'])) { echo $edit_user_details['0']['GR-Based_Inv_Verif']; }?>" disabled/></td>                            
                            </tr>
                            <tr> 
                                <td style="width: 264px;"><label for="contactName">Service-Based Invoice Verification</label></td>
                                <td><input type="text"  id="srv_based_invoice_verify" name="srv_based_invoice_verify"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Service-Based_Invoice_Verification'])) { echo $edit_user_details['0']['Service-Based_Invoice_Verification']; }?>" disabled/></td>
                            </tr>
                             <tr>
                                <td style="width: 264px;"><label for="contactName">Incoterms</label></td>
                                <td><input type="text"  id="Incoterms" name="Incoterms"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Incoterms'])) { echo $edit_user_details['0']['Incoterms']; }?>" disabled/></td>                            
                            </tr>
                            <tr> 
                                <td style="width: 264px;"><label for="contactName">Incoterms (Part 2)</label></td>
                                <td><input type="text"  id="Incoterms2" name="Incoterms2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Incoterms2'])) { echo $edit_user_details['0']['Incoterms2']; }?>" disabled/></td>
                            </tr>
                        </table>
                        <input type="button" class="btn btn-info" value="Back" id="back_tab_3"> 
                        <button type="button" class="btn btn-primary confirm_form" style="background-color: rgb(9, 185, 197);float: right;margin-left: 377px;">Confirm</button> <button type="button" class="btn btn-primary reject_form" style="float: right;background-color: rgba(255, 7, 7, 0.59);">Modify</button>
        </div>
    </div>
</div>
</div>
<script>
$('.tab_1').click(function(){
$('#tab1').removeClass("active");
$('#tab2').addClass("active");
$('#tab1_menu').removeClass("active");
$('#tab2_menu').addClass("active");
});


</script>


<script type="text/javascript">
$('.tab_2').click(function(){
    $('#tab2').removeClass("active");
    $('#tab3').addClass("active");
    $('#tab2_menu').removeClass("active");
    $('#tab3_menu').addClass("active");
});

</script>
<script type="text/javascript">
$('.back_tab_1').click(function(){
    $('#tab2').removeClass("active");
    $('#tab1').addClass("active");
    $('#tab1_menu').addClass("active");
    $('#tab2_menu').removeClass("active");
});
</script>


<script type="text/javascript">
$('.tab_3').click(function(){
    $('#tab3').removeClass("active");
    $('#tab4').addClass("active");
    $('#tab3_menu').removeClass("active");
    $('#tab4_menu').addClass("active");
});

</script>
<script type="text/javascript">
$('.back_tab_2').click(function(){
    $('#tab3').removeClass("active");
    $('#tab2').addClass("active");
    $('#tab2_menu').addClass("active");
    $('#tab3_menu').removeClass("active");
});
</script>

<script type="text/javascript">
$('#back_tab_3').click(function(){
    $('#tab4').removeClass("active");
    $('#tab3').addClass("active");
    $('#tab3_menu').addClass("active");
    $('#tab4_menu').removeClass("active");
});
</script>
<script type='text/javascript' src='<?php echo base_url(); ?>js/validation_script.js'></script>
<script type="text/javascript">
    $(function(){
      $("body").on('click','.reject_form',function(){ 
        var field_list = '';
        var i = 1;
        $("input[type=checkbox]:checked").map(function () { 
          if(field_list == '')
          {
            field_list = '<tr><td>'+i+'</td><td class="text'+i+'">'+$(this).attr('value')+'</td><td><input type="text" style="width: 399px;" class="remrk" title="'+$(this).attr('value')+'" id="remark_'+i+'"></td></tr>';
          }
          else
          {
            field_list = field_list+'<tr><td>'+i+'</td><td class="text'+i+'">'+$(this).attr('value')+'</td><td><input type="text" style="width: 399px;" class="remrk" title="'+$(this).attr('value')+'" id="remark_'+i+'"></td></tr>';
          }
          i++;
          //alert($(this).attr('value')); 
        });
        if (field_list == '') 
        {
          field_list = '<tr><td colspan="3">No Record</td></tr>';
        }
//field_list = field_list+'<tr><td>Enter Message </td><td colspan="2"><textarea id="mail_content" style="width: 708px;"></textarea></td></tr>';
          $("#cancl_body_part").html(field_list);
          jQuery("#cancl_form").modal('show');
          var points_value = '';var remark_value = '';
          $("body").on('click','#reject_details',function(){
            var error = "";var points_value = '';var remark_value = '';
            for (var j = 1; j < i; j++) {
              if ($("#remark_"+j).val() == '') 
              {
                  $("#remark_"+j).css('border-color','red');  
                  error = "Please enter remark for all the field."; break;               
              }
              else
              {
                  if (remark_value == '') 
                  {
                    remark_value = $("#remark_"+j).val();
                  }
                  else
                  {
                    remark_value = remark_value+'!'+$("#remark_"+j).val();
                  }
                   if (points_value == '') 
                  {
                    points_value = $(".text"+j).text();
                  }
                  else
                  {
                    points_value = points_value+'!'+$(".text"+j).text();
                  }
              }
            } 

            if (error != '') 
            {
                $("#remark_id").text(error); 
                $("#remark_id").css('color','red'); 
            } 
            else
            {
              $("#remark_id").text(''); 
              $(".remrk").css('border-color','red'); 
              var base_url = window.location.origin;
              var data = {
                'points_value' : points_value,
                'remark_value' : remark_value,
                'vendor_id' : $("#vendor_id").attr('value'),
                'status' : '2',
                'remark' : $("#mail_content").text()
              };
              $.ajax({
                  type : 'post',
                  data : data,
                  url : base_url+'/vendor/index.php/Vendordata/update_remark',
                  success : function(data)
                  {
                      jQuery("#cancl_form").modal('hide');
                      //alert(data);
                      $("#purch_based_vendor").html(data);
                  }
              });
            }            
          });
      });

      $("body").on('click','.confirm_form',function(){
         jQuery("#confirm_form").modal('show');
         $("body").on('click','#confirm_details',function(){
          jQuery("#confirm_form").modal('hide');
          var base_url = window.location.origin;
              var data = {
                'vendor_id' : $("#vendor_id").attr('value'),
                'status' : '1'
              };
              $.ajax({
                  type : 'post',
                  data : data,
                  url : base_url+'/vendor/index.php/Vendordata/update_remark_aprv',
                  success : function(data)
                  {
                      jQuery("#confirm_form").modal('hide');
                      $("#purch_based_vendor").html(data);
                  }
              });
         });
      });

        $("body").on('click','.get_field',function(){
            var field = $(this).attr('id');
            var get_data = field.split('_');
            $("."+get_data[0]+"_edit").css("display","");
            $("."+get_data[0]+"_edit").attr('title',"active");
            $(this).css("display","none");
            //alert(get_data);
            $("#close_"+get_data[0]).css("display","");
        });
        $("body").on('click','.close_field',function(){
            var field = $(this).attr('id');
            var get_data = field.split('_');
            $("#close_"+get_data[1]).css("display","none");
            $("."+get_data[1]+"_edit").css("display","none");
            $("."+get_data[1]+"_edit").attr('title',"inactive");
            $(this).css("display","none");
            $("#"+get_data[1]+"_edit").css("display","block");
            //alert(field);
        });
        $("body").on("change",".vendor_change",function(){
          var vendr_desc = $(this).find(":selected").val();
          //alert($("#"+vendr_desc).attr('title'));
          var title = $("#"+vendr_desc).attr('title');
          $("#vendor_desc").text(title);
        });

        $("body").on('change','.state_name_chk',function(){
            var state_code = $(this).find(':selected').attr('value');
            //alert(state_code);
            $("#state_name_code").attr('value',state_code);
            var str = /^([0-9]){2}([A-Z]){5}([0-9]){4}([A-Z]){1}([a-zA-Z0-9]){3}?$/; 
            var data = $.trim($("#GST_number").val());
            var code = $("#state_name_code").attr('value');
            var variable2 = data.substring(0, 2);
            if(code != variable2)
            {
                $("#err").show();
                $("#error_value").html("This GST number does not belong to this state.").show(); 
            }
             else
            {
                $(this).css('border-color','');   
                $("#err").hide();
                $("#error_value").text(""); 
            }
        });

         $("body").on('change','.state_name_edit_chk',function(){
            var state_code = $(this).find(':selected').attr('value');
            //alert(state_code);
            $("#state_name_code_edit").attr('value',state_code);
            var str = /^([0-9]){2}([A-Z]){5}([0-9]){4}([A-Z]){1}([a-zA-Z0-9]){3}?$/; 
            var data = $.trim($("#GST_number").val());
            var code = $("#state_name_code_edit").attr('value');
            var variable2 = data.substring(0, 2);
            //alert(data);alert(code);
            if(data == '' || data === undefined)
            {
                $("#err").show();
                $("#error_value").html("Please Enter correct GST number").show();
            }
            else if(code != variable2)
            {
                $("#err").show();
                $("#error_value").html("This GST number does not belong to this state.").show(); 
            }
             else
            {
                $(this).css('border-color','');   
                $("#err").hide();
                $("#error_value").text(""); 
            }
        });
    });
</script>