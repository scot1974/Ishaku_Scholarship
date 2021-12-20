<?php 
include("includes/header.php");
include("includes/config.php");
session_start();
$name=$_SESSION['name'];
if (isset($name)) 
{
    $result=mysqli_query($con,"SELECT id,first_name,last_name,mail,dob,img FROM users");
    $row=mysqli_num_rows($result);
    
}
else
{
    header("location:admin/admin-login.php");
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
                             <strong>Admin View Registered Applicants!!! </strong>
                        </div>
                            <?php
                            echo "<div class='container-fluid'>";
                            echo "Total Registered Users : ".$row;
                            echo "<table class='table table-striped table-bordered'>";
                            echo "<tr align='center'>";
                            echo "<th>S/NO</th>";
                            echo "<th>First Name</th>";
                            echo "<th>Last Name</th>";
                            echo "<th>Email</th>";
                            echo "<th>Date of Birth</th>";
                            echo "<th>Profile Image</th>";
                            echo "<th>Delete User</th>";
                            echo "<th>Edit User Details</th>";
                            echo "</tr>";
                            $i=0;
                            while ($retrive=mysqli_fetch_array($result)) 
                            {   
                                $id=$retrive['id'];
                                $fname=$retrive['first_name'];
                                $lname=$retrive['last_name'];
                                $mail=$retrive['mail'];
                                $date=$retrive['dob'];
                                $pro=$retrive['img'];
                                    echo "<tr align='center'>";
                                    echo "<th>".$i=$i+1;"</th>";
                                    echo "<th>$fname</th>";
                                    echo "<th>$lname</th>";
                                    echo "<th>$mail</th>";
                                    echo "<th>$date</th>";
                                    echo "<th><img src='images/$pro' height='100px' width='100px'></th>";
                                    echo "<th><a href='delete-admin.php?del=$id'><button class='btn btn-danger'>Delete</button></a></th>";
                                    echo "<th><a href='update-admin.php?user=$id'><button class='btn btn-success'>Update</button></a></th>";
                                    echo "</tr>";
                            }
                            echo "</table>";
                            
                            ?>
                               </div>
                            <!-- /. ROW  --> 
                          </div>
                        <!-- /. PAGE INNER  -->
                      </div>
                    <!-- /. PAGE WRAPPER  -->
                </div></div>
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

