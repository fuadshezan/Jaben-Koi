<?php
session_start();
include("dbconnect.php");


$id=$username=$password=$temp="";

if( isset($_POST['c_id']) )
{
	$temp=$_POST['c_id'];
     $id=(int)$temp;
}
if( isset($_POST['username']) ){
	$username=$_POST['username'];
}

if( isset($_POST['password']) ){
	$password=$_POST['password'];
}

	
$userquery= "select StoppageID from checker where ID ='$id'AND name ='$username' AND password ='$password' ";
$returnvalue=$conn->query($userquery);
$stopageid=$returnvalue->fetchAll();
$rowcount=$returnvalue ->rowcount();

if($rowcount==1){
	$_SESSION['ID']=$id;
	$_SESSION['uname']=$username;
	?>
	<script>
		//var c_ID=$id;

	window.location.assign("checker.php");
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