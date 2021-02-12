<?php
SESSION_START();
include("connection.php");

$busid=$stoppageid=$checkerid="";

$checkerid=$_SESSION["ID"];

if( isset($_GET['bus_id']) )
{
  $busid=$_GET['bus_id'];
}

  $squery="SELECT StoppageID FROM checker 
                             WHERE '$checkerid' = ID";

  $returnvalue=$conn->query($squery);
  $s=$returnvalue->fetchALL(PDO::FETCH_NUM);
 
  $stoppageid=$s[0][0];
 // $routeid=$s[0][1];
 // echo $stoppageid;
  $rID="SELECT routeID
           FROM bus
           WHERE '$busid' = ID";


$returnvalue=$conn->query($rID);
$r=$returnvalue->fetchALL(PDO::FETCH_NUM);
$rID=$r[0][0];
 //echo "Bus's route ID :";
//echo $rID;
// echo " -Checker's route id \n";
// echo $routeid;


     $r="SELECT ID 
     FROM route
     WHERE substr(stoppages,-3,3) = '$stoppageid'";

$returnvalue=$conn->query($r);
$rowcount=$returnvalue->rowCount();
$replace=$returnvalue->fetchALL(PDO::FETCH_NUM);
//echo " Route id :-";
//echo $replace[0][0];
if($rowcount>0)
{
  if($rID % 2 == 0)
    {    
      $rID--;
      echo "Decreasing:";
      $write="UPDATE bus SET RouteID ='$rID'  WHERE bus.ID = '$busid'";
      try{
           $conn->exec($write);
      }
      catch(PDOException $ex){
        ?>
        <script>
         window.alert("Something Wrong1!!!!!");
        window.location.assign("checker.php");
       </script>
       <?php
     }
   }
   else
   {
    $rID++;
  //  echo "increasing:";
       $write="UPDATE bus SET RouteID ='$rID'  WHERE bus.ID = '$busid'";
    try{
        $conn->exec($write);
    }
      catch(PDOException $ex){
      ?>
      <script>
       window.alert("Something Wrong 2!!!!!");
       window.location.assign("checker.php");
     </script>
     <?php
   }
 }
}
else
{
  ?>
      <script>
       //window.alert("Incorrect Stoppage ID!!!!!");
     //  window.location.assign("checker.php");
     </script>
     <?php
}


//echo $checkerid;
//varifing stoppage id
// $sql ="SELECT StoppageID 
// FROM checker
// WHERE '$checkerid' = ID";

// $returnvalue=$conn->query($sql);
// $sid=$returnvalue->fetchALL(PDO::FETCH_NUM);
// //print_r($sid);

// $temp=$sid[0][0];

//echo $temp;

 $query2 ="INSERT INTO 
                 tracker 
                 (ch_time, Bus_ID, Stoppage_ID, CheckerID,route_ID) 
                VALUES  (NOW(), '$busid', '$stoppageid','$checkerid','$rID')";

  try{
    $returnvalue=$conn->exec($query2);
  }
  catch(PDOException $ex){
    ?>
    <script>
     window.alert("Something Wrong 3!!!!!");
     window.location.assign("checker.php");
   </script>
   <?php
 }

 if($returnvalue>0){
  ?>
  <script>
   window.alert("Checked in successfully");
   window.location.assign("checker.php");
 </script>
 <?php
}
else{
 ?>
 <script>
  window.alert("insertion error");
  window.location.assign("checker.php");
</script>
<?php
}
 
//  function addNumbers($a,$b) {
//     return $a + $b;
// }
// $i=5;
// $temp = addNumbers($i,5);
// echo $temp;



?>
