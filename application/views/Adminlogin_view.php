<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>VMS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSS -->
	<link rel="stylesheet" href="http://kritvainvestments.com/vendor/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://kritvainvestments.com/vendor/assets/css/vendor/icon-sets.css">
	<link rel="stylesheet" href="http://kritvainvestments.com/vendor/assets/css/main.min.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="http://kritvainvestments.com/vendor/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="http://kritvainvestments.com/vendor/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="http://vvf.kritva.in/images/Logo.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
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
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="logo text-center"><img src="http://vvf.kritva.in/images/Logo.png" alt="vendor portal" width="171px;"></div>
							<form class="form-auth-small" action="index.html">
								<div class="form-group">
									<label for="signup-email" class="control-label sr-only">Email</label>
									<input type="text" class="form-control" name="log" id="user_name" value=""  placeholder="Vendor Code"/>
								</div>
								<div class="form-group">
									<label for="signup-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="pwd" id="password" value="" placeholder="Password"/> 
								</div>
								
								 <input class="btn btn-primary btn-lg btn-block submit" type="button" name="login" id="complete" value="Log In"/>
								<!-- <a href="http://kritvainvestments.com/vendor/index.php/Admindashboard"><button type="button" class="btn btn-primary btn-lg btn-block">LOGIN</button></a> -->
								<div class="bottom">
									
									<label class="fancy-checkbox element-left">
										<a href="<?php echo base_url(); ?>index.php/Forgetpassword"><span>Forgot Password</span></a>
									</label>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Vendor Management System</h1>
							<p>VVF India Limited</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script  type="text/javascript" >
            function sj_forgetpw()
            {
                if (document.getElementById('fotget_pw').style.display == 'none')
                {
                    document.getElementById('fotget_pw').style.display = 'block';
                } else
                {
                    document.getElementById('fotget_pw').style.display = 'none';
                }
            }
            $(function(){
$("#password").keypress(function(e){
var key = e.which;
if(key == 13)  // the enter key code
{
var error = '';
                    if ($("#user_name").val() == '') 
                    {
                        error = "Please enter username";
                    }
                    else if ($("#password").val() == '') 
                    {
                        error = "Please enter password";
                    }                   
                    else
                    {
                        error = '';
                    }
                    if (error != '') 
                    {
                         $("#err_show").text(error);
                        $("#modal-container-204273").modal('show');
                        //alert(error);
                    }
                    else
                    {
                       var data = {
                            'username' : $("#user_name").val(),
                            'password' : $("#password").val()
                        };
                         var base_url = window.location.origin;
                        //alert(base_url+'/vendor/index.php/Vendordata');
                        $.ajax({
                              type : 'post',
                              data : data,
                              url : base_url+'/vendor/index.php/Vendorlogin/check',
                              success : function(data)
                              {
                                if (data == "added") 
                                {
                                    window.location.href = base_url+'/vendor/index.php/Vendordetails';
                                }
else if(data == "error1")
{
$("#err_show").text("Your vendor code has been approved.This link has now expired.");
                        $("#modal-container-204273").modal('show');
}
                                else if(data == "error1")
{
$("#err_show").text("Your vendor code has been approved.This link has now expired.");
                        $("#modal-container-204273").modal('show');
}
                                else
{
$("#err_show").text("Please enter valid login credentials");
                        $("#modal-container-204273").modal('show');
}
                                
                                  //alert(data);
                                  //$("#purch_based_vendor").html(data);
                              }
                        }); 
                    }
}
});
$("#user_name").keypress(function(e){
var key = e.which;
if(key == 13)  // the enter key code
{
var error = '';
                    if ($("#user_name").val() == '') 
                    {
                        error = "Please enter username";
                    }
                    else if ($("#password").val() == '') 
                    {
                        error = "Please enter password";
                    }                   
                    else
                    {
                        error = '';
                    }
                    if (error != '') 
                    {
                         $("#err_show").text(error);
                        $("#modal-container-204273").modal('show');
                        //alert(error);
                    }
                    else
                    {
                       var data = {
                            'username' : $("#user_name").val(),
                            'password' : $("#password").val()
                        };
                         var base_url = window.location.origin;
                        //alert(base_url+'/vendor/index.php/Vendordata');
                        $.ajax({
                              type : 'post',
                              data : data,
                              url : base_url+'/vendor/index.php/Vendorlogin/check',
                              success : function(data)
                              {
                                if (data == "added") 
                                {
                                    window.location.href = base_url+'/vendor/index.php/Vendordetails';
                                }
                                else if(data == "error1")
{
$("#err_show").text("Your vendor code has been approved.This link has now expired.");
                        $("#modal-container-204273").modal('show');
}
                                else
{
$("#err_show").text("Please enter valid login credentials");
                        $("#modal-container-204273").modal('show');
}
                              }
                        }); 
                    }
}
});
                $("#complete").click(function(){ 
                    var error = '';
                    if ($("#user_name").val() == '') 
                    {
                        error = "Please enter username";
                    }
                    else if ($("#password").val() == '') 
                    {
                        error = "Please enter password";
                    }                   
                    else
                    {
                        error = '';
                    }
                    if (error != '') 
                    {
                         $("#err_show").text(error);
                        $("#modal-container-204273").modal('show');
                        //alert(error);
                    }
                    else
                    {
                       var data = {
                            'username' : $("#user_name").val(),
                            'password' : $("#password").val()
                        };
                         var base_url = window.location.origin;
                        //alert(base_url+'/vendor/index.php/Vendordata');
                        $.ajax({
                              type : 'post',
                              data : data,
                              url : base_url+'/vendor/index.php/Vendorlogin/check',
                              success : function(data)
                              {
                                if (data == "added") 
                                {
                                    window.location.href = base_url+'/vendor/index.php/Vendordetails';
                                }
                               else if(data == "error1")
{
$("#err_show").text("Your vendor code has been approved.This link has now expired.");
                        $("#modal-container-204273").modal('show');
}
                                else
{
$("#err_show").text("Please enter valid login credentials");
                        $("#modal-container-204273").modal('show');
}
                              }
                        }); 
                    }
                    
                });
            });
        </script> 
	<!-- END WRAPPER -->
</body>

</html>
