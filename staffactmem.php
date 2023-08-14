<?php include 'connect.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Arogya Health Care Hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
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
    
</div>
<br /><br><br>

<input id="admtee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">

<!--Sub Menu appear Start here -->
<div class="container">
<div class="row" style="text-align: center;">

        <table  class="table table-bordered" width="auto" border="0">
                <tr>
                   <td style="height: 50px; padding-top:15px">

                   <a href="staff.php" style="color: white;">Add Staff Member</a></td>
                   <td style="height: 50px; padding-top:15px">

                   <a href="staffmemd.php" style="color: white;">Staff Members Details</a></td>
                   <td style="height: 50px; padding-top:15px">

                   <a href="sestaffactmem.php" style="color: white;">Staff Member Search</a></td>
                   <td style="height: 50px; padding-top:15px">

                   <a href="staffactmem.php" style="color: white;">Active Membrs</a></td>            
                   <td style="height: 50px; padding-top:15px">

                   <a href="supadmst.php" style="color: white;">Staff Member Modifications</a></td>
                </tr>
        </table>

</div>
</div>
<!--Sub Menu appear End here -->

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Active Staff Members</h3></div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="container">
<div class="row">
<div><div>
<h4 style="font-family:calibri;" class="text-center">Full Time Staff Members</h4></div>
<br />
<table style="background-color:#FFD700; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>No</strong></th>
<th><strong>Reg No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` WHERE `smwoti` = 'Full'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

</div>

<div><div>
<h4 style="font-family:calibri;" class="text-center">Morning Staff Members</h4></div>
<br />
<table style="background-color:#FFD700; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>No</strong></th>
<th><strong>Reg No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` WHERE `smwoti` = 'Morning'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

</div>
<div><div>
<h4 style="font-family:calibri;" class="text-center">Evening Staff Members</h4></div>
<br />
<table style="background-color:#FFD700; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>No</strong></th>
<th><strong>Reg No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` WHERE `smwoti` = 'Evening'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</div>

<br>
<br>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admtee").value == x)
{
 document.getElementById("lockk").style.display = 'none';
}else{
  document.getElementById("lockk").style.display;
}

</script>
</body>
<footer>
  <?php include 'footer.php';?>
</footer>
</html>