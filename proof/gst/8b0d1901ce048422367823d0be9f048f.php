MAIN -->
		<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"></button>
					</div>
					<div class="navbar-header">
						Admin
					</div>
					<div id="navbar-menu" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-alarm"></i>
									<span class="badge bg-danger">5</span>
								</a>
								<ul class="dropdown-menu notifications">
									<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
									<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
									<li><a href="#" class="more">See all notifications</a></li>
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
									<table class="table table-striped">
										<thead>
											<tr>
												<th>select</th>
												<th>ID</th>
												<th>Name</th>
												<th>Type</th>
												<th>Action</th>
												<!-- <th>Status</th> -->
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="checkbox"></td>
												<td>Steve</td>
												<td>$122</td>
												<td>Oct 21, 2016</td>
												<td><a href="<?php echo base_url(); ?>index.php/Customerdetails"><span class="label label-success">Check</span></a></td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td>Steve</td>
												<td>$122</td>
												<td>Oct 21, 2016</td>
												<td><a href="<?php echo base_url(); ?>index.php/Customerdetails"><span class="label label-success">Check</span></a></td>
											</tr>
										</tbody>
									</table>
									<input type="checkbox" id="select-all" style="margin-left: 25px;"> Select All
								</div>
							</div>
							<div class="col-md-6">
								<button type="button" class="btn btn-primary" style="float: right;">Send Mail</button>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
				
					</div>
			</div>
				
				</div>
			</div>
			<!-- END MAIN CONTENT