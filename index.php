<?php
  session_start();
  if(isset($_SESSION['uname'])){
    header('location: Home.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jaben Koi</title>
	<!-- <link rel="stylesheet" href="css/index1.css"> -->
	<link rel="stylesheet" href="css/index.css">
	<link rel="icon" href="images/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<!-- header start-->
	<header>
		<div class="wrapper">
			<div class="logo">
				<img src="images/logo.png" alt="jaben_koi?">
			</div>
			<nav class="menu">
				<ul>
					<li><a href="log_passenger.php" title="">Log In As A Passenger</a></li>
					<li><a href="log_checker.php" title="">Log In As A Checker </a></li>
					<!--<li><a href="#" title="">Solutions</a></li>
					<li><a href="#" title="">Mobile Applications</a></li>
					<li><a href="#" title="">Career</a></li>-->
				</ul>
			</nav>
		</div>
	</header>
	<!-- header end-->
	<section>
		<div class="body">
			<div class="box">
				<h2>Welcome to Jaben Koi</h2>
				<p>We are here to serve you.<br>Search for bus, booked ticket and go.</p>
			</div>
			<img src="images/brtc.jpg" alt="">
		</div>
	</section>
	 <footer>
    <p class="p-3 bg-dark text-white text-center">©Jaben koi <br>Est:2019</p>
  </footer>
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>