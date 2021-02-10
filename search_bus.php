<?php
session_start();
include("connection.php");

$name=$stoppageid="";
$checkerid=$_SESSION["ID"];

if( isset($_GET['busname']) )
{
    $name=$_GET['busname'];
}
if( isset($_GET['stoppage_id']) )
{
    $stoppageid=$_GET['stoppage_id'];
}
 
$sql ="SELECT StoppageID, RouteID
FROM checker
WHERE '$checkerid' = ID";

$returnvalue=$conn->query($sql);
$sid=$returnvalue->fetchALL(PDO::FETCH_NUM);
//print_r($sid);

$temp=$sid[0][0];
$rid=$sid[0][1];
//echo $temp;
if($stoppageid != $temp)    
{
?>
   <script >
	window.alert("Incorrect stoppage ID!!!");
	 window.location.assign("checker.php");
   </script>
   <?php
}
 if($rid % 2)
 {
      $sID="SELECT Stoppage_ID
      FROM bus as b
      JOIN
      tracker as t
      ON t.Bus_ID = ID and b.RouteID=t.route_ID 
                         AND '$stoppageid' > t.Stoppage_ID 
                                  WHERE b.RouteID='$rid' AND b.name =(
                                   SELECT DISTINCT name
                                   FROM bus
                                   WHERE name LIKE '%$name%'
                                   )
                                   ORDER BY time DESC
                                   LIMIT 0,1";
      $returnvalue=$conn->query($sID);
      $s=$returnvalue->fetchALL(PDO::FETCH_NUM);
      print_r($s);
     $st_ID=$s[0][0];
    echo $st_ID;
        
 }
 else
 {

       $sID="SELECT Stoppage_ID
      FROM bus as b
      JOIN
      tracker as t
      ON t.Bus_ID = ID and b.RouteID=t.route_ID 
                         AND '$stoppageid' > t.Stoppage_ID 
                                  WHERE b.RouteID='$rid' AND b.name =(
                                   SELECT DISTINCT name
                                   FROM bus
                                   WHERE name LIKE '%$name%'
                                   )
                                   ORDER BY time DESC
                                   LIMIT 0,1";
      $returnvalue=$conn->query($sID);
      $sid=$returnvalue->fetchALL(PDO::FETCH_NUM);
      $st_ID=$sid[0][0];
      echo $st_ID;	
 }
// $returnvalue=$conn->query($time);
// $sql = $returnvalue->fetchAll();
// print_r($sql);

?>