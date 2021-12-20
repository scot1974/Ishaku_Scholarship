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
<title>Profile Page</title>
<style type="text/css">
	#body-bg{
		background: url("images/s1.jpg") center no-repeat fixed;
	}
	.success
	{
		color: green;
		font-weight: bold;
	}
</style>
</head>
<body id='body-bg'>
	<div class='container' style='padding-top:10px;background-color:#fff;margin-top: 20px; margin-bottom: 20px; width: 1200px; height: 1090px;'>
	<h2 align='center'>Welcome <?php echo ucfirst($firstname)." ".ucfirst($lastname) ?></h2>
	<a href="user.php"><button class='btn btn-outline-success' style='float: right;'>Back</button></a>
	<a href='change-password.php?id=<?php echo $id; ?>'><button class='btn btn-outline-primary' style='float: right; margin-right: 5px;'>Change Password</button></a>
	<img src='images/<?php echo $image ?>' class='img-fluid img-thumbnail' style='width: 160px;'><br>
	<b></b><?php echo $msg; ?>
	<div class="col-8">
	<div class="card" style="margin-top: 100px;">
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

                      
                            
</body>
</html>


<?php

?>