<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/stylelog.css" type="text/css" rel="stylesheet" />
<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/rightde.js"></script>
<script type="text/javascript" src="js/rightde.js"></script>
<title>Arogya Health Care hospital</title>
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
</head>

<body>

	<?php
		include 'header.php';
	?>

<br />

<?php
include 'connect.php';
session_start();

	//insert values into the database.
	if (isset($_POST['sadmun'])){

		$typeb = "Basic Administartion";
		$typea = "Super Administartion";
		
		$username = stripslashes($_REQUEST['sadmun']);

		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['sadmpw']);
		$password = mysqli_real_escape_string($con,$password);

		$query = "SELECT * FROM `lvl2_admin` WHERE `lvtwusern` = '$username'and `lvtwpass` = '".($password)."'";
		$querysa = "SELECT * FROM `sup_admin` WHERE `sadiun` = '$username'and `sadipw` = '".($password)."'";

		$result = mysqli_query($con,$query) or die(mysqli_error());
		$resultsa = mysqli_query($con,$querysa) or die(mysqli_error());

		$rows = mysqli_num_rows($result);
		$rowss = mysqli_num_rows($resultsa);

		if($rows==1){
			$_SESSION['sadmun'] = $username;
			$_SESSION['admty']  = $typeb;
			header("Location: menu.php"); 
		}
		else if ($rowss==1){
			$_SESSION['sadmun'] = $username;
			$_SESSION['admty']  = $typea;
			header("Location: menu.php"); 
		}else{
			$fail = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Invalid Username or Password</div>';
		}
	}
?>

<div class="container">
<div class="row">
<div class="col-md-4 col-md-push-2  col-xs-12 ">
	
	<form action="" method="post">
	<center>
	<img id="mimg" src="images/log/mimg.png" class="img-responsive" />
	<br>
	<div >
    	<input name="sadmun" required="required" style=" height:52px; font-size:20px" id="field" type="text" class="form-control " placeholder="Enter Username">
  	</div>
	<div >
		<input name="sadmpw" required="required" style=" font-size:20px; height:52px;" type="password" class="form-control " placeholder="Enter Password">
	</div>
	
	<br />
	<div align="center">
	<button name="login" onclick="chcke();"  type="submit" value="SUBMIT" class="btn ">SUBMIT</button>
	<br>
		<center>
			<script type="text/javascript">
				document.write('<?php echo $fail; ?>');
			</script>
		</center>

	<div align='center'>
		<br>
	
	</div>

	</div>
	</form>

	</div>
		<div style="font-size :18px; border-style: none  none none dotted; border-width: 2px; border-color: rgba(0, 0, 0, 0.2); height: 390px;text-align: justify;" class="col-md-4 col-md-push-2  col-xs-12 "><br>
			<p>	This is the primary system login page for logging into the system. 
				You may input both the admin123 or dinth and admin administrator login information. If you are not already a member of the system, you may register by clicking
				<a target="_blank" style="font-colour='Blue'" href='superadmin.php'>Please Register Here</a>
			</p> 
			<p> Enter Login details using the credentials issued by the hospital administration.</p>
			<p><b>User Name :</b>admin, <b>Password :</b> 1234 </p>
			<p><b>User Name :</b>admin123, <b>Password :</b> 1234 </p>
			<p><b>User Name :</b>dinith, <b>Password :</b> 1234 </p>
		</div>
		
	</div>

		<br><br>

	</div>
</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
	<br>
<?php
include 'footer1.php';
?>
	
</html>
