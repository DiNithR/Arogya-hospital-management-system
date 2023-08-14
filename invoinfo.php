
<?php include 'connect.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>
</head>
<body>
<link rel="stylesheet" href="css/hide.css">
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header><br>

<div class="container">

    <?php
      include 'header.php';
    ?>
</div><br><br><br>

<!--Sub Menu appear Start here -->
<div class="container">
<div class="row" style="text-align: center;">
        <table  class="table table-bordered" width="auto" border="0">
                <tr>
                   <td style="height: 50px; padding-top:15px">
                   <a href="invoinfo.php" style="color: white;">All Normal Patients Invoiceses</a></td>

                   <td style="height: 50px; padding-top:15px">
                   <a href="invoadinfo.php" style="color: white;">All Admitted Patients Invoiceses</a></td>
                </tr>
        </table>
</div>
</div>
<!--Sub Menu appear End here -->

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">All Normal [OPD] Patients Invoiceses</h3></div>
</div>
</div>
</div>
<div style="border-radius:10px; padding:10px;">
<div class="row">
<div class="col-md-12 ">
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>Staff No</strong></th>
<th><strong>Invoice.No</strong></th>
<th><strong>Date</strong></th>
<th><strong>Patient Reg No</strong></th>
<th><strong>Patient Name</strong></th>
<th><strong>Doctor Charge</strong></th>
<th><strong>Medecine Charge</strong></th>
<th><strong>Hospital Charge</strong></th>
<th><strong>Total Charge</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `pet_invo` ORDER BY `invo_id` DESC ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["invo_id"]; ?></td>
    <td align="center"><?php echo $row["invo_pet_id"]; ?> </td>
    <td align="center"><?php echo $row["invo_date"]; ?> </td>
    <td align="center"><?php echo $row["invo_Pet_name"]; ?></td>
    <td align="center">Rs. <?php echo $row["doc_charge"]; ?> </td>
    <td align="center">Rs. <?php echo $row["medi_charge"]; ?> </td>
    <td align="center">Rs. <?php echo $row["hos_charge"]; ?> </td>
    <td align="center">Rs. <?php echo $row["total_charge"]; ?></td>
    <td align="center"><a target="_blank" href="printopd.php?id=<?php echo $row["invo_id"]; ?> & ide=<?php echo $row["invo_pet_id"]; ?>" name="ad">View Invoice</a></td>


</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div></div>

</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>
<footer>
	 <?php include 'footer.php';?>
</footer>
</html>
