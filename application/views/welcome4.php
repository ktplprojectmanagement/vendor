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
<img src="http://52.172.210.251/images/Logo.png" alt="VVF" style="max-width: 8%;">
<hr >
  </div>
  Dear support team,<br>
  The GST verification request from vendor ID <?php if(isset($vendor_id)) { echo $vendor_id; } ?>
<p>
<?php
if (isset($msg)) {
  echo $msg;
}
?><br>
<div>
</div>
</p>
<!-- 2016 &#169; Kritva Technology Pvt. Ltd. -->
</div>
</p>
</div>

</body>
</html>

