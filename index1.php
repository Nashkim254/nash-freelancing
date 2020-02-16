
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>
		NASH FREELANCING HOMEPAGE!
	</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="images/logo.jpg">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="engine1/jquery.js"></script>
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
			<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
  </ol>

  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="data1/images/001.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3 style="color:#FF6600">FREELANCERS</h3>
        <p style="font-size:200%">The Only experienced freelancers in The World</p>
      </div>
    </div>

    <div class="item">
      <img src="data1/images/002.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3 style="color:#FF6600">The Officials </h3>
        <p style="font-size:200%" >The Group That Steers the Freelancing Agenda</p>
      </div>
    </div>

    <div class="item">
      <img src="data1/images/003.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3 style="color:#FF6600">Hike</h3>
        <p style="font-size:200%">Freelancers at work.</p>
      </div>
    </div>

    <div class="item">Programming Product Design 2016</h3>
      <img src="data1/images/004.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3 style="color:#FF6600">
        <p style="font-size:200%">The Group That shook the Ground</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
    <div ><h3>THE NASH FREELANCERS SOCIETY! THE NEW BETTER WORLD!</h3></div>
	
</div>
 <div style="text-align:center;" >
     <h3 >Thank you so much our sponsors and partners.</h3>
     <div class="col-sm-2"><img class="img-responsive" src="images/actserv.jpg"/></div>
     <div class="col-sm-2"><img class="img-responsive" src="images/ira.jpg"/></div>
     <div class="col-sm-2"><img class="img-responsive" src="images/task.png"/></div>
     <div class="col-sm-2"><img class="img-responsive" src="images/alexforbs.gif"/></div>
     <div class="col-sm-2"><img class="img-responsive" src="images/faventia.PNG"/></div>
</div>
</div>
<?php include_once("config/footer.php"); ?>
</body>
</html>