<!--NIKITA SONI-->
<!DOCTYPE html>
<!--HOME PAGE-->
<html lang="en">
<!--Head Section Starts-->
<head>
  <title>Home</title>
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--linking bootstrap cdn-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!--linking ajax library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
  
  <!--External css-->
  <link rel="stylesheet" type="text/css" href="css/w3.css" />
  <!--Internal css-->
  <style>
  
  
 #head1{
	background-image: url("images/4.jpg");
	background-size:cover;
	height:400px;
	background-repeat:no-repeat;
	clear:both;
}
.w3-bar-block .w3-bar-item {padding:20px}
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
	color:black;
} 

footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    
	opacity: 0.7;
    filter: alpha(opacity=70); 
	}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

  ul.a {
    list-style-type: circle;
}
.bottom{
  clear: both;
  width: 100%;
  text-align: center;
  background-color: black;
  margin-top: 100px;
}
#section{
  clear: both;
}
.section-header{
  text-align: center;
  margin-bottom: 30px;
  margin-top: 30px;
}
.section-header p{
  font-size: 18px;
}
.single-service{
  border:1px solid #ebebeb;
  text-align: center;
  background: #fff;
}
.service-bg{
  height: 200px;
  position: relative;
}
.service-bg-1{
  background: url("images/bg1.jpg");
  -webkit-background-size:cover;
  background-size: cover;
  background-position: center;
}
.service-bg-2{
  background: url("images/bg2.png");
  -webkit-background-size:cover;
  background-size: cover;
  background-position: center;
}
.service-bg-3{
  background: url("images/bg3.jpg");
  -webkit-background-size:cover;
  background-size: cover;
  background-position: center;
}
.service-bg h2{
  color:#fff;
  background: tomato;
  border:1px solid tomato;
  font-size: 17px;
  text-align: center;
  font-weight: 700;
  padding: 15px;
  position: absolute;
  left: 8%;
  width: 84%;
  margin: 0;
  bottom: -25px;
  border-radius: 50px;
  letter-spacing: 2px;
}
.single-service:hover .service-bg-h2{
  background: #fff;
  transition: .9s;
  color: tomato;
}
.service-text{
  padding: 50px 30px 20px;
  font-size: 15px;
  font-weight: 400;
}
.service-text p:last-child{
  margin: 0;
  line-height: 1.8;
}
.btn-area{
  display: inline-block;
  color: #333;
  font-size: 17px;
  font-weight: 700;
  margin-top: 30px;
  text-transform: capitalize;
}
#section{
  clear: both;
}
@media only screen and (max-width: 767px){
  .single-service{
    margin-top: 30px;
  }
  .service-bg h2{
    font-size: 13px;
  }
}
a:focus {outline: 0 solid}

h1,h2,h3,h4,h5,h6{
  margin: 0 0 15px;
  font-weight: 700;
}
html,
body{
  background: #ddd;
  font-family: poppins;
}
a{
  -o-transition: 0.3s;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  color: #333;
}
a:hover{ text-decoration: none; }
#footer{
  clear: both;
}
#p{
  color: #999;
  line-height: 25px;
}
#h3,h2{
  color: #fff;
}
#h2{
  font-size: 18px;
}
.footer-top{
  background: #111;
  padding: 80px; 0;
  height: 350px;
  margin-top: 30px;
}
.segment-one h3{
  font-family: Courgette;
  color: #fff;
  letter-spacing: 3px;
  margin: 10px 0;
}
.segment-two h2{
  columns: #fff;
  font-family: Poppins;
  text-transform: uppercase;
}
.segment-two h2:before{
  content: '|';
  color: #c65039;
  padding-right: 10px;
}
.segment-two ul{
  margin: 0;
  padding: 0;
  list-style: none;
}
.segment-two ul li{
  border-bottom: 1px solid rgba(255,255,255,0.3);
  line-height: 40px;
}
.segment-two ul li a{
  color: #999;
  text-decoration: none;
}
.segment-three h2{
  color: #fff;
  font-family: Poppins;
  text-transform: uppercase;
}
.segment-three h2:before{
  content: '|';
  color: #c65039;
  padding-right: 10px;
}
.segment-three a{
  background: #494848;
  width: 40px;
  height: 40px;
  display: inline-block;
  border-radius: 50%;
}
.segment-three a i{
  font-size: 20px;
  color: #fff;
  padding: 10px 12px;
}
.segment-four h2{
  color: #fff;
  font-family: Poppins;
  text-transform: uppercase;
}
.segment-four h2:before{
  content: '|';
  color: #c65039;
  padding-right: 10px;
}
.segment-four form input[type=submit]{
  background: #c65039;
  border:none;
  padding: 3px 15px;
  margin-left: -5px;
  color: #fff;
  text-transform: uppercase;
}
.footer-bottom-text{
  text-align: center;
  background: #000;
  line-height: 75px;
}
/*Responsive css*/
@media only screen and (min-width: 768px) and (max-width: 991px){
  .md-mb-30{
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 767px){
  .sm-mb-30{
    margin-bottom: 30px;
  }
  .footer-top{
    margin-top: 50px 0;
  }
}

  </style>
</head>
<!--HEAD Section Ends-->

<!--Body Section starts-->
<body style="background-color:#f0f0f0;">
<!--Nav Bar-->
<nav class="navbar navbar-inverse" ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Taraba State Scholarship Board</a>
    </div>
    
       <ul class="nav navbar-nav">
     <?php echo  "<li class=\"active\"><a href=\"home2.php\">Home</a></li>";?>
    <?php echo  "<li><a href=\"about_us.php\">ABOUT US</a></li>";?>
      
     <?php echo  "<li><a href=\"contact_us.php\">CONTACT US</a></li>";?>
       
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
<?php echo "<li><a href=\"signup.php\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>";?>
<!--<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
<?php echo "<li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>";?>
<?php echo "<li><a href=\"admin-login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Admin Login</a></li>";?>

    </ul>
  </div>
</nav>
<!--End oF nav bar-->

<!--Head Image-->
<div id="head1">

<!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food" >
    <div class="w3-quarter">
      <img src="images/favicon.ico" style="width:100px;height:100px;"/>
 </div>
 
<div class="w3-quarter">
<p style="color:navy;font-size:20px;"><i><br/><br/>Not sure, what you need? Contact us or visit our show 
homes to see which homes fit you and your family’s needs. 
Real_Estate_One has a variety of home style options and floorplans to suit you!</i></p>

</div>
</div>
</div>

<br/><br/>
<!--horizontal bar-->
<hr>
<!--images and discriptions-->
<div class="container" id="section">
  <div class="row">
    <div class="col-md-12">
      <div class="section-header">
        <h2></h2>
        <p></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="single-service">
        <div class="service-bg service-bg-1">
        <h2>About Sholarship Board:</h2>
        </div>

        <div class="service-text">
        <p>The Taraba State scholarship Board was established in 1976 when the State was created, with the primary responsibility of 
        </p>
        <a href="aboutScholar.php" class="btn-area">Read More <i class="fa fa-long-arrow-right"></i></a> 
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="single-service">
        <div class="service-bg service-bg-2">
        <h2>Local Scholarship</h2>
        </div>

        <div class="service-text">
        <p>There are five (5) different Local scholarship schemes for applicants wishing to apply for Local Scholarship.:- 
        </p>
        <a href="localScholar.php" class="btn-area">Read More <i class="fa fa-long-arrow-right"></i></a> 
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="single-service">
        <div class="service-bg service-bg-3">
        <h2>Criteria For Eligibility:</h2>
        </div>

        <div class="service-text">
        <p>•  Applications for postgraduate studies should possess a minimum of first degree with second class honours Upper Division.
        </p>
        <a href="Criteria.php" class="btn-area">Read More <i class="fa fa-long-arrow-right"></i></a> 
        </div>
      </div>
    </div>
  </div>
</div>

<!--Horizontal line-->

  <br/>
  <br/>
  <!--footer with slide show-->

<footer><div class="slideshow-container">
<p class="footer-bottom-text" id="p">All Right reserved by &copy;Scholarship Board.2019</p>


</div>
<br>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</footer>
</body>
<!--Body Section Ends-->
</html>
