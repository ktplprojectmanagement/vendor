<div class="content_wrapper">
    <div class="page-content">    
        <div class="container_24" style="width:1451px">
            <div class="grid_24">
                <div class="grid_16 alpha" style="width: 1140px;">
                    <div class="content-bar"> 
                        <h3 class="page-title"><a href="#">Vendor Details (<?php if(isset($edit_user_details['0']['Name'])) { echo $edit_user_details['0']['Name']; } ?>) </a></h3>
                        <script type="text/javascript">
                            jQuery(function () {
                                var indicator = jQuery('#indicator'),
                                        indicatorHalfWidth = indicator.width() / 2,
                                        lis = jQuery('#tabs-cat').children('li');
                                jQuery("#tabs-cat").tabs("#content-cat section", {
                                    effect: 'fade',
                                    fadeOutSpeed: 0,
                                    fadeInSpeed: 400,
                                    onBeforeClick: function (event, index) {
                                        var li = lis.eq(index),
                                                newPos = li.position().left + (li.width() / 2) - indicatorHalfWidth;
                                        indicator.stop(true).animate({left: newPos}, 600, 'easeInOutExpo');
                                    }
                                });
                            });
                        </script> 
                        <span id="indicator"></span>    
                        <div id="content-cat">
                            <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                                    e.preventDefault();
                                    $(this).siblings('a.active').removeClass("active");
                                    $(this).addClass("active");
                                    var index = $(this).index();
                                    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                                    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                                });
                            });
                            </script>
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
  margin-top: 20px;
  margin-left: 50px;
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

<div class="alert alert-danger fade in" id="err" style="display: none">
                        <!-- <a href="#" class="close" data-dismiss="alert">&times;</a>      -->
                        <lable id="error_value"> A problem has been occurred while submitting your data.</lable>
    </div>
<div class="col-lg-12 col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container" style="width: 138%;margin-left: -59px;">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu" style="margin-top: 34px;">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">Primary Details
                </a>
                <a href="#" class="list-group-item text-center">Other Details
                </a>
                <a href="#" class="list-group-item text-center">VAT Details
                </a>
                <a href="#" class="list-group-item text-center">GST Details
                </a>
               <!--  <a href="#" class="list-group-item text-center">Credit Card
                </a> -->
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                                        <table  class="table">
                                        <!-- <tr>
                                            <td><label for="contactName">Purchaser Name<span class="required">*</span></label></td>
                                            <td><input type="text"  id="purchase_name" name="purchase_name"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['purchase_name'])) { echo $edit_user_details['0']['purchase_name']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Purchaser Email ID<span class="required">*</span></label></td>
                                            <td><input type="text"  id="vendor_id" name="vendor_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['purchaser_email_id'])) { echo $edit_user_details['0']['purchaser_email_id']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Sub Purchaser Name<span class="required">*</span></label></td>
                                            <td><input type="text"  id="vendor_id" name="vendor_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['sub_purchs_name'])) { echo $edit_user_details['0']['sub_purchs_name']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Sub Purchaser Email ID<span class="required">*</span></label></td>
                                            <td><input type="text"  id="vendor_id" name="vendor_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['sub_purchaser_email_id'])) { echo $edit_user_details['0']['sub_purchaser_email_id']; }?>"  disabled/></td>
                                        </tr> -->
                                        <tr>
                                            <td><label for="contactName">Vendor ID<span class="required">*</span></label></td>
                                            <td><input type="text"  id="vendor_id" name="vendor_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Vendor_id'])) { echo $edit_user_details['0']['Vendor_id']; }?>"  disabled/></td>
                                        </tr>
                                       <!--  <tr>
                                            <td><label for="contactName">Company Code<span class="required">*</span></label></td>
                                            <td><input type="text"  id="company_code" name="company_code"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Company_Code'])) { echo $edit_user_details['0']['Company_Code']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Purchase Organisation<span class="required">*</span></label></td>
                                            <td><input type="text"  id="purchase_org" name="purchase_org"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Purch._Organization'])) { echo $edit_user_details['0']['Purch._Organization']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Purchase Organisation Description<span class="required">*</span></label></td>
                                            <td><input type="text"  id="purchase_org_desc" name="purchase_org_desc"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Purchase_Organisation_Description'])) { echo $edit_user_details['0']['Purchase_Organisation_Description']; }?>"  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Account group<span class="required">*</span></label></td>
                                            <td><input type="text"  id="acc_grp" name="acc_grp"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Account_group'])) { echo $edit_user_details['0']['Account_group']; }?>"  disabled/></td>
                                        </tr> -->
                                        <tr>
                                            <td><label for="contactName">Title<span class="required">*</span></label></td>
                                            <td>
                                              <select id="title">
                                                <option>--Select--</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'COMPANY') { echo 'selected="selected"'; } } ?>>COMPANY</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'M/S.') { echo 'selected="selected"'; } } ?>>M/S.</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Mr.') { echo 'selected="selected"'; } } ?>>Mr.</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Mr. and Mrs.') { echo 'selected="selected"'; } } ?>>Mr. and Mrs.</option>
                                                <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Ms.') { echo 'selected="selected"'; } } ?>>Ms.</option>
                                             </select> 
                                            </td>
                                            <td><label for="contactName">Name<span class="required">*</span></label><input type="text"  id="name1" name="name1"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Name'])) { echo $edit_user_details['0']['Name']; }?>"  disabled/></td>
                                           <!--  <td><label for="contactName">Name2<span class="required">*</span></label></td>
                                            <td><input type="text"  id="name2" name="name2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Name2'])) { echo $edit_user_details['0']['Name2']; }?>"  disabled/></td> -->
                                            <td><button type="button" id="titleshow_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_titleshow" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        </tr>
                                         <tr class="titleshow_edit" style="display: none">
                                            <td></td>
                                            <td>
                                              <select id="title_edit">
                                                 <option>--Select--</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'COMPANY') { echo 'selected="selected"'; } } ?>>COMPANY</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'M/S.') { echo 'selected="selected"'; } } ?>>M/S.</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Mr.') { echo 'selected="selected"'; } } ?>>Mr.</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Mr. and Mrs.') { echo 'selected="selected"'; } } ?>>Mr. and Mrs.</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Ms.') { echo 'selected="selected"'; } } ?>>Ms.</option>
                                             </select> 
                                            </td>
                                            <td><label for="contactName">Name<span class="required">*</span></label><input type="text"  id="name1_edit" name="name1_edit" class="name_validate"  value=""/></td>
                                           <!--  <td></td>
                                            <td><input type="text"  id="name2_edit" name="name2_edit" class="name_validate" value=""/></td> -->
                                        </tr>
                                        <tr>
                                        <td><label for="contactName">Type(Nature) of Vendor<span class="required">*</span></label></td>
                                        <td>
                                       <!--  <input type="text"  id="vendor_type" name="vendor_type"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])) { echo $edit_user_details['0']['vendor_type']; }?>"  disabled/> -->
                                        </td>
                                        <td>
                                          <select class="vendor_change">                                          
                                            <option id="M" value="M" title="Manufacturer" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['vendor_type'] == 'M') { echo 'selected="selected"'; } } ?>>Manufacturer</option>
                                            <option  id="MD" value="MD" title="Manufacturer's Depot or Consignment Agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'MD') { echo 'selected="selected"'; } } ?>>Manufacturer's Depot or Consignment Agent</option>
                                            <option id="FD" value="FD" title="First Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'FD') { echo 'selected="selected"'; } } ?>>First Stage Dealer of indigenous excisable goods</option>
                                            <option id="SD" value="SD" title="Second Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'SD') { echo 'selected="selected"'; } } ?>>Second Stage Dealer of indigenous excisable goods</option>
                                            <option id="I" value="I" title="Importer, from his depot or his consignment agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'I') { echo 'selected="selected"'; } } ?>>Importer, from his depot or his consignment agent</option>
                                            <option id="DI" value="DI" title="First Stage or Second Stage dealer of imported goods">First Stage or Second Stage dealer of imported goods</option>
                                          </select>
                                        </td>
                                       <!--  <td><label for="contactName">Type(Nature) Of Vendor Description<span class="required">*</span></label></td>
                                        <td><lable id="vendor_desc" name="vendor_desc"></lable></td> -->
                                        <td><button type="button" id="vendrdesc_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_vendrdesc" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>  
                                    <tr class="vendrdesc_edit" style="display: none">
                                        <td><label for="contactName">Type(Nature) of Vendor<span class="required">*</span></label></td>
                                        <td>
                                       <!--  <input type="text"  id="vendor_type" name="vendor_type"  value=""  disabled/> -->
                                        </td>
                                        <td>
                                          <select class="vendorchange_edit">
                                            <option>--Select--</option>
                                            <option id="M" value="M" title="Manufacturer" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['vendor_type'] == 'M') { echo 'selected="selected"'; } } ?>>Manufacturer</option>
                                            <option  id="MD" value="MD" title="Manufacturer's Depot or Consignment Agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'MD') { echo 'selected="selected"'; } } ?>>Manufacturer's Depot or Consignment Agent</option>
                                            <option id="FD" value="FD" title="First Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'FD') { echo 'selected="selected"'; } } ?>>First Stage Dealer of indigenous excisable goods</option>
                                            <option id="SD" value="SD" title="Second Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'SD') { echo 'selected="selected"'; } } ?>>Second Stage Dealer of indigenous excisable goods</option>
                                            <option id="I" value="I" title="Importer, from his depot or his consignment agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'I') { echo 'selected="selected"'; } } ?>>Importer, from his depot or his consignment agent</option>
                                            <option id="DI" value="DI" title="First Stage or Second Stage dealer of imported goods">First Stage or Second Stage dealer of imported goods</option>
                                          </select>
                                        </td>
                                        <!--   <td><label for="contactName">Type(Nature) Of Vendor Description<span class="required">*</span></label></td>
                                          <td><input type="text"  id="vendor_desc" name="vendor_desc"  value=""  disabled/></td> -->
                                       
                                    </tr>  
                                </table> 
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                                 <table  class="table">
                                    <tr>
                                        <td><label for="contactName">State Name<span class="required">*</span></label></td>
                                        <td>
                                           <select name="state_name" class="state_name_chk">
                                              <option>---Select---</option>
                                              <?php
                                                foreach ($state_details as $row) { ?>
                                                  <option id='<?php echo $row['state']; ?>' <?php if(isset($edit_user_details['0'][' State_Name'])){ if($edit_user_details['0'][' State_Name'] == $row['state_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['state_number']; ?>" class='cntrt_name'><?php echo $row['state_name']; ?></option>
                                              <?php }
                                              ?>    
                                           </select> 
                                        </td>
                                        <td><input type="text"  id="state_name_code" name="state_name_code"  value=""  disabled/></td>
                                         <td><button type="button" id="statename_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_statename" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="statename_edit" style="display: none">
                                        <td><label for="contactName">State Name Edit<span class="required">*</span></label></td>
                                        <td>
                                        <select name="state_name" class="state_name_edit_chk">
                                          <option>---Select---</option>
                                              <?php
                                                foreach ($state_details as $row) { ?>
                                                  <option id='<?php echo $row['state']; ?>' <?php if(isset($edit_user_details['0'][' State_Name'])){ if($edit_user_details['0'][' State_Name'] == $row['state_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['state_number']; ?>" class='cntrt_name'><?php echo $row['state_name']; ?></option>
                                              <?php }
                                              ?>  
                                          </select>  
                                        </td>
                                        <td><input type="text"  id="state_name_code_edit" name="state_name_code"  value=""  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email">House Number<span class="required">*</span></label></td>
                                        <td><input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['House_Number'])) { echo $edit_user_details['0']['House_Number']; }?>" class="required requiredField email" disabled/></td>
                                        <td><button type="button" id="housenumber_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_housenumber" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="housenumber_edit house_validation" name="housenumber_edit"  value="" required/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">Street<span class="required">*</span></label></td>
                                        <td><input type="text"  id="street1" name="street1"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street'])) { echo $edit_user_details['0']['Street']; }?>"  disabled/></td>
                                        <td><button type="button" id="street1_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_street1" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="street1_edit street_validate" name="street1_edit"  style="display: none" value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Street 2<span class="required">*</span></label></td>
                                        <td><input type="text"  id="street2" name="street2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street2'])) { echo $edit_user_details['0']['Street2']; }?>"  disabled/></td>
                                        <td><button type="button" id="street2_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_street2" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="street2_edit street_validate" name="street2_edit"  style="display: none" value="" required/></td>
                                    </tr>
                                    <tr>
                                    <td><label for="email">Street 3<span class="required">*</span></label></td>
                                    <td><input type="email" name="street3" id="street3" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street3'])) { echo $edit_user_details['0']['Street3']; }?>" class="required requiredField email"  disabled/></td>
                                    <td><button type="button" id="street3_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_street3" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    <td><input type="text"  class="street3_edit street_validate" name="street3_edit"  style="display: none"  value="" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Street 4<span class="required">*</span></label></td>
                                    <td><input type="text"  id="street4" name="street4"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street4'])) { echo $edit_user_details['0']['Street4']; }?>"  disabled/></td>
                                    <td><button type="button" id="street4_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_street4" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    <td><input type="text"  class="street4_edit street_validate" name="street4_edit"  style="display: none" value="" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Street 5<span class="required">*</span></label></td>
                                    <td><input type="text"  id="street5" name="street5"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street5'])) { echo $edit_user_details['0']['Street5']; }?>"  disabled/></td>
                                    <td><button type="button" id="street5_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_street5" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    <td><input type="text"  class="street5_edit street_validate" name="street5_edit"  style="display: none" value="" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Country Key<span class="required">*</span></label></td>
                                   <!--  <td><input type="text"  id="country_key" name="country_key"  value=""  disabled/></td>   -->
                                    
                                    <td>
                                       <select id="countrykey_prev">
                                           <?php
                                          foreach ($country_details as $row) { ?>
                                            <option id='<?php echo $row['country_name']; ?>' <?php if(isset($edit_user_details['0'][' Country_Key'])){ if($edit_user_details['0'][' Country_Key'] == $row['country_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['country_code']; ?>" class='cntrt_name'><?php echo $row['country_name']; ?></option>
                                        <?php }
                                        ?>    
                                       </select> 
                                    </td>  
                                     <td><button type="button" id="countrykey_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_countrykey" class="btn btn-default close_field" style="display: none">Close</button></td>                              
                                </tr>
                                 <tr class="countrykey_edit" style="display: none">
                                    <td><label for="contactName">Country Key Edit <span class="required">*</span></label></td>
                                    <!-- <td><input type="text"  id="country_key_edit" name="country_key"  value=""  disabled/></td>  -->
                                    <td class="country_value_edit">
                                       <select id="countrykey_now">
                                           <?php
                                          foreach ($country_details as $row) { ?>
                                            <option id='<?php echo $row['country_name']; ?>' <?php if(isset($edit_user_details['0'][' country_code'])){ if($edit_user_details['0'][' country_code'] == $row['country_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['country_code']; ?>" class='cntrt_name'><?php echo $row['country_name']; ?></option>
                                        <?php }
                                        ?>    
                                       </select> 
                                    </td>                                
                                </tr>
                                    <tr>
                                        <td><label for="contactName">City<span class="required">*</span></label></td>
                                        <td><input type="text"  id="City" name="City"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['City'])) { echo $edit_user_details['0']['City']; }?>" disabled/></td>
                                        <td><button type="button" id="City_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_City" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="City_edit city_validation" name="City_edit"  value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">District<span class="required">*</span></label></td>
                                        <td><input type="text"  id="district" name="district"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['District'])) { echo $edit_user_details['0']['District']; }?>" disabled/></td>
                                        <td><button type="button" id="district_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_district" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="district_edit district_validation" name="district_edit"  value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Postal Code<span class="required">*</span></label></td>
                                        <td><input type="text"  id="postal_code" name="postal_code"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Postal_Code'])) { echo $edit_user_details['0']['Postal_Code']; }?>" disabled/></td>
                                        <td><button type="button" id="postalcode_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_postalcode" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="postalcode_edit postal_code_validate" name="postalcode_edit"  value="" required/></td>
                                    </tr>
                                    <tr>                                        
                                        <td><label for="contactName">Telephone 1<span class="required">*</span></label></td>
                                        <td><input type="text"  id="telephone1" name="telephone1"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Telephone1'])) { echo $edit_user_details['0']['Telephone1']; }?>" disabled/></td>
                                        <td><button type="button" id="telephone1_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_telephone1" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="telephone1_edit tele_number" name="telephone1_edit"  value="" required/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">Telephone 2<span class="required">*</span></label></td>
                                        <td><input type="text"  id="telephone2" name="telephone2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Telephone2'])) { echo $edit_user_details['0']['Telephone2']; }?>" disabled/></td>
                                        <td><button type="button" id="telephone2_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_telephone2" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="telephone2_edit tele_number" name="telephone2_edit"  value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Fax Number<span class="required">*</span></label></td>
                                        <td><input type="text"  id="fax_number" name="fax_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Fax_Number'])) { echo $edit_user_details['0']['Fax_Number']; }?>" disabled/></td>
                                        <td><button type="button" id="faxnumber_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_faxnumber" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="faxnumber_edit fax_validate" name="faxnumber_edit"  value="" required/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">E-Mail Address<span class="required">*</span></label></td>
                                        <td><input type="text"  id="email_id" name="email_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['E-Mail_id'])) { echo $edit_user_details['0']['E-Mail_id']; }?>" disabled/></td>
                                        <td><button type="button" id="emailid_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_emailid" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="emailid_edit email_validate" name="emailid_edit"  value="" required/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">Permanent account number<span class="required">*</span></label></td>
                                        <td><input type="text"  id="pan_number" name="pan_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['pan'])) { echo $edit_user_details['0']['pan']; }?>" disabled/></td>
                                        <td><button type="button" id="pannumber_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_pannumber" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="pannumber_edit pan_validate" name="pannumber_edit"  value="" required/></td>
                                        <td><div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" name="pan_proof" id="pan_proof" style="margin-top: -19px;
opacity: 0;"></div></td>
                                    </tr>
                                </table> 
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                         <table  class="table">
                             <tr>
                                <td><label for="contactName">VAT Registration No<span class="required">*</span></label></td>
                                <td><input type="text"  id="vat_reg" name="vat_reg"  value="" disabled/></td>
                            </tr>  
                            <tr>
                                <td><label for="email">Industry<span class="required">*</span></label></td>
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
                                <td><label for="contactName">Reconciliation Account<span class="required">*</span></label></td>
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
                                <td><label for="contactName">Planning group<span class="required">*</span></label></td>
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
                                <td><label for="contactName">Payment methods<span class="required">*</span></label></td>
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
                                <td><label for="contactName">Check Double Invoice<span class="required">*</span></label></td>
                                <td><input type="text"  id="doubl_chk_invoice" name="doubl_chk_invoice"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Check_double_invoice'])) { echo $edit_user_details['0']['Check_double_invoice']; }?>" disabled/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Previous Account no.<span class="required">*</span></label></td>
                                <td><input type="text"  id="doubl_chk_invoice" name="doubl_chk_invoice"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Previous_acc'])) { echo $edit_user_details['0']['Previous_acc']; }?>" disabled/></td>
                                <!-- <td><input type="text"  id="prev_acc_no" name="prev_acc_no"  value="" disabled/></td>    -->                         
                            </tr>
                            <tr> 
                                <td><label for="contactName">Terms of Payment<span class="required">*</span></label></td>
                                <td><input type="text"  id="terms_of_paymnt" name="terms_of_paymnt"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Terms_of_Payment'])) { echo $edit_user_details['0']['Terms_of_Payment']; }?>" disabled/></td>
                            </tr>
                             <tr>
                                <td><label for="contactName">Currency<span class="required">*</span></label></td>
                                <td><input type="text"  id="currency" name="currency"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Currency'])) { echo $edit_user_details['0']['Currency']; }?>" disabled/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">GR-Based Invoice Verification<span class="required">*</span></label></td>
                                <td><input type="text"  id="gr_based_invoice" name="gr_based_invoice"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['GR-Based_Inv_Verif'])) { echo $edit_user_details['0']['GR-Based_Inv_Verif']; }?>" disabled/></td>                            
                            </tr>
                            <tr> 
                                <td><label for="contactName">Service-Based Invoice Verification<span class="required">*</span></label></td>
                                <td><input type="text"  id="srv_based_invoice_verify" name="srv_based_invoice_verify"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Service-Based_Invoice_Verification'])) { echo $edit_user_details['0']['Service-Based_Invoice_Verification']; }?>" disabled/></td>
                            </tr>
                             <tr>
                                <td><label for="contactName">Incoterms<span class="required">*</span></label></td>
                                <td><input type="text"  id="Incoterms" name="Incoterms"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Incoterms'])) { echo $edit_user_details['0']['Incoterms']; }?>" disabled/></td>                            
                            </tr>
                            <tr> 
                                <td><label for="contactName">Incoterms (Part 2)<span class="required">*</span></label></td>
                                <td><input type="text"  id="Incoterms2" name="Incoterms2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Incoterms2'])) { echo $edit_user_details['0']['Incoterms2']; }?>" disabled/></td>
                            </tr>
                        </table>
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
                <div class="bhoechie-tab-content">
                       <table  class="table">
                            <tr>
                              <td><label for="contactName">State name as mentioned in GST Site <span class="required">*</span></label></td>
                              <td>
                                 <select name="state_name_gst" class="state_name_gst">
                                    <option>---Select---</option>
                                    <?php
                                      foreach ($state_details as $row) { ?>
                                        <option id='<?php echo $row['state']; ?>' <?php if(isset($edit_user_details['0'][' State_Name'])){ if($edit_user_details['0'][' State_Name'] == $row['state_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['state_number']; ?>" class='cntrt_name'><?php echo $row['state_name']; ?></option>
                                    <?php }
                                    ?>    
                                 </select> 
                              </td>
                          </tr>
                          <tr>
                              <td><label for="contactName">Registered email address at GST Site<span class="required">*</span></label></td>
                              <td><input type="text"  id="gst_email_id" name="gst_email_id" class="email_validate"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['purchaser_email_id'])) { echo $edit_user_details['0']['purchaser_email_id']; }?>" /></td>
                          </tr>
                          <tr>
                              <td><label for="contactName">Registered mobile no. at GST Site<span class="required">*</span></label></td>
                              <td><input type="text"  id="gst_mobile_number " name="gst_mobile_number" class="gst_mobile_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['purchaser_email_id'])) { echo $edit_user_details['0']['purchaser_email_id']; }?>" /></td>
                          </tr>
                          <tr>
                              <td><label for="contactName">Service Provider from India or Out Side India<span class="required">*</span></label></td>
                              <td>
                                <select id="gst_service_provider">
                                  <option>---Select---</option>
                                  <option>India</option>
                                  <option>Out of India</option>
                                </select>
                              </td>
                          </tr>
                            <tr>
                                <td><label for="contactName">Legal Name of Business as mentioned in PAN and GST Registration No<span class="required">*</span></label></td>
                                <td><input type="text" class="name_validate"  id="gst_name_validate" name="gst_name_validate"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['gst_name'])) { echo $edit_user_details['0']['gst_name']; }?>"/></td>
                            </tr>
                             <tr>
                                <td><label for="contactName">Type(Nature) of Vendor by GST<span class="required">*</span></label></td>
                                <td>
                                  <input type="checkbox" value="Manufacturer" class="gst_vendor_type"/>Manufacturer<br>
                                  <input type="checkbox" value="Manufacturer's Depot or Consignment Agent" class="gst_vendor_type"/>Manufacturer's Depot or Consignment Agent<br>
                                  <input type="checkbox" value="First Stage Dealer of indigenous excisable goods" class="gst_vendor_type"/>First Stage Dealer of indigenous excisable goods<br>
                                  <input type="checkbox" value="Second Stage Dealer of indigenous excisable goods" class="gst_vendor_type"/>Second Stage Dealer of indigenous excisable goods<br>
                                  <input type="checkbox" value="Importer, from his depot or his consignment agent" class="gst_vendor_type"/>Importer, from his depot or his consignment agent<br>
                                  <input type="checkbox" value="First Stage or Second Stage dealer of imported goods" class="gst_vendor_type"/>First Stage or Second Stage dealer of imported goods
                                </td>
                            </tr>
                            <tr>
                                <td><label for="contactName">GST Registration Number OR Unique ID Number<span class="required">*</span></label></td>
                                <td><input type="text" class="gst_validate"  id="GST_number" name="GST_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['GST_number'])) { echo $edit_user_details['0']['GST_number']; }?>"/><div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" name="gst_proof" id="gst_proof" style="margin-top: -19px;
opacity: 0;"></div></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Tax Classification for Vendor<span class="required">*</span></label></td>
                                <td><input type="text"  id="tax_number" name="tax_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['TAX_number'])) { echo $edit_user_details['0']['TAX_number']; }?>"/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Vendor Classification for GST<span class="required">*</span></label></td>
                                <td><input type="text"  id="vendor_clasification" name="vendor_clasification"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_classification'])) { echo $edit_user_details['0']['vendor_classification']; }?>"/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Nature Of Invoice to be issued by Vendor(Tax Invoice or Bill Of Supply)<span class="required">*</span></label></td>
                                <td>
                                  <select name="nature_of_invoice" id="nature_of_invoice">
                                    <option>--Select--</option>
                                    <option value="Tax Invoice">Tax Invoice</option>
                                    <option value="Bill Of Supply">Bill Of Supply</option>
                                  </select>
                                </td>
                            </tr>
                             <tr>
                                <td><label for="contactName">Composition Scheme Applicable or not?<span class="required">*</span></label></td>
                                <td><input class="compo_scheme" name="compo_scheme" type="radio" value="Yes" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes<input type="radio"  name="compo_scheme" class="compo_scheme" value="No" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'No') { echo 'checked="checked"'; } } ?>>No</td>
                            </tr>
                          <!--   <tr>
                                <td><label for="contactName">Service Accounting code Applicable<span class="required">*</span></label></td>
                                <td><input type="text"  id="service_accounting_code" name="service_accounting_code"  value=""/></td>
                            </tr> -->
                             <tr>
                                <td><label for="contactName">Revrse TAX applicable or not?<span class="required">*</span></label></td>
                                <td><input class="reverce_tax"  name="rev_tax" type="radio" value="Yes" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'] )){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes<input type="radio" class="reverce_tax"  name="rev_tax" value="No" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'No') { echo 'checked="checked"'; } } ?>>No</td>
                            </tr>
                            <!--  <tr>
                                <td><label for="contactName">ECC No<span class="required">*</span></label></td>
                                <td><input type="text"  id="ecc_no" name="ecc_no"  value="" disabled/></td>
                            </tr> -->
                            <tr>
                                <td><label for="contactName">Excise Registration No<span class="required">*</span></label></td>
                                <td><input type="text"  id="excise_reg_no" name="excise_reg_no"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Registration'])) { echo $edit_user_details['0']['Excise_Registration']; }?>" disabled/></td>   
                                 <td><button type="button" id="excisereg_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisereg" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" style="display: none"  class="excisereg_edit ex_validate" name="excisereg_edit"  value="" required/></td>                         
                            </tr>
                            <tr> 
                                <td><label for="contactName">Excise Range<span class="required">*</span></label></td>
                                <td><input type="text"  id="excise_range" name="excise_range"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Range'])) { echo $edit_user_details['0']['Excise_Range']; }?>" disabled/></td>
                                <td><button type="button" id="exciserange_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_exciserange" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" style="display: none"  class="exciserange_edit ex_validate" name="exciserange_edit"  value="" required/></td>      
                            </tr>
                             <tr>
                                <td><label for="contactName">Excise Division<span class="required">*</span></label></td>
                                <td><input type="text"  id="excise_div" name="excise_div"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Division'])) { echo $edit_user_details['0']['Excise_Division']; }?>" disabled/></td>   
                                <td><button type="button" id="excisediv_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisediv" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" style="display: none"  class="excisediv_edit ex_validate" name="excisediv_edit"  value="" required/></td>                             
                            </tr>
                            <tr> 
                                <td><label for="contactName">Excise Commissionerate<span class="required">*</span></label></td>
                                <td><input type="text"  id="excise_commisionarate" name="excise_commisionarate"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Commissionerate'])) { echo $edit_user_details['0']['Excise_Commissionerate']; }?>" disabled/></td>
                                <td><button type="button" id="excisecom_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisecom" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" style="display: none"  class="excisecom_edit ex_validate" name="excisecom_edit"  value="" required/></td>   
                            </tr>
                             <tr>
                                <td><label for="contactName">CST number<span class="required">*</span></label></td>
                                <td><input type="text"  id="cst_number" name="cst_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['cst'])) { echo $edit_user_details['0']['cst']; }?>" disabled/></td>
                                <td><button type="button" id="excisecst_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisecst" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" style="display: none"  class="excisecst_edit ex_validate" name="excisecst_edit"  value="" required/></td>                               
                            </tr>
                            <tr> 
                                <td><label for="contactName">LST number<span class="required">*</span></label></td>
                                <td><input type="text"  id="lst_number" name="lst_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['lst'])) { echo $edit_user_details['0']['lst']; }?>" disabled/></td>
                                 <td><button type="button" id="exciselst_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_exciselst" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" style="display: none"  class="exciselst_edit ex_validate" name="exciselst_edit"  value="" required/></td>       
                            </tr>
                             <tr> 
                                <td><label for="contactName">Service Tax Reg No<span class="required">*</span></label></td>
                                <td><input type="text"  id="service_tax_num" name="service_tax_num"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Service_Tax_Reg_No'])) { echo $edit_user_details['0']['lst']; }?>" disabled/></td>
                                <td><button type="button" id="servtax_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_servtax" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" style="display: none"  class="servtax_edit ex_validate" name="servtax_edit"  value="" required/></td>     
                            </tr>
                             <tr>
                                <td><label for="contactName">Exc.Tax Ind. Vendor<span class="required">*</span></label></td>
                                <td><input type="text"  id="exc_tax_vendor" name="exc_tax_vendor"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Exc_Tax_Ind_Vendor'])) { echo $edit_user_details['0']['Exc_Tax_Ind_Vendor']; }?>" disabled/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">SSI status<span class="required">*</span></label></td>
                                <td><input type="text"  id="ssi_status" name="ssi_status"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['SSI_status'])) { echo $edit_user_details['0']['SSI_status']; }?>" disabled/></td>                            
                            </tr>
                            <tr> 
                                <td><label for="contactName">CENVAT Scheme Participant<span class="required">*</span></label></td>
                                <td><input type="text"  id="CENVAT_scheme" name="CENVAT_scheme"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['CENVAT'])) { echo $edit_user_details['0']['CENVAT']; }?>" disabled/></td>
                            </tr>
                        </table>
                        <input type="button" value="Submit" id="vendor_data_update">
                </div>
               
            </div>
        </div>
                        </div>                
                    </div>
                </div>
               
        </div>
    </div>
</div>
<script type='text/javascript' src='<?php echo base_url(); ?>js/validation_script.js'></script>
<script type="text/javascript">
    $(function(){
      $("body").on('click','#vendor_data_update',function(){
        var error = '';var type_vendor = 0;var vendor_value = '';
          $("input:checked").map(function () { 
            if (vendor_value == '') 
            {
              vendor_value = $(this).val();
            }
            else
            {
              vendor_value = vendor_value+'!'+$(this).val();
            }
            //alert($(this).val());
            type_vendor = 1;
          });
          // if ($("#titleshow_edit").attr('title') == 'active' && $("#title_edit").find(':selected').val() == '--Select--') 
          // {
          //   error = "Please select title.";
          // }
          // else if($("#titleshow_edit").attr('title') == 'active' && $("#name1_edit").val() == '')
          // {
          //   error = "Please enter name";
          // }
          // else if($("#titleshow_edit").attr('title') == 'active' && $("#name1_edit").val() != '' && $("#name1_edit").length>80)
          // {
          //   error = "Name field should contain maximum 80 characters.";
          // }
          // else  if ($("#vendrdesc_edit").attr('title') == 'active' && $("#vendorchange_edit").find(':selected').val() == '--Select--') 
          // {
          //   error = "Please select vendor type.";
          // }
          // else  if ($("#gst_name_validate").val() == '') 
          // {
          //   error = "Please enter legal name based on GST";
          // }
          // else  if ($("#gst_name_validate").val().length>80) 
          // {
          //   error = "Legal name based on GST should contain maximum 80 characters";
          // }
          // else if(type_vendor == 1)
          // {
          //    error = "Please select vendor type for GST field.";
          // }
          // else if($("#GST_number").val() == '')
          // {
          //    error = "Please enter GST Number.";
          // }
          // else if($("#GST_number").attr('title') == 'Not Correct')
          // {
          //    error = "Please correct GST Number.";
          // }
          // else if($("#tax_number").val() == '')
          // {
          //    error = "Please enter Tax Classification.";
          // }
          // else if($("#vendor_clasification").val() == '')
          // {
          //    error = "Please enter Vendor Classification for GST.";
          // }
          // else if($("#nature_of_invoice").find(':selected').val() == '--Select--')
          // {
          //    error = "Please select Nature Of Invoice to be issued.";
          // }
          // else if($("input[name='compo_scheme']:checked").val() === undefined)
          // {
          //   error = "Please select Composition Scheme Applicable or not?";
          // }
          // else if($("input[name='rev_tax']:checked").val() === undefined)
          // {
          //   error = "Please select Revrse TAX applicable or not?";
          // }
          // else if($("#state_name_gst").find(':selected').val() == '--Select--')
          // {
          //    error = "Please select state name as mention in GST.";
          // }
          // else if($("#gst_email_id").val() == '')
          // {
          //    error = "Please enter registered email address at GST Site";
          // }
          // else if($("#gst_email_id").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid registered email address at GST Site";
          // }
          // else if($("#gst_mobile_number").val() == '')
          // {
          //    error = "Please enter registered mobile no. at GST Site";
          // }
          // else if($("#gst_mobile_number").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid registered mobile no. at GST Site";
          // }
          //  else if($("#gst_service_provider").find(':selected').val() == '--Select--')
          // {
          //    error = "Service Provider from India or Out Side India";
          // }
          // else if($(".house_validation").val() == '')
          // {
          //    error = "Please enter house number";
          // }
          // else if($(".house_validation").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid registered mobile no. at GST Site";
          // }          
          // else if($(".street1_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid street details";
          // }
          // else if($(".street2_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid street details";
          // }
          // else if($(".street3_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid street details";
          // }
          // else if($(".street4_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid street details";
          // }
          // else if($(".street5_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid street details";
          // }
          // else if($(".street5_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid street details";
          // }
          // else if($(".City_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid city details";
          // }
          // else if($(".district_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid district details";
          // }
          // else if($(".postalcode_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid postal code details";
          // }
          // else if($(".telephone1_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid telephone details";
          // }
          // else if($(".telephone2_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid telephone details";
          // }
          // else if($(".faxnumber_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid fax number details";
          // }
          // else if($(".emailid_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid email id details";
          // }
          // else if($(".pannumber_edit").attr('title') == 'Not Correct')
          // {
          //    error = "Please enter valid PAN details";
          // }
          // else
          // {
            
          // }
          // var e = document.getElementById("pan_proof");
          // var file_data = $(e)[0].files[0];
          var form_data = new FormData();            
          form_data.append("pan_proof",$('#pan_proof')[0].files[0]);
          form_data.append("gst_proof",$('#gst_proof')[0].files[0]);
          form_data.append("title_value",$("#title_edit").find(':selected').val());
          form_data.append("name",$("#name1_edit").val());
          form_data.append("vendor_type",$("#title_edit").find(':selected').val());
          form_data.append("vendor_desc",$("#title_edit").find(':selected').text());
          form_data.append("gst_number",$("#GST_number").val());
          form_data.append("legal_name_gst",$("#gst_name_validate").val());
          form_data.append("state_gst",$(".state_name_gst").find(':selected').text());
          form_data.append("state_code",$(".state_name_gst").find(':selected').val());
          form_data.append("email_gst",$("#gst_email_id").val());
          form_data.append("mobile_gst",$("#gst_mobile_number").val());
          form_data.append("service_provider_gst",$("#gst_service_provider").find(':selected').val());
          form_data.append("Tax_Classification",$("#tax_number").val());
          form_data.append("vendor_Classification",$("#vendor_clasification").val());
          form_data.append("nature_of_invoice",$("#nature_of_invoice").find(':selected').val());
          form_data.append("mobile_gst",$("#gst_mobile_number").val());
          form_data.append("compo_scheme",$("input[name='compo_scheme']:checked").val());
          form_data.append("rev_tax", $("input[name='reverce_tax']:checked").val());
          form_data.append("house_number",$("input[name='housenumber_edit']:checked").val());
          form_data.append("street1",$("#street1_edit").val());
          form_data.append("street2",$("#street2_edit").val());
          form_data.append("street3",$("#street3_edit").val());
          form_data.append("street4",$("#street4_edit").val());
          form_data.append("street5",$("#street5_edit").val());
          form_data.append("City",$(".City_edit").val());
          form_data.append("district",$(".district_edit").val());
          form_data.append("postalcode", $(".postalcode_edit").val());
          form_data.append("telephone1",$(".telephone1_edit").val());
          form_data.append("telephone2",$(".telephone2_edit").val());
          form_data.append("fax_num",$(".faxnumber_edit").val());
          form_data.append("emailid",$(".emailid_edit").val());
          form_data.append("pannumber",$(".pannumber_edit").val());
          form_data.append("excise_reg_no",$(".excisereg_edit").val());
          form_data.append("excise_range",$(".exciserange_edit").val());
          form_data.append("excise_div",$(".excisediv_edit").val());
          form_data.append("excise_commisionarate",$(".excisecom_edit").val());
          form_data.append("cst_number",$(".excisecst_edit").val());
          form_data.append("lst_number",$(".exciselst_edit").val());
          form_data.append("servtax_edit",$(".servtax_edit").val());
          form_data.append("countrykey_now",$(".countrykey_now").find(':selected').val());
          form_data.append("state_name_edit_chk",$(".state_name_edit_chk").find(':selected').text());
          form_data.append("state_code_edit_chk",$(".state_name_edit_chk").find(':selected').val());
          form_data.append("gst_vendor",vendor_value);
          var data = {
              // 'title_value' : $("#title_edit").find(':selected').val(),
              // 'name' : $("#name1_edit").val(),
              // 'vendor_type' : $("#title_edit").find(':selected').val(),
              // 'vendor_desc' : $("#title_edit").find(':selected').text(),
              // 'gst_number' : $("#GST_number").val(),
              // 'legal_name_gst' : $("#gst_name_validate").val(),
              // 'state_gst' : $(".state_name_gst").find(':selected').text(),
              // 'state_code' : $(".state_name_gst").find(':selected').val(),
              // 'email_gst' : $("#gst_email_id").val(),
              // 'mobile_gst' : $("#gst_mobile_number").val(),
              // 'service_provider_gst' : $("#gst_service_provider").find(':selected').val(),
              // 'Tax_Classification' : $("#tax_number").val(),
              // 'vendor_Classification' : $("#vendor_clasification").val(),
              // 'nature_of_invoice' : $("#nature_of_invoice").find(':selected').val(),
              // 'compo_scheme' : $("input[name='compo_scheme']:checked").val(),
              // 'rev_tax' : $("input[name='reverce_tax']:checked").val(),
              // 'house_number' : $("input[name='housenumber_edit']:checked").val(),
              // 'street1' : $("#street1_edit").val(),
              // 'street2' : $("#street2_edit").val(),
              // 'street3' : $("#street3_edit").val(),
              // 'street4' : $("#street4_edit").val(),
              // 'street5' : $("#street5_edit").val(),
              // 'City' : $(".City_edit").val(),
              // 'district' : $(".district_edit").val(),
              // 'postalcode' : $(".postalcode_edit").val(),
              // 'telephone1' : $(".telephone1_edit").val(),
              // 'telephone2' : $(".telephone2_edit").val(),
              // 'fax_num' : $(".faxnumber_edit").val(),
              // 'emailid' : $(".emailid_edit").val(),
              // 'pannumber' : $(".pannumber_edit").val(),
              // 'excise_reg_no' : $(".excisereg_edit").val(),
              // 'excise_range' : $(".exciserange_edit").val(),
              // 'excise_div' : $(".excisediv_edit").val(),
              // 'excise_commisionarate' : $(".excisecom_edit").val(),
              // 'cst_number' : $(".excisecst_edit").val(),
              // 'lst_number' : $(".exciselst_edit").val(),
              // 'servtax_edit' : $(".servtax_edit").val(),
              // 'countrykey_now' : $(".countrykey_now").find(':selected').val(),
              // 'state_name_edit_chk' : $(".state_name_edit_chk").find(':selected').text(),
              // 'state_code_edit_chk' : $(".state_name_edit_chk").find(':selected').val(),
              // 'gst_vendor' : vendor_value,
              //'servtax_edit' : $(".servtax_edit").val(),
            };
            var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'json',
            processData: false, 
            contentType: false,
            'enctype': 'multipart/form-data',
            'data' : form_data,
              url : base_url+'/vendor_management_system/index.php/Vendordata/update_data',
              success : function(data)
              {
                  alert(data);
              }
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