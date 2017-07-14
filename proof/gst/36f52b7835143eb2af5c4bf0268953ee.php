<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<style type="text/css">
 .tooltip-inner {background-color: #f00;}
</style>
<div class="container" >
<div class="content_wrapper">
   
        <div class="container_24" >
            <div class="grid_24">
                <div class="grid_16 alpha" >
                    <div class="content-bar" style="margin-top: 0px"> 
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
                            
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                            <style media="all" type="text/css">      
      #err { 
      position: fixed;
    top: 10em;
    right: 1em;
    z-index: 25;
      }
      
   </style>
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
<style type="text/css">


</style>
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
      div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  margin-bottom: 20px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
</style>
















<div class="alert alert-danger fade in" id="err" style="display: none">
                        <!-- <a href="#" class="close" data-dismiss="alert">&times;</a>      -->
                        <lable id="error_value"> A problem has been occurred while submitting your data.</lable>
    </div>
    <!--  <a id="modal-204273" href="#modal-container-204273" role="button" class="btn" data-toggle="modal">Launch demo modal</a> -->
      
      <div class="modal fade" id="modal-container-204273" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                ×
              </button>
              <h4 class="modal-title" id="myModalLabel">
                Error
              </h4>
            </div>
            <div class="modal-body" id="err_show">
              ...
            </div>
            <div class="modal-footer">
               
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button> 
              
            </div>
          </div>
          
        </div>
        
      </div>
<div class="col-lg-12 col-md-12 bhoechie-tab-container" style="width: 1300px">
           
          <div class="col-lg-12 col-md-9 col-sm-9 col-xs-9 " style="padding-top:20px;width: 1300px">
            <div class="tabs">
    <ul class="tab-links">
        <li class="active" id="tab1_menu"><a href="#tab1">GST Details </a></li>
        <li id="tab2_menu"><a href="#tab2">Primary Details </a></li>
        <li id="tab3_menu"><a href="#tab3">Other Details </a></li>
        <li id="tab4_menu"><a href="#tab4">VAT Details</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <!-- <p>Tab #1 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p> -->
          
            <div class="col-lg-12 col-md-9 col-sm-9 col-xs-9 ">
                <!-- flight section -->
                <div   id="next1">
                <input type="text" value="gst_data_save" name="gst_data_save" class="gst_data_save" style="display: none" />
                    <table  class="table">
                            <tr>
                                <td><label for="contactName">Applicable For GST
<span class="required">*</span> <i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i>
</label></td>
                                <td><input class="gst_capable" name="gst_capable" type="radio" value="Yes" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes<input type="radio"  name="gst_capable" class="gst_capable" value="No" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'No') { echo 'checked="checked"'; } } ?>>No
                                <div id="show_capable" style="display: none"><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><a href="<?php echo base_url(); ?>VMS_Declaration.docx" download="<?php echo base_url(); ?>VMS_Declaration.docx">Download Declaration Form</a> </lable></span></div>
                                <div id="show_capable1" style="display: none"><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Declaration</u> </lable></span><input type="file" class="file_change" name="gst_declr" id="gst_declr" style="margin-top: -19px;
opacity: 0;"></div>
<a href="" target="_blank" class="linkgst_declr"><lable id='gst_declr1'></lable></a><lable id='gst_declr11' style="cursor:pointer;display: none"><i class="fa fa-times cancel_upload" id='gst_declr-1' aria-hidden="true" style="margin-left: 11px;font-size: 21px;color: red;"></i>
</lable>

                                </td>
                            </tr>
                            <tr  id="gst1">
                              <td><label for="contactName">State name as mentioned in GST Site <span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable State or not"></i></label></td>
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
                          <tr id="gst2">
                              <td><label for="contactName">Registered email address at GST Site<span class="required">*</span></label></td>
                              <td><input type="text"  id="gst_email_id" name="gst_email_id" class="email_validate"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['purchaser_email_id'])) { echo $edit_user_details['0']['purchaser_email_id']; }?>" /></td>
                          </tr>
                          <tr  id="gst3">
                              <td><label for="contactName">Registered mobile no. at GST Site<span class="required">*</span></label></td>
                              <td><input type="text"  id="gst_mobile_number" name="gst_mobile_number" class="gst_mobile_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['purchaser_email_id'])) { echo $edit_user_details['0']['purchaser_email_id']; }?>" /></td>
                          </tr>
                          <tr id="gst4">
                              <td><label for="contactName">Service Provider from India or Out Side India<span class="required">*</span></label></td>
                              <td>
                                <select id="gst_service_provider">
                                  <option>---Select---</option>
                                  <option>India</option>
                                  <option>Out of India</option>
                                </select>
                              </td>
                          </tr>
                            <tr id="gst5">
                                <td><label for="contactName">Legal Name of Business as mentioned in PAN and GST Registration No<span class="required">*</span></label></td>
                                <td><input type="text" class="name_validate"  id="gst_name_validate" name="gst_name_validate"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['gst_name'])) { echo $edit_user_details['0']['gst_name']; }?>"/></td>
                            </tr>
                             <tr id="gst6">
                                <td><label for="contactName">Type(Nature) of Vendor by GST (Vendor Classification)<span class="required">*</span></label></td>
                                <td>
                                  <input type="checkbox" value="Manufacturer" class="gst_vendor_type"/>Manufacturer<br>
                                  <input type="checkbox" value="Manufacturer's Depot or Consignment Agent" class="gst_vendor_type"/>Manufacturer's Depot or Consignment Agent<br>
                                  <input type="checkbox" value="First Stage Dealer of indigenous excisable goods" class="gst_vendor_type"/>First Stage Dealer of indigenous excisable goods<br>
                                  <input type="checkbox" value="Second Stage Dealer of indigenous excisable goods" class="gst_vendor_type"/>Second Stage Dealer of indigenous excisable goods<br>
                                  <input type="checkbox" value="Importer, from his depot or his consignment agent" class="gst_vendor_type"/>Importer, from his depot or his consignment agent<br>
                                  <input type="checkbox" value="First Stage or Second Stage dealer of imported goods" class="gst_vendor_type"/>First Stage or Second Stage dealer of imported goods
                                </td>
                            </tr>
                            <tr id="gst7">
                                <td><label for="contactName">GST Registration Number OR Unique ID Number<span class="required">*</span></label></td>
                                <td><input type="text" class="gst_validate"  id="GST_number" name="GST_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['GST_number'])) { echo $edit_user_details['0']['GST_number']; }?>"/>

<div  id="show_capable1"><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" name="gst_proof" class="file_change" id="gst_proof" style="margin-top: -19px;
opacity: 0;"></div>
<a href="" target="_blank" class="linkgst_proof"><lable id='gst_proof1'></lable></a><lable id='gst_proof11' style="cursor:pointer;display: none"><i class="fa fa-times cancel_upload" id='gst_proof-1' aria-hidden="true" style="margin-left: 11px;font-size: 21px;color: red;"></i>
</lable>
</td>
                            </tr>
                            <tr id="gst8">
                                <td><label for="contactName">Tax Classification for Vendor<span class="required">*</span></label></td>
                                <td><input class="tax_number" name="tax_number" type="radio" value="Vendor Registered" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'Vendor Registered') { echo 'checked="checked"'; } } ?>>Vendor Registered<input type="radio"  name="tax_number" class="tax_number" value="Vendor Not Registered" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'Vendor Not Registered') { echo 'checked="checked"'; } } ?>>Vendor Not Registered</td>
                               <!--  <td><input type="text"  id="tax_number" name="tax_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['TAX_number'])) { echo $edit_user_details['0']['TAX_number']; }?>"/></td> -->
                            </tr>
                            <!-- <tr>
                                <td><label for="contactName">Vendor Classification for GST<span class="required">*</span></label></td>
                                <td><input type="text"  id="vendor_clasification" name="vendor_clasification"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_classification'])) { echo $edit_user_details['0']['vendor_classification']; }?>"/></td>
                            </tr> -->
                            <tr id="gst9">
                                <td><label for="contactName">Nature Of Invoice to be issued by Vendor(Tax Invoice or Bill Of Supply)<span class="required">*</span></label></td>
                                <td>
                                  <select name="nature_of_invoice" id="nature_of_invoice">
                                    <option>--Select--</option>
                                    <option value="Tax Invoice">Tax Invoice</option>
                                    <option value="Bill Of Supply">Bill Of Supply</option>
                                  </select>
                                </td>
                            </tr>
                             <tr id="gst10">
                                <td><label for="contactName">Composition Scheme Applicable or not?<span class="required">*</span></label></td>
                                <td><input class="compo_scheme" name="compo_scheme" type="radio" value="Yes" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes<input type="radio"  name="compo_scheme" class="compo_scheme" value="No" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'No') { echo 'checked="checked"'; } } ?>>No</td>
                            </tr>
                          <!--   <tr>
                                <td><label for="contactName">Service Accounting code Applicable<span class="required">*</span></label></td>
                                <td><input type="text"  id="service_accounting_code" name="service_accounting_code"  value=""/></td>
                            </tr> -->
                             <!-- <tr>
                                <td><label for="contactName">Revrse TAX applicable or not?<span class="required">*</span></label></td>
                                <td><input class="reverce_tax"  name="rev_tax" type="radio" value="Yes" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'] )){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes<input type="radio" class="reverce_tax"  name="rev_tax" value="No" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'No') { echo 'checked="checked"'; } } ?>>No</td>
                            </tr> -->
                            <!--  <tr>
                                <td><label for="contactName">ECC No<span class="required">*</span></label></td>
                                <td><input type="text"  id="ecc_no" name="ecc_no"  value="" disabled/></td>
                            </tr> -->
                        </table>
                                        
                               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 " style="margin-top: 34px;">
             <!--  <input type="button" value="Next" class="shownext" id="next2"> -->
                </div>
                </div></div>

        <input type="button" class="btn btn-info" value="Next" id="tab_1" style="float:right;margin-bottom:10px"> 
        </div>
 
        <div id="tab2" class="tab">
            <!-- <p>Tab #2 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
 -->
            
                <div id="next2">
                    <table  class="table">
                                        
                                        <tr>
                                            <td><label for="contactName">Vendor ID<span class="required">*</span></label></td>
                                            <td><input type="text"  id="vendor_id" name="vendor_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Vendor_id'])) { echo $edit_user_details['0']['Vendor_id']; }?>"  disabled/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                      
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
                                            <td><button type="button" id="titleshow_edit" class="btn btn-default get_field" style="width: 64px">Edit</button><button type="button" id="close_titleshow" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        
                                        </tr>
                                         <tr class="titleshow_edit" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Title']) && ($edit_user_details1['0']['Title'] != '' && $edit_user_details1['0']['Title'] != '0')) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
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
                                            <td><label for="contactName">Name<span class="required">*</span></label><input type="text"  id="name1_edit" name="name1_edit" class="name_validate"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Name'])) { echo $edit_user_details1['0']['Name']; }?>"/></td>
                                           <!--  <td></td>
                                            <td><input type="text"  id="name2_edit" name="name2_edit" class="name_validate" value=""/></td> -->
                                            <td></td>
                                        </tr>
                                        <tr>
                                        <td><label for="contactName">Type(Nature) of Vendor<span class="required">*</span></label></td>
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
                                        <td><button type="button" id="vendrdesc_edit" class="btn btn-default get_field" style="width: 64px">Edit</button><button type="button" id="close_vendrdesc" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    <td></td>
                                    </tr>  
                                    <tr class="vendrdesc_edit" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['vendor_type']) && ($edit_user_details1['0']['vendor_type'] != '' && $edit_user_details1['0']['vendor_type'] != '0')) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                        <td><label for="contactName">Type(Nature) of Vendor<span class="required">*</span></label></td>
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
                                       <td></td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Permanent account number<span class="required">*</span></label></td>
                                        <td><input type="text"  id="pan_number" name="pan_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['pan'])) { echo $edit_user_details['0']['pan']; }?>" disabled/></td>
                                        <td><button type="button" id="pannumber_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_pannumber" class="btn btn-default close_field" style="display: none">Close</button></td>

                                        <td><input type="text"  class="pannumber_edit pan_validate" name="pannumber_edit" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['pan']) && $edit_user_details1['0']['pan'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['pan'])) { echo $edit_user_details1['0']['pan']; }?>" required/>
<div  id="show_capable1"><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" name="pan_proof" id="pan_proof" class="file_change" style="margin-top: -19px;
opacity: 0;"></div>
<a href="" target="_blank" class="linkpan_proof"><lable id='pan_proof1'></lable></a><lable id='pan_proof11' style="cursor:pointer;display: none"><i class="fa fa-times cancel_upload" id='pan_proof-1' aria-hidden="true" style="margin-left: 11px;font-size: 21px;color: red;"></i>
</lable>
</td>
                                    </tr>
                                </table> 
                                 
                                <!-- <input type="button" value="Next" class="shownext" id="next3"> -->
                </div>

            <input type="button" class="btn btn-info" value="Next" id="tab_2" style="float:right"> 
            <input type="button" class="btn btn-info" value="Back" id="back_tab_1"> 
        </div>
 
        <div id="tab3" class="tab">
            <!-- <p>Tab #3 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p> -->
          
                <!-- hotel search -->
                <div  id="next3">
                          <table  class="table">  
                                   
                                    <tr>
                                        <td><label for="email">House Number (Example: Shop Number, Flat No. Building No. etc.)</label></td>
                                        <td><input type="text" name="house_number" id="house_number" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['House_Number'])) { echo $edit_user_details['0']['House_Number']; }?>" class="required requiredField email" disabled/></td>
                                        <td style="min-width: 256px;max-width: 256px;"><button type="button" id="housenumber_edit" class="btn btn-default get_field" style="width: 64px">Edit</button><button type="button" id="close_housenumber" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td style="min-width: 256px;max-width: 256px;"><input type="text"  class="housenumber_edit house_validation" name="housenumber_edit" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['House_Number']) && ($edit_user_details1['0']['House_Number'] != '' || $edit_user_details1['0']['House_Number'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['House_Number'])) { echo $edit_user_details1['0']['House_Number']; }?>" required/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">Street (Example: Building Name, House Name etc.)</label></td>
                                        <td><input type="text"  id="street1" name="street1"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street'])) { echo $edit_user_details['0']['Street']; }?>"  disabled/></td>
                                        <td style="min-width: 256px;max-width: 256px;"><button type="button" id="street1_edit" class="btn btn-default get_field" style="width: 64px">Edit</button><button type="button" id="close_street1" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td style="min-width: 256px;max-width: 256px;"><input type="text"  class="street1_edit street_validate" name="street1_edit"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street']) && ($edit_user_details1['0']['Street'] != '' || $edit_user_details1['0']['Street'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street'])) { echo $edit_user_details1['0']['Street']; }?>" required/></td>
                                    </tr>                                 
                                    <tr>
                                        <td><label for="contactName">Street 2 (Example: Business Complex, Business District, Area etc.)</label></td>
                                        <td><input type="text"  id="street2" name="street2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street2'])) { echo $edit_user_details['0']['Street2']; }?>"  disabled/></td>
                                        <td><button type="button" id="street2_edit" class="btn btn-default get_field" style="width: 64px">Edit</button><button type="button" id="close_street2" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="street2_edit street_validate" name="street2_edit"   <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street2']) && ($edit_user_details1['0']['Street2'] != '' || $edit_user_details1['0']['Street2'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street2'])) { echo $edit_user_details1['0']['Street2']; }?>" required/></td>
                                    </tr>
                                    <tr>
                                    <td><label for="email">Street 3 (Example: Ladmark, Location etc.)</label></td>
                                    <td><input type="email" name="street3" id="street3" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street3'])) { echo $edit_user_details['0']['Street3']; }?>" class="required requiredField email"  disabled/></td>
                                    <td><button type="button" id="street3_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_street3" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    <td><input type="text"  class="street3_edit street_validate" name="street3_edit"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street3']) && ($edit_user_details1['0']['Street3'] != '' || $edit_user_details1['0']['Street3'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street3'])) { echo $edit_user_details1['0']['Street3']; }?>" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Street 4</label></td>
                                    <td><input type="text"  id="street4" name="street4"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street4'])) { echo $edit_user_details['0']['Street4']; }?>"  disabled/></td>
                                    <td><button type="button" id="street4_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_street4" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    <td><input type="text"  class="street4_edit street_validate" name="street4_edit"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street4']) && ($edit_user_details1['0']['Street4'] != '' || $edit_user_details1['0']['Street4'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street4'])) { echo $edit_user_details1['0']['Street4']; }?>" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Street 5</label></td>
                                    <td><input type="text"  id="street5" name="street5"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street5'])) { echo $edit_user_details['0']['Street5']; }?>"  disabled/></td>
                                    <td><button type="button" id="street5_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_street5" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    <td><input type="text"  class="street5_edit street_validate" name="street5_edit"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street5']) && ($edit_user_details1['0']['Street5'] != '' || $edit_user_details1['0']['Street5'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street5'])) { echo $edit_user_details1['0']['Street5']; }?>" required/></td>
                                </tr>
                                 <tr>
                                        <td><label for="contactName">City<span class="required">*</span></label></td>
                                        <td><input type="text"  id="City" name="City"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['City'])) { echo $edit_user_details['0']['City']; }?>" disabled/></td>
                                        <td><button type="button" id="City_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_City" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="City_edit city_validation" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['City']) && ($edit_user_details1['0']['District'] != '' || $edit_user_details1['0']['City'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  name="City_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['City'])) { echo $edit_user_details1['0']['City']; }?>" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">District<span class="required">*</span></label></td>
                                        <td><input type="text"  id="district" name="district"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['District'])) { echo $edit_user_details['0']['District']; }?>" disabled/></td>
                                        <td><button type="button" id="district_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_district" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="district_edit district_validation" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['District']) && ($edit_user_details1['0']['District'] != '' || $edit_user_details1['0']['District'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  name="district_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['District'])) { echo $edit_user_details1['0']['District']; }?>" required/></td>
                                    </tr>
                                <tr>
                                <tr>
                                        <td><label for="contactName">Postal Code<span class="required">*</span></label></td>
                                        <td><input type="text"  id="postal_code" name="postal_code"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Postal_Code'])) { echo $edit_user_details['0']['Postal_Code']; }?>" disabled/></td>
                                        <td><button type="button" id="postalcode_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_postalcode" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="postalcode_edit postal_code_validate" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Postal_Code']) && ($edit_user_details1['0']['Postal_Code'] != '' || $edit_user_details1['0']['Postal_Code'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  name="postalcode_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Postal_Code'])) { echo $edit_user_details1['0']['Postal_Code']; }?>" required/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">State<span class="required">*</span></label></td>
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
                                         <td><button type="button" id="statename_edit" class="btn btn-default get_field" style="width: 64px">Edit</button><button type="button" id="close_statename" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="statename_edit" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['State_Name']) && ($edit_user_details1['0']['State_Name'] != '' && $edit_user_details1['0']['State_Name'] != '---Select---')) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                        <td><label for="contactName">State Name Edit<span class="required">*</span></label></td>
                                        <td>
                                        <select name="state_name" class="state_name_edit_chk">
                                          <option>---Select---</option>
                                              <?php
                                                foreach ($state_details as $row) { ?>
                                                  <option id='<?php echo $row['state']; ?>' <?php if(isset($edit_user_details['0'][' State_Name'])){ if($edit_user_details['0']['State_Name'] == $row['state_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['state_number']; ?>" class='cntrt_name'><?php echo $row['state_name']; ?></option>
                                              <?php }
                                              ?>  
                                          </select>  
                                        </td>
                                        <td><input type="text"  id="state_name_code_edit" name="state_name_code"  value=""  disabled/></td>
                                    </tr>
                                    <td><label for="contactName">Country Key<span class="required">*</span></label></td>
                                   <!--  <td><input type="text"  id="country_key" name="country_key"  value=""  disabled/></td>   -->
                                    
                                    <td> 
                                       <select id="countrykey_prev" name="Country_Key">
                                           <?php
                                          foreach ($country_details as $row) { ?>
                                            <option id='<?php echo $row['country_name']; ?>' <?php if(isset($edit_user_details['0']['Country_Key'])){ if($edit_user_details['0']['Country_Key'] == $row['country_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['country_code']; ?>" class='cntrt_name'><?php echo $row['country_name']; ?></option>
                                        <?php }
                                        ?>    
                                       </select> 
                                    </td>  
                                     <td><button type="button" id="countrykey_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_countrykey" class="btn btn-default close_field" style="display: none">Close</button></td>                              
                                </tr>
                                 <tr class="countrykey_edit" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Country_Key']) && ($edit_user_details1['0']['Country_Key'] != '' || $edit_user_details1['0']['Country_Key'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                    <td><label for="contactName">Country Key Edit <span class="required">*</span></label></td>
                                    <!-- <td><input type="text"  id="country_key_edit" name="country_key"  value=""  disabled/></td>  -->
                                    <td class="country_value_edit">
                                       <select id="countrykey_now">
                                           <?php
                                          foreach ($country_details as $row) { ?>
                                            <option id='<?php echo $row['country_name']; ?>' <?php if(isset($edit_user_details1['0'][' Country_Key'])){ if($edit_user_details1['0']['Country_Key'] == $row['country_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['country_code']; ?>" class='cntrt_name'><?php echo $row['country_name']; ?></option>
                                        <?php }
                                        ?>    
                                       </select> 
                                    </td>                                
                                </tr>                                   
                                    
                                    <tr>                                        
                                        <td><label for="contactName">Telephone 1<span class="required">*</span></label></td>
                                        <td><input type="text"  id="telephone1" name="telephone1"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Telephone1'])) { echo $edit_user_details['0']['Telephone1']; }?>" disabled/></td>
                                        <td><button type="button" id="telephone1_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_telephone1" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="telephone1_edit tele_number" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Telephone1']) && $edit_user_details1['0']['Telephone1'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  name="telephone1_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Telephone1'])) { echo $edit_user_details1['0']['Telephone1']; }?>" required/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">Telephone 2</label></td>
                                        <td><input type="text"  id="telephone2" name="telephone2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Telephone2'])) { echo $edit_user_details['0']['Telephone2']; }?>" disabled/></td>
                                        <td><button type="button" id="telephone2_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_telephone2" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="telephone2_edit tele_number" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Telephone2']) && $edit_user_details1['0']['Telephone2'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  name="telephone2_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Telephone2'])) { echo $edit_user_details1['0']['Telephone2']; }?>" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Fax Number</label></td>
                                        <td><input type="text"  id="fax_number" name="fax_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Fax_Number'])) { echo $edit_user_details['0']['Fax_Number']; }?>" disabled/></td>
                                        <td><button type="button" id="faxnumber_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_faxnumber" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="faxnumber_edit fax_validate" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Fax_Number']) && $edit_user_details1['0']['Fax_Number'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  name="faxnumber_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Fax_Number'])) { echo $edit_user_details1['0']['Fax_Number']; }?>" required/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">E-Mail Address<span class="required">*</span></label></td>
                                        <td><input type="text"  id="email_id" name="email_id"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['E-Mail_id'])) { echo $edit_user_details['0']['E-Mail_id']; }?>" disabled/></td>
                                        <td><button type="button" id="emailid_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_emailid" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="emailid_edit email_validate" name="emailid_edit" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['EMail_id']) && $edit_user_details1['0']['EMail_id'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>   value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['EMail_id'])) { echo $edit_user_details1['0']['EMail_id']; }?>" required/></td>
                                    </tr>                                     
                                </table> 
                         
                </div>
            <input type="button" class="btn btn-info" value="Next" id="tab_3" style="float:right"> 
            <input type="button" class="btn btn-info" value="Back" id="back_tab_2"> 
        </div>
 
        <div id="tab4" class="tab">
            <!-- <p>Tab #4 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p> -->
                           <div   id="next4">
                       <table  class="table">
                            
                            <tr>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">Excise Registration No<span class="required">*</span></label></td>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><input type="text"  id="excise_reg_no" name="excise_reg_no"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Registration'])) { echo $edit_user_details['0']['Excise_Registration']; }?>" disabled/></td>   
                                 <td><button type="button" id="excisereg_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisereg" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Registration']) && $edit_user_details1['0']['Excise_Registration'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="excisereg_edit ex_validate" name="excisereg_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Registration'])) { echo $edit_user_details1['0']['Excise_Registration']; }?>" required/></td>                         
                            </tr>
                            <tr> 
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">Excise Range<span class="required">*</span></label></td>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><input type="text"  id="excise_range" name="excise_range"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Range'])) { echo $edit_user_details['0']['Excise_Range']; }?>" disabled/></td>
                                <td><button type="button" id="exciserange_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_exciserange" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Range']) && $edit_user_details1['0']['Excise_Range'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="exciserange_edit ex_validate" name="exciserange_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Range'])) { echo $edit_user_details1['0']['Excise_Range']; }?>" required/></td>      
                            </tr>
                             <tr>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">Excise Division<span class="required">*</span></label></td>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><input type="text"  id="excise_div" name="excise_div"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Division'])) { echo $edit_user_details['0']['Excise_Division']; }?>" disabled/></td>   
                                <td><button type="button" id="excisediv_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisediv" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Division']) && $edit_user_details1['0']['Excise_Division'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="excisediv_edit ex_validate" name="excisediv_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Division'])) { echo $edit_user_details1['0']['Excise_Division']; }?>" required/></td>                             
                            </tr>
                            <tr> 
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">Excise Commissionerate<span class="required">*</span></label></td>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><input type="text"  id="excise_commisionarate" name="excise_commisionarate"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Commissionerate'])) { echo $edit_user_details['0']['Excise_Commissionerate']; }?>" disabled/></td>
                                <td><button type="button" id="excisecom_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisecom" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Commissionerate']) && $edit_user_details1['0']['Excise_Commissionerate'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> class="excisecom_edit ex_validate" name="excisecom_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Commissionerate'])) { echo $edit_user_details1['0']['Excise_Commissionerate']; }?>" required/></td>   
                            </tr>
                             <tr>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">CST number<span class="required">*</span></label></td>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><input type="text"  id="cst_number" name="cst_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['cst'])) { echo $edit_user_details['0']['cst']; }?>" disabled/></td>
                                <td><button type="button" id="excisecst_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisecst" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['cst']) && $edit_user_details1['0']['cst'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="excisecst_edit ex_validate1" name="excisecst_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['cst'])) { echo $edit_user_details1['0']['cst']; }?>" required/></td>                               
                            </tr>
                            <tr> 
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">LST number<span class="required">*</span></label></td>
                                <td><input type="text"  id="lst_number" name="lst_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['lst'])) { echo $edit_user_details['0']['lst']; }?>" disabled/></td>
                                 <td><button type="button" id="exciselst_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_exciselst" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['lst']) && $edit_user_details1['0']['lst'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="exciselst_edit ex_validate" name="exciselst_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['lst'])) { echo $edit_user_details1['0']['lst']; }?>" required/></td>       
                            </tr>
                             <tr> 
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">Service Tax Reg No<span class="required">*</span></label></td>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><input type="text"  id="service_tax_num" name="service_tax_num"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Service_Tax_Reg_No'])) { echo $edit_user_details['0']['lst']; }?>" disabled/></td>
                                <td><button type="button" id="servtax_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_servtax" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Service_Tax_Reg_No']) && $edit_user_details1['0']['Service_Tax_Reg_No'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="servtax_edit ex_validate" name="servtax_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Service_Tax_Reg_No'])) { echo $edit_user_details1['0']['Service_Tax_Reg_No']; }?>" required/></td>     
                            </tr>
                             <tr>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">Exc.Tax Ind. Vendor<span class="required">*</span></label></td>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><input type="text"  id="exc_tax_vendor" name="exc_tax_vendor"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Exc_Tax_Ind_Vendor'])) { echo $edit_user_details['0']['Exc_Tax_Ind_Vendor']; }?>" disabled/></td>
                            </tr>
                            <tr>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">SSI status<span class="required">*</span></label></td>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><input type="text"  id="ssi_status" name="ssi_status"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['SSI_status'])) { echo $edit_user_details['0']['SSI_status']; }?>" disabled/></td>                            
                            </tr>
                            <tr> 
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><label for="contactName">CENVAT Scheme Participant<span class="required">*</span></label></td>
                                <td style="max-width: 320px;min-width: 320px;width: 320px;"><input class="CENVAT_scheme" name="CENVAT_scheme" type="radio" value="Yes" <?php if(isset($edit_user_details1['0']['CENVAT'])){ if($edit_user_details1['0']['CENVAT'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes<input type="radio"  name="CENVAT_scheme" class="CENVAT_scheme" value="No" <?php if(isset($edit_user_details1['0']['CENVAT'])){ if($edit_user_details1['0']['CENVAT'] == 'No') { echo 'checked="checked"'; } } ?>>No</td>
                            </tr>
                        </table>
                        <input type="button" value="Save" class="btn btn-info" id="vendor_data_update" style="float: right;margin-bottom: 10px;">
                </div>
            <input type="button" class="btn btn-info" value="Back" id="back_tab_3"> 
        </div>
    </div>
</div>

          </div>






            
                <!-- train section -->
                
                
                

               
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
                $("body").on('change','.file_change',function(event){
                            var text_value = $(this).attr('id');
                            var next_input = $(this).val();
                          $("#"+text_value+'1').text(next_input);
                          $("#"+text_value+'1').css('display','block');
                          $("#"+text_value+'11').css('display','block');
                          $(this).css('display','none');
                          var tmppath = URL.createObjectURL(event.target.files[0]);
                          $(".link"+text_value).attr('href',tmppath);
                          if(text_value == 'gst_declr')
                          {
                            $("#show_capable1").css('display','none');                            
                          }
                        });

                          $("body").on('click','.cancel_upload',function(){
                            var text_value = $(this).attr('id');
                            var split_data = text_value.split('-');
                            var text_value1 = $(this).attr('name');
                            var next_input = $(this).val();
                            $("#"+split_data[0]).val('');
                                  $("#"+split_data[0]+'1').text('');
                                  $("#"+split_data[0]+'1').css('display','none');
                                  $("#"+split_data[0]+'11').css('display','none');
                                  $("#"+split_data[0]+'1').css('display','block');
                                  $("#"+split_data[0]).css('display','block');
                                  if(text_value == 'gst_declr-1')
                                  {
                                    $("#show_capable1").css('display','block');
                                  }
                        });

      $("body").on('mouseover','.class_tip',function(){
        $('[data-toggle="tooltip"]').tooltip(); 
        // alert("sdfds");
      });
     //$("#next4").scrollTop($("#next4").scrollTop() + 100);
     $(".gst_capable").click(function(){
        if ($("input[name='gst_capable']:checked").val() == 'No') 
        {
          $("#show_capable").css('display','block');
          $("#show_capable1").css('display','block');
          $("#gst1").css('display','none');
          $("#gst2").css('display','none');
          $("#gst3").css('display','none');
          $("#gst4").css('display','none');
          $("#gst5").css('display','none');
          $("#gst6").css('display','none');
          $("#gst7").css('display','none');
          $("#gst8").css('display','none');
          $("#gst9").css('display','none');
          $("#gst10").css('display','none');
        }
        else
        {
          $("#show_capable").css('display','none');
          $("#show_capable1").css('display','none');
          $("#gst1").css('display','');
          $("#gst2").css('display','');
          $("#gst3").css('display','');
          $("#gst4").css('display','');
          $("#gst5").css('display','');
          $("#gst6").css('display','');
          $("#gst7").css('display','');
          $("#gst8").css('display','');
          $("#gst9").css('display','');
          $("#gst10").css('display','');
        }
     });
     $(window).scroll(function()
      {
          $('#next4').animate({top:$(window).scrollTop()+"px" },{queue: false, duration: 350});  
      });
      $("body").on('click','.shownext',function(){
       
         });
      $("body").on('click','#tab_1',function(){
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
          var e = document.getElementById('gst_declr');
          var proof_2 = $(e)[0].files[0];
          //alert(proof_2);
          if ($("input[name='gst_capable']:checked").val() == "Yes" && $("#gst_name_validate").val() == '') 
          {
             $("#gst_name_validate").css('border-color','red');   
            error = "Please enter legal name based on GST";
          }
          else  if ($("input[name='gst_capable']:checked").val() == "Yes" && $("#gst_name_validate").val().length>80) 
          {
            $("#gst_name_validate").css('border-color','red'); 
            error = "Legal name based on GST should contain maximum 80 characters";
          }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && type_vendor == 0)
          {
             error = "Please select vendor type for GST field.";
          }
          else if($("input[name='gst_capable']:checked").val() == "No" && (proof_2 == '' || proof_2===undefined))
          {
             $("#gst_declr").css('border-color','red');   
             error = "Please Upload declaration form.";
          }
          else if($("input[name='gst_capable']:checked").val() != "No" && $("#GST_number").val() == '')
          {
             $("#GST_number").css('border-color','red');   
             error = "Please enter GST Number.";
          }
          else if($("input[name='gst_capable']:checked").val() != "No" && $("#GST_number").attr('title') == 'Not Correct')
          {
             $("#GST_number").css('border-color','red');   
             error = "Please correct GST Number.";
          }
           else if($("input[name='gst_capable']:checked").val() != "No" && $("#GST_number").val() != "" && $("#gst_proof").val() == '')
          { 
            $("#GST_number").css('border-color','red');            
             error = "Please upload supporting document for GST";
          }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && $("input[name='tax_number']:checked").val() == '')
          {
            $("#tax_number").css('border-color','red'); 
             error = "Please select Tax Classification.";
          }
          // else if($("#vendor_clasification").val() == '')
          // {
          //  $("#vendor_clasification").css('border-color','red'); 
          //    error = "Please enter Vendor Classification for GST.";
          // }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && $("#nature_of_invoice").find(':selected').val() == '--Select--')
          {
            $("#nature_of_invoice").css('border-color','red'); 
             error = "Please select Nature Of Invoice to be issued.";
          }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && $("input[name='compo_scheme']:checked").val() === undefined)
          {
            $("input[name='compo_scheme']").css('border-color','red'); 
            error = "Please select Composition Scheme Applicable or not?";
          }
          // else if($("input[name='rev_tax']:checked").val() === undefined)
          // {
          //    $("input[name='rev_tax']").css('border-color','red'); 
          //   error = "Please select Revrse TAX applicable or not?";
          // }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && $(".state_name_gst").find(':selected').val() == '---Select---')
          {
             $(".state_name_gst").css('border-color','red'); 
             error = "Please select state name as mention in GST.";
          }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && $("#gst_email_id").val() == '')
          {
             $("#gst_email_id").css('border-color','red'); 
             error = "Please enter registered email address at GST Site";
          }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && $("#gst_email_id").attr('title') == 'Not Correct')
          {
            $("#gst_email_id").css('border-color','red'); 
             error = "Please enter valid registered email address at GST Site";
          }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && $("#gst_mobile_number").val() == '')
          {
            $("#gst_mobile_number").css('border-color','red'); 
             error = "Please enter registered mobile no. at GST Site";
          }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && $("#gst_mobile_number").attr('title') == 'Not Correct')
          {
            $("#gst_mobile_number").css('border-color','red'); 
             error = "Please enter valid registered mobile no. at GST Site";
          }
          else if($("input[name='gst_capable']:checked").val() == "Yes" && ($("input[name='tax_number']:checked").val() == '' || $("input[name='tax_number']:checked").val() ===undefined))
          {
            $("#gst_mobile_number").css('border-color','red'); 
             error = "Please select tax classification for vendor";
          }
           else if($("input[name='gst_capable']:checked").val() == "Yes" && $("#gst_service_provider").find(':selected').val() == '---Select---')
          {
            $("#gst_service_provider").css('border-color','red'); 
             error = "Service Provider from India or Out Side India";
          }         
          else
          {
            error = '';
             $(this).css('border-color','');   
            //alert("Done");
          }
          if (error != '') 
          {
            $("#err_show").text(error);
            $("#modal-container-204273").modal('show');
          }
          else
          {
            //alert("in");
            var form_data = new FormData(); 
            form_data.append("vendor_id",$("#vendor_id").val());
            if($("input[name='gst_capable']:checked").val() == "Yes")
            {
               form_data.append("gst_proof",$('#gst_proof')[0].files[0]);
                form_data.append("gst_number",$("#GST_number").val());
                form_data.append("legal_name_gst",$("#gst_name_validate").val());
                form_data.append("state_gst",$(".state_name_gst").find(':selected').text());
                form_data.append("state_code",$(".state_name_gst").find(':selected').val());
                form_data.append("email_gst",$("#gst_email_id").val());
                form_data.append("mobile_gst",$("#gst_mobile_number").val());
                form_data.append("service_provider_gst",$("#gst_service_provider").find(':selected').val());
                form_data.append("Tax_Classification",$("input[name='tax_number']:checked").val());
                // form_data.append("vendor_Classification",$("#vendor_clasification").val());
                form_data.append("nature_of_invoice",$("#nature_of_invoice").find(':selected').val());
                form_data.append("mobile_gst",$("#gst_mobile_number").val());
                form_data.append("compo_scheme",$("input[name='compo_scheme']:checked").val());
                // form_data.append("rev_tax", $("input[name='reverce_tax']:checked").val());         
                form_data.append("gst_vendor",vendor_value);
                form_data.append("gst_data_save",'gst_data_save1');
            }
            else
            {
              form_data.append("gst_declr",$('#gst_declr')[0].files[0]);
              form_data.append("gst_data_save",'gst_data_save');
            }
            
         
          
          
         
         //alert("fdsfdsf");
            var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'html',
            processData: false, 
            contentType: false,
            'enctype': 'multipart/form-data',
            'data' : form_data,
              url : base_url+'/vendor_management_system/index.php/Vendordata/update_data',
              success : function(data)
              {
                //alert(data);
                  $("#err_show").text("Data Updated");
                  $("#myModalLabel").text("Success");
                  $("#modal-container-204273").modal('show');
                  $('#tab1').removeClass("active");
                  $('#tab2').addClass("active");
                  $('#tab1_menu').removeClass("active");
                  $('#tab2_menu').addClass("active");
                  $('#tab1').css("display",'none');
                  $('#tab2').css("display",'block');
                  //$("#back_tab_1").css("display",'block');
                 // alert("Data Updated");
              }
            });
          }
      });
         $("body").on('click','#tab_2',function(){
        var error = '';var type_vendor = 0;var vendor_value = '';
         if ($(".titleshow_edit").attr('title') == 'active' && $("#title_edit").find(':selected').val() == '--Select--') 
          {
            $(".titleshow_edit").css('border-color','red');   
            error = "Please select title.";
          }
          else if($(".titleshow_edit").attr('title') == 'active' && $("#name1_edit").val() == '')
          {
            $(".titleshow_edit").css('border-color','red');   
            error = "Please enter name";
          }
          else if($(".titleshow_edit").attr('title') == 'active' && $("#name1_edit").val() != '' && $("#name1_edit").val().length>80)
          {
             $(".titleshow_edit").css('border-color','red');   
            error = "Name field should contain maximum 80 characters.";
          }
          else  if ($(".vendrdesc_edit").attr('title') == 'active' && $(".vendorchange_edit").find(':selected').val() == '--Select--') 
          {
             $(".vendrdesc_edit").css('border-color','red');   
            error = "Please select vendor type.";
          }
           else if(($(".pannumber_edit").attr('title') == 'active' && $(".pannumber_edit").val() == "") || $(".pannumber_edit").attr('title') == 'Not Correct')
          {
             $(".pannumber_edit").css('border-color','red'); 
             error = "Please enter valid PAN details";
          }
          else if($(".pannumber_edit").val() != "" && $("#pan_proof").val() == '')
          {
             $(".pannumber_edit").css('border-color','red'); 
             error = "Please upload supporting document for PAN";
          }
          else
          {
            error = '';
             $(this).css('border-color','');   
            //alert("Done");
          }
          if (error != '') 
          {
            $("#err_show").text(error);
            $("#modal-container-204273").modal('show');
          }
          else
          {
             var form_data = new FormData(); 
          form_data.append("gst_data_save",'personal_data');         
          form_data.append("vendor_id",$("#vendor_id").val());
          form_data.append("title_value",$("#title_edit").find(':selected').val());
          form_data.append("name",$("#name1_edit").val());
          form_data.append("vendor_type",$("#title_edit").find(':selected').val());
          form_data.append("vendor_desc",$("#title_edit").find(':selected').text());    
          form_data.append("pannumber",$(".pannumber_edit").val());
            form_data.append("pan_proof",$('#pan_proof')[0].files[0]);      
            var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'html',
            processData: false, 
            contentType: false,
            'enctype': 'multipart/form-data',
            'data' : form_data,
              url : base_url+'/vendor_management_system/index.php/Vendordata/update_data',
              success : function(data)
              {
                //alert(data);
                  $("#err_show").text("Data Updated");
                  $("#myModalLabel").text("Success");
                  $("#modal-container-204273").modal('show');
                  $('#tab2').removeClass("active");
                  $('#tab2').css("display",'none');
                  $('#tab3').addClass("active");
                  $('#tab2_menu').removeClass("active");
                  $('#tab3_menu').addClass("active");
                  $('#tab3').css("display",'block');
                  $("#back_tab_1").css("display",'block');
              }
            });
          }
      });
      
      $("body").on('click','#tab_3',function(){
        var error = '';var type_vendor = 0;var vendor_value = '';
        if ($(".state_name_edit_chk").attr('title') == 'active' && $(".state_name_edit_chk").find(':selected').val() == '--Select--') 
          {
             $(".vendrdesc_edit").css('border-color','red');   
            error = "Please select state.";
          }  
          else if($(".house_validation").val() == '' && $(".housenumber_edit").attr('title') == 'active')
          {
             $(".house_validation").css('border-color','red'); 
             error = "Please enter house number";
          }
          else if($(".house_validation").attr('title') == 'Not Correct')
          {
             $(".house_validation").css('border-color','red'); 
             error = "Please enter valid house number";
          }          
          else if(($(".street1_edit").attr('title') == 'active' && $(".street1_edit").val() == "") || $(".street1_edit").attr('title') == 'Not Correct')
          {
             $(".street1_edit").css('border-color','red'); 
             error = "Please enter valid street details";
          }       
          else if(($(".street2_edit").attr('title') == 'active' && $(".street2_edit").val() == "") || $(".street2_edit").attr('title') == 'Not Correct')
          {
            $(".street2_edit").css('border-color','red'); 
             error = "Please enter valid street details";
          }
          else if(($(".street3_edit").attr('title') == 'active' && $(".street3_edit").val() == "") || $(".street3_edit").attr('title') == 'Not Correct')
          {
             $(".street3_edit").css('border-color','red'); 
             error = "Please enter valid street details";
          }
          else if(($(".street4_edit").attr('title') == 'active' && $(".street4_edit").val() == "") || $(".street4_edit").attr('title') == 'Not Correct')
          {
             $(".street4_edit").css('border-color','red'); 
             error = "Please enter valid street details";
          }
          else if(($(".street5_edit").attr('title') == 'active' && $(".street5_edit").val() == "") || $(".street5_edit").attr('title') == 'Not Correct')
          {
            $(".street5_edit").css('border-color','red'); 
             error = "Please enter valid street details";
          }                
          else if(($(".City_edit").attr('title') == 'active' && $(".City_edit").val() == "") || $(".City_edit").attr('title') == 'Not Correct')
          {
            $(".City_edit").css('border-color','red'); 
             error = "Please enter valid city details";
          }
          else if(($(".district_edit").attr('title') == 'active' && $(".district_edit").val() == "") || $(".district_edit").attr('title') == 'Not Correct')
          {
            $(".district_edit").css('border-color','red'); 
             error = "Please enter valid district details";
          }
          else if(($(".postalcode_edit").attr('title') == 'active' && $(".postalcode_edit").val() == "") || $(".postalcode_edit").attr('title') == 'Not Correct')
          {
             $(".postalcode_edit").css('border-color','red'); 
             error = "Please enter valid postal code details";
          }
          else if(($(".telephone1_edit").attr('title') == 'active' && $(".telephone1_edit").val() == "") || $(".telephone1_edit").attr('title') == 'Not Correct')
          {
             $(".telephone1_edit").css('border-color','red'); 
             error = "Please enter valid telephone details";
          }
          else if(($(".telephone2_edit").attr('title') == 'active' && $(".telephone2_edit").val() == "") || $(".telephone2_edit").attr('title') == 'Not Correct')
          {
             $(".telephone2_edit").css('border-color','red'); 
             error = "Please enter valid telephone details";
          }
          else if(($(".faxnumber_edit").attr('title') == 'active' && $(".faxnumber_edit").val() == "") || $(".faxnumber_edit").attr('title') == 'Not Correct')
          {
             $(".faxnumber_edit").css('border-color','red'); 
             error = "Please enter valid fax number details";
          }
          else if(($(".emailid_edit").attr('title') == 'active' && $(".emailid_edit").val() == "") || $(".emailid_edit").attr('title') == 'Not Correct')
          {
              $(".emailid_edit").css('border-color','red'); 
             error = "Please enter valid email id details";
          }         
          else
          {
            error = '';
             $(this).css('border-color','');   
            //alert("Done");
          }
          if (error != '') 
          {
            $("#err_show").text(error);
            $("#modal-container-204273").modal('show');
          }
          else
          {
             var form_data = new FormData(); 
          form_data.append("gst_data_save",'other_data');         
          form_data.append("vendor_id",$("#vendor_id").val());
          form_data.append("house_number",$(".housenumber_edit").val());
          form_data.append("street1",$(".street1_edit").val());
          form_data.append("state_name_edit_chk",$(".state_name_edit_chk").find(':selected').text());
          form_data.append("state_code_edit_chk",$(".state_name_edit_chk").find(':selected').val());
          form_data.append("street2",$("#street2_edit").val());
          form_data.append("street3",$("#street3_edit").val());
          form_data.append("street4",$("#street4_edit").val());
          form_data.append("street5",$("#street5_edit").val());
          form_data.append("Country_Key",$("#countrykey_now").find(':selected').val());
          form_data.append("City",$(".City_edit").val());
          form_data.append("district",$(".district_edit").val());
          form_data.append("postalcode", $(".postalcode_edit").val());
          form_data.append("telephone1",$(".telephone1_edit").val());
          form_data.append("telephone2",$(".telephone2_edit").val());
          form_data.append("fax_num",$(".faxnumber_edit").val());
          form_data.append("emailid",$(".emailid_edit").val());
          

            var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'html',
            processData: false, 
            contentType: false,
            'enctype': 'multipart/form-data',
            'data' : form_data,
              url : base_url+'/vendor_management_system/index.php/Vendordata/update_data',
              success : function(data)
              {
                  //alert(data);
                  $("#err_show").text("Data Updated");
                  $("#myModalLabel").text("Success");
                  $("#modal-container-204273").modal('show');
                  $('#tab3').removeClass("active");
                  $('#tab4').addClass("active");
                  $('#tab3_menu').removeClass("active");
                  $('#tab4_menu').addClass("active");
                  $('#tab3').css("display",'none');
                  $('#tab4').css("display",'block');
                  $("#back_tab_2").css("display",'block');
              }
            });
          }
      });

        $("body").on('click','#vendor_data_update',function(){
        var error = '';var type_vendor = 0;var vendor_value = '';
          if($(".excisereg_edit").attr('title') == 'active' && $(".excisereg_edit").val() == "")
          {
            $(".excisereg_edit").css('border-color','red'); 
             error = "Please enter valid excise registration no";
          }
          else if($(".excisereg_edit").val() != '' && $(".excisereg_edit").attr('title') == "Not Correct")
          { 
            $(".excisereg_edit").css('border-color','red'); 
             error = "Please enter valid excise registration no(Note : It should match with PAN number)";
          }
          // else if($(".excisereg_edit").attr('title') == 'active' && ($(".excisereg_edit").val() != $("#pan_number").val() || $(".excisereg_edit").val() != $(".pannumber_edit").val()))
          // { 
          //   $(".excisereg_edit").css('border-color','red'); 
          //    error = "Please enter valid excise registration no(Note : It should match with PAN number)";
          // }
          else if($(".exciserange_edit").attr('title') == 'active' && $(".exciserange_edit").val() == "")
          {
             $(".exciserange_edit").css('border-color','red'); 
             error = "Please enter valid excise range";
          }
         else if($(".excisediv_edit").attr('title') == 'active' && $(".excisediv_edit").val() == "")
          {
             $(".excisediv_edit").css('border-color','red'); 
             error = "Please enter excise division";
          }
          else if($(".excisecom_edit").attr('title') == 'active' && $(".excisecom_edit").val() == "")
          {
             $(".excisecom_edit").css('border-color','red'); 
             error = "Please enter excise commissionerate";
          }
          else if($(".excisecst_edit").attr('title') == 'active' && $(".excisecst_edit").val() == "")
          {
             $(".excisecst_edit").css('border-color','red'); 
             error = "Please enter CST number";
          }
          else if($(".excisecst_edit").val() != '' && $(".excisecst_edit").attr('title') == "Not Correct")
          {
             $(".excisecst_edit").css('border-color','red'); 
             error = "CST number should contain alpha numeric value";
          }
          else if($(".exciselst_edit").attr('title') == 'active' && $(".exciselst_edit").val() == "")
          {
             $(".exciselst_edit").css('border-color','red'); 
             error = "Please enter LST number";
          } 
          else if($(".servtax_edit").attr('title') == 'active' && $(".servtax_edit").val() == "")
          {
             $(".servtax_edit").css('border-color','red'); 
             error = "Please enter service tax reg number";
          } 
          else if($(".servtax_edit").val() != '' && $(".servtax_edit").attr('title') == "Not Correct")
          { 
            $(".excisereg_edit").css('border-color','red'); 
             error = "Please enter valid service tax reg number(Note : It should match with PAN number)";
          }         
          else
          {
            error = '';
             $(this).css('border-color','');   
            //alert("Done");
          }
          //alert(error);
          if (error != '') 
          {
            $("#err_show").text(error);
            $("#modal-container-204273").modal('show');
          }
          else
          {
             var form_data = new FormData(); 
          form_data.append("gst_data_save",'VAT_details');         
          form_data.append("vendor_id",$("#vendor_id").val());
          form_data.append("excise_reg_no",$(".excisereg_edit").val());
          form_data.append("excise_range",$(".exciserange_edit").val());
          form_data.append("excise_div",$(".excisediv_edit").val());
          form_data.append("excise_commisionarate",$(".excisecom_edit").val());
          form_data.append("cst_number",$(".excisecst_edit").val());
          form_data.append("lst_number",$(".exciselst_edit").val());
          form_data.append("servtax_edit",$(".servtax_edit").val());
          form_data.append("CENVAT_scheme",$("input[name='CENVAT_scheme']:checked").val());

            var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'html',
            processData: false, 
            contentType: false,
            'enctype': 'multipart/form-data',
            'data' : form_data,
              url : base_url+'/vendor_management_system/index.php/Vendordata/update_data',
              success : function(data)
              {
                  //alert(data);
                  $("#err_show").text("Data Updated");
                  $("#myModalLabel").text("Success");
                  $("#modal-container-204273").modal('show');
                  $('#tab3').removeClass("active");
                  $('#tab4').addClass("active");
                  $('#tab3_menu').removeClass("active");
                  $('#tab4_menu').addClass("active");
                  $('#tab3').css("display",'none');
                  $('#tab4').css("display",'block');
                  $("#back_tab_3").css("display",'block');
              }
            });
          }
      });

//       $("body").on('click','#vendor_data_update',function(){
//         var error = '';var type_vendor = 0;var vendor_value = '';
//           $("input:checked").map(function () { 
//             if (vendor_value == '') 
//             {
//               vendor_value = $(this).val();
//             }
//             else
//             {
//               vendor_value = vendor_value+'!'+$(this).val();
//             }
//             //alert($(this).val());
//             type_vendor = 1;
//           });
//           if ($(".titleshow_edit").attr('title') == 'active' && $("#title_edit").find(':selected').val() == '--Select--') 
//           {
//             $(".titleshow_edit").css('border-color','red');   
//             error = "Please select title.";
//           }
//           else if($(".titleshow_edit").attr('title') == 'active' && $("#name1_edit").val() == '')
//           {
//             $(".titleshow_edit").css('border-color','red');   
//             error = "Please enter name";
//           }
//           else if($(".titleshow_edit").attr('title') == 'active' && $("#name1_edit").val() != '' && $("#name1_edit").val().length>80)
//           {
//              $(".titleshow_edit").css('border-color','red');   
//             error = "Name field should contain maximum 80 characters.";
//           }
//           else  if ($(".vendrdesc_edit").attr('title') == 'active' && $(".vendorchange_edit").find(':selected').val() == '--Select--') 
//           {
//              $(".vendrdesc_edit").css('border-color','red');   
//             error = "Please select vendor type.";
//           }
//           else  if ($("#gst_name_validate").val() == '') 
//           {
//              $("#gst_name_validate").css('border-color','red');   
//             error = "Please enter legal name based on GST";
//           }
//           else  if ($("#gst_name_validate").val().length>80) 
//           {
//             $("#gst_name_validate").css('border-color','red'); 
//             error = "Legal name based on GST should contain maximum 80 characters";
//           }
//           else if(type_vendor == 0)
//           {
//              error = "Please select vendor type for GST field.";
//           }
//           else if($("input[name='gst_capable']:checked").val() == "No" && $("#gst_declr").val() == '')
//           {
//              $("#gst_declr").css('border-color','red');   
//              error = "Please Upload declaration form.";
//           }
//           else if($("input[name='gst_capable']:checked").val() != "No" && $("#GST_number").val() == '')
//           {
//              $("#GST_number").css('border-color','red');   
//              error = "Please enter GST Number.";
//           }
//           else if($("input[name='gst_capable']:checked").val() != "No" && $("#GST_number").attr('title') == 'Not Correct')
//           {
//              $("#GST_number").css('border-color','red');   
//              error = "Please correct GST Number.";
//           }
//            else if($("input[name='gst_capable']:checked").val() != "No" && $("#GST_number").val() != "" && $("#gst_proof").val() == '')
//           { 
//             $("#GST_number").css('border-color','red');            
//              error = "Please upload supporting document for GST";
//           }
//           else if($("#tax_number").val() == '')
//           {
//             $("#tax_number").css('border-color','red'); 
//              error = "Please enter Tax Classification.";
//           }
//           else if($("#vendor_clasification").val() == '')
//           {
//            $("#vendor_clasification").css('border-color','red'); 
//              error = "Please enter Vendor Classification for GST.";
//           }
//           else if($("#nature_of_invoice").find(':selected').val() == '--Select--')
//           {
//             $("#nature_of_invoice").css('border-color','red'); 
//              error = "Please select Nature Of Invoice to be issued.";
//           }
//           else if($("input[name='compo_scheme']:checked").val() === undefined)
//           {
//             $("input[name='compo_scheme']").css('border-color','red'); 
//             error = "Please select Composition Scheme Applicable or not?";
//           }
//           else if($("input[name='rev_tax']:checked").val() === undefined)
//           {
//              $("input[name='rev_tax']").css('border-color','red'); 
//             error = "Please select Revrse TAX applicable or not?";
//           }
//           else if($(".state_name_gst").find(':selected').val() == '---Select---')
//           {
//              $(".state_name_gst").css('border-color','red'); 
//              error = "Please select state name as mention in GST.";
//           }
//           else if($("#gst_email_id").val() == '')
//           {
//              $("#gst_email_id").css('border-color','red'); 
//              error = "Please enter registered email address at GST Site";
//           }
//           else if($("#gst_email_id").attr('title') == 'Not Correct')
//           {
//             $("#gst_email_id").css('border-color','red'); 
//              error = "Please enter valid registered email address at GST Site";
//           }
//           else if($("#gst_mobile_number").val() == '')
//           {
//             $("#gst_mobile_number").css('border-color','red'); 
//              error = "Please enter registered mobile no. at GST Site";
//           }
//           else if($("#gst_mobile_number").attr('title') == 'Not Correct')
//           {
//             $("#gst_mobile_number").css('border-color','red'); 
//              error = "Please enter valid registered mobile no. at GST Site";
//           }
//            else if($("#gst_service_provider").find(':selected').val() == '---Select---')
//           {
//             $("#gst_service_provider").css('border-color','red'); 
//              error = "Service Provider from India or Out Side India";
//           }
//           else if($(".house_validation").val() == '')
//           {
//              $(".house_validation").css('border-color','red'); 
//              error = "Please enter house number";
//           }
//           else if($(".house_validation").attr('title') == 'Not Correct')
//           {
//              $(".house_validation").css('border-color','red'); 
//              error = "Please enter valid registered mobile no. at GST Site";
//           }          
//           else if(($(".street1_edit").attr('title') == 'active' && $(".street1_edit").val() == "") || $(".street1_edit").attr('title') == 'Not Correct')
//           {
//              $(".street1_edit").css('border-color','red'); 
//              error = "Please enter valid street details";
//           }
//           else if(($(".street2_edit").attr('title') == 'active' && $(".street2_edit").val() == "") || $(".street2_edit").attr('title') == 'Not Correct')
//           {
//             $(".street2_edit").css('border-color','red'); 
//              error = "Please enter valid street details";
//           }
//           else if(($(".street3_edit").attr('title') == 'active' && $(".street3_edit").val() == "") || $(".street3_edit").attr('title') == 'Not Correct')
//           {
//              $(".street3_edit").css('border-color','red'); 
//              error = "Please enter valid street details";
//           }
//           else if(($(".street4_edit").attr('title') == 'active' && $(".street4_edit").val() == "") || $(".street4_edit").attr('title') == 'Not Correct')
//           {
//              $(".street4_edit").css('border-color','red'); 
//              error = "Please enter valid street details";
//           }
//           else if(($(".street5_edit").attr('title') == 'active' && $(".street5_edit").val() == "") || $(".street5_edit").attr('title') == 'Not Correct')
//           {
//             $(".street5_edit").css('border-color','red'); 
//              error = "Please enter valid street details";
//           }         
//           else if(($(".City_edit").attr('title') == 'active' && $(".City_edit").val() == "") || $(".City_edit").attr('title') == 'Not Correct')
//           {
//             $(".City_edit").css('border-color','red'); 
//              error = "Please enter valid city details";
//           }
//           else if(($(".district_edit").attr('title') == 'active' && $(".district_edit").val() == "") || $(".district_edit").attr('title') == 'Not Correct')
//           {
//             $(".district_edit").css('border-color','red'); 
//              error = "Please enter valid district details";
//           }
//           else if(($(".postalcode_edit").attr('title') == 'active' && $(".postalcode_edit").val() == "") || $(".postalcode_edit").attr('title') == 'Not Correct')
//           {
//              $(".postalcode_edit").css('border-color','red'); 
//              error = "Please enter valid postal code details";
//           }
//           else if(($(".telephone1_edit").attr('title') == 'active' && $(".telephone1_edit").val() == "") || $(".telephone1_edit").attr('title') == 'Not Correct')
//           {
//              $(".telephone1_edit").css('border-color','red'); 
//              error = "Please enter valid telephone details";
//           }
//           else if(($(".telephone2_edit").attr('title') == 'active' && $(".telephone2_edit").val() == "") || $(".telephone2_edit").attr('title') == 'Not Correct')
//           {
//              $(".telephone2_edit").css('border-color','red'); 
//              error = "Please enter valid telephone details";
//           }
//           else if(($(".faxnumber_edit").attr('title') == 'active' && $(".faxnumber_edit").val() == "") || $(".faxnumber_edit").attr('title') == 'Not Correct')
//           {
//              $(".faxnumber_edit").css('border-color','red'); 
//              error = "Please enter valid fax number details";
//           }
//           else if(($(".emailid_edit").attr('title') == 'active' && $(".emailid_edit").val() == "") || $(".emailid_edit").attr('title') == 'Not Correct')
//           {
//               $(".emailid_edit").css('border-color','red'); 
//              error = "Please enter valid email id details";
//           }
//           else if(($(".pannumber_edit").attr('title') == 'active' && $(".pannumber_edit").val() == "") || $(".pannumber_edit").attr('title') == 'Not Correct')
//           {
//              $(".pannumber_edit").css('border-color','red'); 
//              error = "Please enter valid PAN details";
//           }
//           else if($(".pannumber_edit").val() != "" && $("#pan_proof").val() == '')
//           {
//              $(".pannumber_edit").css('border-color','red'); 
//              error = "Please upload supporting document for PAN";
//           }
//           else
//           {
//             error = '';
//              $(this).css('border-color','');   
//             //alert("Done");
//           }
//           if (error != '') 
//           {
//             $("#err_show").text(error);
//             $("#modal-container-204273").modal('show');
//           }
//           else
//           {
//             var form_data = new FormData();            
//           form_data.append("pan_proof",$('#pan_proof')[0].files[0]);
//           form_data.append("gst_proof",$('#gst_proof')[0].files[0]);
//           form_data.append("gst_declr",$('#gst_declr')[0].files[0]);
// form_data.append("vendor_id",$("#vendor_id").val());
//           form_data.append("title_value",$("#title_edit").find(':selected').val());
//           form_data.append("name",$("#name1_edit").val());
//           form_data.append("vendor_type",$("#title_edit").find(':selected').val());
//           form_data.append("vendor_desc",$("#title_edit").find(':selected').text());
//           form_data.append("gst_number",$("#GST_number").val());
//           form_data.append("legal_name_gst",$("#gst_name_validate").val());
//           form_data.append("state_gst",$(".state_name_gst").find(':selected').text());
//           form_data.append("state_code",$(".state_name_gst").find(':selected').val());
//           form_data.append("email_gst",$("#gst_email_id").val());
//           form_data.append("mobile_gst",$("#gst_mobile_number").val());
//           form_data.append("service_provider_gst",$("#gst_service_provider").find(':selected').val());
//           form_data.append("Tax_Classification",$("#tax_number").val());
//           form_data.append("vendor_Classification",$("#vendor_clasification").val());
//           form_data.append("nature_of_invoice",$("#nature_of_invoice").find(':selected').val());
//           form_data.append("mobile_gst",$("#gst_mobile_number").val());
//           form_data.append("compo_scheme",$("input[name='compo_scheme']:checked").val());
//           form_data.append("rev_tax", $("input[name='reverce_tax']:checked").val());
//           form_data.append("house_number",$("input[name='housenumber_edit']:checked").val());
//           form_data.append("street1",$("#street1_edit").val());
//           form_data.append("street2",$("#street2_edit").val());
//           form_data.append("street3",$("#street3_edit").val());
//           form_data.append("street4",$("#street4_edit").val());
//           form_data.append("street5",$("#street5_edit").val());
//           form_data.append("City",$(".City_edit").val());
//           form_data.append("district",$(".district_edit").val());
//           form_data.append("postalcode", $(".postalcode_edit").val());
//           form_data.append("telephone1",$(".telephone1_edit").val());
//           form_data.append("telephone2",$(".telephone2_edit").val());
//           form_data.append("fax_num",$(".faxnumber_edit").val());
//           form_data.append("emailid",$(".emailid_edit").val());
//           form_data.append("pannumber",$(".pannumber_edit").val());
//           form_data.append("excise_reg_no",$(".excisereg_edit").val());
//           form_data.append("excise_range",$(".exciserange_edit").val());
//           form_data.append("excise_div",$(".excisediv_edit").val());
//           form_data.append("excise_commisionarate",$(".excisecom_edit").val());
//           form_data.append("cst_number",$(".excisecst_edit").val());
//           form_data.append("lst_number",$(".exciselst_edit").val());
//           form_data.append("servtax_edit",$(".servtax_edit").val());
//           form_data.append("countrykey_now",$(".countrykey_now").find(':selected').val());
//           form_data.append("state_name_edit_chk",$(".state_name_edit_chk").find(':selected').text());
//           form_data.append("state_code_edit_chk",$(".state_name_edit_chk").find(':selected').val());
//           form_data.append("gst_vendor",vendor_value);
         
//             var base_url = window.location.origin;
//             $.ajax({
//               type : 'post',
//              'datatype' : 'json',
//             processData: false, 
//             contentType: false,
//             'enctype': 'multipart/form-data',
//             'data' : form_data,
//               url : base_url+'/vendor_management_system/index.php/Vendordata/update_data',
//               success : function(data)
//               {
//                   $("#err_show").text("Data Updated");
// $("#myModalLabel").text("Success");
//             $("#modal-container-204273").modal('show');
//                  // alert("Data Updated");
//               }
//             });
//           }
//           // var e = document.getElementById("pan_proof");
//           // var file_data = $(e)[0].files[0];
          

//       });
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
<script>
// $('#tab_1').click(function(){

// });


</script>

<script type="text/javascript">
$('#back_tab_1').click(function(){
     $('#tab1').addClass("active");
      $('#tab2').removeClass("active");
      $('#tab2_menu').removeClass("active");
      $('#tab1_menu').addClass("active");
      $('#tab1').css("display",'block');
      $('#tab2').css("display",'none');
});
</script>


<script type="text/javascript">


</script>
<script type="text/javascript">
$('#back_tab_2').click(function(){
     $('#tab3').removeClass("active");
     $('#tab2').addClass("active");
      $('#tab3_menu').removeClass("active");
      $('#tab2_menu').addClass("active");
      $('#tab3').css("display",'none');
      $('#tab2').css("display",'block');
});
</script>

<script type="text/javascript">
$('#back_tab_3').click(function(){
    $('#tab3').addClass("active");
      $('#tab4').removeClass("active");
      $('#tab3_menu').addClass("active");
      $('#tab4_menu').removeClass("active");
      $('#tab3').css("display",'block');
      $('#tab4').css("display",'none');
});
</script>