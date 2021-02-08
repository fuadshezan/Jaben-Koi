<?php 
include 'dbconnect.php';
  session_start();
  if(!isset($_SESSION['uname'])){
    header('location: index.php');

  } 
  $id=$_SESSION['ID'];
  $userquery= "select name from checker where ID ='$id'";
$returnvalue=$conn->query($userquery);
$stopageid=$returnvalue->fetchAll();
$rowcount=$returnvalue ->rowcount();

if($rowcount==1){
 
  ?>
  <script>
  window.location.assign("checker.php");
  </script>
  <?php
}  
?>

   <!DOCTYPE html>
   <html>
   <head>
     <title>Home</title>
     <link rel="stylesheet" href="css/home.css">
     <link rel="icon" href="images/logo.png">
     <!--<title>Bootstrap 4 Example</title>-->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   </head>
   <body>

    <?php 
    include 'menu.php'; ?>


    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/l1005404-970w-lr.jpg" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="images/bus.jpg" alt="Chicago" width="1100" height="400">
        </div>
        <div class="carousel-item">
          <img src="images/right_bus_012.jpg" alt="New York" width="1100" height="500">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">About Us</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="images/images.png" alt="jabenkoi" class="img-fluid aboutimg">

          </div>

          <div class="col-lg col-md-6 col-12">
            <h2 class="display-4">Jaben koi Transport Co.</h2>
            <p class="py-5">Every day atleast 2,000 people are coming to Dhaka. They don't know how to go one place to another via local bus. To solve the problem we are here. You can search route by your places and you can also booked your ticket from here.</p> 
            <a href="about.php" class="btn btn-success">Check More</a>

          </div>

        </div>

      </div>


    </div>

  </section>

  <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Our Services</h2>
      </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="images/Now-Plan-School-Bus-Routes-With-School-Bus-Tracker.jpg" alt="Card image" style="min-height: 290px">
            <div class="card-body">
              <h4 class="card-title">Find Bus</h4>
              <p class="card-text">Find and Route.</p>
              <a href="services.php" class="btn btn-primary">Search</a>
            </div>
          </div>

        </div>
         <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/bus.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Book Tickets</h4>
              <p class="card-text">Confirm Your Ticket.</p>
              <a href="services.php" class="btn btn-primary">Search</a>
            </div>
          </div>

        </div>
         <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/bus.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Check Bus Position</h4>
              <p class="card-text">Search Bus Position</p>
              <a href="services.php" class="btn btn-primary">Search</a>
            </div>
          </div>

        </div>
      </div>

    </div>

  </section>

  <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Gallery</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/42720_171.jpg" alt="" class="img-fluid pb-3"style="min-height: 305px">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/right_bus_01.jpg" alt="" class="img-fluid pb-3"style="width:500px;height: 305px">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/ishrak-sami-NPFvKujrONA-unsplash1.jpg" alt="" class="img-fluid pb-4"style="min-height: 305px">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/urban-bus-bus-stop-with-flat-design_23-2147824441.jpg" alt="" class="img-fluid pb-4"style="width:500px;height: 305px">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/jp-valery-VwhLVp7dUGk-unsplash.jpg" alt="" class="img-fluid pb-4">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
           <img src="images/tamil.jpg" alt="" class="img-fluid pb-4">
          </div>

          <!-- <div class="col-lg-4 col-md-4 col-12">
            <img src="images/tamil.jpg" alt="" class="img-fluid pb-4">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/tamil.jpg" alt="" class="img-fluid pb-4">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/tamil.jpg" alt="" class="img-fluid pb-4">
          </div> -->
          
        </div>
        
      </div>
    

  </section>

  <!-- <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Gallery</h2>
      </div>
    
  </section>-->
  <footer>
    <p class="p-3 bg-dark text-white text-center">©Jaben koi <br>Est:2019</p>
  </footer>



  
</body>
</html>