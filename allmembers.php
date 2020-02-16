<?php
include_once('config/conn.php');
$fname=$lname=$nobody="";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>All Members | TNFS</title>
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
         <form class="form-inline" role="form" action="allmembers.php" method="get">
         <div class="form-group">
          <input type="text" class="form-control" id="email" name="q" placeholder="Search a member" required>
         </div>
         <button type="submit" class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span> Search</button>
         </form>
        <?php
        if(isset($_GET['search'])){
        $q=$_GET['q'];
        $result=(mysqli_query($con,"SELECT * FROM members WHERE fname LIKE '%$q%' OR lname LIKE '%$q%'"));
        if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
        $fname=$row["fname"];
        $lname=$row["lname"];
        $prof=$row["prof"];
        $m_id=$row["member_id"];
        if(!empty($prof)){
            $profile="<img class='img-responsive' src='images/profile/$prof'/>";
        }
        else{
            $profile="<img class='img-responsive' src='images/profile/prof.jpg'/>";
        }
         echo "Search results for <mark>$q</mark>";
         echo "<div class='row' id='prof'>";
            echo $nobody;
            echo "<div class='col-sm-2'>";
               echo $profile; 
            echo "</div>";
            echo "<div class='col-sm-10'>";
                echo "<a href='profile.php?id=$m_id'><h4>$fname $lname</h4></a>";
            echo "</div>";
        echo "</div>";
        }
        }
        else{
            $nobody="<p class='text-danger'>There does not exist a member registered using that name. Please try again using a different one.</p>";
            echo "Search results for <mark>$q</mark>";
            echo "<div class='row' id='prof'>";
            echo "<div class='col-sm-10'>";
                echo $nobody;
            echo "</div>";
            echo "</div>";
        }
        }
        ?>
        <div class="row" id="all">
            <div class="col-sm-4">
                <h3>How to join</h3>
                 <p>To become a member, you must fill the following.</p>
                 <p>This form is to be accompanied by some payment. The Developers are to pay a registration fee of KSH. 500 and a monthly subscription of KSH. 250 bringing it to a total of KSH. 750. This is to be followed by a series of monthly subscriptions of KSH. 250.</p>
            </div>
            <div class="col-sm-4">
                <h3>Other Members</h3>
                <p>Clients pursuing other fields and would wish to be TNFS members will be required to pay a registration amount of KSH. 250 and a monthly subscription fee of KSH. 150. This brings it to a total of KSH. 400. They will then be required to pay a monthly subscription fee of KSH. 150 in the consequent months.</p>
                <p>After meeting all these, one will be considered a TNFS member.</p>
            </div>
            <div class="col-sm-4">
                <h3>Clients</h3>
                <p>Clients are those seeking our services.These services provided by our developers will be accompanied by a fee. The amount of fee charged will depend on the type of service offered.ksh. 10,000 for website development, ksh. 20,000 for system development, ksh.40,000 for app and projects.You highly welcomed to Nash freelancing!</p>
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