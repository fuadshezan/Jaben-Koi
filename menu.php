<?php
//session_start();
include("dbconnect.php");
$name=$_SESSION['uname'];
$id=$_SESSION['ID'];
$email=$phn="";

$userquery= "select email,contact_no from passenger where name='$name' AND ID='$id' ";
$returnvalue=$conn->query($userquery);
$sql=$returnvalue->fetchALL();
$email=$sql[0][0];
$phn=$sql[0][1];



?>

<nav class="navbar navbar-expand-lg navbar sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="Home.php"><img src="images/logo.png" alt="jaben_koi?" style="width: 100px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <div class="dropdown dropleft">
        <button type="button" class="btn btn-primary dropdown-toggle bg-success mr-2 " data-toggle="dropdown">
          <?php echo $_SESSION['uname']?>
        </button>
        <div class="dropdown-menu bg-dark text-success "style="width: 300px" >
          <!-- <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a> -->
          <li> ID: <?php echo $id ?></li>
          <li> Name: <?php echo $name ?></li>
          <li> Email: <?php echo $email ?></li>
          <li> Phone Number: 0<?php echo $phn ?></li>
        </div>
      </div>
      <!-- <li class="nav-item">
        <a class="nav-link bg-success mr-2" href="#"><?php echo $_SESSION['uname']?></a>
      </li> -->
      <li class="nav-item">
        <a href="logout.php" class="btn btn-success">Log Out</a>
      </li>


    </ul>
        <!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
      </div>
    </nav>