<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
$msg='';$msg1='';$msg2='';$msg3='';$msg4='';$email='';$date='';
if (isset($_POST['btnforgot'])) 
{
	$email=$_POST['email'];
	$date=$_POST['dob'];
	$password=$_POST['pass'];
	$cpassword=$_POST['cpass'];
	if (empty($email)) 
	{
		$msg="<div class='error'>Please Enter Your Email</div>";
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		$msg="<div class='error'>Please Enter Valid Email</div>";
	}
	else if (empty($date))
	{
		$msg2="<div class='error'>Please Enter Your Date of Birth</div>";
	}
	else if (empty($password)) 
	{
		$msg3="<div class='error'>Please Enter Password</div>";
	}
	else if (strlen($password)<5) 
	{
		$msg3="<div class='error'>Password must contain atleast 5 Characters</div>";
	}
	else if (empty($cpassword)) 
	{
		$msg4="<div class='error'>Please Enter Password</div>";
	}
	else if ($password!=$cpassword) 
	{
		$msg4="<div class='error'>Password Does Not Match</div>";
	}
	else if (email_exists($email,$con)) {
		$result=mysqli_query($con, "SELECT dob FROM users WHERE mail='$email'");
		$retrive=mysqli_fetch_array($result);
		$DOB=$retrive['dob'];
		if ($date==$DOB) 
		{
			$pass=md5($password);
			mysqli_query($con,"UPDATE users SET password='$pass'");
			$msg1="<div class='success'>Password Changed Successfully</div>";
		}
		else{
			$msg2="<div class='error'>Date of Birth is Wrong</div>";
		}
	}
	else
	{
		$msg="<div class='error'>Email Does not exists</div>";
	}
}
?>
<title>Forgot Password</title>
</head>
<style type="text/css">
	
	.error{

		color: red;
	}
	.success{
		color: green;
		font-weight: bold;
	}
	#body-bg{
		background: url("images/s1.jpg") center no-repeat fixed;
	}
</style>
<body id="body-bg">
<div class='container'>
	<div class='login-form col-md-4 offset-md-4'>
		<div class='jumbotron' style='margin-top: 20px; padding-top: 20px;padding-bottom: 20px;'>
		<h3 align='center'>Forgot Password</h3>
		<center><?php echo $msg1; ?></center><br>
		<form method='post'>
		<div class='form-group'>
		<label>Email :</label>
		<input type='email' name='email' class='form-control' placeholder='Enter Your Email'>
		<?php echo $msg; ?>
		</div>
		<div class='form-group'>
		<label>Date of Birth :</label>
		<input type='date' name='dob' class='form-control'>
		<?php echo $msg2; ?>	
		</div>
		<div class='form-group'>
		<label>New Password :</label>
		<input type='password' name='pass' class='form-control' placeholder='Enter Your New Password'>
		<?php echo $msg3; ?>	
		</div>
		<div class='form-group'>
		<label>Re-enter New Password :</label>
		<input type='password' name='cpass' class='form-control' placeholder='Re-enter New Password'>
		<?php echo $msg4; ?>	
		</div>
		<center><button class='btn btn-success' name='btnforgot'>Submit</button></center><br>
		<center><a href="login.php">Back</a></center>
		
		</form>
			
		</div>
		
	</div>
</div>
</body>