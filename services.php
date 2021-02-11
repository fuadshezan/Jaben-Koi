<?php 
  session_start();
  if(!isset($_SESSION['uname'])){
    header('location: index.php');
  }  
?>
<!DOCTYPE html>
   <html>
   <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Service</title>
     <link rel="stylesheet" href="css/services.css">
     <link rel="icon" href="images/logo.png">
     <!--<title>Bootstrap 4 Example</title>-->
     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <style>
     .box{
      margin: 90px 25% 90px 25%;
      width:50%;
      /*border:2px solid yellow;*/
     }
     .box label{
      font-size: 30px;
     }
     #to,#from{
      width: 25%;
      height: 45px;
     }
     #sub{
      margin-top: 20px;
      font-size: 20px;
      padding: 5px 10px;
     }
     #sub:hover{
      background-color:green;
      color: white;
     }
   </style>
   </head>
  <body>
   <?php include("menu.php");?>

    <div class="box">
      <form action="searchresult.php" method="POST">
        <label for="name"><b>From</b></label></br>
        <input type="text" placeholder="Enter Source" id="from" name="from" required></br>
        
        <label for="email"><b>Destination</b></label></br>
        <input type="text" placeholder="Enter Destination" id="to" name="to" required></br>
        <input type="submit" id="sub" name="submit" value="Submit">
        
      </form>
      
    </div>
        <div class="bo"></div>
    
    <footer>
      <p class="p-3 bg-dark text-white text-center">©Jaben koi <br>Est:2019</p>
    </footer>
	
	<?php
		include 'dbconnect.php';
		
		$query="select distinct name from stoppage";
		
		$returnval=$conn->query($query);
		$table=$returnval->fetchALL();
		
		$str="var availableTags = [";
		
		for($i=0;$i<count($table)-1;$i++){
			$str=$str."'".$table[$i][0]."',";
		}
		$str.="'".$table[$i][0]."'";
		$str.="];";
		///echo $str;
		echo "<script>$str</script>";
		
	?>
	
	<script>
  $( function() {
    
  
    $( "#from" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  <script>
  $( function() {
    
  
    $( "#to" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  </body>

  </html>