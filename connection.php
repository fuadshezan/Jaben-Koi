<?php

try{
	///trying to establish connection with the MySQL database server
	$conn = new PDO("mysql:host=localhost:3306;dbname=jaben_Koi;","root","");
	///setting errormode so that when error occurs it will give us an exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	
}
catch(PDOException $ex){
	?>
		<script>
			window.alert("Database not connected");
		</script>
	<?php
}

/*
 if($conn)
 {
 	?>
    <script >
 		window.alert("Database connected");
 	</script>
 	<?php
 }
 else
 {
 ?>
 	<script >
 		window.alert("Database Not connected");
 	</script>
 	<?php
 }*/










/*$servername="localhost";
 $User="root";
 $pass="";
 $dbname="jaben_Koi";
 $con=mysqli_connect(servername,User,pass,dbname);
 if($con)
 {
 	?>
    <script >
 		window.alert("Database connected");
 	</script>
 	<?php
 }
 else
 {
 ?>
 	<script >
 		window.alert("Database Not connected");
 	</script>
 	<?php
 }
*/
?>