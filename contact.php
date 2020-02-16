<?php 
include_once("config/conn.php"); 
$msg=$name=$email=$phone=$subject=$message="";
if(isset($_POST['send'])){
$to = "kimutainashon@gmail.com";
$name = mysqli_real_escape_string($conn, $_POST ["name"]);
$email = mysqli_real_escape_string($conn, $_POST ["email"]);
$phone = mysqli_real_escape_string($conn, $_POST ["phone"]);
$subject =mysqli_real_escape_string($conn, $_POST ["subject"]);
$message = mysqli_real_escape_string($conn, $_POST ["message"]);
  
if((trim($name) == '')||(trim($email) == '')||(trim($phone) == '')||(trim($subject) == '')||(trim($message) == '')){
 $white_error="Your message cannot consist of blank space. Please ensure you fill in valid details in all the fields";
 echo "<script>alert('You message cannot consist of bank space. Please ensure you fill in valid details in all the fields')</script>";
}
    
//Validate Name
if(preg_match("/^([0-9]){1,10}$/",$name)){
    $name_error="Your Name should consist of only letters";
    echo "<script>alert('Your Name should consist of only letters')</script>";
}
//Validate Name length
if((strlen($name)<3)||(strlen($name)>30)){
    $name_length="Your Name is either too short or too long.";
    echo "<script>alert('Your Name is either too short or too long.')</script>";
}
//Validate phone
if(!preg_match("/^([0-9]){1,10}$/",$phone)){
    $phone_error="Phone should consist of numbers only";
    echo "<script>alert('Phone should consist of numbers only')</script>";
}
//Validate Phone length
if((strlen($phone)<10)||(strlen($phone)>16)){
    $phone_length="Please insert a valid phone number.";
    echo "<script>alert('Please enter a valid phone number.')</script>";
}
//Validate Email
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email_error="Please enter a valid email";
    echo "<script>alert('Please enter a valid email')</script>";
}
//Validate Subject
if(preg_match("/^([0-9]){1,10}$/",$subject)){
    $subject_error="Include only letters in the subject";
    echo "<script>alert('Include only letters in the subject')</script>";
}
//Validate Name length
if((strlen($subject)<10)||(strlen($subject)>150)){
    $subject_length="The subject is either too short or too long";
    echo "<script>alert('The subject is either too short or too long')</script>";
}
//Validate Message length
if(strlen($message)<10){
    $msg_length="This message is too short.";
    echo "<script>alert('This message is too short.')</script>";
}
    
$body = <<<EOD
<center><h1 style="text-shadow: 1px 2px 2px #FF9900;color: #0170AF;font-size:35px;font-weight:bold; padding-bottom:20px;
border-bottom:2px solid #FF9900; width:100%; margin-bottom:10px;background-color:#DFE3EE">TASSMU</h1></center>

<p style="color:#333333; margin-bottom:20px;">This email was sent through TASSMU Website</p>

<table cellspacing="10" style="padding-bottom:20px;background-color:#FFFFCC; width:100%;">
<tr><td style="color:#336600">Name</td><td style="color:#333333"> $name </td></tr>
<tr><td style="color:#336600">Email</td><td style="color:#333333"> $email </td></tr>
<tr><td style="color:#336600">Phone</td><td style="color:#333333"> $phone </td></tr>
<tr><td style="color:#336600">Subject</td><td style="color:#333333"> $subject </td></tr>
<tr><td style="color:#336600">Message</td><td style="color:#333333"> $message </td></tr>
</table>
<hr style="color:#FF9900;width:100%; margin-top:10px;"/>
EOD;
$from_add = $email; 
$headers = "From: $from_add \r\n";
$headers .= "Reply-To:  $email\r\n";
$headers .= "Return-Path: $email\r\n";
$headers .= "X-Mailer: PHP \r\n";
$headers .= "Content-type: text/html\r\n";
if((empty($name_error))&&(empty($name_length))&&(empty($phone_error))&&(empty($phone_length))&&(empty($email_error))
	&&(empty($subject_error))&&(empty($subject_length))&&(empty($white_error))&&(empty($msg_length))){ 
	
//if(mail($to,$subject,$body,$headers)){
	/* 	$msg = "Congratulations $fname!Your form have successifully been submited.Please wait for our reply as we process your information.";
		} 
	else{
 	   $msg = "We encountered an error sending your email!";
	    } */
	 }
    }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Contact us | TNFS</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" href="images/logo/favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
    $("header ul [href]").each(function() {
    if (this.href.split("?")[0] == window.location.href.split("?")[0]) {
        $(this).addClass("active");
        }
    });
        
         $("#mobile_menu").click(function(){
        $("nav").slideToggle("slow");
    });
});
    </script>
</head>
<body>
<?php include_once("config/header.php"); ?> 

<div class="container">
<div class="row">
<div class="col-sm-9">
        <h3>Contact us</h3>
 <div class="row">
  <div class="col-sm-7">
 <form role="form" action="contact.php" method="post">
  <div class="form-group">
    <label for="name">Your Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="tel">Phone Number:</label>
    <input type="text" class="form-control" id="tel" name="tel">
  </div>
  <div class="form-group">
    <label for="subject">Message Subject:</label>
    <input type="subject" class="form-control" id="subject" name="subject">
  </div>
   <div class="form-group">
  <label for="message">Your Message:</label>
  <textarea class="form-control" rows="5" id="message" name="message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="send"><span class="glyphicon glyphicon-send"></span> Send Message</button>
  </form>
  <div class="row">
      <div class="col-sm-12"><?php echo $msg; ?></div>
  </div>
</div>
     <div class="col-sm-5">
         <h3>Contact Details</h3>
         <ul style="list-style:none;">
             <li><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;(+254)724821720</li><br/>
             <li><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;kimutainashon@gmail.com</li><br/>
             <li><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;P.O.Box 101, LESSOS</li><br/>
             <li><i class="fa fa-facebook">&nbsp;&nbsp;</i>TNFS</li><br/>
             <li><i class="fa fa-twitter">&nbsp;&nbsp;</i>@nash_kim</li><br/>
             <li>Blog:&nbsp;&nbsp;<a href="https://www.000webhostappkimutainashon.com">www.000webhostappkimutainashon.com</a></li>
         </ul>
     </div>
</div>
</div>
    <?php include_once("config/aside.php"); ?>
</div>
 <?php include_once("config/sponsors.php"); ?>
</div>
<?php include_once("config/footer.php"); ?>
</body>
</html>