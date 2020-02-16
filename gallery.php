<?php
include_once('config/conn.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>TNFS Gallery</title>
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
    <h3>Gallery</h3>
    <?php
    $photos = range(1,24);
    foreach($photos as $currentPhoto){

    $fullImage = $currentPhoto.".JPG";
    
    echo "<div class='col-sm-3' style='margin-bottom:15px;'>";
    echo "<a target='_blank' href='images/gallery/".$fullImage."'><img class='img-responsive' src='images/gallery/".$fullImage."'></a>";
    echo "</div>";
    }
    ?>
    </div>
    <?php include_once("config/aside.php"); ?>
</div>
 <?php include_once("config/sponsors.php"); ?>
</div>
<?php include_once("config/footer.php"); ?>
</body>
</html>