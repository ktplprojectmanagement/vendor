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
Dear Business Partner ,<br>

Vendor ID : <?php if(isset($Vendor_id)) { echo $Vendor_id; } ?><br> 
Vendor Name : <?php if(isset($name)) { echo $name; } ?><br>

We have reviewed your information and found the below issues : <br>
<?php
$details = explode('!',$points_value);
$details1 = explode('!',$msg);
?>
 <table class="table table-bordered" style="border:1px solid grey">
    <thead>
      <tr>
        <th style="border:1px solid grey">Sr.NO</th>
        <th style="border:1px solid grey">Field To Check</th>
        <th style="border:1px solid grey">Reason</th>
      </tr>
    </thead>
    <tbody>
<?php
$cnt = 1;
for($i=0;$i<count($details);$i++)
{
?>
      <tr>
        <td style="border:1px solid grey"><?php echo $cnt; ?></td>
        <td style="border:1px solid grey"><?php echo $details[$i]; ?></td>
        <td style="border:1px solid grey"><?php echo $details1[$i]; ?></td>
      </tr> 
<?php
}
?>     
    </tbody>
  </table>
Kindly correct the above information and resubmit your application.<br>

Please click on below link to login to your portal.
<br>
<a href="http://partners.vvfltd.com/vendor/Login">Click here</a>

<br>
If you have any doubts please contact the below numbers :<br>
Rajeev : 9769823641<br>
Rupesh : 9819605982<br>

Regards,<br>
VVF GST Team
</div>

</body>
</html>

