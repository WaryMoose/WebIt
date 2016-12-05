<?php





require 'connect_database.php'







?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="theme.css">
	<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Capriola|Grand+Hotel|Passero+One" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="/bwia/assets/logo.png">
</head>
<header>
	<div class="imag">
		<div class="Headtext">
			<a href="index.php">	
				<img src="/bwia/assets/logo.png" 
					width= 95px
					height= 100px
					alt="Logo: BWIA" 
					title="Bridgewater International Academy">
			</a>
		</div>
	</div>
	<h1>
		Bridgewater International Academy
	</h1>
	<h3>
		GCE A-level
	</h3>
	<h2>
		Creating new dimension to education
	</h2>
	<br>
	<ul>
	  <li><a href="index.php" title="Home">Home</a></li>
	  <li><a href="news.php" title="News">News</a></li>
	  <li><a href="contact.php" title="Contact">Contact</a></li>
	  <li><a href="about.php" title="About">About</a></li>
	  <a href="register.php" title="Register">Register</a>
	  <a class="active" title="Log in">Log in</a>
	</ul>
</header>
<br><br>
<body>
	<div class="container">
		<form action="login.php" method="POST">
			<h3>Log in</h3>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="login" placeholder="Log in" value="Log in"><br>
			<h5>Or register <a href="register.php">here</a>.</h5>
		</form>


	</div>



</body>
</html>