<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type='text/javascript' src='<?php echo base_url(); ?>js/validation_script.js'></script>
<div class="content_wrapper woocommerce">
    <div class="page-content">
        <div class="container_24">
            <div class="grid_24">
                <div class="fullwidth">
                    <div class="row">
        <div class="col-md-8">
            <h3>
                Fill in your details
            </h3>
            <?php
                $query = "where Vendor_id = ?";
                $data = array(
                    'username' => $this->session->userdata('vendor_id')
                );
                $data['edit_user_details'] = $this->common_model->fetch_data('vendor_details',$query,$data);
//print_r($this->session->userdata('vendor_id'));die();
            ?>
             <div class="row">
                <div class="col-md-8">
                    <div class="alert alert-danger" id="err" style="display: none">
                     <div id="error_value"></div>
                    </div>
                    <div class="alert alert-success" id="success_msg" style="display: none">
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
<div class="form-group">                             
                            <label for="exampleInputPassword1">
                                Name
                            </label>
                            <input class="form-control" id="name" type="text" value="<?php if(isset($data['edit_user_details']['0']['Name'])) { echo $data['edit_user_details']['0']['Name']; }?>" disabled="" />
                        </div> 
                        <div class="form-group">                             
                            <label for="exampleInputEmail1">
                                Mobile Number <span style="color:red">*<span>
                            </label>
                            <input class="form-control gst_mobile_number" id="mob_number" type="email" />
                        </div>                                                                  
                       
                </div>
                <div class="col-md-6" style="margin-top: 24px;">
                        <div class="form-group" style="visibility: hidden;">                             
                            <label for="exampleInputEmail1">
                                State
                            </label>
                            <select name="state_name_gst" class="state_name_gst" disabled>
                                    <option>---Select---</option>
                                    <?php 
                                                foreach ($sap_state as $row) { ?>
                                                  <option id='<?php echo $row['state_code']; ?>' <?php if(isset($data['edit_user_details']['0']['State_Code'])){ if($data['edit_user_details']['0']['State_Code'] == $row['state_code']) { echo 'selected="selected"'; } } ?> value="<?php echo $row['state_code']; ?>" class='cntrt_name'><?php echo $row['state_code'].'-'.$row['state_name']; ?></option>
                                              <?php }
                                              ?>    
                                 </select> 
                        </div>
                        <div class="form-group" style="margin-top: 21px;">                             
                            <label for="exampleInputPassword1">
                                Email ID<span style="color:red">*<span>
                            </label>
                            <input class="form-control email_validate" id="email_id" type="text" />
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                        <div class="form-group">                             
                            <label for="exampleInputEmail1">
                                What would you like us to assist you with?<span style="color:red">*<span>
                            </label>
                            <textarea class="form-control" id="message"></textarea>
                        </div>                        
                </div>
            </div>
             <div class="row">
                <div class="col-md-6">
<a href="<?php echo base_url(); ?>index.php/Vendordetails"><button type="button" class="btn btn-default" style="float: left;">
                            Back
                        </button></a>                     
                         <button type="submit" id="sub_query" class="btn btn-default" style="float: right;">
                            Submit
                        </button>
                </div>
            </div>
        </div>
    </div>
<br>
<lable style="font-family: "Open Sans",sans-serif;font-size: 14px;font-weight: normal;">
Please contact to below number for technical quries : <br>
+91 22 41200210 / 211 or email us on : support@kritva.com<br><br>

If you have any doubts please contact the below numbers :<br>
Rajeev : 9769823641 (For GST Related) <br>
Rupesh : 9819605982 (For GST Related) <br>

</lable>
                </div> 
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("#sub_query").click(function(){
if($(".gst_mobile_number").val() == '')
{
$("#err").css('display','');
                $(".gst_mobile_number").css('border-color','red'); 
                $("#error_value").text("Please enter mobile number.");
}
           else if ($(".gst_mobile_number").attr('title') == 'Not Correct') 
            {
                $("#err").css('display','');
            }
            else if($(".gst_mobile_number").attr('title') == 'Not Correct')
            {
                $("#err").css('display','');
            }
else if($(".email_validate").val() == '')
{
$("#err").css('display','');
                $(".email_validate").css('border-color','red'); 
                $("#error_value").text("Please enter email id.");
}
            else if($(".email_validate").attr('title') == 'Not Correct')
            {
                $("#err").css('display','');
            }
            else if($("#message").val().length==0)
            {
                $("#err").css('display','');
                $("#message").css('border-color','red'); 
                $("#error_value").text("Please enter your comments.");
            }
            else if($("#message").val().length>500)
            {
                $("#err").css('display','');
                $("#message").css('border-color','red'); 
                $("#error_value").text("Maximum 500 characters are allowed.");
            }
            else
            {
$("#success_msg").css('display','');
 $("#success_msg").text('successfully submitted your query to vvf GST support team.');
                $("#err").css('display','none');
                $("#message").css('border-color',''); 
                var data = {
                    'mob_number' : $(".gst_mobile_number").val(),
                    'email_validate' : $(".email_validate").val(),
                    'message' : $("#message").val(),
                    'name' : $("#name").val()
                };
                var base_url = window.location.origin;
                $.ajax({
                    type : 'post',
                    'datatype' : 'html',
                    'data' : data,
                      url : base_url+'/vendor/index.php/Support/send_mail',
                      success : function(data)
                      {
 $("#success_msg").css('display','');
 $("#success_msg").text('successfully submitted your query to support team.');
setTimeout(function () {
   window.location.href= base_url+'/vendor/index.php/Support/'; // the redirect goes here

},2000); // 5 seconds
                      }
                });
            }
        });
    });
</script>
