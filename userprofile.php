<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
$msg='';
session_start();
if (logged_in())
{
  header("Location:login.php");
}
else{

if (isset($_COOKIE['name']))
{
  $email=$_COOKIE['name'];
$result=mysqli_query($con,"SELECT id,first_name,last_name,dob,lga,state,school,dept,level,img FROM users WHERE mail='$email'");
$retrive=mysqli_fetch_array($result);
//print_r($retrive);
$id=$retrive['id'];
$firstname=$retrive['first_name'];
$lastname=$retrive['last_name'];
$date=$retrive['dob'];
$lga=$retrive['lga'];
$state=$retrive['state'];
$school=$retrive['school'];
$dept=$retrive['dept'];
$level=$retrive['level'];
$image=$retrive['img'];


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
</head>
<body>

      <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-inverse ftco-navbar-light" id="ftco-navbar" style="margin-top: 3px;">
      <div class="container">
     <img id="brand-image" alt="logo" src="images/taraba-logo.PNG" style="width:70px; height: 40px; margin-right: 15px;">
      <a class="navbar-brand" href="index.html" style="color: white;">Taraba State Scholarship Management System</a>
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
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome <?php echo ucfirst($firstname)." ".ucfirst($lastname) ?></strong> <h4>USER DASHBOARD</h4>
                        </div>
    
                            <div class='container' style='padding-top:10px;background-color:#fff; margin-bottom: 10px; width: 900px; '>
                              
                              <img src='images/<?php echo $image ?>' class='img-fluid img-thumbnail' style='width: 160px; margin-left: 0px; margin-right: 100px; float: right; margin-top: 40px;'><br>
                              <b></b><?php echo $msg; ?>
                              <div class="col-8">
                              <div class="card" style="margin-top: 10px;">
                                <div class="card-body">
                             <div id="user-div" style="">
                          <h1>User Profile</h1>
                       
                          <table class="table table-bordered">
                              <tbody>
                              
                                <tr>
                                  <td>FirstName</td>
                                  <td style="width:80%"><?php echo $firstname; ?></td>
                                </tr>
                                <tr>
                                  <td>Surname</td>
                                  <td style="width:80%"><?php echo $lastname; ?></td>
                                </tr>
                                <tr>
                                  <td>Email</td>
                                  <td style="width:80%"><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                  <td>Date of Birth</td>
                                  <td style="width:80%"><?php echo $date; ?></td>
                                </tr>
                                <tr>
                                  <td>Local Govt.</td>
                                  <td style="width:80%"><?php echo $lga; ?></td>
                                </tr>
                                <tr>
                                  <td>State</td>
                                  <td style="width:80%"><?php echo $state; ?></td>
                                </tr>
                                <tr>
                                  <td>School</td>
                                  <td style="width:80%"><?php echo $school ?></td>
                                </tr>
                                <tr>
                                  <td>Department</td>
                                  <td style="width:80%"><?php echo $dept; ?></td>
                                </tr>
                                <tr>
                                  <td>Level</td>
                                  <td style="width:80%"><?php echo $level; ?></td>
                                </tr>

                                 <?php
                              }
                            }
                            
                              ?>

                             </tbody>
                            </table>

                          </form>
  
                    <a href='change-password.php?id=<?php echo $id; ?>'><button class='btn btn-outline-primary' style='float: right; margin-right: 5px;'>Change Password</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
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
        </div>   -->  
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

<?php

?>