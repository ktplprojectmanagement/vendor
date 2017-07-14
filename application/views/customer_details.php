<style type="text/css">
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
<div class="container" >
<div class="content_wrapper">
<div class="modal fade" id="info_box" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                ×
              </button>
              <h4 class="modal-title" id="myModalLabel">
                Information
              </h4>
            </div>
            <div class="modal-body"  style="font-family: 'Open Sans',sans-serif;font-size: 14px;font-weight: normal;">
              Please keep following certificate scan copies with you before filling the data.<br><br>
<ul>
<li>
Provisional GST certificate ( Mandatory , if applicable)
</li>
<li>
VAT/CST,PAN Card, Service Tax, Excise duty (If VVF SAP data differs or data not available for below details):
</li>
            </div>
            <div class="modal-footer">
               
              <button type="button" class="btn btn-default" data-dismiss="modal">
                OK
              </button> 
              
            </div>
          </div>
          
        </div>
        
      </div>
   <div class="modal fade" id="del_box" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                ×
              </button>
              <h4 class="modal-title" id="myModalLabel">
                Confirmation
              </h4>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this attachment?
            </div>
            <div class="modal-footer">
               
             <!--  <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button>  -->
              <button type="button" class="btn btn-primary" id="del_box_ok">
                OK
              </button>
            </div>
          </div>
          
        </div>
        
      </div>
   <div class="modal fade" id="confirm_box" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
               
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                ×
              </button>
              <h4 class="modal-title" id="myModalLabel">
                Confirmation
              </h4>
            </div>
            <div class="modal-body">
              Are you sure you want to send GST details for approval?
            </div>
            <div class="modal-footer">
               
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button> 
              <button type="button" class="btn btn-primary" id="apprv_ok">
                OK
              </button>
            </div>
          </div>
          
        </div>
        
      </div>
        <div class="container_24" >
            <div class="grid_24">
                <div class="grid_16 alpha" >
                    <div class="content-bar" style="margin-top: 0px"> 
                        <h4 class="page-title" style="font-family: "Open Sans",sans-serif;">Vendor Details (<?php if(isset($edit_user_details['0']['Name'])) { echo $edit_user_details['0']['Name']; } ?>)</h4>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
var j = jQuery.noConflict();
  j( function() {
   j(".provisional_date").datepicker({dateFormat: 'dd/M/yy',changeMonth: true,changeYear: true,yearRange: '1900:2050',});
  } );
  </script>
<script>
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
<div class="col-lg-12 col-md-12 bhoechie-tab-container">
           
          <div class="col-lg-12 col-md-9 col-sm-9 col-xs-9 ">
            <div class="tabs">
     <ul id="progress" class="tab-links">
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
         <li id="tab5_menu" style="height: 86px;font-size: 14px;font-family: 'Open Sans',sans-serif;">
        Step5<br>Final submission
        </li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <!-- <p>Tab #1 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p> -->
          
            <div class="col-lg-12 col-md-9 col-sm-9 col-xs-9 ">
                <!-- flight section -->
                <div   id="next1">
                <input type="text" value="gst_data_save" name="gst_data_save" class="gst_data_save" style="display: none" />
                <input type="button" class="btn btn-info" value="Next" id="tab_1" style="float:right;margin-bottom:10px"> 
                    <table  class="table">
                            <tr>
                                <td style="width: 383px;"><label for="contactName" class="txt_font">Applicable For GST
<span class="required txt_font">*</span> <i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i>
</label></td>
                                <td><input class="gst_capable" name="gst_capable" type="radio" value="Yes" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { echo 'checked="checked"'; } ?>>Yes&nbsp;&nbsp;<input type="radio"  name="gst_capable" class="gst_capable" value="No" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'No') { echo 'checked="checked"'; } ?>>No
                                <div id="show_capable" style="display: none"><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><a href="<?php echo base_url(); ?>VMS_Declaration.docx" download="<?php echo base_url(); ?>VMS_Declaration.docx">Download Declaration Form</a> </lable></span></div>
<?php if(isset($edit_user_details1['0']['gst_declr']) && $edit_user_details1['0']['gst_declr'] != '' && isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'No') { ?>
<div id="atc1">
<a href="<?php echo base_url(); ?>proof/declaration/<?php if(isset($edit_user_details1['0']['gst_declr'])) { echo $edit_user_details1['0']['gst_declr']; } ?>" target="_new"><input type="button"  class="btn btn-info" value="Open File" id="dec_prf_doc"></a>&nbsp;&nbsp;<input type="button" value="Delete" class="btn btn-info del_attach" title="gst_declr">
</div>
<?php }
else
{ ?>
                                <div id="show_capable1" class="del_attach1" style="display: none"><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><input type="button" id="gst_declr0" class="btn btn-info" value="Upload Document"> </lable></span><input type="file" class="file_change" name="gst_declr" id="gst_declr" style="margin-top: -19px;
opacity: 0;"></div>
<a href="" target="_blank" class="linkgst_declr"><lable id='gst_declr1' style="width: 53px;"></lable></a><lable id='gst_declr11' style="cursor:pointer;display: none"><input type="button" value="Delete" class="btn btn-info cancel_upload" id='gst_declr-1'>
</lable>
<?php } ?>

                                </td>
                            </tr>
                    <tr id="have_prov_num" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'No') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                <td><label for="contactName">Have you received provisional number? 
<span class="required">*</span> <i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i>
</label></td>
                                <td><input class="provisional_num" name="provisional_num" type="radio" value="Yes" <?php if(isset($edit_user_details1['0']['prov_applicable'])){ if($edit_user_details1['0']['prov_applicable'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes&nbsp;&nbsp;<input type="radio"  name="provisional_num" class="provisional_num" value="No" <?php if(isset($edit_user_details1['0']['prov_applicable'])){ if($edit_user_details1['0']['prov_applicable'] == 'No') { echo 'checked="checked"'; } } ?>>No                               

                                </td>
                            </tr>
      <tr id="when_prov_num" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'No') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?> >
                                <td><label for="contactName">When are you going to applied? 
<span class="required">*</span> <i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i>
</label></td>
                                <td><input class="provisional_date" name="provisional_date" type="text" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['prov_date'])) { echo $edit_user_details1['0']['prov_date']; }?>">
                                </td>
                            </tr>
                            <tr id="gst1" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                              <td><label for="contactName">State name as mentioned in GST Site <span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable State or not"></i></label></td>
                              <td>
                                 <select name="state_name_gst" class="state_name_gst">
                                    <option>---Select---</option>
                                    <?php
                                      foreach ($state_details as $row) { ?>
                                        <option id='<?php echo $row['state']; ?>' <?php if(isset($edit_user_details1['0']['State_Code_gst']) && $edit_user_details1['0'] && ['State_Code_gst'] == $row['state_number']) { echo 'selected="true"'; } else { echo 'selected="true"'; }?> value="<?php echo $row['state_number']; ?>" class='cntrt_name'><?php echo $row['state_number'].'-'.$row['state_name']; ?></option>
                                    <?php }
                                    ?>    
                                 </select> 
                              </td>
                          </tr>
                          <tr id="gst2" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                              <td><label for="contactName">Registered email address at GST Site<span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i></label></td>
                              <td><input type="text"  id="gst_email_id" name="gst_email_id" class="email_validate"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['email_on_gst'])) { echo $edit_user_details1['0']['email_on_gst']; }?>" /></td>
                          </tr>

                          <tr  id="gst3" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                              <td><label for="contactName">Registered mobile no. at GST Site<span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i></label></td>
                              <td><input type="text"  id="gst_mobile_number" name="gst_mobile_number" class="gst_mobile_number"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['mobile_num_on_gst'])) { echo $edit_user_details1['0']['mobile_num_on_gst']; }?>" /></td>
                          </tr>
       <tr id="gst41" <?php if(isset($edit_user_details1['0']['service_provider']) && isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                <td><label for="contactName">Are you service provider? 
<span class="required">*</span> <i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i>
</label></td>
                                <td><input class="service_capable" name="service_capable" type="radio" value="Yes" <?php if(isset($edit_user_details1['0']['service_provider']) && $edit_user_details1['0']['service_provider'] == 'Yes') { echo 'checked="checked"'; } ?>>Yes&nbsp;&nbsp;<input type="radio"  name="service_capable" class="service_capable" value="No" <?php if(isset($edit_user_details1['0']['service_provider']) && $edit_user_details1['0']['service_provider'] == 'No') { echo 'checked="checked"'; } ?>>No
</td>
                            </tr>
                          <tr id="gst4" <?php if(isset($edit_user_details1['0']['service_provider']) && $edit_user_details1['0']['service_provider'] == 'Yes' && isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                              <td><label for="contactName">Service Provider from India or Out Side India<span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title='Sec 2(17) of IGST: “location of the recipient of services” means:
(a) where a supply is received at a place of business for which registration
has been obtained, the location of such place of business;
(b) where a supply is received at a place other than the place of business for
which registration has been obtained, that is to say, a fixed establishment
elsewhere, the location of such fixed establishment;
(c) where a supply is received at more than one establishment, whether the
     place of business or fixed establishment, the location of the establishment
     most directly concerned with the receipt of the supply; and
(d) in absence of such places, the location of the usual place of residence of
      the recipient;

sec 2(18) of IGST: “location of the supplier of services” means:
 (a) where a supply is made from a place of business for which registration has
       been obtained, the location of such place of business;
(b) where a supply is made from a place other than the place of business for
     which registration has been obtained, that is to say, a fixed establishment
    elsewhere, the location of such fixed establishment;
(c) where a supply is made from more than one establishment, whether the
     place of business or fixed establishment, the location of the establishment
     most directly concerned with the provision of the supply; and
(d) in absence of such places, the location of the usual place of residence of
     the supplier;'></i></label></td>
                              <td>
                                <select id="gst_service_provider">
                                  <option>---Select---</option>
                                  <option <?php if(isset($edit_user_details1['0']['service_provider_on_gst'])  && $edit_user_details1['0']['service_provider_on_gst'] == 'India') { echo 'selected="true"'; } else if(isset($edit_user_details1['0']['service_provider_on_gst']) && $edit_user_details1['0']['service_provider_on_gst'] != 'Out of India') { echo 'selected="true"'; }?> >India</option>
                                  <option <?php if(isset($edit_user_details1['0']['service_provider_on_gst']) && $edit_user_details1['0']['service_provider_on_gst'] == 'Out of India') { echo 'selected="true"'; } ?>>Out of India</option>
                                </select>
                              </td>
                          </tr>
                            <tr id="gst5" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                <td><label for="contactName">Legal Name of Business as mentioned in PAN and GST Registration <span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i></label></td>
                                <td><input type="text" class="name_validate"  id="gst_name_validate" name="gst_name_validate" value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['mobile_num_on_gst'])) { echo $edit_user_details1['0']['mobile_num_on_gst']; }?>" /></td>
                            </tr>
                             <tr id="gst6" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                <td><label for="contactName">Type(Nature) of Vendor by GST (Vendor Classification)<span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Manufacturer: Person who manufactures goods for sale.
Ist Stage Dealer : Person who purchases goods from Manufacturer.
IInd Stage Dealer : Person who purchases goods from Ist Stage Dealer.
Importer : Person who imports goods, and then sells same goods in India.
Service provider : Person who will provide services to the service recipient. 
Composition Scheme:  GST registered person, whose Turnover in F.Y. 2016-17 did not cross 50Lakhs, such person will pay 2.5%(in case of manufacturer) and 1% (in case of Ist stage/IInd Stage Dealer/Importer)
PROVIDED that no such permission shall be granted to a taxable person-
(a) who is engaged in the supply of services; or
(b) who makes any supply of goods which are not leviable to tax under this Act; or
(c) who makes any inter-State outward supplies of goods; or
(d) who makes any supply of goods through an electronic commerce operator who
is required to collect tax at source under section 56; or
(e) who is a manufacturer of such goods as may be notified on the recommendation of the Council:
(f) such person should have taken composition scheme in all the states, where business is operated.
Service Provider: A person who is engaged in providing services to service recipient against receipt of consideration."></i></label></td>
                                <td>
<?php 
if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['gst_vendor']))
{
$gst_vendor = explode('!',$edit_user_details1['0']['gst_vendor']);
}
?>
<select class="gst_vendor_type">  
<option value="--Select--">--Select--</option>                                        
                                            <option id="M" value="M" title="Manufacturer" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details1['0']['gst_vendor'])){ if($edit_user_details1['0']['gst_vendor'] == 'M') { echo 'selected="selected"'; } } ?>>Manufacturer</option>
                                            <option  id="MD" value="MD" title="Manufacturer's Depot or Consignment Agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['gst_vendor'])){ if($edit_user_details['0']['gst_vendor'] == 'MD') { echo 'selected="selected"'; } } ?>>Manufacturer's Depot or Consignment Agent</option>
                                            <option id="FD" value="FD" title="First Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['gst_vendor'])){ if($edit_user_details['0']['gst_vendor'] == 'FD') { echo 'selected="selected"'; } } ?>>First Stage Dealer of indigenous excisable goods</option>
                                            <option id="SD" value="SD" title="Second Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['gst_vendor'])){ if($edit_user_details['0']['gst_vendor'] == 'SD') { echo 'selected="selected"'; } } ?>>Second Stage Dealer of indigenous excisable goods</option>
                                            <option id="I" value="I" title="Importer, from his depot or his consignment agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['gst_vendor'])){ if($edit_user_details['0']['gst_vendor'] == 'I') { echo 'selected="selected"'; } } ?>>Importer, from his depot or his consignment agent</option>
                                            <option id="DI" value="DI" title="First Stage or Second Stage dealer of imported goods">First Stage or Second Stage dealer of imported goods</option>
                                          </select>
                                </td>
                            </tr>
                            <tr id="gst7" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                <td><label for="contactName">GST Registration Number OR Unique ID Number<span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="(a) any specialized agency of the United Nations Organization or any Multilateral
Financial Institution and Organization notified under the United Nations
(Privileges and Immunities) Act, 1947 (46 of 1947), Consulate or Embassy of
foreign countries shall be granted a Unique Identity Number; and
(b) any other person or class of persons, as may be notified by the Commissioner,shall obtain a Unique Identity Number.

42. What is ARN? 
ARN is the Application Reference Number generated after the submission of the enrolment application with E-Sign or Digital Signature (DSC). It is a unique number assigned to each transaction completed at the GST System Portal. Note the ARN can be used for future correspondence with GSTN

"></i></label></td>
                                <td><input type="text" class="gst_validate"  id="GST_number" name="GST_number"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['GST_number'])) { echo $edit_user_details1['0']['GST_number']; }?>"/>
<?php if(isset($edit_user_details1['0']['gst_proof']) && $edit_user_details1['0']['gst_proof'] != '') { ?>
<a href="<?php echo base_url(); ?>proof/gst/<?php if(isset($edit_user_details1['0']['gst_proof'])) { echo $edit_user_details1['0']['gst_proof']; } ?>" target="_new"><input type="button"  class="btn btn-info" value="Open File" id="gst_prf_data"></a>
<input type="button" value="Delete" class="btn btn-info del_attach" title="gst_proof">
<?php }
else
{  ?>
<div  id="show_capable1" style="display: block"><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><input type="button" id="gst_proof0" class="btn btn-info" value="Upload Document"> </lable></span><input type="file" name="gst_proof" class="file_change" id="gst_proof" style="margin-top: -19px;
opacity: 0;"></div>
<a href="" target="_blank" class="linkgst_proof"><lable id='gst_proof1' style="width: 53px;"></lable></a><lable id='gst_proof11' style="cursor:pointer;display: none"><input type="button" value="Delete" class="btn btn-info cancel_upload" id='gst_proof-1'>
</lable>
<?php } ?>
</td>
                            </tr>
                            <tr id="gst8" style="display: none">
                                <td><label for="contactName">Tax Classification for Vendor<span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i></label></td>
                                <td><input class="tax_number" name="tax_number" type="radio" value="Vendor Registered" <?php if(isset($edit_user_details1['0']['TAX_number'])){ if($edit_user_details1['0']['TAX_number'] == 'Vendor Registered') { echo 'checked="checked"'; } } ?>>Vendor Registered&nbsp;&nbsp;<input type="radio"  name="tax_number" class="tax_number" value="Vendor Not Registered" <?php if(isset($edit_user_details1['0']['TAX_number'])){ if($edit_user_details1['0']['TAX_number'] == 'Vendor Not Registered') { echo 'checked="checked"'; } } ?>>Vendor Not Registered</td>
                               <!--  <td><input type="text"  id="tax_number" name="tax_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['TAX_number'])) { echo $edit_user_details['0']['TAX_number']; }?>"/></td> -->
                            </tr>
                            <!-- <tr>
                                <td><label for="contactName">Vendor Classification for GST<span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Applicable or not"></i></label></td>
                                <td><input type="text"  id="vendor_clasification" name="vendor_clasification"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['vendor_classification'])) { echo $edit_user_details1['0']['vendor_classification']; }?>"/></td>
                            </tr> -->
                            <tr id="gst9" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                <td><label for="contactName">Nature Of Invoice to be issued by Vendor(Tax Invoice or Bill Of Supply)<span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Tax Invoice: This Invoice can be issued by a GST registered person, on supply of goods, which will attract GST tax. On this invoice basis, GST Tax credit will be allowed.
Bill of Supply: This invoice can be issued by GST registered person for following purpose, GST Tax credit is not allowed on this Invoice.
1. Supply of goods, on which GST not to be paid;
2. If he is registered under composition scheme. 
If above details are not provided, then there will be mismatch in master detail of seller and buyer and accordingly GST Tax credit will be disallowed.
Other Invoices: All supplier other then the supplier mentioned in Tax Invoice and Bill of Supply, can issue Invoice of any format, but on Top of Invoice, Tax Invoice or Bill of Supply cannot be mentioned"></i></label></td>
                                <td>
                                  <select name="nature_of_invoice" id="nature_of_invoice">
                                    <option <?php ?>>--Select--</option>
                                    <option value="Tax Invoice" <?php if(isset($edit_user_details1['0']['nature_of_invoice']) && $edit_user_details1['0']['nature_of_invoice'] == 'Tax Invoice') { echo 'selected="selected"'; }?>>Tax Invoice</option>
                                    <option value="Bill Of Supply" <?php if(isset($edit_user_details1['0']['nature_of_invoice']) && $edit_user_details1['0']['nature_of_invoice'] == 'Bill Of Supply') { echo 'selected="selected"'; }?>>Bill Of Supply</option>
                                  </select>
                                </td>
                            </tr>
                             <tr id="gst10" <?php if(isset($edit_user_details1['0']['gst_applicable']) && $edit_user_details1['0']['gst_applicable'] == 'Yes') { ?>style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                <td><label for="contactName">Composition Scheme Applicable or not?<span class="required">*</span><i class="fa fa-question-circle class_tip" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Composition Scheme:  GST registered person, whose Turnover in F.Y. 2016-17 did not cross 50Lakhs, such person will pay 2.5%(in case of manufacturer) and 1% (in case of Ist stage/IInd Stage Dealer/Importer)
PROVIDED that no such permission shall be granted to a taxable person-
(a) who is engaged in the supply of services; or
(b) who makes any supply of goods which are not leviable to tax under this Act; or
(c) who makes any inter-State outward supplies of goods; or
(d) who makes any supply of goods through an electronic commerce operator who
is required to collect tax at source under section 56; or
(e) who is a manufacturer of such goods as may be notified on the recommendation of the Council:
(f) such person should have taken composition scheme in all the states, where business is operated."></i></label></td>
                                <td><input class="compo_scheme" name="compo_scheme" type="radio" value="Yes" <?php if(isset($edit_user_details1['0']['Composition_Scheme_Applicability']) && $edit_user_details1['0']['Composition_Scheme_Applicability'] == 'Yes') { echo 'checked="checked"'; } ?>>Yes&nbsp;&nbsp;<input type="radio"  name="compo_scheme" class="compo_scheme" value="No" <?php if(isset($edit_user_details1['0']['Composition_Scheme_Applicability']) && $edit_user_details1['0']['Composition_Scheme_Applicability'] == 'No') { echo 'checked="checked"'; } ?>>No</td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Incoterms<span class="required">*</span></label></td>
                                 <td>
                                   <select name="incoterms" id="incoterms">
                                   <option>---Select---</option>
                                      <?php
                                        foreach ($Incoterms as $row) { ?>
                                          <option id='<?php echo $row['code']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0']['code'] == $row['code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['code']; ?>" class='cntrt_name'><?php echo $row['description']; ?></option>
                                      <?php }
                                      ?>  
                                  </select>
                                </td> 
                            </tr>
                          <!--   <tr>
                                <td><label for="contactName">Service Accounting code Applicable<span class="required">*</span></label></td>
                                <td><input type="text"  id="service_accounting_code" name="service_accounting_code"  value=""/></td>
                            </tr> -->
                             <!-- <tr>
                                <td><label for="contactName">Revrse TAX applicable or not?<span class="required">*</span></label></td>
                                <td><input class="reverce_tax"  name="rev_tax" type="radio" value="Yes" <?php if(isset($edit_user_details['0']['Composition_Scheme_Applicability'] )){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes<input type="radio" class="reverce_tax"  name="rev_tax" value="No" <?php if(isset($edit_user_details['0'][' Composition_Scheme_Applicability'])){ if($edit_user_details['0'][' Composition_Scheme_Applicability'] == 'No') { echo 'checked="checked"'; } } ?>>No</td>
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
        </div>
 
        <div id="tab2" class="tab">
            <input type="button" class="btn btn-info" value="Next" id="tab_2" style="float:right"> 
            <input type="button" class="btn btn-info" value="Back" id="back_tab_1"> 
                <div id="next2">
                <div style="margin-top: 11px;">
                  <strong style="font-family: initial;">Note: This is your information as per our SAP ERP. This is view only information. Incase there are any changes please select EDIT and provide the necessary document as a proof</strong>
                </div>
                    <table  class="table">
                                        <tr>
                                            <td><label for="contactName">Customer ID<span class="required">*</span></label></td>
                                            <td><input type="text"  id="cust_id" name="cust_id"  value=""  disabled/></td>
                                        </tr>
                                         <tr>
                                            <td><label for="contactName">Account group<span class="required">*</span></label></td>
                                            <td><input type="text"  id="acc_grp" name="acc_grp"  value=""  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Company Code<span class="required">*</span></label></td>
                                            <td><input type="text"  id="company_code" name="company_code"  value=""  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Sales Organization<span class="required">*</span></label></td>
                                            <td><input type="text"  id="sale_org" name="sale_org"  value=""  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Distribution Channel<span class="required">*</span></label></td>
                                            <td><input type="text"  id="distribution_channel" name="distribution_channel"  value=""  disabled/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Division<span class="required">*</span></label></td>
                                            <td><input type="text"  id="division" name="division"  value=""  disabled/></td>
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
                                           <!--  <td><label for="contactName">Name2<span class="required">*</span></label></td>
                                            <td><input type="text"  id="name2" name="name2"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Name2'])) { echo $edit_user_details['0']['Name2']; }?>"  disabled/></td> -->
                                            <button type="button" id="titleshow_edit" class="btn btn-default get_field" style="width: 64px">Edit</button><button type="button" id="close_titleshow" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        
                                        </tr>
                                         <tr class="titleshow_edit" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Title']) && ($edit_user_details1['0']['Title'] != '' && $edit_user_details1['0']['Title'] != '0')) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                            <td>Edit Title</td>
                                            <td colspan="2">
                                              <select id="title_edit">
                                                 <option>--Select--</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'COMPANY') { echo 'selected="selected"'; } } ?>>COMPANY</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'M/S.') { echo 'selected="selected"'; } } ?>>M/S.</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Mr.') { echo 'selected="selected"'; } } ?>>Mr.</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Mr. and Mrs.') { echo 'selected="selected"'; } } ?>>Mr. and Mrs.</option>
                                                  <option <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['Title'] == 'Ms.') { echo 'selected="selected"'; } } ?>>Ms.</option>
                                             </select> 
                                            <label for="contactName" style="padding-left:25px">Name<span class="required">*</span></label><input type="text"  id="name1_edit" name="name1_edit" class="name_validate"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Name'])) { echo $edit_user_details1['0']['Name']; }?>" style="width: 300px;"/>
                                            <button type="button" id="save_titleshow" class="btn btn-default savedetails save_titleshow">Save</button>
                                            </td>
                                           <!--  <td></td>
                                            <td><input type="text"  id="name2_edit" name="name2_edit" class="name_validate" value=""/></td> -->
                                            
                                        </tr>                                         
                                       <tr>
                                        <td><label for="contactName">Type(Nature) of Customer</label></td>
                                        <td colspan="2">
                                          <select class="vendor_change" disabled style="width:186px">                                          
                                            <option id="M" value="M" title="Manufacturer" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Title'])){ if($edit_user_details['0']['vendor_type'] == 'M') { echo 'selected="selected"'; } } ?>>Manufacturer</option>
                                            <option  id="MD" value="MD" title="Manufacturer's Depot or Consignment Agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'MD') { echo 'selected="selected"'; } } ?>>Manufacturer's Depot or Consignment Agent</option>
                                            <option id="FD" value="FD" title="First Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'FD') { echo 'selected="selected"'; } } ?>>First Stage Dealer of indigenous excisable goods</option>
                                            <option id="SD" value="SD" title="Second Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'SD') { echo 'selected="selected"'; } } ?>>Second Stage Dealer of indigenous excisable goods</option>
                                            <option id="I" value="I" title="Importer, from his depot or his consignment agent" <?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['vendor_type'])){ if($edit_user_details['0']['vendor_type'] == 'I') { echo 'selected="selected"'; } } ?>>Importer, from his depot or his consignment agent</option>
                                            <option id="DI" value="DI" title="First Stage or Second Stage dealer of imported goods">First Stage or Second Stage dealer of imported goods</option>
                                          </select>
                                        <button type="button" id="vendrdesc_edit" class="btn btn-default get_field" style="width: 64px">Edit</button><button type="button" id="close_vendrdesc" class="btn btn-default close_field" style="display: none">Close</button></td>
                                   
                                    </tr>  
                                    <tr class="vendrdesc_edit" <?php if(isset($edit_user_details1['0']['vendor_type']) && ($edit_user_details1['0']['vendor_type'] != '--Select--' && $edit_user_details1['0']['vendor_type'] != '')) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                        <td><label for="contactName">Edit Type(Nature) of Customer</label></td>
                                        <td colspan="2">
                                          <select class="vendorchange_edit">
                                            <option>--Select--</option>
                                                                                       <option id="M" value="M" title="Manufacturer" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Title'])){ if($edit_user_details1['0']['vendor_type'] == 'M') { echo 'selected="selected"'; } } ?>>Manufacturer</option>
                                            <option  id="MD" value="MD" title="Manufacturer's Depot or Consignment Agent" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['vendor_type'])){ if($edit_user_details1['0']['vendor_type'] == 'MD') { echo 'selected="selected"'; } } ?>>Manufacturer's Depot or Consignment Agent</option>
                                            <option id="FD" value="FD" title="First Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['vendor_type'])){ if($edit_user_details1['0']['vendor_type'] == 'FD') { echo 'selected="selected"'; } } ?>>First Stage Dealer of indigenous excisable goods</option>
                                            <option id="SD" value="SD" title="Second Stage Dealer of indigenous excisable goods" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['vendor_type'])){ if($edit_user_details1['0']['vendor_type'] == 'SD') { echo 'selected="selected"'; } } ?>>Second Stage Dealer of indigenous excisable goods</option>
                                            <option id="I" value="I" title="Importer, from his depot or his consignment agent" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['vendor_type'])){ if($edit_user_details1['0']['vendor_type'] == 'I') { echo 'selected="selected"'; } } ?>>Importer, from his depot or his consignment agent</option>
                                            <option id="DI" value="DI" title="First Stage or Second Stage dealer of imported goods" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['vendor_type'])){ if($edit_user_details1['0']['vendor_type'] == 'DI') { echo 'selected="selected"'; } } ?>>First Stage or Second Stage dealer of imported goods</option>
                                          </select> 
                                          <button type="button" id="save_vendrdesc" class="btn btn-default savedetails save_vendrdesc">Save</button>
                                        </td>
                                       
                                    </tr>                                   
                                     <tr class="street1_edit1"  style="display: none">
                                         <td><label for="contactName">Edit Street (Example: Building Name, House Name etc.)</label></td>
                                        <td><input type="text"  class="street1_edit street_validate" style="width: 404px;" name="street1_edit"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street']) && ($edit_user_details1['0']['Street'] != '' || $edit_user_details1['0']['Street'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street'])) { echo $edit_user_details1['0']['Street']; }?>" required/>
                                        <button type="button" id="save_street1" class="btn btn-default savedetails save_street1">Save</button>
                                        </td>
                                    </tr>                                 
                                    <tr>
                                        <td><label for="contactName">Street 2 (Example: Business Complex, Business District, Area etc.)</label></td>
                                        <td><input type="text"  id="street2" name="street2" style="width: 404px;" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street2'])) { echo $edit_user_details['0']['Street2']; }?>"  disabled/></td>
                                        <td><button type="button" id="street2_edit" class="btn btn-default get_field" style="width: 64px">Edit</button><button type="button" id="close_street2" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="street2_edit1"  style="display: none">
                                     <td><label for="contactName">Edit Street 2 (Example: Business Complex, Business District, Area etc.)</label>
                                        <td><input type="text"  class="street2_edit street_validate"  style="width: 404px;" name="street2_edit"   <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street2']) && ($edit_user_details1['0']['Street2'] != '' || $edit_user_details1['0']['Street2'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street2'])) { echo $edit_user_details1['0']['Street2']; }?>" required/>
                                        <button type="button" id="save_street2" class="btn btn-default savedetails save_street2">Save</button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><label for="email">Street 3 (Example: Ladmark, Location etc.)</label></td>
                                    <td><input type="email" name="street3" id="street3" style="width: 404px;" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street3'])) { echo $edit_user_details['0']['Street3']; }?>" class="required requiredField email"  disabled/></td>
                                    <td><button type="button" id="street3_edit" style="width: 64px;" class="btn btn-default get_field">Edit</button><button type="button" id="close_street3" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="street3_edit"  style="display: none">
                                    <td><label for="email">Edit Street 3 (Example: Ladmark, Location etc.)</label></td>
                                    <td><input type="text"  class="street3_edit street_validate" style="width: 404px;" name="street3_edit"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street3']) && ($edit_user_details1['0']['Street3'] != '' || $edit_user_details1['0']['Street3'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street3'])) { echo $edit_user_details1['0']['Street3']; }?>" required/>
                                        <button type="button" id="save_street3" class="btn btn-default savedetails save_street3">Save</button>
                                        </td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Street 4</label></td>
                                    <td><input type="text"  id="street4" name="street4" style="width: 404px;" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street4'])) { echo $edit_user_details['0']['Street4']; }?>"  disabled/></td>
                                    <td><button type="button" id="street4_edit" style="width: 64px;" class="btn btn-default get_field">Edit</button><button type="button" id="close_street4" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="street4_edit1"  style="display: none">
                                    <td><label for="contactName">Edit Street 4</label></td>
                                    <td><input type="text"  class="street4_edit street_validate" style="width: 404px;" name="street4_edit"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street4']) && ($edit_user_details1['0']['Street4'] != '' || $edit_user_details1['0']['Street4'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street4'])) { echo $edit_user_details1['0']['Street4']; }?>" required/>
                                        <button type="button" id="save_street4" class="btn btn-default savedetails save_street4">Save</button>
                                  </td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Street 5</label></td>
                                    <td><input type="text"  id="street5" name="street5" style="width: 404px;" value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Street5'])) { echo $edit_user_details['0']['Street5']; }?>"  disabled/></td>
                                    <td><button type="button" id="street5_edit" style="width: 64px;" class="btn btn-default get_field">Edit</button><button type="button" id="close_street5" class="btn btn-default close_field" style="display: none">Close</button></td>
                                </tr>
                                <tr class="street5_edit1" style="display: none">
                                 <td><label for="contactName">Edit Street 5</label></td>
                                    <td><input type="text"  class="street5_edit street_validate" style="width: 404px;" name="street5_edit"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street5']) && ($edit_user_details1['0']['Street5'] != '' || $edit_user_details1['0']['Street5'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Street5'])) { echo $edit_user_details1['0']['Street5']; }?>" required/>
                                        <button type="button" id="save_street5" class="btn btn-default savedetails save_street5">Save</button>
                                </td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Country<span class="required">*</span></label></td>
                                   <!--  <td><input type="text"  id="country_key" name="country_key"  value=""  disabled/></td>   -->
                                    
                                    <td>
                                       <select id="countrykey_prev">
                                           <?php
                                          foreach ($country_details as $row) { ?>
                                            <option id='<?php echo $row['country_name']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0'][' state_name'] == $row['country_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['country_code']; ?>" class='cntrt_name'><?php echo $row['country_name']; ?></option>
                                        <?php }
                                        ?>    
                                       </select> 
                                    </td>  
                                     <td><button type="button" id="countrykey_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_countrykey" class="btn btn-default close_field" style="display: none">Close</button></td>                              
                                </tr>
                                 <tr class="countrykey_edit" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Country_Key']) && ($edit_user_details1['0']['Country_Key'] != '' || $edit_user_details1['0']['Country_Key'] != 0)) { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                                    <td><label for="contactName">Edit Country</label></td>
                                    <!-- <td><input type="text"  id="country_key_edit" name="country_key"  value=""  disabled/></td>  -->
                                    <td class="country_value_edit">
                                       <select id="countrykey_now">
                                           <?php
                                          foreach ($country_details as $row) { ?>
                                            <option id='<?php echo $row['country_name']; ?>' <?php if(isset($edit_user_details1['0']['Country_Key'])){ if($edit_user_details1['0']['Country_Key'] == $row['country_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['country_code']; ?>" class='cntrt_name'><?php echo $row['country_name']; ?></option>
                                        <?php }
                                        ?>    
                                       </select> 
                                      <button type="button" id="save_countrykey" class="btn btn-default savedetails save_countrykey">Save</button>
                                    </td>                                
                                </tr>            
                                 <tr>
                                    <td><label for="contactName">Language Key<span class="required">*</span></label></td>
                                   <!--  <td><input type="text"  id="country_key" name="country_key"  value=""  disabled/></td>   -->
                                    
                                    <td>
                                       <select id="lanquage_prev">
                                           <?php
                                          foreach ($country_details as $row) { ?>
                                            <option id='<?php echo $row['country_name']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0'][' state_name'] == $row['country_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['country_code']; ?>" class='cntrt_name'><?php echo $row['country_name']; ?></option>
                                        <?php 
                                      }
                                        ?>    
                                       </select> 
                                    </td>  
                                     <td><button type="button" id="lang_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_lang" class="btn btn-default close_field" style="display: none">Close</button></td>                              
                                </tr>
                                 <tr class="lang_edit" style="display: none">
                                    <td><label for="contactName">Language Key Edit <span class="required">*</span></label></td>
                                    <!-- <td><input type="text"  id="country_key_edit" name="country_key"  value=""  disabled/></td>  -->
                                    <td class="lang_value_edit">
                                       <select id="lanquage_now">
                                           <?php
                                          foreach ($country_details as $row) { ?>
                                            <option id='<?php echo $row['country_name']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0'][' state_name'] == $row['country_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['country_code']; ?>" class='cntrt_name'><?php echo $row['country_name']; ?></option>
                                        <?php }
                                        ?>    
                                       </select> 
                                    </td>                                
                                </tr>
                                <tr>
                                    <td><label for="contactName">Transportation zone<span class="required">*</span></label></td>
                                    <td><input type="text"  id="transportasionzone" name="transportasionzone"  value=""  disabled/></td>
                                    <td><button type="button" id="transportasionzone_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_transportasionzone" class="btn btn-default close_field" style="display: none">Close</button></td>
                                   <!--  <td><input type="text"  class="transportasionzone_edit street_validate" name="street5_edit"  style="display: none" value="" required/></td> -->
                                </tr>
                                <tr class="transportasionzone_edit" style="display: none">
                                    <td><label for="contactName">Edit Transportation zone<span class="required">*</span></label></td>
                                    <td><input type="text"  id="transportasionzone" name="transportasionzone"  value=""  disabled/></td>
                                    <td><input type="button"  class="transportasionzone_edit street_validate" name="street5_edit" value="Save" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Region<span class="required">*</span></label></td>
                                   <!--  <td><input type="text"  id="country_key" name="country_key"  value=""  disabled/></td>   -->
                                    
                                    <td>
                                       <select id="region_prev">
                                           <?php
                                          foreach ($region_list as $row) { ?>
                                            <option id='<?php echo $row['region_code']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0'][' region_code'] == $row['region_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['region_code']; ?>" class='cntrt_name'><?php echo $row['description']; ?></option>
                                        <?php }
                                        ?>    
                                       </select> 
                                    </td>  
                                     <td><button type="button" id="region_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_region" class="btn btn-default close_field" style="display: none">Close</button></td>                              
                                </tr>
                                 <tr class="region_edit" style="display: none">
                                    <td><label for="contactName">Region Edit <span class="required">*</span></label></td>
                                    <!-- <td><input type="text"  id="country_key_edit" name="country_key"  value=""  disabled/></td>  -->
                                    <td class="region_value_edit">
                                       <select id="region_now">
                                           <?php
                                          foreach ($region_list as $row) { ?>
                                            <option id='<?php echo $row['region_code']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0'][' region_code'] == $row['region_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['region_code']; ?>" class='cntrt_name'><?php echo $row['description']; ?></option>
                                        <?php }
                                        ?>    
                                       </select> 
                                    </td>                                
                                </tr>
                                </table> 
                                 
                                <!-- <input type="button" value="Next" class="shownext" id="next3"> -->
                </div>

            
        </div>
 
        <div id="tab3" class="tab">
            <!-- <p>Tab #3 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p> -->
          
                <!-- hotel search -->
                <input type="button" class="btn btn-info" value="Next" id="tab_3" style="float:right;margin-top: 10px;">                 
            <input type="button" class="btn btn-info" value="Back" id="back_tab_2"> 
            
                <div  id="next3">

                         <table  class="table">
                                    <tr>
                                        <td><label for="contactName">State Name<span class="required">*</span></label></td>
                                        <td>
                                           <select name="state_name" class="state_name_chk">
                                              <option>---Select---</option>
                                              <?php
                                                foreach ($state_details as $row) { ?>
                                                  <option id='<?php echo $row['state']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0'][' state_name'] == $row['state_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['state_number']; ?>" class='cntrt_name'><?php echo $row['state_name']; ?></option>
                                              <?php }
                                              ?>    
                                           </select> 
                                        </td>
                                        <td style="display: none"><input type="text"  id="state_name_code" name="state_name_code"  value=""  disabled/></td>
                                         <td><button type="button" id="statename_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_statename" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="statename_edit" style="display: none">
                                        <td><label for="contactName">Edit State<span class="required">*</span></label></td>
                                        <td>
                                        <select name="state_name" class="state_name_edit_chk">
                                          <option>---Select---</option>
                                              <?php
                                                foreach ($state_details as $row) { ?>
                                                  <option id='<?php echo $row['state']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0'][' state_name'] == $row['state_name']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['state_number']; ?>" class='cntrt_name'><?php echo $row['state_name']; ?></option>
                                              <?php }
                                              ?>  
                                          </select>  
                                        </td>
                                        <td style="display: none"><input type="text"  id="state_name_code_edit" name="state_name_code"  value=""  disabled/></td>
                                         <td><input type="button" id="state_edit_save"  value="Save"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email">House Number<span class="required">*</span></label></td>
                                        <td><input type="text" name="house_number" id="house_number" value="" class="required requiredField email" disabled/></td>
                                        <td><button type="button" id="housenumber_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_housenumber" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        
                                    </tr>
                                    <tr class="housenumber_edit1">
                                        <td><label for="email">Edit House Number</label></td>
                                        <td><input type="text"  class="housenumber_edit house_validation" name="housenumber_edit" style="display: none" value="" required/></td>
                                        <td><input type="button" id="house_edit_save"  value="Save"  disabled/></td>

                                    </tr>
                                    <tr>
                                        <td><label for="contactName">City<span class="required">*</span></label></td>
                                        <td><input type="text"  id="City" name="City"  value="" disabled/></td>
                                        <td><button type="button" id="City_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_City" class="btn btn-default close_field" style="display: none">Close</button></td>                                        
                                    </tr>
                                    <tr class="City_edit1" style="display: none">
                                     <td><label for="contactName">Edit City<span class="required">*</span></label></td>
                                     <td><input type="text"  class="City_edit city_validation" name="City_edit" style="display: none" value="" required/></td>
                                      <td><input type="button" id="city_edit_save"  value="Save"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">District<span class="required">*</span></label></td>
                                        <td><input type="text"  id="district" name="district"  value="" disabled/></td>
                                        <td><button type="button" id="district_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_district" class="btn btn-default close_field" style="display: none">Close</button></td>
                                        <td><input type="text"  class="district_edit district_validation" name="district_edit" style="display: none" value="" required/></td>
                                    </tr>
                                    <tr class="district_edit1">
                                      <td><label for="contactName">Edit District<span class="required">*</span></label></td>
                                      <td><input type="text"  class="district_edit district_validation" name="district_edit" style="display: none" value="" required/></td>
                                       <td><input type="button" id="city_edit_save"  value="Save"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Postal Code<span class="required">*</span></label></td>
                                        <td><input type="text"  id="postal_code" name="postal_code"  value="" disabled/></td>
                                        <td><button type="button" id="postalcode_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_postalcode" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="postalcode_edit1">
                                     <td><label for="contactName">Edit Postal Code<span class="required">*</span></label></td>
                                        <td><input type="text"  class="postalcode_edit postal_code_validate" name="postalcode_edit" style="display: none" value="" required/></td>
                                        <td><input type="button" id="postal_edit_save"  value="Save"  disabled/></td>
                                    </tr>
                                    <tr>                                        
                                        <td><label for="contactName">Telephone 1<span class="required">*</span></label></td>
                                        <td><input type="text"  id="telephone1" name="telephone1"  value="" disabled/></td>
                                        <td><button type="button" id="telephone1_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_telephone1" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr>
                                     <td><label for="contactName">Edit Telephone 1<span class="required">*</span></label></td>
                                        <td><input type="text"  class="telephone1_edit tele_number" name="telephone1_edit" style="display: none" value="" required/></td>
                                        <td><input type="button" id="tele1_edit_save"  value="Save"  disabled/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">Telephone 2<span class="required">*</span></label></td>
                                        <td><input type="text"  id="telephone2" name="telephone2"  value="" disabled/></td>
                                        <td><button type="button" id="telephone2_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_telephone2" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="telephone2_edit1">
                                    <td><label for="contactName">Edit Telephone 2<span class="required">*</span></label></td>
                                        <td><input type="text"  class="telephone2_edit tele_number" name="telephone2_edit" style="display: none" value="" required/></td>
                                        <td><input type="button" id="tele2_edit_save"  value="Save"  disabled/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Fax Number<span class="required">*</span></label></td>
                                        <td><input type="text"  id="fax_number" name="fax_number"  value="" disabled/></td>
                                        <td><button type="button" id="faxnumber_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_faxnumber" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="faxnumber_edit1">
                                    <td><label for="contactName">Edit Fax Number<span class="required">*</span></label></td>
                                        <td><input type="text"  class="faxnumber_edit fax_validate" name="faxnumber_edit" style="display: none" value="" required/></td>
                                        <td><input type="button" id="fax_edit_save"  value="Save"  disabled/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">E-Mail Address<span class="required">*</span></label></td>
                                        <td><input type="text"  id="email_id" name="email_id"  value="" disabled/></td>
                                        <td><button type="button" id="emailid_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_emailid" class="btn btn-default close_field" style="display: none">Close</button></td>
                                    </tr>
                                    <tr class="emailid_edit1">
                                     <td><label for="contactName">Edit E-Mail Address<span class="required">*</span></label></td>
                                        <td><input type="text"  class="emailid_edit email_validate" name="emailid_edit" style="display: none" value="" required/></td>
                                        <td><input type="button" id="email_edit_save"  value="Save"  disabled/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">Permanent account number<span class="required">*</span></label></td>
                                        <td><input type="text"  id="pan_number" name="pan_number"  value="" disabled/></td>
                                        <td><button type="button" id="pannumber_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_pannumber" class="btn btn-default close_field" style="display: none">Close</button></td>
                                      </tr>
                                      <tr>
                                      <td><label for="contactName">Edit Permanent account number<span class="required">*</span></label></td>
                                        <td><input type="text"  class="pannumber_edit pan_validate" name="pannumber_edit" style="display: none" value="" required/></td>
                                        <td><input type="button" id="email_edit_save"  value="Save"  disabled/></td>
                                    </tr>
                                </table>
                         
                </div>
            
        </div>
 <div id="tab5" class="tab">
            <div class="row">
             <div  id="next3" class="col-md-10">
<input type="checkbox" id="dec_final" style="font-family: "Open Sans",sans-serif;font-size: 14px;">&nbsp;&nbsp;&nbsp;<lable style="font-family: "Open Sans",sans-serif;font-size: 14px;">I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief and I undertake to inform you of any changes therein, immediately. In case any of the above information is found to be false or untrue or misleading or misrepresenting, I am aware that I may be held liable for it.</lable>
                </div>
                 <div class="row" style="margin-top: 80px;">
                 <div  id="next3" class="col-md-12">
                            <input type="button" class="btn btn-info" value="Back" id="back_tab_5">
                            <div id="show_spin" style="display: none;float: right;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></div> 
<input type="button" class="btn btn-info send_to_aprv" style="float: right;" value="Final Submission" id="send_to_aprv">
</div>
</div>
            </div>
               

        </div>
 
        <div id="tab4" class="tab">
            <!-- <p>Tab #4 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p> -->
             <input type="button" value="Next" class="btn btn-info" id="vendor_data_update" style="float: right;margin-bottom: 10px;">
             <input type="button" class="btn btn-info" value="Back" id="back_tab_3"> 
                           <div   id="next4">
                       <table  class="table" style="margin-top: 10px">
                             <tr>
                                 <td colspan="3" style="font-family: initial;">
                                   <strong style="font-family: "Open Sans",sans-serif;">Note: This is your information as per our SAP ERP. This is view only information. Incase there are any changes please select EDIT and provide the necessary document as a proof</strong>
                                 </td>
                               </tr>
                               <tr>
                                <td><label for="contactName">Incoterms (Part 2)<span class="required">*</span></label></td>
                                <td><input type="text"  id="incoterms2" name="incoterms2"  value="" disabled/></td>                            
                            </tr>
                            <tr>
                                <td><label for="contactName">Order Combination<span class="required">*</span></label></td>
                                <td><input type="text"  id="order_combinaton" name="order_combinaton"  value="" disabled/></td>                            
                            </tr>
                             <tr>
                                <td><label for="contactName">Shipping Conditions<span class="required">*</span></label></td>
                                <td><input type="text"  id="shipping_cond" name="shipping_cond"  value="" disabled/></td>                            
                            </tr>
                             <tr>
                                <td><label for="contactName">Part.dlv./item<span class="required">*</span></label></td>
                                <td><input type="text"  id="part_div_item" name="part_div_item"  value="" disabled/></td>                            
                            </tr>
                            <tr>
                                <td><label for="contactName">Delivering Plant<span class="required">*</span></label></td>
                                <td><input type="text"  id="del_plant" name="del_plant"  value="" disabled/></td>                            
                            </tr>
                             <tr>
                                <td><label for="contactName">Statistics group<span class="required">*</span></label></td>
                                <td><input type="text"  id="statistic_grp" name="statistic_grp"  value="" disabled/></td>                            
                            </tr>
                             <tr>
                                <td><label for="contactName">Price List<span class="required">*</span></label></td>
                                <td>
                                  <select name="price_list" id="price_list" disabled>
                                   <option>---Select---</option>
                                      <?php
                                        foreach ($price_grp as $row) { ?>
                                          <option id='<?php echo $row['code']; ?>' <?php if(isset($edit_user_details)){ if($edit_user_details['0']['code'] == $row['code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['code']; ?>" class='cntrt_name'><?php echo $row['description']; ?></option>
                                      <?php }
                                      ?>  
                                  </select>
                                </td>                            
                            </tr>
                            <tr>
                                <td><label for="contactName">Cust.pric.procedure<span class="required">*</span></label></td>
                                <td><input type="text"  id="cust_price_procd" name="cust_price_procd"  value="" disabled/></td>                            
                            </tr>
                            <tr>
                                <td><label for="contactName">Max.Part.Deliveries<span class="required">*</span></label></td>
                                <td><input type="text"  id="part_delivery" name="part_delivery"  value="" disabled/></td>                            
                            </tr>
                            <tr> 
                                <td><label for="contactName">Cust.Acct.Assg.Group<span class="required">*</span></label></td>
                                <td><input type="text"  id="cust_acc_grp" name="cust_acc_grp"  value="" disabled/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Excise Registration No</label></td>
                                <td><input type="text"  id="excise_reg_no" style="width: 408px;" name="excise_reg_no"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Registration'])) { echo $edit_user_details['0']['Excise_Registration']; }?>" disabled/></td>   
                                 <td><button type="button" id="excisereg_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisereg" class="btn btn-default close_field" style="display: none">Close</button></td>
                            </tr>
                            <tr class="excisereg_edit1"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Registration']) && $edit_user_details1['0']['Excise_Registration'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                            <td><label for="contactName">Edit Excise Registration No</label></td>
                                        <td><input type="text" style="width: 408px;" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Registration']) && $edit_user_details1['0']['Excise_Registration'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="excisereg_edit ex_validate" name="excisereg_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Registration'])) { echo $edit_user_details1['0']['Excise_Registration']; }?>" required/>
                                        <button type="button" id="save_excisereg" class="btn btn-default savedetails save_excisereg">Save</button>
                                    </td>                         
                            </tr>
                            <tr> 
                                <td><label for="contactName">Excise Range</td>
                                <td><input type="text" style="width: 408px;" id="excise_range" name="excise_range"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Range'])) { echo $edit_user_details['0']['Excise_Range']; }?>" disabled/></td>
                                <td><button type="button" id="exciserange_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_exciserange" class="btn btn-default close_field" style="display: none">Close</button></td>
                            </tr>
                            <tr class="exciserange_edit1"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Range']) && $edit_user_details1['0']['Excise_Range'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                            <td><label for="contactName">Edit Excise Range</td>
                                        <td><input type="text" style="width: 408px;" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Range']) && $edit_user_details1['0']['Excise_Range'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="exciserange_edit" name="exciserange_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Range'])) { echo $edit_user_details1['0']['Excise_Range']; }?>" required/>
                                         <button type="button" id="save_exciserange" class="btn btn-default savedetails save_exciserange">Save</button>
                            </td>      
                            </tr>
                             <tr>
                                <td><label for="contactName">Excise Division</label></td>
                                <td><input type="text" style="width: 408px;" id="excise_div" name="excise_div"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Division'])) { echo $edit_user_details['0']['Excise_Division']; }?>" disabled/></td>   
                                <td><button type="button" id="excisediv_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisediv" class="btn btn-default close_field" style="display: none">Close</button></td>
                              </tr>
                              <tr class="excisediv_edit1"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Division']) && $edit_user_details1['0']['Excise_Division'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                              <td><label for="contactName">Edit Excise Division</label></td>
                                        <td><input type="text" style="width: 408px;" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Division']) && $edit_user_details1['0']['Excise_Division'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="excisediv_edit" name="excisediv_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Division'])) { echo $edit_user_details1['0']['Excise_Division']; }?>" required/>
                                         <button type="button" id="save_excisediv" class="btn btn-default savedetails save_excisediv">Save</button>
                              </td>                             
                            </tr>
                            <tr> 
                                <td><label for="contactName">Excise Commissionerate</label></td>
                                <td><input type="text" style="width: 408px;" id="excise_commisionarate" name="excise_commisionarate"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Excise_Commissionerate'])) { echo $edit_user_details['0']['Excise_Commissionerate']; }?>" disabled/></td>
                                <td><button type="button" id="excisecom_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisecom" class="btn btn-default close_field" style="display: none">Close</button></td>
                            </tr>
                            <tr class="excisecom_edit1"   <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Commissionerate']) && $edit_user_details1['0']['Excise_Commissionerate'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                            <td><label for="contactName">Edit Excise Commissionerate</label></td>
                                        <td><input type="text" style="width: 408px;" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Commissionerate']) && $edit_user_details1['0']['Excise_Commissionerate'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?> class="excisecom_edit" name="excisecom_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Excise_Commissionerate'])) { echo $edit_user_details1['0']['Excise_Commissionerate']; }?>" required/>
                                        <button type="button" id="save_excisecom" class="btn btn-default savedetails save_excisecom">Save</button>
                            </td>   
                            </tr>
                             <tr>
                                <td><label for="contactName">CST number</label></td>
                                <td><input type="text" style="width: 408px;" id="cst_number" name="cst_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['cst'])) { echo $edit_user_details['0']['cst']; }?>" disabled/></td>
                                <td><button type="button" id="excisecst_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_excisecst" class="btn btn-default close_field" style="display: none">Close</button></td>
                            </tr>
                            <tr class="excisecst_edit1"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['cst']) && $edit_user_details1['0']['cst'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                             <td><label for="contactName">Edit CST number</label></td>
                                        <td><input type="text" style="width: 408px;" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['cst']) && $edit_user_details1['0']['cst'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="excisecst_edit ex_validate1" name="excisecst_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['cst'])) { echo $edit_user_details1['0']['cst']; }?>" required/>
                                        <button type="button" id="save_excisecst" class="btn btn-default savedetails save_excisecst">Save</button>
                            </td>                               
                            </tr>
                            <tr> 
                                <td><label for="contactName">LST number</label></td>
                                <td><input type="text" style="width: 408px;" id="lst_number" name="lst_number"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['lst'])) { echo $edit_user_details['0']['lst']; }?>" disabled/></td>
                                 <td><button type="button" id="exciselst_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_exciselst" class="btn btn-default close_field" style="display: none">Close</button></td>
                            </tr>
                            <tr class="exciselst_edit1"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['lst']) && $edit_user_details1['0']['lst'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                              <td><label for="contactName">Edit LST number</label></td>
                                        <td><input type="text" style="width: 408px;" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['lst']) && $edit_user_details1['0']['lst'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="exciselst_edit" name="exciselst_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['lst'])) { echo $edit_user_details1['0']['lst']; }?>" required/>
                                        <button type="button" id="save_exciselst" class="btn btn-default savedetails save_exciselst">Save</button>
                            </td>       
                            </tr>
                             <tr> 
                                <td><label for="contactName">Service Tax Reg No</label></td>
                                <td><input type="text" style="width: 408px;" id="service_tax_num" name="service_tax_num"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Service_Tax_Reg_No'])) { echo $edit_user_details['0']['lst']; }?>" disabled/></td>
                                <td><button type="button" id="servtax_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_servtax" class="btn btn-default close_field" style="display: none">Close</button></td>
                            </tr>
                            <tr class="servtax_edit1"  <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Service_Tax_Reg_No']) && $edit_user_details1['0']['Service_Tax_Reg_No'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                              <td><label for="contactName">Edit Service Tax Reg No</label></td>
                                        <td><input type="text" style="width: 408px;" <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Service_Tax_Reg_No']) && $edit_user_details1['0']['Service_Tax_Reg_No'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>  class="servtax_edit" name="servtax_edit"  value="<?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['Service_Tax_Reg_No'])) { echo $edit_user_details1['0']['Service_Tax_Reg_No']; }?>" required/>
                                         <button type="button" id="save_servtax" class="btn btn-default savedetails save_servtax">Save</button>
                            </td>     
                            </tr>
                             <tr>
                                <td><label for="contactName">Exc.Tax Ind. Customer</label></td>
                                <td><input type="text" style="width: 408px;" id="exc_tax_vendor" name="exc_tax_vendor"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['Exc_Tax_Ind_Vendor'])) { echo $edit_user_details['0']['Exc_Tax_Ind_Vendor']; }?>" disabled/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">SSI status</label></td>
                                <td><input type="text" style="width: 408px;" id="ssi_status" name="ssi_status"  value="<?php if(isset($edit_user_details) && count($edit_user_details)>0 && isset($edit_user_details['0']['SSI_status'])) { echo $edit_user_details['0']['SSI_status']; }?>" disabled/></td>                            
                            </tr>
                            <tr> 
                                <td><label for="contactName">CENVAT Scheme Participant</label></td>
                                <td><input class="CENVAT_scheme" name="CENVAT_scheme" type="radio" value="Yes" <?php if(isset($edit_user_details['0']['CENVAT'])){ if($edit_user_details['0']['CENVAT'] == 'Yes') { echo 'checked="checked"'; } } ?> disabled>Yes&nbsp;&nbsp;<input type="radio"  name="CENVAT_scheme" class="CENVAT_scheme" value="No" <?php if(isset($edit_user_details['0']['CENVAT'])){ if($edit_user_details['0']['CENVAT'] == 'No') { echo 'checked="checked"'; } } ?> disabled>No
                                <td><button type="button" id="cenv_edit" class="btn btn-default get_field">Edit</button><button type="button" id="close_cenv" class="btn btn-default close_field" style="display: none">Close</button></td>
                            </tr>
                            <tr class="cenv_edit1"   <?php if(isset($edit_user_details1) && count($edit_user_details1)>0 && isset($edit_user_details1['0']['CENVAT']) && $edit_user_details1['0']['CENVAT'] != '') { ?>
                                        style="display: ''"<?php } else { ?>style="display: none"<?php } ?>>
                            <td><label for="contactName">Edit CENVAT Scheme Participant</label></td>
                                        <td><input class="CENVAT_scheme" name="CENVAT_scheme" type="radio" value="Yes" <?php if(isset($edit_user_details1['0']['CENVAT'])){ if($edit_user_details1['0']['CENVAT'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes&nbsp;&nbsp;<input type="radio"  name="CENVAT_scheme" class="CENVAT_scheme" value="No" <?php if(isset($edit_user_details1['0']['CENVAT'])){ if($edit_user_details1['0']['CENVAT'] == 'No') { echo 'checked="checked"'; } } ?>>No
                                         <button type="button" id="save_cenv" class="btn btn-default savedetails save_cenv">Save</button>
                            </td>     
                            </tr>
                           <!--  <tr> 
                                <td><label for="contactName">CENVAT Scheme Participant</label></td>
                                <td><input class="CENVAT_scheme" name="CENVAT_scheme" type="radio" value="Yes" <?php if(isset($edit_user_details1['0']['CENVAT'])){ if($edit_user_details1['0']['CENVAT'] == 'Yes') { echo 'checked="checked"'; } } ?>>Yes&nbsp;&nbsp;<input type="radio"  name="CENVAT_scheme" class="CENVAT_scheme" value="No" <?php if(isset($edit_user_details1['0']['CENVAT'])){ if($edit_user_details1['0']['CENVAT'] == 'No') { echo 'checked="checked"'; } } ?>>No</td>
                            </tr> -->
                        </table>
                       
                </div>
            
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
//$("#info_box").modal('show');
$(".del_attach").click(function(){
$("#del_box").modal('show');
var data = {
'id' : $(this).attr('title'),
'vendor_id' : $("#vendor_id").val()
};
$("#del_box_ok").click(function(){
var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'html',
            'data' : data,
              url : base_url+'/vendor/index.php/Vendordata/del_file',
              success : function(data)
              {
                //alert(data);
location.reload();
              }
            });
});


});
$("#send_to_aprv").click(function(){
if($("#dec_final:checked").val() === undefined)
{
 $("#err_show").text("Please select checkbox for declaration.");
$("#modal-container-204273").modal('show');
}
else
{
$("#confirm_box").modal('show');
$("#apprv_ok").click(function(){
var data = {
'vendor_id' : $("#vendor_id").val()
};
$("#show_spin").css("display",'block');
$("#confirm_box").modal('hide');
var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'html',
            'data' : data,
              url : base_url+'/vendor/index.php/Vendordata/send_approval',
              success : function(data)
              {
               $("#err_show").text("We have received your information. Thank you");
$("#modal-container-204273").modal('show');$("#show_spin").css("display",'none');
              }
            });
});
}
});
$(".gst_validate").keyup(function(){
    var id = $(this).attr('name');
    var data = $.trim($(this).val());
    var pan_data = $(".pannumber_edit").val();
    var pan_data1 = $("#pan_number").val();
    var pan_match = data.substring(2, 12);
    //alert(pan_data);
    var code = '';
    var variable2 = '';
    var str = /^([0-9]){2}([A-Z]){5}([0-9]){4}([A-Z]){1}([a-zA-Z0-9]){3}?$/; 
    var code = $(".state_name_gst").find(':selected').val();
    variable2 = data.substring(0, 2);
    //alert(code);alert(variable2);
        if(data.length>0)
        {
            $("#error_lable").hide();
            if (data.length<15)
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("Please Enter correct GST number").show();
            }
            else if(code != variable2)
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("This GST number does not belong to this state.").show(); 
            }
            else if(((pan_data!='' || pan_data === undefined) && pan_data != pan_match) || pan_data1 != pan_match)
            {
               // alert(pan_data);alert(pan_match);
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("This GST number does not validate with pan you have entered.").show(); 
            }
            else if (!str.test(data))
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("Enter Valid GST card number").show();               
            }
            else if (data.length>15)
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("Please Enter correct GST number").show();                
            }
            else
            {
                $(this).css('border-color','');   
                $("#err").hide();
                $(this).attr('title','');
                $("#error_value").text(""); 
            }
               
        }
});
                $("body").on('change','.file_change',function(event){
                            var text_value = $(this).attr('id');
                            var next_input = $(this).val();
                          $("#"+text_value+'1').text(next_input);
                          $("#"+text_value+'1').css('display','block');
                          $("#"+text_value+'11').css('display','block');
                          $(this).css('display','none');
                          $("#"+text_value+'0').css('display','none');
                          var tmppath = URL.createObjectURL(event.target.files[0]);
                          $(".link"+text_value).attr('href',tmppath);
                          if(text_value == 'gst_declr')
                          {
                            $("#show_capable1").css('display','none');                            
                          }
                        });

                          $("body").on('click','.cancel_upload',function(){
$("#del_box").modal('show');
var text_value = $(this).attr('id');
                            var split_data = text_value.split('-');
                            var text_value1 = $(this).attr('name');
                            var next_input = $(this).val();
$("body").on('click','#del_box_ok',function(){
$("#del_box").modal('hide');
                            $("#"+split_data[0]).val('');
                                  $("#"+split_data[0]+'1').text('');
                                  $("#"+split_data[0]+'1').css('display','none');
                                  $("#"+split_data[0]+'11').css('display','none');
                                  $("#"+split_data[0]+'1').css('display','block');
                                  $("#"+split_data[0]).css('display','block');
                                  $("#"+split_data[0]+'0').css('display','');
                                  if(text_value == 'gst_declr-1')
                                  {
                                    $("#show_capable1").css('display','block');$("#del_box").modal('hide');
                                  }
                        });
});
                            

      $("body").on('mouseover','.class_tip',function(){
        $('[data-toggle="tooltip"]').tooltip(); 
        // alert("sdfds");
      });
     //$("#next4").scrollTop($("#next4").scrollTop() + 100);
     $(".gst_capable").click(function(){
        if ($("input[name='gst_capable']:checked").val() == 'No') 
        {
$("#atc1").css('display','');
          $("#show_capable").css('display','block');
          $("#show_capable1").css('display','block');
          $("#gst1").css('display','none');
          $("#gst2").css('display','none');
          $("#gst3").css('display','none');
          $("#gst4").css('display','none');
          $("#gst5").css('display','none');
          $("#gst6").css('display','none');
          $("#gst7").css('display','none');
          //$("#gst8").css('display','none');
          $("#gst_declr1").css('display','');
$("#gst_declr").css('display','');
$("#gst_declr0").css('display','');
          $("#gst_declr-1").css('display','');
          $("#gst9").css('display','none');
          $("#gst10").css('display','none');
          $("#gst41").css('display','none');
          $("#have_prov_num").css('display','');
        }
        else if($("input[name='gst_capable']:checked").val() == 'Yes')
        {
$("#gst_declr").css('display','none');
          $("#atc1").css('display','none');
          $("#show_capable").css('display','none');
          $("#gst_declr1").css('display','none');
          $("#gst_declr-1").css('display','none');
         // $("#show_capable1").css('display','none');
$("#gst_declr0").css('display','none');
          $("#gst1").css('display','');
          $("#gst2").css('display','');
          $("#gst3").css('display','');
          $("#gst4").css('display','');
          $("#gst5").css('display','');
          $("#gst6").css('display','');
          $("#gst7").css('display','');
         //$("#gst8").css('display','');
          $("#gst9").css('display','');
          $("#gst10").css('display','');
          $("#gst41").css('display','');
          $("#have_prov_num").css('display','none');
        }
     });
  $(".provisional_num").click(function(){
 if($("input[name='provisional_num']:checked").val() == 'Yes')
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
         // $("#gst8").css('display','');
          $("#gst9").css('display','');
          $("#gst10").css('display','');
          $("#gst41").css('display','');
$("#gst_declr0").css('display','none');
         $("#have_prov_num").css('display','');
         $("#when_prov_num").css('display','none');
$("#gst_declr").css('display','none');
          
        }
        else if($("input[name='provisional_num']:checked").val() == 'No')
        {
          $("#show_capable").css('display','block');
          $("#show_capable1").css('display','block');
$("#gst_declr0").css('display','');
          $("#gst1").css('display','none');
          $("#gst2").css('display','none');
          $("#gst3").css('display','none');
          $("#gst4").css('display','none');
          $("#gst5").css('display','none');
          $("#gst6").css('display','none');
          $("#gst7").css('display','none');
$("#gst_declr").css('display','');
          //$("#gst8").css('display','none');
          $("#gst9").css('display','none');
          $("#gst10").css('display','none');
          $("#gst41").css('display','none');
          $("#have_prov_num").css('display','');
         $("#when_prov_num").css('display','');
          
        }
     });

$(".service_capable").click(function(){
 if($(".service_capable:checked").val() == 'Yes')
        {
          $("#gst4").css('display','');
        }
        else if($(".service_capable:checked").val() == 'No')
        {
          $("#gst4").css('display','none');
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
        var e = document.getElementById('gst_declr');
        if ($(e).length>0) 
        {
          var proof_2 = $(e)[0].files[0]; 
          var ext_name = $("#gst_declr").val();
          var ext1 = ext_name.split('.'); 
        }
        else
        {
          var ext_name = $("#dec_prf_doc").val();
          var ext2 = ext_name.split('.');
        }

        if($("#gst_proof").length>0)
        {
          var ext_name = $("#gst_proof").val();
          var ext1 = ext_name.split('.');
          //alert(ext);
        }   
        else 
        {
          var ext_name = $("#gst_prf_data").val();
          var ext2 = ext_name.split('.');
          //alert(ext);
        }   
          // else
        // {
        //   $("#GST_number").css('border-color','red');   
        //   error = "Please upload supporting document for GST";
        // }       
          
          
         //alert(ext1);
          var startDate = $(".provisional_date").val().replace('-','/');
var endDate = '31-Mar-2017';
        
if ($("input[name='gst_capable']:checked").val() != "Yes" && $("input[name='gst_capable']:checked").val() != 'No') 
          {
             $("#gst_name_validate").css('border-color','red');   
            error = "Please select GST applicability.";
          }           
else if (($("input[name='gst_capable']:checked").val() == "Yes" && $("input[name='provisional_num']:checked").val() != 'No') && $("#gst_name_validate").val() == '') 
          {
             $("#gst_name_validate").css('border-color','red');   
            error = "Please enter legal name based on GST";
          }  
          else if(typeof ext1 != 'undefined')
          {  //alert(ext1[1]);
            if(ext1[1] != 'pdf' && ext1[1] != 'jpg' && ext1[1] != 'png' && ext1[1] != 'jpeg' && ext1[1] != 'docx')
            {
              $("#GST_number").css('border-color','red');            
              error = "Only jpg,jpeg,pdf,png,docx files are allowed.";        
            }
             
          } 
          //  else if(!ext2[1] === undefined && (ext2[1] != 'pdf' && ext2[1] != 'jpg' && ext2[1] != 'jpeg' && ext2[1] != 'png' && ext2[1] != 'docx'))
          // {  
          //    $("#GST_number").css('border-color','red');            
          //    error = "Only jpg,jpeg,pdf,png,docx files are allowed.";        
          // }        
else if($("input[name='gst_capable']:checked").val() == "No" && $("input[name='provisional_num']:checked").val() === undefined)
          {
             $("#GST_number").css('border-color','red');   
             error = "Have you applied for applied GST.";
          }          
else if(($("input[name='gst_capable']:checked").val() == "No" && $("input[name='provisional_num']:checked").val() == 'No') && $(".provisional_date").val() == '')
          {
             $("#GST_number").css('border-color','red');   
             error = "Please select date when you are going to applied GST.";
          }
else if(($("input[name='gst_capable']:checked").val() == "No" && $("input[name='provisional_num']:checked").val() != 'No') && (startDate>endDate))
          {
             $("#GST_number").css('border-color','red');   
             error = "Please select date when you are going to applied GST.";
          }

          else  if (($("input[name='gst_capable']:checked").val() == "Yes" && $("input[name='provisional_num']:checked").val() != 'No') && $("#gst_name_validate").val().length>80) 
          {
            $("#gst_name_validate").css('border-color','red'); 
            error = "Legal name based on GST should contain maximum 80 characters";
          }         
          else if(($("input[name='gst_capable']:checked").val() == "No" && $("input[name='provisional_num']:checked").val() == 'No') && ((proof_2 == '' || proof_2===undefined) && $("#dec_prf_doc").val() === undefined))
          {
             $("#gst_declr").css('border-color','red');   
             error = "Please Upload declaration form.";
          }          
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("#GST_number").val() == '')
          {
             $("#GST_number").css('border-color','red');   
             error = "Please enter GST Number.";
          }
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $(".gst_vendor_type").find(":selected").val()=="--Select--")
          {
             $("#GST_number").css('border-color','red');   
             error = "Please select type(Nature) of Vendor by GST";
          }
     else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && ($(".vendrdesc_edit").attr('title') == 'active' && ($(".gst_vendor_type").find(":selected").val() != $(".vendorchange_edit").find(":selected").val()) || $(".gst_vendor_type").find(":selected").val() != $(".vendor_change").find(":selected").val()))
          {
             $("#err_show").text("Type(Nature) of vendor by GST does not match with the type provided in SAP details");
              $("#modal-container-204273").modal('show');
            // error = "Type(Nature) of vendor by GST does not match with the type provided in SAP details";
          }
           else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("#GST_number").val() != "" && ($("#gst_proof").val() == '' && $("#gst_prf_data").val() === undefined))
          {           
             $("#GST_number").css('border-color','red');            
             error = "Please upload supporting document for GST";        
          }
          else if(typeof ext1 != 'undefined')
          {  //alert(ext1[1]);
            if(ext1[1] != 'pdf' && ext1[1] != 'jpg' && ext1[1] != 'png' && ext1[1] != 'jpeg' && ext1[1] != 'docx')
            {
              $("#GST_number").css('border-color','red');            
              error = "Only jpg,jpeg,pdf,png,docx files are allowed.";        
            }
             
          } 

          // else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("input[name='tax_number']:checked").val() == '')
          // {
          //   $("#tax_number").css('border-color','red'); 
          //    error = "Please select Tax Classification.";
          // }
          // else if($("#vendor_clasification").val() == '')
          // {
          //  $("#vendor_clasification").css('border-color','red'); 
          //    error = "Please enter Vendor Classification for GST.";
          // }
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("#nature_of_invoice").find(':selected').val() == '--Select--')
          {
            $("#nature_of_invoice").css('border-color','red'); 
             error = "Please select Nature Of Invoice to be issued.";
          }
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("input[name='compo_scheme']:checked").val() === undefined)
          {
            $("input[name='compo_scheme']").css('border-color','red'); 
            error = "Please select Composition Scheme Applicable or not?";
          }
          // else if($("input[name='rev_tax']:checked").val() === undefined)
          // {
          //    $("input[name='rev_tax']").css('border-color','red'); 
          //   error = "Please select Revrse TAX applicable or not?";
          // }
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $(".state_name_gst").find(':selected').val() == '---Select---')
          {
             $(".state_name_gst").css('border-color','red'); 
             error = "Please select state name as mention in GST.";
          }
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("#gst_email_id").val() == '')
          {
             $("#gst_email_id").css('border-color','red'); 
             error = "Please enter registered email address at GST Site";
          }
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("#gst_email_id").attr('title') == 'Not Correct')
          {
            $("#gst_email_id").css('border-color','red'); 
             error = "Please enter valid registered email address at GST Site";
          }
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("#gst_mobile_number").val() == '')
          {
            $("#gst_mobile_number").css('border-color','red'); 
             error = "Please enter registered mobile no. at GST Site";
          }
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("#gst_mobile_number").attr('title') == 'Not Correct')
          {
            $("#gst_mobile_number").css('border-color','red'); 
             error = "Please enter valid registered mobile no. at GST Site";
          }
          // else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && ($("input[name='tax_number']:checked").val() == '' || $("input[name='tax_number']:checked").val() ===undefined))
          // {
          //   $("#gst_mobile_number").css('border-color','red'); 
          //    error = "Please select tax classification for vendor";
          // }
         else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && ($("input[name='service_capable']:checked").val() == '' || $("input[name='service_capable']:checked").val() ===undefined))
          {
            $("#gst_mobile_number").css('border-color','red'); 
             error = "Please select are you serive provider?";
          }
          else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("#nature_of_invoice").find(':selected').val() == '---Select---')
          {
            $("#gst_service_provider").css('border-color','red'); 
             error = "Please select nature of invoice";
          } 
           else if(($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes') && $("#gst_service_provider").find(':selected').val() == '---Select---')
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
           $('#tab1').removeClass("active");
                  $('#tab2').addClass("active");
                  $('#tab1_menu').removeClass("active");
                  $('#tab2_menu').addClass("active");
                  $('#tab1').css("display",'none');
                  $('#tab2').css("display",'block'); 
          if (error != '') 
          {
            $("#err_show").text(error);
            $("#modal-container-204273").modal('show');
          }
          else
          {
            
            var form_data = new FormData(); 
            form_data.append("vendor_id",$("#vendor_id").val());
            form_data.append("gst_applicable",$("input[name='gst_capable']:checked").val());
            if($("input[name='gst_capable']:checked").val() == "Yes" || $("input[name='provisional_num']:checked").val() == 'Yes')
            {
               //form_data.append("gst_proof",$('#gst_proof')[0].files[0]);
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
                form_data.append("service_provider",$(".service_capable:checked").val());
                // form_data.append("rev_tax", $("input[name='reverce_tax']:checked").val());         
                form_data.append("gst_vendor",$(".gst_vendor_type").find(":selected").val());
                form_data.append("gst_data_save",'gst_data_save1');
if($("#gst_proof").length==0)
{
form_data.append("gst_prf_data",'0');
}
else if($("#gst_proof").length>0)
{
 form_data.append("gst_prf_data",'1');form_data.append("gst_proof",$('#gst_proof')[0].files[0]);
}
//alert("in");
               
            }
            else
            {
              //form_data.append("gst_declr",$('#gst_declr')[0].files[0]);
              form_data.append("gst_data_save",'gst_data_save');
              form_data.append("prov_applicable",$("input[name='provisional_num']:checked").val());
              form_data.append("prov_date",$(".provisional_date").val());
if($('#gst_declr').length==0)
{
form_data.append("dec_prf_doc",'0');
}
else if($('#gst_declr').length>0)
{
 form_data.append("dec_prf_doc",'1');
form_data.append("gst_declr",$('#gst_declr')[0].files[0]);
}
            }
            
         
          
          
       
        // alert("fdsfdsf");
            var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'html',
            processData: false, 
            contentType: false,
            'enctype': 'multipart/form-data',
            'data' : form_data,
              url : base_url+'/vendor/index.php/Vendordata/update_data',
              success : function(data)
              {
                //alert(data);
                  //$("#err_show").text("Data Updated");
                 // $("#myModalLabel").text("Success");
                  //$("#modal-container-204273").modal('show');
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

$("body").on("click",".savedetails",function(){
  var id= $(this).attr('id');
  var sep = id.split('_');
  var form_data = new FormData();  
  form_data.append("vendor_id",$("#vendor_id").val());alert(sep[1]);
  if(sep[1] == 'titleshow')
  {
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
          else
          {
            error = '';
            $(this).css('border-color','');
            form_data.append("gst_data_save",'personal_data');  
            form_data.append("title_value",$("#title_edit").find(':selected').val());
            form_data.append("name",$("#name1_edit").val());
          }        
  }
  else if(sep[1] == 'vendrdesc')
  {
          if ($(".vendrdesc_edit").attr('title') == 'active' && $(".vendorchange_edit").find(':selected').val() == '--Select--') 
          {
             $(".vendrdesc_edit").css('border-color','red');   
            error = "Please select vendor type.";
          }
          else
          {
            error = '';
            $(this).css('border-color',''); 
            form_data.append("gst_data_save",'personal_data'); 
            form_data.append("vendor_type",$(".vendorchange_edit").find(':selected').val());
            form_data.append("vendor_desc",$(".vendorchange_edit").find(':selected').text());    
          }
  }
  else if(sep[1] == 'pannumber')
  {
          if ($("#pan_proof").length>0) 
          {          
            var ext_name = $("#pan_proof").val();
            var ext1 = ext_name.split('.'); 
          }
          if(($(".pannumber_edit").attr('title') == 'active' && $(".pannumber_edit").val() == "") || $(".pannumber_edit").attr('title') == 'Not Correct')
          {
             $(".pannumber_edit").css('border-color','red'); 
             error = "Please enter valid PAN details";
          }
          else if($(".pannumber_edit").val() != "" && ($("#pan_proof").val() == '' && $("#pan_gst_prf").val() === undefined))
          {
             $(".pannumber_edit").css('border-color','red'); 
             error = "Please upload supporting document for PAN";
          }
          else if(typeof ext1 != 'undefined')
          {  
            if(ext1[1] != 'pdf' && ext1[1] != 'jpg' && ext1[1] != 'png' && ext1[1] != 'jpeg' && ext1[1] != 'docx')
            {
              $("#GST_number").css('border-color','red');            
              error = "Only jpg,jpeg,pdf,png,docx files are allowed.";        
            }
             
          } 
          else
          {
            error = '';
            $(this).css('border-color',''); 
            form_data.append("gst_data_save",'personal_data'); 
            form_data.append("pannumber",$(".pannumber_edit").val());
              //alert($('#pan_proof')[0].files[0]);
              if($('#pan_proof').length==0)
              {
              form_data.append("pan_gst_prf",'0');
              }
              else if($('#pan_proof').length>0) 
              {
               form_data.append("pan_gst_prf",'1');
              form_data.append("pan_proof",$('#pan_proof')[0].files[0]);
              }        
          }
  }
  else if(sep[1] == 'housenumber')
  {
          if($(".house_validation").val() == '' && $(".housenumber_edit").attr('title') == 'active')
          {
             $(".house_validation").css('border-color','red'); 
             error = "Please enter house number";
          }
          else if($(".house_validation").attr('title') == 'Not Correct')
          {
             $(".house_validation").css('border-color','red'); 
             error = "Please enter valid house number";
          } 
          else
          {
            error = '';
            $(this).css('border-color',''); 
            form_data.append("gst_data_save",'other_data');      
            form_data.append("house_number",$(".housenumber_edit").val());
          }     
  }
  else if(sep[1] == 'street1')
  {
      if(($(".street1_edit").attr('title') == 'active' && $(".street1_edit").val() == "") || $(".street1_edit").attr('title') == 'Not Correct')
      {
         $(".street1_edit").css('border-color','red'); 
         error = "Please enter valid street details";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("street1",$(".street1_edit").val());
      }    
  }
  else if(sep[1] == 'street2')
  {
      if(($(".street2_edit").attr('title') == 'active' && $(".street2_edit").val() == "") || $(".street2_edit").attr('title') == 'Not Correct')
      {
        $(".street2_edit").css('border-color','red'); 
         error = "Please enter valid street details";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("street2",$("#street2_edit").val());
      } 
  }
  else if(sep[1] == 'street3')
  {
      if(($(".street3_edit").attr('title') == 'active' && $(".street3_edit").val() == "") || $(".street3_edit").attr('title') == 'Not Correct')
      {
         $(".street3_edit").css('border-color','red'); 
         error = "Please enter valid street details";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("street3",$("#street3_edit").val());
      } 
  }
  else if(sep[1] == 'street4')
  {
      if(($(".street4_edit").attr('title') == 'active' && $(".street4_edit").val() == "") || $(".street4_edit").attr('title') == 'Not Correct')
      {
         $(".street4_edit").css('border-color','red'); 
         error = "Please enter valid street details";
      }
      else
      {
        error = '';
        $(this).css('border-color','');
        form_data.append("gst_data_save",'other_data');      
        form_data.append("street4",$("#street4_edit").val()); 
      } 
  }
  else if(sep[1] == 'street5')
  {
      if(($(".street5_edit").attr('title') == 'active' && $(".street5_edit").val() == "") || $(".street5_edit").attr('title') == 'Not Correct')
      {
        $(".street5_edit").css('border-color','red'); 
         error = "Please enter valid street details";
      }  
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("street5",$("#street5_edit").val());
      }    
  }
  else if(sep[1] == 'City')
  {
    if(($(".City_edit").attr('title') == 'active' && $(".City_edit").val() == "") || $(".City_edit").attr('title') == 'Not Correct')
    {
      $(".City_edit").css('border-color','red'); 
       error = "Please enter valid city details";
    }
    else
    {
      error = '';
      $(this).css('border-color',''); 
      form_data.append("gst_data_save",'other_data');      
      form_data.append("City",$(".City_edit").val());
    }  
  }
  else if(sep[1] == 'district')
  {
      if(($(".district_edit").attr('title') == 'active' && $(".district_edit").val() == "") || $(".district_edit").attr('title') == 'Not Correct')
          {
            $(".district_edit").css('border-color','red'); 
             error = "Please enter valid district details";
          }
          else
          {
            error = '';
            $(this).css('border-color',''); 
            form_data.append("gst_data_save",'other_data');      
            form_data.append("district",$(".district_edit").val());
          }  
  }
  else if(sep[1] == 'postalcode')
  {
          if(($(".postalcode_edit").attr('title') == 'active' && $(".postalcode_edit").val() == "") || $(".postalcode_edit").attr('title') == 'Not Correct')
          {
             $(".postalcode_edit").css('border-color','red'); 
             error = "Please enter valid postal code details";
          }
          else
          {
            error = '';
            $(this).css('border-color',''); 
            form_data.append("gst_data_save",'other_data');      
            form_data.append("postalcode", $(".postalcode_edit").val());
          } 
  }
   else if(sep[1] == 'statename')
  {
       if(($(".statename_edit").attr('title') == 'active' && $(".state_name_edit_chk").find(":selected").val() == "---Select---"))
      {
         $(".state_name_edit_chk").css('border-color','red'); 
         error = "Please enter valid telephone details";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("state_name_edit_chk",$(".state_name_edit_chk").find(':selected').text());
        form_data.append("state_code_edit_chk",$(".state_name_edit_chk").find(':selected').val());
      } 
  }
   else if(sep[1] == 'countrykey')
  {
      if(($(".country_value_edit").attr('title') == 'active' && $(".countrykey_now").find(":selected").val() == "---Select---"))
      {
         $(".country_value_edit").css('border-color','red'); 
         error = "Please enter valid telephone details";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("Country_Key",$("#countrykey_now").find(':selected').val());
      } 
  }
  else if(sep[1] == 'telephone1')
  {
      if(($(".telephone1_edit").attr('title') == 'active' && $(".telephone1_edit").val() == "") || $(".telephone1_edit").attr('title') == 'Not Correct')
      {
         $(".telephone1_edit").css('border-color','red'); 
         error = "Please enter valid telephone details";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("telephone1",$(".telephone1_edit").val());
      } 
  }
  else if(sep[1] == 'telephone2')
  {
      if(($(".telephone2_edit").attr('title') == 'active' && $(".telephone2_edit").val() == "") || $(".telephone2_edit").attr('title') == 'Not Correct')
      {
         $(".telephone2_edit").css('border-color','red'); 
         error = "Please enter valid telephone details";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("telephone2",$(".telephone2_edit").val());
      } 
  }
  else if(sep[1] == 'faxnumber')
  {
      if(($(".faxnumber_edit").attr('title') == 'active' && $(".faxnumber_edit").val() == "") || $(".faxnumber_edit").attr('title') == 'Not Correct')
      {
         $(".faxnumber_edit").css('border-color','red'); 
         error = "Please enter valid fax number details";
      }
       else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("fax_num",$(".faxnumber_edit").val());
      } 
  }
  else if(sep[1] == 'emailid')
  {
      if(($(".emailid_edit").attr('title') == 'active' && $(".emailid_edit").val() == "") || $(".emailid_edit").attr('title') == 'Not Correct')
      {
          $(".emailid_edit").css('border-color','red'); 
         error = "Please enter valid email id details";
      } 
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'other_data');      
        form_data.append("emailid",$(".emailid_edit").val());
      }    
  }  
  else if(sep[1] == 'excisereg')
  {
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
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'VAT_details');           
        form_data.append("excise_reg_no",$(".excisereg_edit").val());
      }    
  } 
  else if(sep[1] == 'exciserange')
  {
      if($(".exciserange_edit").attr('title') == 'active' && $(".exciserange_edit").val() == "")
      {
         $(".exciserange_edit").css('border-color','red'); 
         error = "Please enter valid excise range";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'VAT_details');     
        form_data.append("excise_range",$(".exciserange_edit").val());
      }    
  } 
  else if(sep[1] == 'excisediv')
  {
     if($(".excisediv_edit").attr('title') == 'active' && $(".excisediv_edit").val() == "")
      {
         $(".excisediv_edit").css('border-color','red'); 
         error = "Please enter excise division";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'VAT_details');         
        form_data.append("excise_div",$(".excisediv_edit").val());
      }    
  } 
  else if(sep[1] == 'excisecom')
  {
      if($(".excisecom_edit").attr('title') == 'active' && $(".excisecom_edit").val() == "")
      {
         $(".excisecom_edit").css('border-color','red'); 
         error = "Please enter excise commissionerate";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'VAT_details');      
        form_data.append("excise_commisionarate",$(".excisecom_edit").val());
      }    
  } 
  else if(sep[1] == 'excisecst')
  {
      if($(".excisecst_edit").attr('title') == 'active' && $(".excisecst_edit").val() == "")
      {
         $(".excisecst_edit").css('border-color','red'); 
         error = "Please enter CST number";
      }
      else if($(".excisecst_edit").val() != '' && $(".excisecst_edit").attr('title') == "Not Correct")
      {
         $(".excisecst_edit").css('border-color','red'); 
         error = "CST number should contain alpha numeric value";
      }
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'VAT_details');        
        form_data.append("cst_number",$(".excisecst_edit").val());
      }    
  } 
  else if(sep[1] == 'exciselst')
  {
      if($(".exciselst_edit").attr('title') == 'active' && $(".exciselst_edit").val() == "")
      {
         $(".exciselst_edit").css('border-color','red'); 
         error = "Please enter LST number";
      } 
      else
      {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'VAT_details');     
        form_data.append("lst_number",$(".exciselst_edit").val());
      }    
  } 
  else if(sep[1] == 'servtax')
  {
      if($(".servtax_edit").attr('title') == 'active' && $(".servtax_edit").val() == "")
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
        form_data.append("gst_data_save",'VAT_details');         
        form_data.append("servtax_edit",$(".servtax_edit").val());
      }    
  } 
  else if(sep[1] == 'cenv')
  {
        error = '';
        $(this).css('border-color',''); 
        form_data.append("gst_data_save",'VAT_details');       
        form_data.append("CENVAT_scheme",$("input[name='CENVAT_scheme']:checked").val());
  } 
      
    
          
          
          
  
            var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'html',
            processData: false, 
            contentType: false,
            'enctype': 'multipart/form-data',
            'data' : form_data,
              url : base_url+'/vendor/index.php/Vendordata/update_data',
              success : function(data)
              {
                 // alert("save");
              }
            });
});
         
         $("body").on('click','#tab_2',function(){
        var error = '';var type_vendor = 0;var vendor_value = '';
         $('#tab2').removeClass("active");
                  $('#tab2').css("display",'none');
                  $('#tab3').addClass("active");
                  $('#tab2_menu').removeClass("active");
                  $('#tab3_menu').addClass("active");
                  $('#tab3').css("display",'block');
                  $("#back_tab_1").css("display",'block');  
         if($("#pan_proof").length>0)
        {
          var ext_name = $("#pan_proof").val();
          var ext1 = ext_name.split('.');
          //alert(ext);
        }   
        else 
        {
          var ext_name = $("#pan_gst_prf").val();
          var ext2 = ext_name.split('.');
          //alert(ext);
        }  
        //alert(ext1);
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
          else if($(".pannumber_edit").val() != "" && ($("#pan_proof").val() == '' && $("#pan_gst_prf").val() === undefined))
          {
             $(".pannumber_edit").css('border-color','red'); 
             error = "Please upload supporting document for PAN";
          }
            else if(typeof ext1 != 'undefined')
          {  //alert(ext1[1]);
            if(ext1[1] != 'pdf' && ext1[1] != 'jpg' && ext1[1] != 'png' && ext1[1] != 'jpeg' && ext1[1] != 'docx')
            {
              $("#GST_number").css('border-color','red');            
              error = "Only jpg,jpeg,pdf,png,docx files are allowed.";        
            }
             
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
          form_data.append("vendor_type",$(".vendorchange_edit").find(':selected').val());
          form_data.append("vendor_desc",$(".vendorchange_edit").find(':selected').text());    
          form_data.append("pannumber",$(".pannumber_edit").val());
//alert($('#pan_proof')[0].files[0]);
if($('#pan_proof').length==0)
{
form_data.append("pan_gst_prf",'0');
}
else if($('#pan_proof').length>0) 
{
 form_data.append("pan_gst_prf",'1');
form_data.append("pan_proof",$('#pan_proof')[0].files[0]);
} 
 
            var base_url = window.location.origin;
            $.ajax({
              type : 'post',
             'datatype' : 'html',
            processData: false, 
            contentType: false,
            'enctype': 'multipart/form-data',
            'data' : form_data,
              url : base_url+'/vendor/index.php/Vendordata/update_data',
              success : function(data)
              {
                //alert(data);
                  //$("#err_show").text("Data Updated");
                  //$("#myModalLabel").text("Success");
                 // $("#modal-container-204273").modal('show');
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
           $('#tab3').removeClass("active");
                  $('#tab4').addClass("active");
                  $('#tab3_menu').removeClass("active");
                  $('#tab4_menu').addClass("active");
                  $('#tab3').css("display",'none');
                  $('#tab4').css("display",'block');
                  $("#back_tab_2").css("display",'block');
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
              url : base_url+'/vendor/index.php/Vendordata/update_data',
              success : function(data)
              {
                  //alert(data);
                  //$("#err_show").text("Data Updated");
                 // $("#myModalLabel").text("Success");
                 // $("#modal-container-204273").modal('show');
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
           $('#tab4').removeClass("active");
                  $('#tab5').addClass("active");
                  $('#tab4_menu').removeClass("active");
                  $('#tab5_menu').addClass("active");
                  $('#tab4').css("display",'none');
                  $('#tab5').css("display",'block');
                  $("#back_tab_4").css("display",'block');
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
              url : base_url+'/vendor/index.php/Vendordata/update_data',
              success : function(data)
              {
                  //alert(data);
                  //$("#err_show").text("Data Updated");
                  //$("#myModalLabel").text("Success");
                 // $("#modal-container-204273").modal('show');
                  $('#tab4').removeClass("active");
                  $('#tab5').addClass("active");
                  $('#tab4_menu').removeClass("active");
                  $('#tab5_menu').addClass("active");
                  $('#tab4').css("display",'none');
                  $('#tab5').css("display",'block');
                  $("#back_tab_4").css("display",'block');
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
//               url : base_url+'/vendor/index.php/Vendordata/update_data',
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
            $("."+get_data[0]+"_edit1").css("display","");
            $("."+get_data[0]+"_edit").attr('title',"active");
            $(this).css("display","none");
            //alert(get_data);
            $("#close_"+get_data[0]).css("display","");
            $(".save_"+get_data[0]).css("display","");
        });
        $("body").on('click','.close_field',function(){
            var field = $(this).attr('id');
            var get_data = field.split('_');
            $("#close_"+get_data[1]).css("display","none");
            $("."+get_data[1]+"_edit").css("display","none");
             $("."+get_data[1]+"_edit1").css("display","none");
            $("."+get_data[1]+"_edit").attr('title',"inactive");
            $(".save_"+get_data[1]).css("display","none");
            $(this).css("display","none");
            $("#"+get_data[1]+"_edit").css("display","");
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
                $("#err").fadeOut(1000);
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
                $("#err").fadeOut(1000);
                $("#error_value").html("Please Enter correct GST number").show();
            }
            else if(code != variable2)
            {
                $("#err").fadeOut(1000);
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
$('#back_tab_4').click(function(){
    $('#tab5').addClass("active");
      $('#tab4').removeClass("active");
      $('#tab5_menu').addClass("active");
      $('#tab4_menu').removeClass("active");
      $('#tab5').css("display",'block');
      $('#tab4').css("display",'none');
});
$('#back_tab_5').click(function(){
    $('#tab4').addClass("active");
      $('#tab5').removeClass("active");
      $('#tab4_menu').addClass("active");
      $('#tab5_menu').removeClass("active");
      $('#tab4').css("display",'block');
      $('#tab5').css("display",'none');
});
</script>
<style type="text/css">
label
{
font-family: "Open Sans",sans-serif;
font-size: 14px;
font-weight: normal;
}
</style>
<script type="text/javascript">
  $(function(){
    $("#err").fadeOut(1000);
  });
</script>