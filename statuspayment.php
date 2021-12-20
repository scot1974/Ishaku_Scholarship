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
if (isset($_POST['submit'])) 
{ 
  $sname=$_POST['sname'];
  $fname=$_POST['fname']; 
  $app_id=$_POST['app_id'];
  $mail=$_POST['mail'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $school=$_POST['school'];
  $dept=$_POST['dept'];
  $level=$_POST['level'];
  $cgpa=$_POST['cgpa'];
  $scholarship=$_POST['scholarship'];
  $status=$_POST['status'];
  
  mysqli_query($con,"INSERT INTO application (sname,fname,app_id,mail,dob,gender,school,dept,level,cgpa,scholarship,status) VALUES ('$sname','$fname','$app_id','$mail','$dob','$gender','$school','$dept','$level','$cgpa','$scholarship','$status')");
  
  $msg="<div class='success'><center>Application Successfully</center></div>";
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-inverse ftco-navbar-light" id="ftco-navbar" style="margin-top: 3px;">
      <div class="container">
     <img id="brand-image" alt="logo" src="images/taraba-logo.PNG" style="width:70px; margin-right: 15px;">
      <a class="navbar-brand" href="index.html" style="color:white;">Taraba State Scholarship Management System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          
      <li class="nav-item active"><a href="user-home.html" class="nav-link" style="margin-right: 450px;">Home</a></li>  
      <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
      
        </ul>
      </div>
    </div>
  </nav>
    <div id="page-wrapper" >
            <div id="page-inner">             
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong><h4><i>Payment Status</i></h4></strong> Check Your Payment Status Below!!
                        </div>
                        <!-- Page Content -->                         
                          </nav><hr>
                          <!--Aplicant Personal & Academic Data-->
                       <div class="container-fluid">
                              <div class="col-lg-12">
                        <div class="card" style="margin-top: 30px;">
                            <div class="card-body">
                            <?php 
                            $result=mysqli_query($con,"SELECT id,acctName,acctNumber,bankName,acctType,status FROM bankdetails");
                            $row=mysqli_num_rows($result);
                            echo "<div class='container-fluid'>";
                            echo "</br></br>";
                            echo "<table class='table table-striped table-bordered'>";
                            echo "<tr align='center'>";
                            echo "<th>ID</th>";
                            echo "<th>Account Name</th>";
                            echo "<th>Account Number</th>";
                            echo "<th>Bank Name</th>";
                            echo "<th>Account Type</th>";
                            echo "<th>Status</th>";
                            echo "</tr>";

                            while ($retrive=mysqli_fetch_array($result)) 
                            {
                              $id=$retrive['id'];
                              $acctName=$retrive['acctName'];
                              $acctNumber=$retrive['acctNumber'];
                              $bankName=$retrive['bankName'];
                              $acctType=$retrive['acctType'];
                              $status=$retrive['status'];
                              echo "<tr align='center'>";
                              echo "<th>$id</th>";
                              echo "<th>$acctName</th>";
                              echo "<th>$acctNumber</th>";
                              echo "<th>$bankName</th>";
                              echo "<th>$acctType</th>";
                              echo "<th class='success'>$status</th>";
                              echo "</tr>";

                            }
                            echo "</table>";


                            ?>
                            </div>
                        </div>
                      </div>
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
    <!-- Optoinal JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</body>
</html>



                  

