<?php 
  session_start();
  if(!isset($_SESSION['uname'])){
    header('location: index.php');
  }  
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<link rel="stylesheet" href="css/about.css">
	<link rel="icon" href="images/logo.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		.box{
			
			
		}
		.boximg{
			width: 30%;
			margin: 0 auto;
		}
		.boximg img{
			width: 100%;
		}
		.box p{
			padding: 5px;
			font-size: 25px;
			color: white;
			background-color: #343A40;
			/*background-color: #343A40;*/

		}
		.wrapper{
			padding: 30px;
			margin-top:15px; 
			overflow: hidden;
			width:40%;
			margin:0 auto;
			background-color: #343A40;
			/*border: 1px solid red;*/
		}
		.contact{
			float: left;
			width: 60%;
			color: white;
			border-right:3px solid white;
			
		}
		.contact p{
			font-size: 18px;

		}
		.logo{
			float: right;
    		width: 30%;
    		margin-right: 42px;
    		margin-top: 10px;
		}
		.logo img{
			width: 100%;
		}
		
	</style>
</head>
<body>
	<?php 
	   include 'menu.php'; ?>

	   <div class="box">
	   		<div class="boximg">
				<img src="images/Inspiration2.jpg" alt="jaben koi">	   			
	   		</div>
	   		<p>Every day atleast 2000 people are coming into Dhaka. They don't know to which bus is suitable for which route.They face many type of problems.On the other hand we can do many things from home. Then why we can't buy tickets from home for local transport? From this type of inspiration we make a website where you can search buses by your places and you can also book tickets for those local buses.</p>
	   		<div class="wrapper">
	   			<div class="contact">
	   				<h2>Jaben Koi</h2>
	   				<p>Address: NatunBazar, Gulshan-2,Dhaka</p>
	   				<span>Email: jabenkoi@gmail.com</span>
	   				
	   			</div>
	   			<div class="logo">
	   				<img src="images/logo.png" alt="">
	   			</div>
	   		</div>

	   </div>
	<footer>
			<p class="p-3 bg-dark text-white text-center">©Jaben koi <br>Est:2019</p>
		</footer>				
	</body>

</html>
