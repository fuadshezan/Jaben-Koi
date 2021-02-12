<?php
session_start();
include("dbconnect.php");


$username=$password="";


if( isset($_POST['username']) ){
	$username=$_POST['username'];
}

if( isset($_POST['password']) ){
	$password=$_POST['password'];
}
	
$userquery= "select id,name,password from passenger where name='$username' AND password='$password' ";
$returnvalue=$conn->query($userquery);
$rowcount=$returnvalue->rowCount();
$sql=$returnvalue->fetchALL();

if($rowcount==1){
	
	$_SESSION['uname']=$username;
	$_SESSION['ID']=$sql[0][0];

	?>
	<script>
	window.location.assign("Home.php");
	</script>
	<?php
}	
else{
	?>
	<script>
	window.location.assign("index.php");
	</script>
	<?php
}
?>