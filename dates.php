<?php
include_once('config/conn.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $dates=mysqli_query($conn,"SELECT * FROM dates WHERE date_id='$id'");
    while($row=mysqli_fetch_assoc($dates)){
    $imp_date=$row["imp_date"];
    $date_body=$row["date_body"];
    }
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title><?php echo $imp_date; ?></title>
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
        <h3><?php echo $imp_date; ?></h3>
        <p><?php echo $date_body; ?></p>
    </div>
    <?php include_once("config/aside.php"); ?>
</div>
 <?php include_once("config/sponsors.php"); ?>
</div>
<?php include_once("config/footer.php"); ?>
</body>
</html>