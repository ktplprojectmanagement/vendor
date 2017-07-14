<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" href="http://kritvainvestments.com/pmsuser/css/email.css">
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
<img src="http://vvf.kritva.in/images/Logo.png" alt="VVF" style="max-width: 8%;">
<hr >
  </div>
Dear Business Partner (<?php if(isset($name)) { echo $name; } ?>),<br>

This link is valid only for 24hours.<br>
Please click on below link to update your password : 
<a href="<?php echo base_url(); ?>index.php/Vendorlogin/New_login/<?php if(isset($vendor_id)) { echo $vendor_id; } ?>">Click Here</a>
 <p style="color: #bbb;">
2016 &#169; Kritva Technology Pvt. Ltd.
</p>
</div>

</body>
</html>

