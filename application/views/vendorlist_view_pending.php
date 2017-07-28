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
                                <a href="<?php echo base_url(); ?>index.php/Adminlogin" class="dropdown-toggle" data-toggle="dropdown"><span>Logout</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
                                    <li><a href="http://52.172.210.251/vendor/index.php/Adminlogin"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
function mail_send(start_index)
{
var vendor_value = '';

  var data = {
'pending_value' : $("#pending_value").text(),
'start_index' : start_index,
'last_index' : $("#pending_count").text(),
	};
var value = $("#pending_count").text();	
var base_url = window.location.origin;
				            $.ajax({
				              type : 'post',
				              data : data,
				              url : base_url+'/vendor/index.php/Vendorlist/send_mails_pending',
				              success : function(data)
				              {

alert(data);

				                  
				              }
				            });
}
$(function(){


					$('#select-all').click(function(event) {
				        var $that = $(this);
				        $(':checkbox').each(function() {
				            this.checked = $that.is(':checked');
				        });
				    });
				});
			</script>
<lable id="pending_val"><?php echo $pending_val; ?></lable>
<lable id="pending_count"  style="display:none">
<?php
   if (isset($vendor_pending_list) && count($vendor_pending_list)>0) 
   {
     echo count($vendor_pending_list);
   }
   ?>
</lable>
<lable id="pending_value" style="display:none">
<?php
$vendor_value1 = '';
	if (isset($vendor_pending_list) && count($vendor_pending_list)>0) {
		for ($i=0; $i < count($vendor_pending_list); $i++) {	
			if($vendor_pending_list[$i] != '')
				{

if($vendor_value1 == '')
{
$vendor_value1 = $vendor_pending_list[$i]['Vendor_id'];
}
else
{
$vendor_value1 = $vendor_value1.'!'.$vendor_pending_list[$i]['Vendor_id'];
}

 } } } 
echo $vendor_value1;
?>
</lable>
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
														<option value="<?php echo $purchaser_details[$i]['Purchaser_Email_ID']; ?>"><?php echo $purchaser_details[$i]['Purchaser_Name']; ?></option>
														<?php
															}
														}
														?>
													</select>
												</th>
												<th></th>
												<th></th>
												<th></th>
												<th></th>
											</tr>
											<tr>
												<th>select</th>
												<th>Sub Purchaser_Name</th>
												<th>ID</th>
												<th>Name</th>
												<th>Status</th>
												<th>Action</th>
												<!-- <th>Status</th> -->
											</tr>
										</thead>
										<tbody id="purch_based_vendor">
										<?php
											if (isset($vendor_pending_list) && count($vendor_pending_list)>0) {
												for ($i=0; $i < count($vendor_pending_list); $i++) {	
													if($vendor_pending_list[$i] != '')
													{

													?>
														<tr>
															<td><input type="checkbox" value="<?php echo $vendor_pending_list[$i]['Vendor_id']; ?>" id="<?php echo $vendor_pending_list[$i]['Vendor_id']; ?>"></td>
															<td><?php echo $vendor_pending_list[$i]['Sub_Purchaser_Name']; ?></td>
															<td><?php echo $vendor_pending_list[$i]['Vendor_id']; ?></td>
															<td><?php echo $vendor_pending_list[$i]['Name']; ?></td>
<td>
<?php 
if(isset($already_sent_list) && count($already_sent_list)>0)
{
$cnt =0;
for($m=0;$m<count($already_sent_list);$m++)
{
if($already_sent_list[$m]['vendor_id'] == $vendor_details[$i]['0']['Vendor_id'])
{
echo "sent";
}


}
}

?>
</td>
															<td>
																<form method="post" target="_new" action="<?php echo base_url(); ?>index.php/Vendordata">
																	<input type="text" name="vendor_id" style="display: none" value="<?php echo $vendor_pending_list[$i]['Vendor_id']; ?>" style="display:none">
																	<input type="submit" name="submit"  value="Check">
																</form>
															<!-- <a href="<?php echo base_url(); ?>index.php/Vendordetails"><span class="label label-success">Check</span></a> -->
															</td>
														</tr>
													<?php
													}
												}
											}
										?>
										</tbody>
									</table>
									<input type="checkbox" id="select-all" style="margin-left: 25px;"> Select All
								</div>
							</div>
							<div class="col-md-6">
								<button type="button" class="btn btn-primary" id="send_mail" style="float: right;">Send Mail</button>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
					
					</div>
					<div class="row" style="margin-top: 19px;">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
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
					$("#send_mail").click(function(){
						 var vendor_value = '';
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
				                  alert(data);
				              }
				            });
					});
				});
			</script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
<script type='text/javascript' src='https://code.jquery.com/jquery-1.12.4.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js'></script>
<script>
$(document).ready(function() {
    $('#exapletable').DataTable();
} );
</script>