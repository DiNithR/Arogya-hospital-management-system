<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="css/stylelog.css" type="text/css" rel="stylesheet" />
<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/hide.css">
<script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>
<title>Arogya Health Care hospital</title>
</head>

<body>
<br>
<?php include('lvlauth.php');?>
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header>
<div class="container">

    <?php
      include 'header.php';
    ?>
    
  </div>
<br />
<br /><br>

<!--Sub Menu appear Start here -->
<div class="container">
  <div class="row" style="text-align: center;">

        <table  class="table table-bordered" width="auto" border="0">
                <tr>
                   <td style="height: 50px; padding-top:15px">
                   <a href="patin.php" style="color: white;"><strong>Patients Registration</strong></a></td>

                   <td style="height: 50px; padding-top:15px">
                   <a href="patiinfo.php" style="color: white;">Patients Information</a></td>
                   
                   <td style="height: 50px; padding-top:15px">
                   <a href="petsearch.php" style="color: white;">Patients Search</a></td>

                   <td style="height: 50px; padding-top:15px">
                   <a href="supadm.php" style="color: white;"><strong>Patients Edit and Delete</strong></a></td>
                </tr>
        </table>

  </div>
</div>
<!--Sub Menu appear End here -->

<br>
<br>
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-5 col-xs-4 col-xs-offset-4">

</div>
</div>
</div>
<br />
<div class="container-fluid">
<div class="row">
	<div class="col-md-4 col-md-offset-4 col-xs-12 alert alert-danger"><div align="center">Enter [admin123] Details to login</div></div>
</div>
</div>
<div class="container-fluid">
<div class="row">
	<?php
	include 'connect.php';
	
    //insert values into the database.
    if (isset($_POST['sadmun'])){

		$username = stripslashes($_REQUEST['sadmun']);


		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['sadmpw']);
		$password = mysqli_real_escape_string($con,$password);

	//Checking database
    $query = "SELECT * FROM `sup_admin` WHERE `sadiun`='$username'and `sadipw`='".($password)."'";

		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['sadmun'] = $username;
			
			header("Location: supadminop.php"); 
            }else{
				$fail = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Invalid Username or Password</div>';
				}
    }
?>
<form action="" method="post">
<div class="col-md-4 col-md-offset-4 col-xs-12 ">
<div class="input-group input-group-lg"><span class="input-group-addon"></span>
  <input name="sadmun" required="required" style=" height:52px; font-size:20px" id="field" type="text" class="form-control " placeholder="Username" value="<?php echo $_SESSION['sadmun']; ?>">
</div>
<br />
<div class="input-group input-group-lg"><span class="input-group-addon"></span>
  <input name="sadmpw" required="required" style=" font-size:20px; height:52px;" type="password" class="form-control " placeholder="Password">
</div>
<br />
<div style="text-align:center;">
<button name="login" onclick="chcke();"  type="submit" value="SUBMIT" class="btn">SUBMIT</button>
<br>
<center><script type="text/javascript">
document.write('<?php echo $fail; ?>');</script></center>
<div align="center">
</div>

</div>
</form>

</div>
</div>
<br><br>

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