<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

$id=$_GET['id'];
if (isset($id)) 
{
	$msg='';$msg1='';$msg2='';
	if (isset($_POST['changepass'])) 
	{
		$password=$_POST['pass'];
		$cpassword=$_POST['cpass'];
		if (empty($password)) 
		{
			$msg='<div class="error">Please Enter new Password</div>';
		}
		elseif (strlen($password)<5) 
		{
			$msg='<div class="error">Password must have atleast 5 Characters</div>';
		}
		elseif (empty($cpassword)) 
		{
			$msg2='<div class="error">Please Re-enter new Password</div>';
		}
		elseif ($password!=$cpassword) 
		{
			$msg2='<div class="error">Password is not same</div>';
		}
		else{
			$pass=md5($password);
			mysqli_query($con,"UPDATE users SET password='$pass' WHERE id='$id'");
			$msg1='<div class="success">Password Changed Successfully</div>';
		}
	}

	?>
	<title>Change Password</title>
	<style type="text/css">
	.error
		{
			color: red;	
		}
		
		.success
		{
			color: green;
			font-weight: bold;
		}
		#body-bg{
			background: url("images/s1.jpg") center no-repeat fixed;
		}
		.box{
			border: 1px solid gray;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 3px 3px 3px gray;
			background-color: lightyellow;
		}
	</style>
	</head>
	<body id='body-bg'>
		<div class='container' style='padding-top:50px;background: url("images/s1.jpg") center no-repeat fixed;;margin-top: 20px; margin-bottom: 20px; width: 1200px; height: 640px;'>
		<a href="profile.php"><button class='btn btn-outline-danger' style='float: right;'>Back</button></a>
		<div class='col-md-4 offset-md-4'>
		<div class='box'>
		<h2 align='center'>Change Password</h2>
		<center><?php echo $msg1; ?></center>
		<br>
		<form method="post">
			<label>Enter New Password :</label>
			<div class="form-group">
			<input type='password' name='pass' class='form-control' placeholder='Enter New Password'>
			<?php echo $msg; ?>	
			</div>
			<label>Re-enter New Password :</label>
			<div class="form-group">
			<input type='cpassword' name='cpass' class='form-control' placeholder='Enter New Password'>	
			<?php echo $msg2; ?>	
			</div>
			<center><button name='changepass' class='btn btn-success'>Submit</button></center>
		</form>	
		</div>
		</div>
		</div>
	</body>
	</html>

<?php 
}
else{
	header("location:login.php");
}
?>