
<?php include ('lvlauth.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/hide.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript" src="js/rightde.js"></script>
<title>Arogya Health Care Hospital</title>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/menu_my.css" rel="stylesheet" type="text/css" />
</head>
<body>

<header class="nav-down ">

<?php include_once('navbar.php');?>

</header>

<main>

	<?php
		include 'header.php';
	?>
<!--Sub Menu appear Start here -->
<div class="container">
<div class="row" style="text-align: center;">

        <table  class="table table-bordered" width="auto" border="0">
                <tr>
                   <td style="height: 50px; padding-top:15px">
                   <a href="patin.php" style="color: white;">Patient Information</a></td>
                   <td style="height: 50px; padding-top:15px">
                   <a href="roomavi.php" style="color: white;">Room Schedule</a></td>
                   <td style="height: 50px; padding-top:15px">
                   <a href="invo.php" style="color: white;">Patient Invoice</a></td>
                   <td style="height: 50px; padding-top:15px">
                   <a href="staff.php" style="color: white;">Staff Information</a></td>            
                   <td style="height: 50px; padding-top:15px">
                   <a href="admite.php" style="color: white;">Admitted Patient Information</a></td>
                </tr>
        </table>

</div>
</div>
<!--Sub Menu appear End here -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>

</main>
</body>

<?php include 'footer.php';?>



</html>
