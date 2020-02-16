<?php


include_once('db_connect.php');
if(isset($_POST['pass'])){
    $pin = mysqli_real_escape_string($con, $_POST['pass']);
	//$email = mysqli_real_escape_string($con, $_POST['email']);
	if($pin == 40505){
	echo "Confirmed. Proceed to Vote";
	}
	else{
	echo "Incorrect Pass Code. Please try again";
	}
}


?>