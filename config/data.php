<?php
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if (!$con) {
	echo "error connecting to the server".mysqli_connect_error();
	
}else{
	echo "connected successfully";
}
$sql='CREATE database nash';
if (mysqli_query($con,$sql)) {
	echo "database created successfully";
	else{
		echo "try again";
	}
}
mysqli_close($con);


?>