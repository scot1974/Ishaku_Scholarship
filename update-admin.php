<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

$msg='';$msg2='';$msg3='';$msg4='';$msg5='';$msg6='';$msg7='';$msg8='';$msg9='';
$id=$_GET['user'];
if (isset($id)) 
{
	$result=mysqli_query($con,"SELECT first_name,last_name,dob,mail FROM users WHERE id='$id'");
	$retrive=mysqli_fetch_array($result);
	$name=$retrive['first_name'];
	$last=$retrive['last_name'];
	$dob=$retrive['dob'];
	$mail=$retrive['mail'];
}
if (isset($_POST['btnupdate'])) 
	{	
	$firstname=mysql_real_escape_string($_POST['fname']);
	$lastname=mysql_real_escape_string($_POST['lname']);
	$email=mysql_real_escape_string($_POST['mail2']);
	$date=$_POST['dob2'];
	
	//echo $firstname."</br>".$lastname."</br>".$email."</br>".$date."</br>".$password."</br>".$c_password."</br>".$image."</br>".$checkbox;
	if (strlen($firstname)<3) 
		{
			$msg="<div class='error'>Firstname must contain atleast 5 characters</div>";
		}
		elseif (strlen($firstname)<3) {
			$msg2="<div class='error'>Lirstname must contain atleast 5 characters</div>";
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$msg3="<div class='error'>Enter Valid Email</div>";
		}

		elseif (empty($date))
		 {
			$msg4="<div class='error'>Please Enter Your Date of Birth</div>";
		}
	
	else
		{
			mysqli_query($con,"UPDATE users SET first_name='$firstname',last_name='$lastname',mail='$email',dob='$date' WHERE id='$id'");
			header("location:admin-home.html");
		}
		
	 }



?>
<title>Update User</title>
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
		background: url("images/s1.jpg") center no-repeat fixed;	
	}
</style>
<body id="body-bg">
<div class='container-fluid'>
	<div class='login-form col-md-4 offset-md-4'>
		<div class='jumbotron' style='margin-top: 20px; padding-top: 20px;padding-bottom: 20px;'>
		<h3 align='center'>Update User Details</h3><br>
		<?php echo $msg9;?>
		<br>
		<form method='post'>
		<div class="form-group">
			<label><b>First Name :</b></label>
			<input type="text" name='fname' placeholder="Your First Name" class='form-control'>
			<?php echo $msg;?>
		</div>
		<div class="form-group">
			<label><b>Last Name :</b></label>
			<input type="text" name='lname' placeholder="Your Last Name" class='form-control'>
		</div>
		<div class="form-group">
			<label><b>Email :</b></label>
			<input type="email" name='mail2' placeholder="Your Email" class='form-control' >
			<?php echo $msg3;?>
		</div>
		<div class="form-group">
			<label><b>Date of Birth :</b></label>
			<input type="date" name='dob2' class='form-control'>
			<?php echo $msg4;?>
		</div>
		
		<center><input type='submit' name='btnupdate' value='Update' class='btn btn-success'></center><br>
		</form>
			
		</div>
		
	</div>
</div>
</body>