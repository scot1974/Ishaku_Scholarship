<?php   
//Connection for database
include("includes/header.php");
include("includes/config.php");
include("includes/functions.php");

$msg='';
if (isset($_POST['notify'])) {
  $message=$_POST['message'];
  mysqli_query($con,"INSERT INTO notification (message) VALUES ('$message')");
  $msg="<div class='success'>Notification Sent Successfully</div>";
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
  #comment{
    width: 500px;
    margin-left: 20px;
  }
  #h1{
    margin-left: 20px;
  }
  #label{
    margin-left: 20px;
  }
  .error
  {
    color: red; 
  }
  
  .success
  {
    color: green;
    font-weight: bold;
    text-align: center;
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
                       <div class="container-fluid" style="margin-top: 70px;">
                        <div class="card" style="margin-top: 20px; width: 600px;">
                        <?php echo $msg; ?>

                        <form method="post">
                        <div class="form-group">
                        <label id="label" for="comment">Write your notification here:</label>
                        <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                        <button type="submit" name="notify" style="margin-top:10px; margin-left: 20px;" class="btn btn-default">Submit</button>
                        <a href="admin-home.html"><button type="button" style="margin-top:10px; margin-left: 5px;" class="btn btn-default">Back</button></a>
                        </div>
                        </form>
                        </div>
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








