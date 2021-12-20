<?php 

include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
session_start();
$msg='';$msg2=''; $fname=''; $dpass='';
if (isset($_POST['btnloggin']))
 {
	$fname=$_POST['name'];
	$password=$_POST['pass'];	
	if (empty($fname))
	 {
		$msg='<div class="error">Please Enter your Username</div>';
	}
	elseif (empty($password)) 
	{
		$msg2='<div class="error">Please Enter your Password</div>';
	}
	else
	{
		$pass=mysqli_query($con,"SELECT password FROM admin WHERE name='$fname'");
		$pass_w=mysqli_fetch_array($pass);
		$dpass=$pass_w['password'];
		if ($password!==$dpass)
		{
			$msg2='<div class="error">Password is wrong</div>';
		}
		else{
			$_SESSION['name']=$fname;			
			header("Location:admin-home.html");
		}
	}
}
?>
<!DOCTYPE html>
<html>
<title>Admin Login</title>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<style type="text/css">
	#body-bg{
		background: url("images/591.jpg") center no-repeat fixed;
	}
	.error{
		color: red;
	}
</style>

<body id='body-bg'>
<div class='container'>
	<div class='login-form col-md-4 offset-md-4'>
		
		<h2 align='center' style="color: #F0FFFF; margin-top: 100px;">Admin Login</h2><br>
		<form method='post'>
		<div class='form-group'>
			<label style="color: #F0FFFF;">User Name :</label>
			<input type='text' name="name" class='form-control' placeholder='Username' />
			<?php echo $msg; ?>
		</div>
		<div class="form-group">
			<label style="color: #F0FFFF;">Password  :</label>
			<input type='password' name="pass" class='form-control' placeholder='Password'/>
			<?php echo $msg2; ?>
		</div>
		<div class="form-group">
			<center><input type='submit' name='btnloggin' class='btn btn-success' /></center><center><a href="index.php">Back</a></center>
		</div>
		
			
			
		</form>
	</div>
</div>
</body>
</html>