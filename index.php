<?php 
include('connection.php');
session_start();
 ?>
<html>
    <head><b>
        <title>Online Notice Board</title><b>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	<style>
.intro {
    background-color: ;
}
</style>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'> 

    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>   
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
	<div class="container">
		<ul class="nav navbar-nav navbar-left">
			<li>
				<a href="index.php">
					<div class="intro">
						<h3>Online Notice Board for  Engineering Students</h3>
					</div>
				</a>
			</li>
      
	  
			<li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
			<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>

			<li><a href="admin/login.php"><span class="glyphicon glyphicon-phone"></span>Admin</a></li>
	
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			<li><a href="index.php?option=forget_pass"><span class="glyphicon glyphicon-frg-ps"></span> Forget password</a></li>
		</ul>

		



	</div>
</nav>	


<nav class="navbar navbar-default navbar-middle" style="background-color: black;">
	<div class="container">
		
	</div>
</nav>


</div>
 <br><br><br><br><br><br><br><br>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
			else if($opt=="forget_pass")
			{
			include('aa.php');
			}
		}
		else
		{
                    
                    
                    
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		

		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>
<!-- footer-->

		
<!-- footer-->
		


<nav class="navbar navbar-default navbar-bottom" style="background:cyan">
  <div class="container">
  <center>
    <ul class="nav navbar-nav navbar-left">
    <li> Developed by Department of ISE DAYANANDA SAGAR ACADEMY OF TECH AND MANAGEMENT Banglore</li></center>
	</ul>
  </div>
</nav>
	</body>
</html>