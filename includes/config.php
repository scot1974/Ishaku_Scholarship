<?php
$con = new mysqli('localhost', 'root', '', 'tssmsdb');

function display_scholar()
	{
		global $con;
		$query="SELECT * FROM scholarship";
		$result=mysqli_query($con,$query);
		while ($row=mysqli_fetch_array($result)) {
			$schName=$row['schName'];
			echo '<option value="'.$schName.'">'.$schName.'</option>';
		}
	}


	
?>