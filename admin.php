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




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    

    <!-- Custom CSS -->
    <link href="admin.css" rel="stylesheet">
    <style>
      .success
  {
    color: green;
    font-weight: bold;
  }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#">Welcome to Admin Panel</a></li>

                <li><a href="javascript:displayDiv('home-div','pending-div','reviewed-div','about-div')">Home</a></li>
                <li><a href="javascript:displayDiv('pending-div','home-div','reviewed-div','about-div')">Applications</a></li>
                <li><a href="javascript:displayDiv('reviewed-div','pending-div', 'home-div','about-div')">Scholarships</a></li>
                <li><a href="admin-panel.php">View Users</a></li> 
                <li><a href="notification.php">Notification</a></li>
                <li><a href="update-payemt.php">Update Payment</a></li>
                <li><a href="admin-login.php">Logout</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                        <div id="home-div" style="display:block">
                          <h4>TARABA STATE SCHOLARSHIP MANAGEMENT SYSTEM</h4><br><br>
                       <div class="panel panel-info">
            <!-- Default panel contents -->
            <button style="background-color:lightblue;text-align:left" bcoltype="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo">Notifications</button>
            <!-- List group -->
            <div id="demo" class="collapse">
            <ul class="list-group">
                <li class="list-group-item">Alison James has submitted his  Application.</li>
                    <li class="list-group-item">David Scott has submitted his  Application.</li>
                    <li class="list-group-item">12 new applications for Scholarship for Post-Graduate Study.</li>
            </ul>
      </div>
</div>

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <button style="text-align:left" bcoltype="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo1">Announcements</button>

  <div id="demo1" class="collapse">
      <!-- List group -->
      <ul class="list-group">
        <li class="list-group-item">Deadline for Scholarship for Post-Graduate Study applications is on N</li>
        <li class="list-group-item">The Application for COOPERATE is now open.</li>
        <li class="list-group-item">The Application for Fully Founded Genius Scholarship is now open.</li>
        <li class="list-group-item">Scholarship </li>
        <li class="list-group-item">The Application for COOPERATE is now open.</li>
      </ul>
  </div>
  </div>
</div>
<br />
<br />

<div id="pending-div" style="display:none">
<table class = "table table-hover table-condensed" class="ab1">
<tbody>
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
</tbody>
</table>
</div>
</div>
</div>  
</div>
 <div id="reviewed-div" style="display:none">
 <table class = "table table-hover table-condensed">
<tbody>

<?php

  $result=mysqli_query($con,"SELECT id,sch_id,schName,status,schAmount,created FROM scholarship");
  $row=mysqli_num_rows($result);
  echo "<div class='container'>";
  echo "<h3><br>Scholarship</h3>";
  echo "<a href='admin.php'><button class='btn btn-primary' style='float:right;'>Back</button><a/>";
  echo "</br></br>";
  echo "<table class='table table-striped table-bordered'>";
  echo "<tr align='center'>";
  echo "<th>S/NO</th>";
  echo "<th>Scholarship ID</th>";
  echo "<th>Scholarship</th>";
  echo "<th>Status</th>";
  echo "<th>Funding</th>";
  echo "<th>Date</th>";
  echo "<th>Update Scholarship</th>";
  echo "<th>Delete Scholarship</th>";
  echo "</tr>";
  $i=0;
  while ($retrive=mysqli_fetch_array($result)) 
  { 
    $id=$retrive['id'];
    $sch_id=$retrive['sch_id'];
    $schName=$retrive['schName'];
    $status=$retrive['status'];
    $schAmount=$retrive['schAmount'];
    $created=$retrive['created'];
      echo "<tr align='center'>";
      echo "<th>".$i=$i+1;"</th>";
      echo "<th>$sch_id</th>";
      echo "<th>$schName</th>";
      echo "<th>$status</th>";
      echo "<th>$schAmount</th>";
      echo "<th>$created</th>";
      echo "<th><a href='update-scholar.php?user=$id'><button class='btn btn-success'>Update</button></a></th>";
      echo "<th><a href='delete-admin.php?del=$id'><button class='btn btn-danger'>Delete</button></a></th>";
      
      echo "</tr>";
  }
  echo "</table>";

?>
</tbody>
</table>

<a href="addScholar.php"><button type = "button" class = "btn btn-info" data-toggle = "modal" data-target = "#newScholarship"> Define New Scholarship </button></a>
    </div>
    
           


 
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


    </script>

    <!-- Display Div Script -->
    <script type="text/javascript">
    function displayDiv(div1, div2, div3, div4, div5)
    {
       d1 = document.getElementById(div1);  // this is the div we want to disply
       d2 = document.getElementById(div2);  // the divs below are the div, pardon for inefficiency
       d3 = document.getElementById(div3);
       d4 = document.getElementById(div4);
       d5 = document.getElementById(div5);

       if( d1.style.display == "none" )
       {
          d1.style.display = "block";
          d2.style.display = "none";
          d3.style.display = "none";
          d4.style.display = "none";
          d5.style.display = "none";
       }

    }

    </script>
</body>
</html>
