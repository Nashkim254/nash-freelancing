<?php
$servername="localhost";
$username="root";
$password="";
//create connection
$conn=mysqli_connect($servername,$username,$password);
//check connection
if(!$conn){
	die ("connection failed".mysql_connect_error());
}
//sql statement to create database
$sql='CREATE DATABASE freelancing';
//check error!
if (mysqli_query($conn,$sql)) {
	echo "database  created:";
}
	else  { 
		echo "database not created:".mysqli_error($conn);
		# code...
	}
mysqli_close($conn); 


?>