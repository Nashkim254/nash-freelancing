<?php
$server="localhost";
$username="root";
$password="";
$db="freelancing";
 //check database connection
 $conn=mysqli_connect($server,$username,$password,$db);
 if (!$conn) {
 	# code...
 	die('Did not find database'.mysql_connect_error());	
 }
 $sql='CREATE TABLE contact (name VARCHAR(50) NOT NULL,email VARCHAR(50) NOT NULL,phone VARCHAR(10) NOT NULL,subject VARCHAR(50) NOT NULL,message VARCHAR(200) NOT NULL)';
 if (mysqli_query($conn,$sql)) {
 	echo'Table created';
 	# code...
 }
 else{
 	echo "table not created".mysqli_error($conn);
 }
 mysqli_close($conn);

?>