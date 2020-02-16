<?php
include_once('config/conn.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>About Nash Freelancing</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" href="images/logo.png">
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
			<h3>About us!</h3>
			<h4>Our profile</h4>
			<p>Nash Freelancing is a site developed by Nashon kimutai an IT student at Maseno university in his 4th year of study to bring together all freelancers on board.The freelancers help clients in matters software development,web design and development,android applications development,IT projects and other IT related services are available.</p>
			<p>We have a team of experienced developers in our organization and and they all are deligent in their work.Our services are absolutely deligent and timely.</p><p>Nash Freelancing is an organization with difference whose members stand out from the way they conduct themselves, to the way they talk. A group that pursues excellence from its members while instilling qualities of discipline, integrity and professionalism. Over the years, the group has grown to be a well-recognized development society. We have held key stakeholders in the professional arena to grace four annual meeting Days and four annual Development Boot Camps since 2009 to 2016 with the recent Boot Camp being held at Kisumu Hotel in March 2016 The society also held the first ever product design competition in May 2016 at the university.</p>
			<h4>Affiliations</h4>
			<p>Nash Freelancing is a site self developed and affiliates with other developers to provide development services to clients.This is a professional body that comprises of professional developers around the country.if other developers would wish to join our community they can do so by registering themselves and sending their CV's and work experience to email account kimutainashon@gmail.com with a fee for joining the developers community. </p>
			<h4>Achievements</h4>
			<p>Nash freelancing has achieved a lot when it comes to development with some of the projects available for clients to see.This includes the sites we have built i.e www.tassmu.or.ke among other apps i.e the MTRHAPP which is an android application for the Moi Teaching And Referal hospital.</p>
			<h4>Services</h4>
			<p>Clients can find our services by contacting our developers on their profiles.The various developers have vast experiences in different fields ranging from web development,Software development,IT projects,management systems and android application development.Welcome to Nash Freelancing and enjoy our services at pocket friendly prices.</p>
        
			<blockquote><h3>Mission</h3><p>To provide the best services in development and IT services.</p></blockquote>
			<blockquote><h3>Vision</h3><p>To embrace technology in all parafinallia</p></blockquote>
	</div>
	<?php include_once ("config/aside.php")?>
</div>
<?php include_once'config/sponsors.php'?>
</div>
<?php include_once'config/footer.php'?>
</body>
</html>