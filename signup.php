<?php
include 'config/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Register</title>
 <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <main style="padding-top:10px; margin-top:70px; border-radius: 10px;">
  <div align = "center">
   <div style = "width:300px; border: solid 1px #333333; border-radius: 10px;" align = "left" >
    <div style = "background-color:#0170AF; color:#FFFFFF; padding:8px; text-align: center; border-radius: 10px;"><b>Register</b></div>
</head>
  <body background color="green"> 
    <div style = "margin:30px">
      <form action="config/reg.php" method="POST">
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$errors=array();
foreach ($errors as $error) {
  print_r($error);
} 
?>
        <font color="white">
       <div class="input-group">
    <label><b><i>Username:</i></b></label>
  <input type="text" name="username" placeholder="Enter Username here" style="border-radius: 3px;"/>
</div>
<div class="input-group">
    <label><b><i>Email:</i></b></label>
  <input type="email" name="email" placeholder="Enter Email here" style="border-radius: 3px;"/>
</div>
<div class="input-group">
    <label><b><i>Password:</i></b></label>
  <input type="password" name="password_1" placeholder="Choose Your Password" style="border-radius: 3px;"/>
</div>
<div class="input-group">
    <label><b><i>Confirm Password:</i></b></label>
  <input type="password" name="password_2" placeholder="Confirm your password" style="border-radius: 3px;"/>
</div><br/>
<button type="submit" name="submit" value="SUBMIT"  align="centre" style="border-radius: 3px;">Submit</button>
       <p> Registered?<a href="login.php" type="button" class="button">  Login  </a> </p>
       </font>
     </form>
   </div>
 </div>
</main>
</body>
</html>