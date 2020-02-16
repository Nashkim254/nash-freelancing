<?php
include_once('config/conn.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Professionals of Nash Freelancing  | TNFS</title>
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
        <h3>Professionals of Nash Freelancing</h3>
         <p>The Professionals of Nash Freelancing is a program under the Nash freelancing company, formed with the aim of improving the professionalism of the developers graduating from the university.</p>
         <p>It comprises all students who are interested in development, these students can take their challenge here and improve on their skills.</p>
         <p>The program has the objectives of increasing the number of professional graduating from Maseno University through bringing together the students taking the exams for them to work as group. The activities should incentivize more students to take the exams and connect the members to the external wider professional world.</p>
         <p>The members of the program should be registered members of The Nash Freelancing society (TNFS). 
          The program will ensure members are divided into study groups and study partners. It will also ensure members have access to the most current study material from the exam bodies.</p>
    </div>
    <?php include_once("config/aside.php"); ?>
</div>
 <?php include_once("config/sponsors.php"); ?>
</div>
<?php include_once("config/footer.php"); ?>
</body>
</html>