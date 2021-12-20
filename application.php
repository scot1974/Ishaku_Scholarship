<?php
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
session_start();
if (logged_in())
{
  header("Location:login.php");
}
$msg=''; $img1='';
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
  $image=$_FILES['image']['name'];
  $tmp_image=$_FILES['image']['tmp_name'];
  $size_image=$_FILES['image']['size'];


  $img_ext=explode(".",$image);
      $image_ext=$img_ext['1'];
      $image=rand(1,1000).rand(1,1000).time().".".$image_ext;
      if($image_ext=='jpg' || $image_ext=='png' || $image_ext=='PNG' || $image_ext=='JPG')
        
      {
        move_uploaded_file($tmp_image,"images/$image");
  
          mysqli_query($con,"INSERT INTO application (sname,fname,app_id,mail,dob,gender,school,dept,level,cgpa,matric_no,scholarship,img,status) VALUES ('$sname','$fname','$app_id','$mail','$dob','$gender','$school','$dept','$level','$cgpa','$matric_no','$scholarship','$image','$status')");
          
          $msg="<div class='success'><center>Application Successfully</center></div>";
        }
        else
            {
            $img13="<div class='error'>Please Upload an Image File</div>";
            }

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
      <a class="navbar-brand" href="index.html">Taraba State Scholarship Management System</a>
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
                <div class="row">
                    <div class="col-lg-12">
                     <h2>USER DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome King Scot!!! </strong> You Have No pending Task For Today.
                        </div>
                        <!-- Page Content -->                         
                          </nav><hr>
                          <!--Aplicant Personal & Academic Data-->
                        <h2><i>Application Form</i></h2> <?php echo $msg;?>
                        <hr>
                        
                        <div class="container-fluid">
                        <form name="myform" class="form-group">
                        <?php
                              $rn=rand(1, 100);
                              $num="TSSB|".$rn;
                                
                              $app_id =$num;
                            ?>
                          <div class="row">
                            <div class="col-md-6">
                            <label for="surname">Surname</label>
                            <input type="text" required="required" class="form-control" placeholder="Surname" name="sname" >
                            </div>

                            <div class="col-md-6">
                            <label for="firstname">Firstname</label>
                            <input type="text" required="required" class="form-control" placeholder="Firstname" name="fname" >
                            </div>

                            <div class="col-md-2">
                            <label for="app_id">Applicant ID</label>
                            <input type="text" required="required"> class="form-control" placeholder="Applicant ID" name="app_id" value="<?php echo $app_id;?>" readonly>
                            </div>

                            <div class="col-md-4">
                            <label for="email">Email Address</label>
                            <input type="text" required="required" class="form-control" placeholder="Email Address" name="mail" >
                            </div>

                            <div class="col-md-6">
                            <label for="date">Date of Birth</label>
                            <input type="date" required="required" class="form-control" placeholder="Date og Birth" name="dob" >
                            </div>

                            <div class="col-md-6">
                            <label for="gender">Gender</label>
                            <select style="float:right; height: 33px;" class="form-control" name="gender" required="required">
                              <option>Gender</option>
                              <option value="Female">Female</option>
                              <option value="Male">Male</option>
                            </select>
                            </div>

                            <div class="col-md-6">
                            <label for="school">School</label>
                            <input type="text" required="required" class="form-control" placeholder="School" name="school" >
                            </div>

                            <div class="col-md-6">
                            <label for="department">Department</label>
                            <input type="text" required="required" class="form-control" placeholder="Department" name="dept" >
                            </div>

                            <div class="col-md-6">
                            <label for="level">Level</label>
                            <input type="text" required="required" class="form-control" placeholder="Level" name="level" >
                            </div>

                            <div class="col-md-2">
                            <label for="cgpa">CGPA</label>
                            <input type="text" required="required" class="form-control" placeholder="CGPA" name="cgpa" >
                            </div>

                            <div class="col-md-4">
                            <label for="matric">Matric Number</label>
                            <input type="text" required="required" class="form-control" placeholder="Matric Number" name="matric_no" >
                            </div>

                            <div class="col-md-6">
                            <label for="scholar">Scholarship</label>
                            <select style="float:right; height: 33px;" class="form-control" >
                              <option>-Select Scholarship-</option>
                              <?php  display_scholar(); ?>
                            </select>
                            </div>

                            <!-- <div class="col-md-6">
                            <label for="upload">Upload TASSU Receipt :</label>
                            <input type="file" name="image" />
                            </div> -->

                            <div class="col-md-12" style="text-align: center; margin-top: 20px;">
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </form>
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



                  

    