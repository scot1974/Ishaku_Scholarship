<?php   
//Connection for database
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

$msg='';
if (isset($_POST['approved'])) 
{

  $status="Approved";
   $id=$_POST['id'];
 
  mysqli_query($con, "UPDATE application SET status = '{$status}' WHERE id = '{$id}'");

   $msg="<div class='success'><center>Application Approved</center></div>";
}

if (isset($_POST['rejected'])) 
{
  $status="Rejected";
  $id=$_POST['id'];
  mysqli_query($con,"UPDATE application SET status={$status} WHERE id={$id}");
    $msg="<div class='success'><center>Application Rejected</center></div>";
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
                             <strong style="text-align: center;"><?php echo $msg; ?> </strong>
                        </div>
                        <!-- Page Content -->
						<table class = "table table-hover table-condensed" class="ab1">
						<tbody>
						
                        <?php

                            $result=mysqli_query($con,"SELECT id,sname,fname,mail,dob,cgpa, scholarship FROM application");
                              $row=mysqli_num_rows($result);
                              echo "<div class='container-fluid'>";
                              echo "<h3><br><i>Pending Applications</i></h3>";
                              echo "<table class='table table-striped table-bordered'>";
                              echo "<tr align='center'>";
                              echo "<th>S/NO</th>";
                              echo "<th>First Name</th>";
                              echo "<th>Last Name</th>";
                              echo "<th>Email</th>";
                              echo "<th>Date of Birth</th>";
                              echo "<th>CGPA</th>";
                              echo "<th>Scholarship</th>";
                              echo "<th>Approve</th>";
                              echo "<th>Reject</th>";
                              echo "</tr>";
                              
                              while ($retrive=mysqli_fetch_array($result)) 
                              { 
                                $id=$retrive['id'];
                                $lname=$retrive['sname'];
                                $fname=$retrive['fname'];
                                $mail=$retrive['mail'];
                                $date=$retrive['dob'];
                                $cgpa=$retrive['cgpa'];
                                $scholarship=$retrive['scholarship'];
                                  echo "<tr align='center'>";
                                  echo "<th>$id</th>";
                                  echo "<th>$fname</th>";
                                  echo "<th>$lname</th>";
                                  echo "<th>$mail</th>";
                                  echo "<th>$date</th>";
                                  echo "<th>$cgpa</th>";
                                  echo "<th>$scholarship</th>";
                                  echo "<th><form action='' method='post'>
                                  <input type='hidden' name='id' value='{$id}'>
                                  <button class='btn btn-success' type='submit' name='approved'>Approve</button>
                                  </form></th>";
                                  echo "<th><form action='' method='post'>
                                  <input type='hidden' name='id' value='$id'>
                                  <button class='btn btn-danger' type='submit' name='rejected'>Reject</button>
                                  </form></th>";
                                  echo "</tr>";
                              }
                              echo "</table>";
                                 ?>
						      </tr>
						</table>
						</tr>
						</tbody>
						</table>
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
                    &copy;  Design by: <a href="https://webtechguides.com/hire-me/" style="color:#fff;" target="_blank">Web Tech Guides</a>
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
