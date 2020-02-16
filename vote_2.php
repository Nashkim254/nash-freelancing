
<?php
include_once('includes/db_connect.php');
if(isset($_POST['send'])){
    $name=mysqli_real_escape_string($con, $_POST['name']);
	$pin=mysqli_real_escape_string($con, $_POST['pass']);
    $chair=mysqli_real_escape_string($con, $_POST['chair']);
    $vchair=mysqli_real_escape_string($con, $_POST['vchair']);
    $secgen=mysqli_real_escape_string($con, $_POST['secgen']);
	$tr=mysqli_real_escape_string($con, $_POST['tr']);
	$ogs=mysqli_real_escape_string($con, $_POST['ogs']);
	$dogs=mysqli_real_escape_string($con, $_POST['dogs']);
	$it=mysqli_real_escape_string($con, $_POST['it']);
	$dit=mysqli_real_escape_string($con, $_POST['dit']);
	$la=mysqli_real_escape_string($con, $_POST['la']);
	$edt=mysqli_real_escape_string($con, $_POST['edt']);
	$ca=mysqli_real_escape_string($con, $_POST['ca']);
	$check=mysqli_query($con,"SELECT pin FROM attendance WHERE name='$name' ");
	
	$post=mysqli_fetch_array($check, MYSQLI_NUM);
	
	
	
	if($post[0]==$pin){
	
	mysqli_query($con,"INSERT INTO vote (name, chair, vchair, secgen, tr, ogs, dogs, it, dit, la, edt, ca) VALUES ( '$name','$chair','$vchair','$secgen','$tr','$ogs','$dogs','$it','$dit','$la','$edt','$ca' )");
   
	echo"(
    <script>
	 window.alert('Thank you $name for your vote.');
	 window.location.href=('vote.php');
	 </script>
		)"; 
	
	}
	else{
	echo"(
    <script>
	 window.alert('Sorry $name. You have entered the wrong pin. please try again');
	 window.location.href=('vote.php');
	 </script>
		)"; 
	
    }
	}
 

?> 
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Your Vote | TASSMU</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" href="images/logo/favicon.png">
<link rel="stylesheet" href="css/font-awesome.min.css">
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
<?php include_once("includes/header.php"); ?> 

<div class="container">
<div class="row">
<div class="col-sm-9">
 <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-7">
      <h3>YOUR DECISION, YOUR VOTE, YOUR FUTURE</h3>
	  <p>Welcome to the Elections. Make sure Your Vote counts.</p>
  <form role="form" action="vote.php" method="post" id="voteform">
  <div class="form-group">	
			<?php
			include_once("includes/db_connect.php"); 
			$result=mysqli_query($con,"SELECT * FROM attendance ORDER BY name");
			echo "<select name='name' class='form-control' id='name'>".
			"<option selected=\'selected\'>"."Select Name"."</option>";
				while($post=mysqli_fetch_array($result)){
				$name=$post['name'];
				echo "<option value='$name'>".$name."</option>";
				}
					
			echo	"</select>";
				?>
			</div>
<div class="form-group">
    <label for="pass">Enter PIN:</label>
    <input type="password" class="form-control" maxlength="4" placeholder="Enter any 4 numbers" id="pass" name="pass" required >
  </div>
<label>CHAIRPERSON</label>
 <div class="radio">
				<label><input type="radio" value="1" name="chair" required >One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="chair" required >Two</label>
			</div> 
<label>VICE CHAIRPERSON</label>
 <div class="radio">
				<label><input type="radio" value="1" name="vchair" required>One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="vchair" required >Two</label>
			</div> 
<label>SECRETARY GENERAL</label>
 <div class="radio">
				<label><input type="radio" value="1" name="secgen" required >One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="secgen" required >Two</label>
			</div> 
<label>TREASURER</label>
 <div class="radio">
				<label><input type="radio" value="1" name="tr" required >One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="tr" required >Two</label>
			</div> 
<label>ORGANIZING SECRETARY </label>
 <div class="radio">
				<label><input type="radio" value="1" name="ogs" required >One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="ogs" required >Two</label>
			</div> 
<label>DEPUTY ORG SEC</label>
 <div class="radio">
				<label><input type="radio" value="1" name="dogs" required >One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="dogs" required >Two</label>
			</div> 
<label>IT DIRECTOR</label>
 <div class="radio">
				<label><input type="radio" value="1" name="it" required>One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="it" required >Two</label>
			</div> 
<label>DEPUTY IT DIRECTOR</label>
 <div class="radio">
				<label><input type="radio" value="1" name="dit" required>One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="dit" required >Two</label>
			</div> 
<label>LEGAL ADVISOR</label>
 <div class="radio">
				<label><input type="radio" value="1" name="la" required>One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="la" required >Two</label>
			</div> 
<label>EDITOR</label>
 <div class="radio">
				<label><input type="radio" value="1" name="edt" required >One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="edt" required >Two</label>
			</div> 
<label>CO-OPERATE AFFAIRS</label>
 <div class="radio">
				<label><input type="radio" value="1" name="ca" required >One</label>
			</div>
			<div class="radio">
			  <label><input type="radio" value="2" name="ca" required >Two</label>
			</div> 
  <button type="submit" class="btn btn-primary" name="send"><span class="glyphicon glyphicon-send"></span> Vote</button>
  </form>
  <p>Click <a href="signup.php">here</a> to register as a TASSMU member</p>
  <p><a href="results.php">results</a></p>
 <p><a href="electioncheck.php">results</a></p>
</div>
</div>
</div>
 
</div>
 <?php include_once("includes/sponsors.php"); ?>
</div>
<script src="includes/script.js"></script>
<?php 
include_once("includes/footer.php"); ?>
</body>
</html>