<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
$msg='';
if (isset($_POST['addScholar'])) 
{
	$sch_id=$_POST['sch_id'];
	$schName=$_POST['schName'];
	$status=$_POST['status'];
	$schAmount=$_POST['schAmount'];

	mysqli_query($con,"INSERT INTO scholarship (sch_id,schName,status,schAmount) VALUES ('$sch_id','$schName','$status','$schAmount')");
	 $msg="<div class='success'><center>Scholarship Inserted Successfully</center></div>";
}

?>
	<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container-fluid" style="margin-top: 5px;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      <img src="images/taraba-logo.PNG" style="height: 40px;"/>
      <i>Taraba State Scholarship Management System</i></a>
    </div>
    <ul class="nav navbar-nav" style="margin-top: 10px; ">
      <li class="active"><a href="admin-home.html">Home</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right" style=" margin-top: 10px; margin-left: 500px; margin-right: 20px;"> 
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
         
        </div>
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong><?php echo $msg; ?></strong>
                        </div>
                        <div class='col-md-6 offset-md-2'>
							<div class='card'>
							<div class="card-body">
							<?php echo $msg; ?>
							<form method="post">
							<?php
								$rn=rand(1, 100);
								$num="SCH|".$rn;
									
								$sch_id =$num;
								?>
				 	
							<label>Scholarship ID:</label>
							<div class="form-group">
							<input type='text' name='sch_id' class='form-control' placeholder='Enter Scholarship ID' value="<?php echo $sch_id;?>"readonly>
							</div>
							<label>Scholarship Name:</label>
							<div class="form-group">
							<input type='text' name='schName' class='form-control' placeholder='Enter Scholarship Name'>	
							<label>Scholarship Status:</label>
							<div class="form-group">
							<input type='text' name='status' class='form-control' placeholder='Enter Scholarship Status'>
							</div>
							<label>Amount:</label>
							<div class="form-group">
							<input type='text' name='schAmount' class='form-control' placeholder='Enter Scholarship Amount'>	
					
							</div>
							<center><button name='addScholar' class='btn btn-success'>Submit</button></center>
						</form>	
						</div>
						</div>
						</div>
                     </div>
                </div>
            </div>
        </div>
	</body>
</html>

								