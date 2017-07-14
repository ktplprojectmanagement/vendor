<div class="content_wrapper">
    <div class="page-content">
        <div class="container_24" style="width:1451px">
            <div class="grid_24">
                <div class="grid_16 alpha" style="width: 1140px;">
                    <div class="content-bar"> 
                        <h3 class="page-title"><a href="#">Vendor Details</a></h3>
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
<script type="text/javascript">
    $(function(){
        $("body").on('click','.get_field',function(){
            var field = $(this).attr('id');
            var get_data = field.split('_');
            $("#"+get_data[1]+"_edit").css("display","block");
            $(this).css("display","none");
            $("#close_"+get_data[1]).css("display","block");
        });
        $("body").on('click','.close_field',function(){
            var field = $(this).attr('id');
            var get_data = field.split('_');
            $("#"+get_data[1]+"_edit").css("display","none");
            $(this).css("display","none");
            $("#edit_"+get_data[1]).css("display","block");
            //alert(field);
        });
    });
</script>
<div class="col-lg-12 col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container" style="width: 138%;margin-left: -59px;">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu" style="margin-top: 34px;">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">Personal Details
                </a>
                <a href="#" class="list-group-item text-center">Bank Details
                </a>
                <a href="#" class="list-group-item text-center">Other Details
                </a>
                <a href="#" class="list-group-item text-center">GST Details
                </a>
                <a href="#" class="list-group-item text-center">Credit Card
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                                        <table  class="table">
                                        <tr>
                                            <td><label for="contactName">Full Name<span class="required">*</span></label></td>
                                            <td><input type="text"  id="name" name="name"  value=""  disabled/></td>
                                            <td><button type="button" class="btn btn-default get_field" id="edit_name">Edit</button><button type="button" class="btn btn-default close_field" id="close_name"  style="display: none">Close</button></td>                                       
                                            <td><input type="email" name="name_edit" id="name_edit" value="" style="display: none" class="required requiredField email" required/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Street<span class="required">*</span></label></td>
                                            <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                            <td><button type="button" class="btn btn-default">Edit</button></td>
                                            <td><input type="text"  id="contactName" name="contactName"  style="display: none" value="" required/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">City<span class="required">*</span></label></td>
                                            <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                            <td><button type="button" class="btn btn-default">Edit</button></td>
                                            <td><input type="text"  id="contactName" name="contactName"  style="display: none" value="" required/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">Full Address<span class="required">*</span></label></td>
                                            <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                            <td><button type="button" class="btn btn-default">Edit</button></td>
                                            <td><input type="email" name="email" id="email" value=""  style="display: none" class="required requiredField email" required/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">District<span class="required">*</span></label></td>
                                            <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                            <td><button type="button" class="btn btn-default">Edit</button></td>
                                            <td><input type="text"  id="contactName" name="contactName"  style="display: none" value="" required/></td>
                                        </tr>
                                        <tr>
                                            <td><label for="contactName">City Postal Code<span class="required">*</span></label></td>
                                            <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                            <td><button type="button" class="btn btn-default">Edit</button></td>
                                            <td><input type="text"  id="contactName" name="contactName"  style="display: none" value="" required/></td>
                                        </tr>
                                        <tr>
                                        <td><label for="contactName">Country<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="email" name="email" id="email" value=""  style="display: none" class="required requiredField email" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">First Telephone Number<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                         <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  style="display: none"  value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">First Fax Number<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                         <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  style="display: none" value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Contact Person<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  style="display: none" value="" required/></td>
                                    </tr>
                                    <tr>
                                    <td><label for="email">Language Key<span class="required">*</span></label></td>
                                    <td><input type="email" name="email" id="email" value="" class="required requiredField email"  disabled/></td>
                                    <td><button type="button" class="btn btn-default">Edit</button></td>
                                    <td><input type="text"  id="contactName" name="contactName"  style="display: none"  value="" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">First Mobile Telephone Number<span class="required">*</span></label></td>
                                    <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                    <td><button type="button" class="btn btn-default">Edit</button></td>
                                    <td><input type="text"  id="contactName" name="contactName"  style="display: none" value="" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Email ID<span class="required">*</span></label></td>
                                    <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>
                                    <td><button type="button" class="btn btn-default">Edit</button></td>
                                    <td><input type="text"  id="contactName" name="contactName"  style="display: none" value="" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="contactName">Contact Person<span class="required">*</span></label></td>
                                    <td><input type="text"  id="contactName" name="contactName"  value=""  disabled/></td>  
                                    <td><button type="button" class="btn btn-default">Edit</button></td>
                                    <td><input type="text"  id="contactName" name="contactName"  style="display: none" value="" required/></td>                                
                                </tr>
                                </table> 
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                                 <table  class="table">
                                    <tr>
                                        <td><label for="contactName">Bank Name<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="email">Bank Address<span class="required">*</span></label></td>
                                        <td><input type="email" name="email" id="email" value="" class="required requiredField email" disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Bank Branch, N.A.<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Bank Account Number<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">Nature of Account ( Current Account/Cash Credit )<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                                    </tr>
                                    <tr>                                        
                                        <td><label for="contactName">NEFT IFSC Code of Bank Branch<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="contactName">MICR Code of Bank Branch<span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                                    </tr>
                                     <tr>
                                        <td><label for="contactName">Drug License Number (If Pharmaceutical Goods) (Please scan copy attach) <span class="required">*</span></label></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                        <td><button type="button" class="btn btn-default">Edit</button></td>
                                        <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                                    </tr>
                                </table> 
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                         <table  class="table">
                             <tr>
                                <td><label for="contactName">Nostro Bank<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>  
                            <tr>
                                <td><label for="email">Bank Name<span class="required">*</span></label></td>
                                <td><input type="email" name="email" id="email" value="" class="required requiredField email" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>                                                    
                            <tr>
                                <td><label for="contactName">Bank Branch, N.A.<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>                               
                            </tr>
                            <tr>
                                <td><label for="contactName">Address<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Country<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>                                
                            </tr>
                            <tr>
                                <td><label for="contactName">Routing Number<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">IBAN<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>                                
                            </tr>
                            <tr> 
                                <td><label for="contactName">Bank Swift Code<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
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
                   <!-- Accordion START -->
                          <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading accordion-toggle" aria-expanded="true" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
                                <h4 class="panel-title">Information</h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="panel-body">
                                 <table  class="table">
                            <tr>
                                <td><label for="contactName">ECC Number<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>                                
                            </tr>
                            <tr>
                                <td><label for="email">Excise Range<span class="required">*</span></label></td>
                                <td><input type="email" name="email" id="email" value="" class="required requiredField email" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>       
                            </tr>
                            <tr>
                                <td><label for="contactName">Excise Division<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Excise Commissionerate<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>       
                            </tr>
                            <tr>
                                <td><label for="contactName">EOU Letter of Approval /Procurement (If Applicable)<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                             <tr>
                                <td><label for="contactName">SEZ Letter of Approval,License Number & Date (If Applicable)<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">WCT TAN No. (Please scan copy attach if Vendor from Daman & Diu Only)<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">CIN Number issued by MCA (In case of Companies only)<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">DIT Relief Certificate / Lower TDS Certificate issued by Income tax Dept<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Service Provider from India or Out Side India<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                                <tr>
                                <td><label for="contactName">Legal Name of Business as mentioned in PAN and GST Registration No<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>                                
                            </tr>
                            <tr>
                                <td><label for="email">GST Rgostration Number OR Unique ID Number<span class="required">*</span></label></td>
                                <td><input type="email" name="email" id="email" value="" class="required requiredField email" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>       
                            </tr>
                            <tr>
                                <td><label for="contactName">Nature Of Invoice to be issued by Vendor(Tax Invoice or Bill Of Supply)<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Composition Scheme Applicable or not?<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>       
                            </tr>
                            <tr>
                                <td><label for="contactName">Revrse TAX applicable or not?<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                             <tr>
                                <td><label for="contactName">Registered Address of Business under GST Site<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">State Code as mentioned in GST Site<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Registered email address at GST Site<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Registered mobile no. at GST Site<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Service Provider from India or Out Side India<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                        </table>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo">
                                <h4 class="panel-title">Supported Documents</h4>

                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table  class="table">
                            <tr>
                                <td><label for="contactName">Excise Registration Number (Please scan copy attach)<span class="required">*</span></label></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div>
                                </td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload New</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div></td>                                
                            </tr>
                            <tr>
                                <td><label for="contactName">Central Sales tax Number (Please scan copy attach)<span class="required">*</span></label></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div>
                                </td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload New</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div></td>                                
                            </tr>
                            <tr>
                                <td><label for="contactName">Local Sales Tax Number (Please scan copy attach)<span class="required">*</span></label></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div>
                                </td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload New</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div></td>                                
                            </tr>
                            <tr>
                                <td><label for="contactName">Service Tax Registration Number NUMBER (Please scan copy attach)<span class="required">*</span></label></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div>
                                </td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload New</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div></td>                                
                            </tr>
                             <tr>
                                <td><label for="contactName">Permanent AccountNumber (Please scan copy attach)<span class="required">*</span></label></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div>
                                </td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload New</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div></td>                                
                            </tr>
                            <tr>
                                <td><label for="contactName">Value Added Tax Registration Number (Please scan copy attach)<span class="required">*</span></label></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div>
                                </td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload New</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div></td>                                
                            </tr>
                             <tr>
                                <td><label for="contactName">Category Specification (Large/ Medium/Small/Enlarge) (Please scan copy attach)<span class="required">*</span></label></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div>
                                </td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload New</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div></td>                                
                            </tr>
                            <tr>
                                <td><label for="contactName">WCT TAN No. (Please scan copy attach if Vendor from Daman & Diu Only)<span class="required">*</span></label></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div>
                                </td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload New</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div></td>                                
                            </tr>
                             <tr>
                                <td><label for="contactName">Copy of Cheque Certificate from bank for Account Details<span class="required">*</span></label></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload Document</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div>
                                </td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;">
                                <div><span style="cursor: pointer;"><lable style='color: rgb(2, 183, 195);'><u>Upload New</u> </lable></span><input type="file" style="margin-top: -19px;opacity: 0;cursor: pointer;"></div></td>                                
                            </tr>
                        </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Accordion END -->
                </div>
                <div class="bhoechie-tab-content">
                          <table  class="table">
                            <tr>
                                <td><label for="contactName">Legal Name of Business as mentioned in PAN and GST Registration No<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>                                
                            </tr>
                            <tr>
                                <td><label for="email">GST Rgostration Number OR Unique ID Number<span class="required">*</span></label></td>
                                <td><input type="email" name="email" id="email" value="" class="required requiredField email" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>       
                            </tr>
                            <tr>
                                <td><label for="contactName">Nature Of Invoice to be issued by Vendor(Tax Invoice or Bill Of Supply)<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Composition Scheme Applicable or not?<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>       
                            </tr>
                            <tr>
                                <td><label for="contactName">Revrse TAX applicable or not?<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                             <tr>
                                <td><label for="contactName">Registered Address of Business under GST Site<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">State Code as mentioned in GST Site<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Registered email address at GST Site<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Registered mobile no. at GST Site<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                            <tr>
                                <td><label for="contactName">Service Provider from India or Out Side India<span class="required">*</span></label></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" disabled/></td>
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                                <td><input type="text"  id="contactName" name="contactName"  value="" required/></td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
                        </div>                
                    </div>
                </div>
               
        </div>
    </div>
</div>