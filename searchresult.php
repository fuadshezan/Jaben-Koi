<?php 
  session_start();
  if(!isset($_SESSION['uname'])){
    header('location: index.php');
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Search Result</title>
	<link rel="icon" href="images/logo.png">
     <link rel="stylesheet" href="css/searchresult.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<style>
		table{
			border-collapse: collapse;
			width: 60%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
		    }
		    .center{
		    	margin-top: 165px;
		    	margin-left:auto;
		    	margin-bottom: 165px;
		    	margin-right:auto;
		    }
		th {
			background-color: #588c7e;
			color: white;
			text-align: center;
		}
		tr:nth-child(even) {background-color: #f2f2f2}
		h3{	
			margin: 17% auto;
			font-family: sans-serif;
			text-align: center;
			color: red;
		}
		.box{
			
		}

	</style>

</head>

<body>

	

	<?php
	include("menu.php");
	include("dbconnect.php");
	$from=$to="";

	if(isset($_POST['submit'])){
		$from=$_POST['from'];
		$to=$_POST['to'];
	}
//search source stoppage id;
	$userquery= "select ID from stoppage where name='$from' ";
	$returnvalue=$conn->query($userquery);
	$id=$returnvalue->fetch(PDO::FETCH_ASSOC);
	$from=$id['ID'];

//search destination stoppage id;
	$userquery= "select ID from stoppage where name='$to' ";
	$returnvalue=$conn->query($userquery);
	$id=$returnvalue->fetch(PDO::FETCH_ASSOC);
	$to=$id['ID'];
//search routes of source and destination;
	$userquery= "select * from route where stoppages LIKE '%$from%$to%' ";
	$returnvalue=$conn->query($userquery);
	$result=$returnvalue->fetchALL();
	$l=$returnvalue->rowCount();

//search stoppage distance

	if($l>0){
		?>
		<div class="box">
		<table class="center">
		<tr>
			<th>Id</th>
			<th>Bus Name</th>
			<th>Route Name</th>
		</tr><?php
	}
	?>

	

		<?php

		if ($l > 0) {
// search buses
			for($i=0; $i<count($result); $i++) {
				$row=$result[$i];
				$m=$row["ID"];
				$userquery= "SELECT bus.ID,bus.name,bus.RouteID,route.name
				FROM bus
				JOIN route
				on bus.RouteID=route.ID
				where bus.RouteID='$m' ";
				$returnvalue=$conn->query($userquery);
				$s=$returnvalue->fetchALL(PDO::FETCH_NUM);
				$var=$returnvalue->rowCount();
				for($j=0;$j<$var;$j++)
				{
					$row=$s[$j];
					/*echo "<tr><td>" . $row[0]. "</td><td>" . $row[1] . "</td><td>"
					. $row[2]. "</td></tr>";*/
					?>

					<tr>
						<td><?php echo $row[0] ?></td>
						<td><a href="booktickets.php?var1=<?php echo $row[1]?>&var2=<?php echo $row[0]?>&var3=<?php echo $from?>&var4=<?php echo $to?>"><?php echo $row[1] ?></a></td>
						<td><?php echo $row[3] ?></td>
					</tr>

					<?php
				}

				
			}
			echo "</table>";
		} 
		else { echo "<h3>No direct Route Found.</h3>"; }
		?>
	</table>
	</div>
	<div class="box">
	
  	<h1></h1>
  </div>

	<footer>
    <p class="p-3 bg-dark text-white text-center">©Jaben koi <br>Est:2019</p>
  </footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- <script>
  	$(document).ready(function(){
  		$('table tr').click(function(){
  			var id = $(this).children('td:nth-child(1)').html();
  			
  			console.log(id);
  		});

	});
  </script> -->
  
</body>
</html>