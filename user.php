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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="user.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#">TSSB</a></li>
                <li><a href="javascript:displayDiv('home-div','user-div','apply-div','view-div','financial-div','accomplishments-div','about-div')">Home</a></li>
                <li><a href="userprofile.php">User Profile</a></li>
                <li><a href="application.php">Apply Scholarship</a></li>
                <li><a href="viewScholar.php">View Application Status</a></li>
                  <li><a href="statuspayment.php">View Payment Status</a></li>
                <li><a href="">About</a></li>
                <li><a href="logout.php">Logout</a></li>
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

                          <h4>TARABA STATE SCHOLARSHIP BOARD</h4><br><br>
                          
                            <div class="panel panel-info">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Notifications</div>

                            <!-- List group -->
                            <ul class="list-group">
                              <li class="list-group-item">Your application for COOPERATE has been approved.</li>
                              <li class="list-group-item">Your application for MOVE UP has been signed by the OIL Vice President.</li>
                            </ul>
                          </div>

                          <div class="panel panel-primary">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Announcements</div>

                            <!-- List group -->
                            <ul class="list-group">
                              <li class="list-group-item">Deadline of Submission of Accomplishments Form in on July 13, 2015 11:59 PM.</li>
                              <li class="list-group-item">Deadline of Submission of Financial Reports is on December 5, 2015 11:59 PM.</li>
                              <li class="list-group-item">The Application for MOVE UP is now open.</li>
                              <li class="list-group-item">Porta ac consectetur acusamus et iusto odio dignissimos ducimus qui blanditiis praes</li>
                              <li class="list-group-item">Vestibulum at eros corrupti quos dolores et quas molestia voluptas assumenda est, omnisat.</li>
                            </ul>
                          </div>
                        </div>

                       

                        <div id="apply-div" style="display:none">
                          <h1>Apply for Scholarship</h1>                         
                            <table class = "table table-hover table-condensed">
                              <thead>
                                <tr>
                                  <th class = "col-md-1">Scholarship ID</th>
                                  <th class = "col-md-1">Scholarship Name</th>                    <th class = "col-md-1">Status</th>
                                  <th class = "col-md-1">Amount</th>
                                  <th class = "col-md-1">Grantees</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><a href="studentProfile.php" data-toggle="modal" data-target="#scholarshipDescription">COOPERATE</a></td>
                                  
                                  <td>Ongoing</td>
                                  <td>N100,000</td>
                                  <td>N100,000</td>
                                  <td>N100,000</td>
                                  <td>
                                    <button type = "button" class = "btn btn-info" data-toggle = "modal" data-target = "#grantees">View</button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>

                            <div class="modal fade" id="scholarshipDescription" role="Dialog">
                              <div class="modal-dialog">
                                <div class = "modal-content">
                                  <div class = "modal-header">
                                    <button type = "button" class = "close" data-dismiss = "modal">&times;</button>
                                    <h4 class = "modal-title">Description</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type = "button" class = "btn btn-default" data-dismiss = "modal"> Close </button>
                                  </div>
                                </div>
                              </div>
                            </div>




                        <div id="view-div" style="display:none">
                          <h1>View Scholarship Status</h1>
                          <p>Nunc elementum aliquet ante. Quisque tempus nec quam sed.</p>
                          <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th style="width:85%">Scholarship</th>
                                  <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="width:90%">MOVE UP (Mobility for Vigor and Excellence)</td>
                                <td class = "success">Approved</td>
                              </tr>
                              <tr>
                                <td style="width:90%">COOPERATE (Continuous Operational and Outcomes-based Partnership for Excellence in Research and Academic Training Enhancement)</td>
                                <td class = "info">Pending</td>
                              </tr>
                              <tr>
                                <td style="width:90%">MOVE DOWN (Mobility for Walang Masabi and Extras)</td>
                                <td class = "warning">Rejected</td>
                              </tr>
                            </tbody>
                          </table>

                          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit.</p>

                        </div>

                        <div id="financial-div" style="display:none">
                          <h1>Financial Report</h1>
                          <p>Proin sit amet velit vel justo euismod luctus vel ac quam.</p>
                          <div class="form-group">
                            <label for="comment">Write your report here:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                            <button type="submit" style="margin-top:5px" class="btn btn-default">Submit</button>
                          </div>
                          <p>Duis molestie varius tristique. Sed vehicula ligula eget.</p>

                        </div>

                        <div id="accomplishments-div" style="display:none">
                          <h1>Accomplishments Form</h1>
                          <p>Morbi vel elit ut dolor sollicitudin laoreet sit amet in.</p>
                          <div class="form-group">
                            <label for="comment">Write your report here:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                            <button type="submit" style="margin-top:5px" class="btn btn-default">Submit</button>
                          </div>

                          <p>Ut eget tellus lectus. Ut quis orci et tellus condimentum.</p>

                        </div>

                        <div id="about-div" style="display:none">
                          <h1>About</h1>
                          <p>Pellentesque id scelerisque magna. Morbi eget nibh tellus. </p>
                        </div>

                    </div>
                </div>
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
      var button = document.getElementById('showDivButton'); // Assumes element with id='button'
      button.onclick = function() {
          var div = document.getElementById('editDiv');
          if (div.style.display !== 'none') {
              div.style.display = 'none';
          }
          else {
              div.style.display = 'block';
          }
      };

      function displayDiv(div1, div2, div3, div4, div5, div6, div7)
      {
         d1 = document.getElementById(div1);  // this is the div we want to disply
         d2 = document.getElementById(div2);  // the divs below are the div, pardon for inefficiency
         d3 = document.getElementById(div3);
         d4 = document.getElementById(div4);
         d5 = document.getElementById(div5);
         d6 = document.getElementById(div6);
         d7 = document.getElementById(div7);

         if( d1.style.display == "none" )
         {
            d1.style.display = "block";
            d2.style.display = "none";
            d3.style.display = "none";
            d4.style.display = "none";
            d5.style.display = "none";
            d6.style.display = "none";
            d7.style.display = "none";
         }
      }
    </script>
</body>
</html>
