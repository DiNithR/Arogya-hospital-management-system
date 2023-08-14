<?php include 'connect.php';?>
<?php include 'pat.php';?>
<?php include 'lvlauth.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/roosi.css">
<script src="js/rooma.js"></script>
<script src="js/roominfo.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Arogya Health Care Hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
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
</div><br><br>

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Room Availability</h3></div>
<br/>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-push-3 col-xs-12">

</div>
</div>
</div>
<center>
  <?php include 'romc.php'; ?>
<table style=""    border="0" width="1100">
<tr>
  
</tr>
<tr>

  <td valign="top" ><center><div style="padding: 10px" align="left" id="infor1">


</div>
</div>
</div>
  <table  style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover">
  <thead>
  <tr>

  <th><strong>Room</strong></th>
  <th><strong>Room Number</strong></th>
  <th><strong>Doctor Morning</strong></th>
  <th><strong>Doctor Evening</strong></th>
  <th><strong>Room Avilability</strong></th>
  <th><strong>Patient Info ID</strong></th>
  <th><strong>Room Cleaning a.m</strong></th>
  <th><strong>Room Cleaning p.m</strong></th>
  <th></th>
  </tr>
  </thead>
  <tbody>
  <?php
  $count=1;
  $sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,staff.smfname,staff.smlname
  FROM hospi_room
  LEFT JOIN staff
  ON staff.staffID=hospi_room.room_drid  ORDER BY `room_id` ASC ";
  $result = mysqli_query($con,$sel_query);
  while($row = mysqli_fetch_assoc($result)) { ?>
  <tr valign="middle">

      <td  align="left"><?php echo $row["room_id"]; ?></td>
      <td  align="left"><?php echo $row["room_name"]; ?></td>
      <td  align="left"><?php echo $row["room_drid"]?>  | <a target="_blank" href="admitdf.php?id= <?php echo $row["room_drid"]; ?>">Doctor Information</a></td>
      <td  align="left"><?php echo $row["eroom_drid"]?> | <a target="_blank" href="admitdf.php?id= <?php echo $row["eroom_drid"]; ?>">Doctor Information</a></td>
      <td  align="left"><?php echo $row["room_avilabl"]; ?></td>
      <td  align="left"><?php echo $row["room_petID"]; ?> | <a target="_blank" href="admitpf.php?id= <?php echo $row["room_petID"]; ?>">Patient Information</a></td></td>
      <td  align="left"><?php echo $row["rc_time_mo"]; ?></td>
      <td  align="left"><?php echo $row["rc_time_ev"]; ?></td>
      <td  align="center"><a href="roomup.php?id=<?php echo $row["room_id"]; ?>" name="ad">Edit Room Information</a></td>

  </tr>

  <?php
  $count++; } ?>
  </tbody>
  </table>
</center>
</div>
</div>
</div>
<br>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script src="js/rooma.js"></script>
<script src="js/roominfo.js"></script>

</body>
<footer>
	 <?php include 'footer.php';?>
</footer>
</html>
