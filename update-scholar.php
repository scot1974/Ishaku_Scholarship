<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

$msg='';$msg2='';$msg3='';$msg4='';$msg5='';$msg6='';$msg7='';$msg8='';$msg9='';
$id=$_GET['user'];
if (isset($id)) 
{
	$result=mysqli_query($con,"SELECT sch_id,schName,status,schAmount,created FROM scholarship WHERE id='$id'");
	$retrive=mysqli_fetch_array($result);
	$sch_id=$retrive['sch_id'];
	$schName=$retrive['schName'];
	$status=$retrive['status'];
	$schAmount=$retrive['schAmount'];
}
if (isset($_POST['btnupdate'])) 
	{	
	$sch_id=mysql_real_escape_string($_POST['sch_id']);
	$schName=mysql_real_escape_string($_POST['schName']);
	$status=mysql_real_escape_string($_POST['status']);
	$schAmount=$_POST['schAmount'];
	
	//echo $firstname."</br>".$lastname."</br>".$email."</br>".$date."</br>".$password."</br>".$c_password."</br>".$image."</br>".$checkbox;
	
	mysqli_query($con,"UPDATE users SET first_name='$firstname',last_name='$lastname',mail='$email',dob='$date' WHERE id='$id'");
	header("location:admin/admin-panel.php");
		
		
	 }



?>
<title>Update Scholarship</title>
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
		<h3 align='center'>Update Scholarship</h3><br>
		<?php echo $msg9;?>
		<br>
		<form method='post'>
		<div class="form-group">
			<label><b>Scholarship ID :</b></label>
			<input type="text" name='sch_id' placeholder="Enter Scholarship ID" class='form-control'>
			<?php echo $msg;?>
		</div>
		<div class="form-group">
			<label><b>Scholarship Name :</b></label>
			<input type="text" name='schName' placeholder="Enter Scholarship Name" class='form-control'>
		</div>
		<div class="form-group">
			<label><b>Status :</b></label>
			<input type="text" name='status' placeholder="Enter Scholarship Status" class='form-control' >
			<?php echo $msg3;?>
		</div>
		<div class="form-group">
			<label><b>Scholarship Amount :</b></label>
			<input type="text" name='schAmount' class='form-control' placeholder="Enter Scholarship Amount">
			<?php echo $msg4;?>
		</div>
		
		<center><input type='submit' name='btnupdate' value='Update' class='btn btn-success'></center><br>
		</form>
			
		</div>
		
	</div>
</div>
</body>