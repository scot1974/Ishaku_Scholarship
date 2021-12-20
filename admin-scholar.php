<?php   
//Connection for database
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");
$msg = "";



if (isset($_POST['addScholar'])) 
{
  $sch_id=$_POST['sch_id'];
  $schName=$_POST['schName'];
  $status=$_POST['status'];
  $schAmount=$_POST['schAmount'];

  mysqli_query($con,"INSERT INTO scholarship (sch_id,schName,status,schAmount) VALUES ('$sch_id','$schName','$status','$schAmount')");
   $msg="<div class='success'><center>Scholarship Inserted Successfully</center></div>";
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
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12 ">
                        <!-- Page Content -->
                        <table class = "table table-hover table-condensed" class="ab1">
                        <tbody>
                        <?php

                        $result=mysqli_query($con,"SELECT id,sch_id,schName,status,schAmount,created FROM scholarship");
                        $row=mysqli_num_rows($result);
                        echo "<div class='container-fluid'>";
                        echo '<h3><i><br>Manage Scholarship</i><strong><?php echo $msg; ?></strong></h3>';
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
                        <!-- <a href="addScholar.php"><button type = "button" class = "btn btn-info" data-toggle = "modal" data-target = "#newScholarship"> Define New Scholarship </button></a> -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Scholarship</button>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Add Scholarship</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class='col-md-8 offset-md-2'>
                                          <div class='card'>
                                          <div class="card-body">
                                          <?php echo $msg; ?>
                                          <form method="post">
                                          <?php
                                            $rn=rand(1, 100);
                                            $num="SCH|".$rn;
                                              
                                            $sch_id =$num;
                                            ?>
                                      
                                          <label>Scholarship ID:</label>
                                          <div class="form-group">
                                          <input type='text' name='sch_id' class='form-control' placeholder='Enter Scholarship ID' value="<?php echo $sch_id;?>"readonly>
                                          </div>
                                          <label>Scholarship Name:</label>
                                          <div class="form-group">
                                          <input type='text' name='schName' class='form-control' placeholder='Enter Scholarship Name'>  
                                          <label>Scholarship Status:</label>
                                          <div class="form-group">
                                          <input type='text' name='status' class='form-control' placeholder='Enter Scholarship Status'>
                                          </div>
                                          <label>Amount:</label>
                                          <div class="form-group">
                                          <input type='text' name='schAmount' class='form-control' placeholder='Enter Scholarship Amount'>  
                                      
                                          </div>
                                          <center><button name='addScholar' class='btn btn-success'>Submit</button></center>
                                        </form> 
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--END OF MODEL-->
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
