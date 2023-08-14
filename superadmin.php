<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link href="css/stylelog.css" type="text/css" rel="stylesheet" />
	<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/rightde.js"></script>
	<link href="css/menu.css" rel="stylesheet" type="text/css" />

<title>Arogya Health Care Hospital</title>
</head>

<body>

	<link rel="stylesheet" href="css/hide.css">

	<div class="container">

		<?php
		include 'header.php';
		?>    
  	</div>

<br /><br />

<?php
include 'connect.php';
session_start();


	if (isset($_POST['topadun'])){

		$susername = stripslashes($_REQUEST['topadun']);
		$susername = mysqli_real_escape_string($con, $susername); 

		$password = stripslashes($_REQUEST['sadmpw']);
		$password = mysqli_real_escape_string($con, $password);


			if($susername=="superAdmin" && $password=="123" ){
				$_SESSION['topadun'] = $susername;
				header("Location: supadmopt.php");

			}else{
				$fail = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Invalid Username or Password</div>';
			}
	}
?>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-push-2  col-xs-12 ">

				<form method="post">
					<center>
						<img id="mimg" src="images/log/mimg.png" class="img-responsive" />
					</center><br>

					<div class="input-group input-group-lg">
						<span class="input-group-addon">
							<img style="width:30px" src="images/log/user.png" />
						</span>
					
						<input name="topadun" required="required" style=" height:52px; font-size:20px" id="field" type="text" class="form-control " placeholder="Username">
					</div>

					<br />
					<div class="input-group input-group-lg">
						<span class="input-group-addon">
							<img style="width:30px" src="images/log/lock.png" />
						</span>
					
						<input name="sadmpw" required="required" style=" font-size:20px; height:52px;" type="password" class="form-control " placeholder="Password">
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
						
						<div align="center">
							<br>
						</div>
					</div>
				</form>
				
			</div>
			
				<div style="font-size :18px; border-style: none  none none dotted; border-width: 2px; border-color: rgba(0, 0, 0, 0.2); height: 390px;text-align: justify;" class="col-md-4 col-md-push-2  col-xs-12 "><br>
					This the Top level Adminstration login form. Enter your login informations to login to system. 
				</div>
		</div>
	</div>
	<br>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/hidenv.js"></script>
	</body>
	
	<footer>
  		<?php include 'footer.php';?>
	</footer>
</html>
