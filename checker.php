  <?php
  session_start();
  ?>

   <!DOCTYPE html>
   <html>
   <head>
     <title>Check In</title>
     <link rel="stylesheet" href="css/checker.css">
     <!--<title>Bootstrap 4 Example</title>-->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <!-- Auto fillup -->
       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   </head>
   <body>
    <nav class="navbar navbar-expand-lg navbar sticky-top navbar-dark bg-dark">
      <a class="navbar-brand" href="checker.php"><img src="images/logo.png" alt="jaben_koi?" style="width: 100px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="checker.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $_SESSION['uname']?></a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="btn btn-success">Log Out</a>
          </li>


        </ul>
       <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
      </div>
    </nav>
    <h3>Bus check in</h3>
    <div class="box">
      <form action="Varify_checkin.php" method="get" accept-charset="utf-8">

        <label for="number"><b>Bus No</b></label></br>
        <input type="number" placeholder="Enter Bus Id" name="bus_id" required></br>

      <!--   <label for="number"><b>Stoppage ID</b></label></br>
        <input type="number" placeholder="Enter Stoppage Id" name="stoppage_id" required></br> -->
        <input type="submit" id="sub" name="checkin" value="Checked In">

        
      </form>
      
    </div>
       <h3>Search Buses</h3>
       <div class="wrapper">
    <div class="box1">
      <form action=""  method="get" accept-charset="utf-8">

        <label for="text"><b>Bus No</b></label></br>
        <input type="number" id="bid" placeholder="Enter Bus Id" name="busid" required></br>

        <label for="number"><b>Stoppage ID</b></label></br>
        <input type="number" placeholder="Enter Stoppage Id" name="stoppage_id" required></br>
        <input type="submit" id="sub" name="s" value="Search">
        
      </form> 
    </div>


<?php
if( isset($_GET['busid'])  && isset($_GET['stoppage_id']) ){
include("connection.php");

$time=$name=$stoppageid="";
$i=0;
$flag=1;


$checkerid= $_SESSION["ID"];

$bus = $_GET['busid'];

$stoppageid=$_GET['stoppage_id'];


$sql="SELECT name,routeID from bus WHERE  '$bus' = ID";

$returnvalue=$conn->query($sql);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM);
$name=$r[0][0];
$rid=$r[0][1];

     
 function search(int $i)
     { 
      global $rid, $time, $flag, $conn;

      $sID="SELECT t.stoppage_ID,time(ch_time)
      FROM bus as b
      JOIN
      tracker as t
       ON t.Route_ID = b.routeID AND  b.ID = t.Bus_ID
      WHERE b.RouteID = '$rid'  AND  date(ch_time)  = curdate()         
      ORDER BY ch_time DESC
      LIMIT $i,1";

      $returnvalue=$conn->query($sID);
      $s=$returnvalue->fetchALL(PDO::FETCH_NUM);
     
  if($returnvalue->rowcount() >0)
     {
            $st_ID=$s[0][0];
            $time=$s[0][1];

          //  echo $st_ID; 
           return $st_ID;   
    }
  else{
   ?>
   <script >
  window.alert("Bus not Available!!!"); <?php $flag=1; ?> // for the infinity loop
   window.location.assign("checker.php");
   </script>
   <?php
  }
} //SEARCH FUNCTION ENDING

function check($st_ID)  //check function starting
{     
      global $stoppageid, $flag, $conn,$rid;
     
     
    
     $query2="SELECT ID 
             FROM route 
             WHERE  stoppages LIKE '%$stoppageid%$st_ID%'  AND '$rid' = ID "   ;
   
                   
    $returnvalue=$conn->query($query2);
    $s=$returnvalue->fetchALL(PDO::FETCH_NUM);

    if($returnvalue->rowcount() >0)
    {
            $flag=1;
            return $flag;
    }
    else
    {
      $flag=0; 
      return $flag;
    }
  }


while($flag)
{    $st_ID= search($i);
     $flag=check($st_ID);
     $i++;
}
            $query="SELECT name FROM stoppage WHERE id='$st_ID'";
            $returnvalue=$conn->query($query);
            $s=$returnvalue->fetchAll(PDO::FETCH_NUM);
   ?>             
             <div class="box2">
             <h3>Bus has crossed <?php echo $s[0][0] ?> Stoppage  at <?php echo $time?>.</h3>
             </div>
   <?php
}
?>

 <!--  <footer>
    <p class="p-3 bg-dark text-white text-center">©Jaben koi <br>Est:2019</p>
  </footer> -->



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>