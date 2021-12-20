<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
session_start();
if (logged_in())
{
	header("Location:login.php");
}
$msg='';

if (isset($_POST['btnsubmit'])) {
	$acctName=$_POST['acctName'];
	$acctNumber=$_POST['acctNumber'];
	$bankName=$_POST['bankName'];
	$acctType=$_POST['acctType'];
	$status=$_POST['status'];

	mysqli_query($con,"INSERT INTO bankDetails (acctName,acctNumber,bankName,acctType,status) VALUES ('$acctName','$acctNumber','$bankName','$acctType','$status')");
	 $msg="<div class='success'><center>Payment Details Successfully Entered!!!</center></div>";


}


?>
<title>Payment Status</title>
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
		<div class='jumbotron' style='margin-top: 25px; padding-top: 20px;padding-bottom: 20px;'>
		<h3 align='center'>Bank Details</h3><br>
		<?php echo $msg; ?>
		
		<br>
		<form method='post'>
		<div class="form-group">
			<label><b>Account Name:</b></label>
			<input type="text" name='acctName' placeholder="Enter Account Name" class='form-control'>
			
		</div>
		<div class="form-group">
			<label><b>Account Number:</b></label>
			<input type="text" name='acctNumber' placeholder="Enter Account Number" class='form-control'>
		</div>
		<div class="form-group">
			<label><b>Bank Name:</b></label>
			<input type="text" name='bankName' placeholder="Enter Bank Name" class='form-control' >
			
		</div>
		<div class="form-group">
			<label><b>Account Type:</b></label><br>
			<select class="form-control" name="acctType">
				<option>Select Account Type</option>
				<option value="savings">Savings</option>
				<option value="current">Current</option>
			</select>
			<input type="hidden" name="status" value="Not Paid">
			
		</div>
		
		<center><input type='submit' name='btnsubmit' value='Submit' class='btn btn-success'><a href="user-home.html"><input type='button' value='Back' class='btn btn-default' style="margin-left: 10px;"></a></center><br>
		</form>
			
		</div>
		
	</div>
</div>
</body>