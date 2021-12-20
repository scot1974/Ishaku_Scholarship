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
  mysqli_query($con, "UPDATE application SET status = '{$status}' WHERE id='{$id}'");
    $msg="<div class='success'><center>Application Rejected</center></div>";
}


?>


<?php echo $msg; ?>
  <?php

      $result=mysqli_query($con,"SELECT id,sname,fname,mail,dob,cgpa, scholarship FROM application");
  $row=mysqli_num_rows($result);
  echo "<div class='container'>";
  echo "<h3><br>Pending Applications</h3>";
  echo "<a href='admin.php'><button class='btn btn-primary' style='float:right;'>Back</button><a/>";
  echo "</br></br>";
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