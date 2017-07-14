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
Dear Business Partner (<?php if(isset($Name)) { echo $Name; } ?>),<br>

With reference to previous mails and reminder mails in last two months on GST registration subject, we still haven’t received your GST registration on Portal. As you are aware, GST process is on full swing and is expected to roll out by 1st July 2017.<br>

 

As a business decision, our SAP system is being configured to block all the vendor codes without  GST registration by 1st June 2017. Accordingly, we shall not be able to do  any procurement from you nor will we be able to <br>make any payments to you.  You are requested to visit the below listed web link and provide necessary data confirmation and documents for completing GST registration to unblock the vendor code.  <br></br>

Your VVF SAP Vendor ID : <?php if(isset($vendor_id)) { echo $vendor_id;} ?><br>
Please click on below link to login to your portal.
<br>
<a href="http://partners.vvfltd.com/vendor/index.php/Vendorlogin/New_login/<?php if(isset($vendor_id)) { echo $vendor_id; } ?>/1" style="font-size: 20px;">Click here</a>
<br>
If you have any doubts please contact the below numbers :<br>
Rajeev : 9769823641<br>
Rupesh : 9819605982
 <p style="color: #bbb;">

</p>
</div>

</body>
</html>

