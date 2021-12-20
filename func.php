<?php
$con=mysqli_connect("localhost","root","","scholardb");
if (isset($_POST['btnsignup'])) {
	
	$firstname=mysql_real_escape_string($_POST['fname']);
	$lastname=mysql_real_escape_string($_POST['lname']);
	$email=mysql_real_escape_string($_POST['mail']);
	$date=$_POST['dob'];
	$lga=$_POST['lga'];
	$state=$_POST['state'];
	$school=$_POST['school'];
	$dept=$_POST['dept'];
	$level=$_POST['level'];
	$password=$_POST['pass'];
	$c_password=$_POST['cpass'];
	$image=$_FILES['image']['name'];
	$tmp_image=$_FILES['image']['tmp_name'];
	$size_image=$_FILES['image']['size'];
	$terms;
	$checkbox=isset($_POST['check']);
	//echo $firstname."</br>".$lastname."</br>".$email."</br>".$date."</br>".$password."</br>".$c_password."</br>".$image."</br>".$checkbox;
	if (strlen($firstname)<3) 
		{
			$msg="<div class='error'>Firstname must contain atleast 5 characters</div>";
		}

}
?>