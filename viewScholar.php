<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
session_start();
if (logged_in())
{
  header("Location:login.php");
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
      <a class="navbar-brand" href="user-home.html" style="color:white;">Taraba State Scholarship Management System</a>
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
        <!-- /. NAV TOP  -->
        <!-- <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                  <li class="active-link">
                        <a href="user-home.html" ><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                                     
                </ul>
            </div>
        </nav> -->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                           
                 <!-- /. ROW  -->
                  
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong><h3><i>Scholarship Application Status</i></h3>  </strong> 
                        </div>
                        <!-- Page Content -->                         
                          </nav>
                          <!--Aplicant Personal & Academic Data-->
                        <div class='container-fluid' style='padding-top:10px;background-color:#fff;margin-top: 10px; margin-bottom: 30px; width: 900px;'>
                            <div class="col-lg-12">
                            <div class="card" style="margin-top: 50px;">
                            <div class="card-body">
                            <div id="user-div" style="">
 
                          <?php
                              $email=$_COOKIE['name'];
                              $result=mysqli_query($con,"SELECT id,sname,fname,level,scholarship,status FROM application WHERE mail='$email'");
                              $row=mysqli_num_rows($result);
                              echo "<div class='container-fluid'>";
                              echo "<table class='table table-striped table-bordered'>";
                              echo "<tr align='center'>";
                              echo "<th>S/NO</th>";
                              echo "<th>Last Name</th>";
                              echo "<th>First Name</th>";
                              echo "<th>Level</th>";
                              echo "<th>Scholarship</th>";
                              echo "<th>Status</th>";
                              
                              echo "</tr>";
                              $i=0;
                              while ($retrive=mysqli_fetch_array($result)) 
                              { 
                                $id=$retrive['id'];
                                $lname=$retrive['sname'];
                                $fname=$retrive['fname'];
                                $level=$retrive['level'];
                                $scholarship=$retrive['scholarship'];
                                $status=$retrive['status'];
                                  echo "<tr align='center'>";
                                  echo "<th>".$i=$i+1;"</th>";
                                  echo "<th>$fname</th>";
                                  echo "<th>$lname</th>";
                                  echo "<th>$level</th>";
                                  echo "<th>$scholarship</th>";
                                  echo "<th class='success'>$status</th>";

                                  
                                  echo "</tr>";
                              }
                              echo "</table>";
                                 ?>
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
<!-- <div class="footer">    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  Design by: <a href="https://webtechguides.com/hire-me/" style="color:#fff;" target="_blank">Scot Ezra Jnr</a>
                </div>
            </div>
        </div> -->
          
          

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



                  






    
                           