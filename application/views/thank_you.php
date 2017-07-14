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
Dear Business Partner, <br>

Vendor Name : <?php if(isset($Name)) { echo $Name;} ?><br>
Vendor Code : <?php if(isset($vendor_id)) { echo $vendor_id;} ?><br>

We have received your details. We will get back to you if we need any further information. <br>

Thank you,<br>

VVF GST Team

</div>

</body>
</html>

