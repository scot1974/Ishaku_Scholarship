<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

$msg='';$msg2='';$msg3='';$msg4='';$msg5='';$msg6='';$msg7='';$msg8='';$msg9='';$msg10='';$msg11='';$msg12='';$msg13='';$msg14='';
if (isset($_POST['btnsignup'])) 
{
	$firstname=mysql_real_escape_string($_POST['fname']);
	$lastname=mysql_real_escape_string($_POST['lname']);
	$email=mysql_real_escape_string($_POST['mail']);
	$date=$_POST['dob'];
	$lga=$_POST['lga'];
	$state=$_POST['state'];
	$school=$_POST['school'];
	$dept=$_POST['dept'];
	$level=$_POST['level'];
	$password=$_POST['pass'];
	$c_password=$_POST['cpass'];
	$image=$_FILES['image']['name'];
	$tmp_image=$_FILES['image']['tmp_name'];
	$size_image=$_FILES['image']['size'];
	$terms;
	$checkbox=isset($_POST['check']);
	//echo $firstname."</br>".$lastname."</br>".$email."</br>".$date."</br>".$password."</br>".$c_password."</br>".$image."</br>".$checkbox;
	if (strlen($firstname)<3) 
		{
			$msg="<div class='error'>Firstname must contain atleast 5 characters</div>";
		}
		elseif (strlen($lastname)<3) {
			$msg2="<div class='error'>Lastname must contain atleast 5 characters</div>";
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$msg3="<div class='error'>Enter Valide Email</div>";
		}
		elseif (email_exists($email,$con))
		{
			$msg3="<div class='error'>Email Exists</div>";
		}

		elseif (empty($date))
		 {
			$msg4="<div class='error'>Please Enter Your Date of Birth</div>";
		}
		elseif (empty($lga)) 
		{
			$msg5="<div class='error'>Please Enter Your L.G.A</div>";
		}
		elseif (empty($state)) 
		{
			$msg6="<div class='error'>Please Enter Your State</div>";
		}
		elseif (empty($school)) 
		{
			$msg7="<div class='error'>Please Enter School</div>";
		}
		elseif (empty($dept)) 
		{
			$msg8="<div class='error'>Please Enter Your Department</div>";
		}
		elseif (empty($level)) 
		{
			$msg9="<div class='error'>Please Enter Your Level of Study</div>";
		}
		elseif (empty($password))
		 {
			$msg10="<div class='error'>Please Enter Your Password</div>";
		}
		elseif (strlen($password)<5)
		 {
			$msg10="<div class='error'>Password must contain atleast 5 Character</div>";
		}
		elseif ($password!==$c_password) 
		{
			$msg11="<div class='error'>Password is not same</div>";
		}
		elseif ($image=='')
		 {
		$msg7="<div class='error'>Please Upload Your Profile Image</div>";
		}
		elseif ($size_image>=1000000)
		{
			$msg12="<div class='error'>Please Upload Image Less than 1MB</div>";
		}
		elseif ($checkbox=='')
	 {
			$msg13="<div class='error'>Please Agree Our Terms and Conditions</div>";
	}
	else
		{
			$password=md5($password);
			$img_ext=explode(".",$image);
			$image_ext=$img_ext['1'];
			$image=rand(1,1000).rand(1,1000).time().".".$image_ext;
			if($image_ext=='jpg' || $image_ext=='png' || $image_ext=='PNG' || $image_ext=='JPG')
				
			{
				move_uploaded_file($tmp_image,"images/$image");
			mysqli_query($con,"INSERT INTO users
				(first_name,last_name,mail,dob,lga,state,school,dept,level,password,img)
				VALUES('$firstname','$lastname','$email','$date','$lga','$state','$school','$dept','$level','$password','$image')");
			$msg14="<div class='success'><center>Your Are Successfully Registered</center></div>";
		}
		else
		{
			$img13="<div class='error'>Please Upload an Image File</div>";
		}
	 }
}


?>
<!DOCTYPE html>
<html>
<title>Sign Up Page</title>
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
	
	.error
	{
		color: red;	
	}
	
	.success
	{
		color: green;
		font-weight: bold;
	}
	#body-bg
	{
		background: url("images/4.jpg") center no-repeat fixed;	
	}
	h2{
		text-align: center;
	}
</style>
<body id="body-bg">
<div class='container'>
<!-- <div class="alert alert-info">
           
        </div> -->
        <strong><h2><i>WELCOME TO TARABA STATE SCHOLARSHIP BOARD</i></h2></strong>
	<div class='login-form col-md-4 offset-md-4'>
		
		<h3 align='center' style="color: #F0FFFF;"><i>Sign Up Form<i/></h3><br>
		
		<form method='post' enctype="multipart/form-data">
		<div class="form-group">
			<label><b>First Name :</b></label>
			<input type="text" name="fname" placeholder="Your First Name" class='form-control'>
			<?php echo $msg;?>
		</div>
		<div class="form-group">
			<label><b>Last Name :</b></label>
			<input type="text" name="lname" placeholder="Your Last Name" class='form-control'>
			<?php echo $msg2;?>
		</div>
		<div class="form-group">
			<label><b>Email :</b></label>
			<input type="email" name="mail" placeholder="Your Email" class='form-control'>
			<?php echo $msg3;?>
		</div>
		<div class="form-group">
			<label><b>Date of Birth :</b></label>
			<input type="date" name="dob" class='form-control'>
			<?php echo $msg4;?>
		</div>
		<div class="form-group">
			<label><b>L.G.A :</b></label>
			<input type="text" name="lga" placeholder="Enter Your L.G.A" class='form-control'>
			<?php echo $msg5;?>
		</div>
		<div class="form-group">
			<label><b>State :</b></label>
			<input type="text" name="state" placeholder="Enter Your State" class='form-control'>
			<?php echo $msg6;?>
		</div>
		<div class="form-group">
			<label><b>School :</b></label>
			<input type="text" name="school" placeholder="Enter Your School" class='form-control'>
			<?php echo $msg7;?>
		</div>
		<div class="form-group">
			<label><b>Department :</b></label>
			<input type="text" name="dept" placeholder="Enter Your Department" class='form-control'>
			<?php echo $msg8;?>
		</div>
		<div class="form-group">
			<label><b>Level :</b></label>
			<input type="text" name="level" placeholder="Enter Level Of Study" class='form-control'>
			<?php echo $msg9;?>
		</div>
		<div class="form-group">
			<label><b>Password :</b></label>
			<input type="password" name="pass" placeholder="Password" class='form-control'>
			<?php echo $msg10;?>
		</div>
		<div class="form-group">
			<label><b>Re-enter Password :</b></label>
			<input type="password" name="cpass" placeholder="Re-enter Password" class='form-control'>
			<?php echo $msg11;?>
		</div>
		<div class="form-group">
			<label><b>Profile Image :</b></label>
			<input type="file" name="image" />
			<?php echo $msg12; ?>
		</div>
		<div class="form-group">
			<input type='checkbox' name='check' />
			I agree the terms and conditions
			<?php echo $msg13;?>
		</div>
		<input type='submit' name='btnsignup' value='submit' class='btn btn-success'><br>
		<a href="login.php">Already Registered?</a>
		</form>

		
		
	</div>
</div>
</body>