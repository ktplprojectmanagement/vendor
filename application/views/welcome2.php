<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="http://kritvainvestments.com/pmsuser/css/email.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">

a:hover {
    color: red;
}
div{
  line-height: 40px;
}
hr
{
  border: 2px solid #747272;
}
a{
   text-decoration: underline;
}
label{
  font-weight: bold;
}

  </style>
</head>
<body>

<div class="container">
  <div class="logo">
<img src="http://52.172.210.251/vendor/Logo.png" alt="VVF" style="max-width: 8%;">
<hr >
  </div>
  Dear support team,<br>
  The support request from vendor <?php if(isset($vendor_name)) { echo $vendor_name; } ?>
<br>
Vendor ID : <?php if(isset($vendor_id)) { echo $vendor_id; } ?>
<br>
Mobile Number : <?php if(isset($mob_number)) { echo $mob_number; } ?>
<br>
Email ID : <?php if(isset($email_validate)) { echo $email_validate; } ?>
<p>
Description : 
<?php
if (isset($msg)) {
  echo $msg;
}
?><br>
<div>
</div>
</p>
</div>
</p>
</div>

</body>
</html>

