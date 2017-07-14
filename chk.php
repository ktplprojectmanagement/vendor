<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appraiser Email</title>
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
<img src="http://vvf.kritva.in/images/Logo.png" alt="VVF" style="width:72px;max-width:72px">
<hr >
  </div>
Dear Business Partner,<br>

 

You would be aware of proposed GST law which is likely to be implemented any time from next financial year. As per GST council guidelines, all business entities need to have GST registration to avail credit benefit. Meanwhile, GST Council has announced State-wise dates of availing GST Provisional Registration. You are requested to proceed with registration process on immediate basis and share registration details along with copy of provisional GST registration certificate for smooth transition to GST regime.

 

You are requested to access the below weblink and follow the instructions to provide / validate certain critical information of your organization necessary for GST regime. We would appreciate your complete and comprehensive response in three working days from the date of receipt of this email.<br></br>

Your VVF SAP Vendor ID : <?php if(isset($vendor_id)) { echo $vendor_id;} ?><br>
Please click on below link to login to your portal.
<br>
<a href="http://kritva.in/vendor/index.php/Vendorlogin/New_login/<?php if(isset($vendor_id)) { echo $vendor_id; } ?>/1">Click here</a>
 <p style="color: #bbb;">
2016 &#169; Kritva Technology Pvt. Ltd.
</p>
</div>

</body>
</html>

