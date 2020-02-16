<?php
session_start(); 
   $username = "";
   $email = "";
   $errors = array();
   ini_set('display_errors',1);
   error_reporting(E_ALL);

$db = mysqli_connect('localhost','root', '', 'freelancing');
if (isset($_POST['submit']))
{
$username= mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
$email= mysqli_real_escape_string($db,htmlspecialchars($_POST['email']));
$password_1= mysqli_real_escape_string($db,htmlspecialchars($_POST['password_1']));
$password_2= mysqli_real_escape_string($db,htmlspecialchars($_POST['password_2']));
//catch form fill errors
error_reporting(E_ALL);
if(empty($username)){
	array_push($errors, "Username is required. Try Again.");
}
if(empty($email)){
	array_push($errors, "Email is required. Try Again.");
}
if(empty($password_1)){
	array_push($errors, "Password is required. Try Again.");
}
if($password_1 != $password_2){
	array_push($errors, "Passwords do not match. Try Again.");
}
$user_check = "SELECT * FROM login WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check);
$user = mysqli_fetch_assoc($result);
if($user){
	if($user['username'] === $username){
		array_push($errors, "Username already exists. Try Again.");
	}
	if($user['email'] === $email){
		array_push($errors, "Email already exists. Try Again.");
	}
}
ini_set('display_errors',1);
error_reporting(E_ALL);
foreach ($errors as $error) {
  print_r($error);
}
if(count($errors) == 0) {
	$password = md5($password_1);
	$sql = "INSERT into login (username, email, password) 
	VALUES ('$username', '$email', '$password')";
	mysqli_query($db, $sql);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";
	header('location:../index.php');
}
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location:../login.php');
}
 

?>

