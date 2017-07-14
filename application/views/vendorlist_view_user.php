<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"></button>
					</div>
					
					<div id="navbar-menu" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
                                <a href="http://partners.vvfltd.com/customer/index.php/Adminlogin" class="dropdown-toggle" data-toggle="dropdown"><span>Logout</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
                                    <li><a href="<http://partners.vvfltd.com/customer/index.php/Adminlogin"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                                </ul>
                            </li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
			<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
			<script type="text/javascript">
				$(function(){
					$('#select-all').click(function(event) {
				        var $that = $(this);
				        $(':checkbox').each(function() {
				            this.checked = $that.is(':checked');
				        });
				    });
				});
			</script>
			<style>
			    #exapletable_paginate
			    {
			        display:none;
			    }
			</style>
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Vendor List</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped" id="exapletable">
										<thead>
											<tr style="display:none">
												<th>Purchaser Name</th>
												<th>
													<select class="select_purchaser">
														<option>--Select--</option>
														<?php
															if (isset($purchaser_details) && count($purchaser_details)>0) {
																for ($i=0; $i < count($purchaser_details); $i++) { 
														?>
														<option value="<?php echo $purchaser_details[$i]['0']['Purchaser_Email_ID']; ?>"><?php echo $purchaser_details[$i]['0']['Purchaser_Name']; ?></option>
														<?php
															}
														}
														?>
													</select>
												</th>
												<th></th>
												<th></th>
												<th></th>
												
											</tr>
											<tr>
												<th>select</th>
												<th>Purchaser_Name</th>
												<th>Vendor ID</th>
												<th>Name</th><th>Vendor Email ID</th><th>New Email ID For Vendor</th><th>Action</th>
												<!--<th>Status</th>-->
												
											</tr>
										</thead>
										<tbody id="purch_based_vendor">
										<?php

											if (isset($vendor_details) && count($vendor_details)>0) {
												for ($i=0; $i < count($vendor_details); $i++) {	
													if($vendor_details[$i] != '')
													{

													?>
														<tr>
															<td><input type="checkbox" class="get_select" value="<?php echo $vendor_details[$i]['Vendor_id']; ?>" id="<?php echo $vendor_details[$i]['Vendor_id']; ?>"></td>
															<td><?php echo $vendor_details[$i]['Sub_Purchaser_Name']; ?></td>
															<td><?php echo $vendor_details[$i]['Vendor_id']; ?></td>
															<td><?php echo $vendor_details[$i]['Name']; ?></td>	<td><?php echo strtolower($vendor_details[$i]['EMail_id']); ?></td>
															<td><input type="text" id="email_<?php echo $vendor_details[$i]['Vendor_id']; ?>"></td>
															<td><input type="button" id="<?php echo $vendor_details[$i]['Vendor_id']; ?>" class="get_email_id" value="Edit"></td>
															<!--<td>-->
<?php 
if(isset($already_sent_list2) && count($already_sent_list2)>0)
{
$cnt =0;
for($m=0;$m<count($already_sent_list2);$m++)
{
if($already_sent_list2[$m]['vendor_id'] == $vendor_details[$i]['Vendor_id'])
{
//echo "sent";
}



}
}else
{
//echo "not";
}

?>
<!--</td>-->
															
														</tr>
													<?php
													}
												}
											}
										?>
										</tbody>
									</table>
									<!--<input type="checkbox" id="select-all" style="margin-left: 25px;"> Select All-->
								</div>
							</div>
							<div class="col-md-6">
								<button type="button" class="btn btn-primary" id="send_mail" style="">Send Mail</button>&nbsp&nbsp<br>
<button type="button" class="btn btn-primary" id="send_mail_tech" style="float: right;">Send Technical Mail</button>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
					
					</div>
					<div class="row" style="margin-top: 19px;">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel"  style="display:none">
								<div class="panel-heading">
									<h3 class="panel-title">Recent Purchases</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>select</th>
												<th>Purchaser_Name</th>
												<th>ID</th>
												<th>Name</th>
												<th>Type</th>
												<th>Action</th>
												<!-- <th>Status</th> -->
											</tr>
										</thead>
										<tbody>
											<?php
											if (isset($already_sent) && count($already_sent)>0) {
												for ($i=0; $i < count($already_sent); $i++) { 
													?>
														<tr>
															<td><input type="checkbox" value="<?php echo $already_sent[$i]['Vendor_id']; ?>" id="<?php echo $already_sent[$i]['Vendor_id']; ?>"></td>
															<td><?php echo $already_sent[$i]['Sub_Purchaser_Name']; ?></td>
															<td><?php echo $already_sent[$i]['Vendor_id']; ?></td>
															<td><?php echo $already_sent[$i]['Name']; ?></td>
															<td><?php echo $already_sent[$i]['vendor_type']; ?></td>
															<td>
																<form method="post" target="_new" action="<?php echo base_url(); ?>index.php/Vendordata">
																	<input type="text" name="vendor_id" style="display: none" value="<?php echo $already_sent[$i]['Vendor_id']; ?>">
																	<input type="submit" name="submit"  value="Check">
																</form>
															<!-- <a href="<?php echo base_url(); ?>index.php/Vendordetails"><span class="label label-success">Check</span></a> -->
															</td>
														</tr>
													<?php
												}
											}
										?>
										</tbody>
									</table>
								</div>								
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
					</div>
			</div>
				
				</div>
			</div>
			<script type="text/javascript">
				$(function(){
				    $("body").on('click','.get_email_id',function(){
				        var str = /^([a-z_.])+([a-z0-9])+@([a-z]+\.)+[a-z]+$/; 
				        var vendor_id = $(this).attr('id');
    				    var email = $("#email_"+vendor_id).val();
				        if(email == '')
				        {
				            alert("Please enter email id to update.");
				        }
				        else if (!str.test(email))
				        {
				            alert("Please enter valid email id to update.");
				        }
				        else
				        {
    				        var data = {
    				            vendor_id : vendor_id,
    				            email : email
    				        };
    				        var base_url = window.location.origin;
    			            $.ajax({
    				              type : 'post',
    				              data : data,
    				              url : base_url+'/vendor/index.php/Vendorlist_user1/update_email',
    				              success : function(data)
    				              {
    				                  //alert(data);
    				                 window.location.href = 'http://partners.vvfltd.com/vendor/index.php/Vendorlist_user';
    				              }
    			            });
				        }
				       
				    });
					$("body").on('change','.select_purchaser',function(){
						var data = {
							'purch_id' : $(this).val()
						};
						//alert($(this).val());
						 var base_url = window.location.origin;
				            $.ajax({
					              type : 'post',
					              data : data,
					              url : base_url+'/vendor/index.php/Vendorlist/get_vendor',
					              success : function(data)
					              {
					                  //alert(data);
					                  $("#purch_based_vendor").html(data);
					              }
				            });
					});
				$('body').on('click','.get_select',function () { var cnt = 0;
                        $("input:checked").map(function () { 
				            if($(this).val() != 'on')
                                {
                                  cnt++;
                                }
				          });  
				         // alert(cnt);
				          if(cnt>30)
				          {
				              $("#send_mail").css('display','none');
				              $("#send_mail_tech").css('display','none');
				          }
				          else
				          {
				              $("#send_mail").css('display','');
				              $("#send_mail_tech").css('display','');
				          }
				    });
					$("#send_mail").click(function(){
						 var vendor_value = '';
				          $("input:checked").map(function () { 
				            if($(this).val() != 'on')
{
if (vendor_value == '') 
				            {
				              vendor_value = $(this).val();
				            }
				            else
				            {
				              vendor_value = vendor_value+'!'+$(this).val();
				            }
}
				            //alert($(this).val());
				            //type_vendor = 1;
				          });
				          //alert(vendor_value);
				          var data = {
				          	'vendor_value' : vendor_value
				          };
				          var base_url = window.location.origin;
				            $.ajax({
				              type : 'post',
				              data : data,
				              url : base_url+'/vendor/index.php/Vendorlist/send_mails',
				              success : function(data)
				              {
				                  alert("Mail Sent Successfully");
				                  window.setTimeout(function() {
    window.location.href = 'http://partners.vvfltd.com/vendor/index.php/Vendorlist_user';
}, 1000);
				              }
				            });
					});

$("#send_mail_tech").click(function(){
						 var vendor_value = '';
				          $("input:checked").map(function () { 
if($(this).val() != 'on')
{
				            if (vendor_value == '') 
				            {
				              vendor_value = $(this).val();
				            }
				            else
				            {
				              vendor_value = vendor_value+'!'+$(this).val();
				            }
}
				            //alert($(this).val());
				            //type_vendor = 1;
				          });
				          //alert(vendor_value);
				          var data = {
				          	'vendor_value' : vendor_value
				          };
				          var base_url = window.location.origin;
				            $.ajax({
				              type : 'post',
				              data : data,
				              url : base_url+'/vendor/index.php/Vendorlist/tech_send_mails',
				              success : function(data)
				              {
				                  alert("Mail Sent Successfully");
				                  window.setTimeout(function() {
    window.location.href = 'http://partners.vvfltd.com/vendor/index.php/Vendorlist_user';
}, 1000);
				              }
				            });
					});
				});
			</script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type='text/javascript' src='https://code.jquery.com/jquery-1.12.4.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js'></script>
<script>
$(document).ready(function() {
    $('#exapletable').DataTable({
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
} );
</script>
			<!-- END MAIN CONTENT