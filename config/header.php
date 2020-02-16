<div class="page-header"  style="margin-top:0px; padding:0px;">
    <div class="row" id="top-bar">
         <div class="col-sm-6">
        </div> 
        <div class="col-sm-3">
            <ul align="right" style="color:blue;">
                <li><a href="https://facebook.com/nash kim/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/nash_kim"><i class="fa fa-twitter"></i></a></li>
                <li><i class="fa fa-instagram"></i></li>
                <li><i class="fa fa-pinterest"></i></li>
            </ul>
        </div>
		<div class="col-sm-3">
		<ul>
			<input class="form-control" id="web_search" type="text" name="web_search" placeholder="Search...">
			</u>
		</div>
        <div class="col-sm-3">
            <ul>
                <?php
                  if(isset($_SESSION['login'])){
                      $login="<li><a href='logout.php'>Log Out</a></li>";
                      $register="<li><a href='portal.php'>User Portal</a></li>";
                  }
                  else{
                      $login="<li><a href='login.php'>Log In</a></li>";
                      $register="<li><a href='signup.php'>Register</a></li>";
                  }
                  echo $register;
                  echo $login;
                ?>
            </ul>
        </div>
    </div>
<nav class="navbar navbar-inverse" style="background-color:#0170AF; border:none;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav nav navbar-nav navbar-right">
        <li><a href="index1.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="structure.php">Structure</a></li>
        <li class="dropdown"><a href="#">Members<span class="caret"></span></i></a>
          <ul class="dropdown-menu">
            <li><a href="allmembers.php">All Members</a></li>
            <li><a href="proma.php">ProMa</a></li>
         </ul>
        </li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>
</nav>
</div>
</ul>
</div>
</div>
</div>
