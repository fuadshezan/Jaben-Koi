<?php

include("connection.php");

$name=$email=$ContactNo=$psw_1=$psw_2="";


if( isset($_POST['Username']) ){
	$name=$_POST['Username'];
}


if( isset($_POST['email']) ){
	$email=$_POST['email'];
}
if(isset($_POST['ContactNo']))
{
	$contact=$_POST['ContactNo'];
}
if(isset($_POST['psw1']))
{
  $psw_1=$_POST['psw1'];
}

if(isset($_POST['psw2']))
{
  $psw_2=$_POST['psw2'];
}

  
  if ($psw_1 != $psw_2) {
	
	?>
	<script>
	window.alert("Passwords miss match");
	window.location.assign("sign_up.php");
	</script>
	<?php
  }
   $check_query = "SELECT email 
                     FROM passenger
                       WHERE '$email' LIKE email";
  $result = $conn-> query($check_query);
  $user = $result ->fetchAll();
  
 $query ="INSERT INTO passenger (name, email, contact_no, password) VALUES  ('$name', '$email', '$contact', '$psw_2')";
  	  $conn->exec($query);
  	
  	  $conn=null;
  	  ?>
	   <script>
	    window.alert("New record created successfully");
	     window.location.assign("Home.php");
	   </script>
	   <?php
   


?>