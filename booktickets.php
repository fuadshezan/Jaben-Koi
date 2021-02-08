<?php 
session_start();
if(!isset($_SESSION['uname'])){
	header('location: index.php');
}  
?>
<?php
//echo $_GET['var1'];
$bname=$_GET['var1'];
$bid=$_GET['var2'];
$from=$_GET['var3'];
$to=$_GET['var4'];
//echo $bname."->".$bid;
include'dbconnect.php';
$userquery= "SELECT RouteID,route.name 
FROM bus 
join route
on bus.RouteID=route.ID
WHERE bus.name='$bname' AND bus.ID='$bid'";
$returnvalue=$conn->query($userquery);
$loc=$returnvalue->fetchALL(PDO::FETCH_NUM);
$rid=$loc[0][0];
$rname=$loc[0][1];
//echo $rid;
$userquery= "SELECT s.info,s.Latitude,s.longitude
FROM route_stoppage as r
join stoppage as s
on r.StoppageID=s.ID
where r.RouteID='$rid'";
$returnvalue=$conn->query($userquery);
$loc=$returnvalue->fetchALL(PDO::FETCH_NUM);
// for($i=0;$i<count($loc);$i++)
// {	$row=$loc[$i];
// 	echo $row[0]."->".$row[1]."->".$row[2]."<br>";
// }

?>

<!-- <html lang="en"> -->
<html>
<head>
	<title>Book Tickets</title>
	<link rel="stylesheet" href="css/booktickets.css">
	<link rel="icon" href="images/logo.png">
	<!--<title>Bootstrap 4 Example</title>-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
</head>
<body>
	<?php 
	include 'menu.php'; ?>
	<div id="map" style="height: 100%; width: 100%;">
	</div>
	<div>
		<script type="text/javascript">
			var locations = [
			<?php
			for($i=0;$i<count($loc);$i++)
								{	//$row=$loc[$i];
									echo json_encode($loc[$i]).",";
								} 
								?>
								];
								var map = new google.maps.Map(document.getElementById('map'), {
									zoom: 13,
									center: new google.maps.LatLng(23.7772, 90.3995),
									mapTypeId: google.maps.MapTypeId.ROADMAP
								});
								var infowindow = new google.maps.InfoWindow();
								var marker, i;
								for (i = 0; i < locations.length; i++) {
									marker = new google.maps.Marker({
										position: new google.maps.LatLng(locations[i][1], locations[i][2]),
										map: map
									});
									google.maps.event.addListener(marker, 'click', (function(marker, i) {
										return function() {
											infowindow.setContent(locations[i][0]);
											infowindow.open(map, marker);
										}
									})(marker, i));
								}
							</script>
						</div>
						<?php 

						$userquery= "SELECT dis
						FROM distance
						WHERE RouteID='$rid' AND stoppageID='$from'||RouteID='$rid' AND stoppageID='$to'";
						$returnvalue=$conn->query($userquery);
						$loc=$returnvalue->fetchALL(PDO::FETCH_NUM);
			//$rid=$loc[0][0];
						$dis1=$loc[0][0];
						$dis2=$loc[1][0];
			//echo $dis1."-->".$dis2;
						$fare=(abs(($dis1-$dis2))*5);
						$fare=number_format($fare,0);
			//echo $fare;


						?>

						<div class="ticket">
							<div class="wrapper" style="margin-left: 3px">

								<h2>Ticket Details<hr></h2>
								<p>Bus Name: <?php echo $bname ?></p>
								<p>Route Name: <?php echo $rname ?></p>
								<label for="name" style="font-size: 20px"><b>Number of Passenger</b></label>
								<input type="number" style="width:5%;min-height: 8%" placeholder="Input Number" id="count"name="count" value="1" required>
								<input type="button" style="height: 8%"value="Calculate Fare" onclick="gotopage()">
								<script>
									function gotopage() {
										var textfield=document.getElementById("count");
										var value=textfield.value;
										if(value>0){


										var val = "<?php echo $fare ?>";
										val=val*value;
  											//window.alert(val);
  											document.getElementById("fare").value=val;
  										}
  										
  										else
  										{
  											window.alert("Number of Passenger Cannot Be Null or Zero(0).");
  										}
  									}

  									</script>
  									<p>
  										Your Total Fare Is:
  										<input type="text" id="fare"style="width: 100px" >

  									</style>
  								</p>
  							</div>
  							<!-- <input type="button" id="btn" value="Sample Button" > -->
  			<form action="confirm.php?var1=<?php echo $bname?>&var2=<?php echo $bid?>&var3=<?php echo $from?>&var4=<?php echo $to?>" method="post">
  								<label for="name" style="font-size: 20px"><b>Enter Your Transaction Id</b></label>
  								<input type="text" id="fare" name="txnid" style="min-height:8%" >
  								<!-- <button type="button" id="btn" style="align:right;margin: 0 0 8px 95%;min-height: 8%">Submit</button> -->

  								<input type="submit"  style="min-height:8%" name="submit" value="SUBMIT">
  							</form>

  						</div>

  			<footer>
  			   <p class="p-3 bg-dark text-white text-center">©Jaben koi <br>Est:2019</p>
  			</footer>


  </body>

</html>