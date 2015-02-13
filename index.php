<!DOCTYPE html>

<!-- This is the home page for HEROES for students -->

<html lang="en">
  	<head>
		<!-- Meta -->
		<meta charset="utf-8" />
	
		<!-- Favicon -->
		<link rel="icon" href="images/favicon.ico" />

		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="stylesheets/mainstyle.css" />
	
		<!-- Web Page Title -->
		<title>HEROES For Students</title>
	</head>
	
	<body>
		<!-- Load Includes -->
		<?php			
			include 'includes/header.htm';	
			include 'includes/navbar.php';
			include 'includes/loginmenu.php';
			include 'includes/registermenu.php';
		?>
		
		<div id="content">
			<p>
				HEROES For Students engages students in their academic content by connecting them to community guest speakers.
				<br />
				<br />
				Teachers click below to subscribe:
				<br />
				<!-- paypal button -->
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="SEBZMFJN5LXNJ">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<br />
				<br />

<!-- slideshow -->

<div id="slideShowImages">
    <img src="images/classroom001.jpg" alt="Slide 1" />
    <img src="images/classroom002.jpg" alt="Slide 2" />
    <img src="images/classroom003.jpg" alt="Slide 3" />    
  </div> 
  <script src="jquery/slideShow.js"></script>

<br/>
<br/>
				<!-- video -->
				<iframe src="//player.vimeo.com/video/90655699" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<br />
			</p>
			<p>
				<h2>Click below to get involved!</h2>
			</p>
			<p>
				<div id="registermenu2">
					<form action="heroregistration.php">
						<input type="submit" value="Register as a HERO!">
					</form>
					<form action="teacherregistration.php">
						<input type="submit" value="Register as a Teacher!">
					</form>
				</div>
			</p>
		</div>
		
		<!-- Load Footer -->
		<?php
			include 'includes/footer.htm';
		?>
	</body>
</html>
