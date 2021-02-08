<?php 
  session_start();
  if(!isset($_SESSION['uname'])|| !isset($_SESSION['ID'])){
  	
    header('location: index.php');
  }
  include("dbconnect.php");

 if( isset($_POST['txnid']) && isset($_GET['var1']) && isset($_GET['var2']) ){
	
	$txnid=$_POST['txnid'];
	$bname=$_GET['var1'];
	$bid=$_GET['var2'];
	$from=$_GET['var3'];
   	$to=$_GET['var4'];
   }  
   $id=$_SESSION['ID'];

  $check_query = "SELECT txnid 
				  FROM tkt 
				  WHERE txnID='$txnid'";

  $result = $conn-> query($check_query);
  $l=$result->rowCount();
  if($l>0)
 	{?>
 		<script>
	   		window.alert("Same transaction Id found.Transaction Id has to be Unique.");
	     	window.location.assign("booktickets.php?var1=<?php echo $bname?>&var2=<?php echo $bid?>&var3=<?php echo $from?>&var4=<?php echo $to?>");
	   	</script>
	<?php
	}
	else
	{
		$check_query = "SELECT name 
				  FROM stoppage 
				  WHERE ID='$from'";
		$result=$conn-> query($check_query);
		$l=$result->fetchALL(PDO::FETCH_NUM);
		$fstop=$l[0][0];
		$check_query = "SELECT name 
				  FROM stoppage 
				  WHERE ID='$to'";
		$result=$conn-> query($check_query);
		$l=$result->fetchALL(PDO::FETCH_NUM);
		$tstop=$l[0][0];
      $query ="INSERT INTO tkt ( srcID, destID, txnID, passengerID) VALUES ( '$from', '$to', '$txnid', '$id')";
  	  $conn->exec($query);
  	}
?>
<html>
<head>
	<title>Confirm</title>
	<link rel="stylesheet" href="css/confrim.css">
	<link rel="icon" href="images/logo.png">
	<!--<title>Bootstrap 4 Example</title>-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	include 'menu.php'; ?>
	<section>
		<div class="body">
			<div class="box">
				<h2> From: <?php echo $fstop ?></br>
				To: <?php echo $tstop ?></br>
				Your Ticket Is Confirmed For <?php echo $bname ?> </h2>
				<p>Thank you for being with us.</p>
			</div>
			<img src="images/ishrak-sami-NPFvKujrONA-unsplash1.jpg" alt=""style="width: 100%">
		</div>
	</section>


	<footer>
			<p class="p-3 bg-dark text-white text-center">©Jaben koi <br>Est:2019</p>
		</footer>

					
	</body>

</html>