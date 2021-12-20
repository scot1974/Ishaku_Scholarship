<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

$msg='';
if (isset($_POST['notify'])) {
  $message=$_POST['message'];
  mysqli_query($con,"INSERT INTO notification (message) VALUES ('$message')");
  $msg="<div class='success'>Notification Sent Successfully</div>";
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
      <i style="color:white;">Taraba State Scholarship Management System</i></a>
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
                             <strong>Welcome to Admin Dasboard!!! </strong> You Have No pending Task For Today.
                        </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />

                <div class="row">
                    <div class="col-lg-12 ">
                        <!-- Page Content -->
						<form method="post">
                        <div class="form-group">
                        <label id="label" for="comment">Write your notification here:</label>
                        <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                        <button type="submit" name="notify" style="margin-top:10px; margin-left: 20px;" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                        </div>
                        </div>
						</div>
						</div>
						</div>  
						</div>
    <!-- /#page-content-wrapper -->
            		</div>
                <!-- /#wrapper -->
                </div>
              </div>
            <!-- /. ROW  --> 
          </div>
        <!-- /. PAGE INNER  -->
      </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  Design by: <a href="https://webtechguides.com/hire-me/" style="color:#fff;" target="_blank">Scot Ezra Jnr</a>
                </div>
            </div>
        </div>    
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
