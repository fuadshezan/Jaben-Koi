<?php 
session_start();
if(isset($_SESSION['uname'])){
  header('location: Home.php');
}
?>


<html >
<head>
    <title> Login </title> 
    <link rel="stylesheet" type="text/css" href="css/login.css"> 
    <link rel="icon" href="images/logo.png">  
</head>
    <body>
    <div class="login-box" >
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="verifyinglogin.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit"  name="submit" value="Login">
            <p id="text">OR</p>
        <input type="submit" formaction="sign_up.php" name="SignUp" value="Sign Up">
           
            <!-- <a href="#">Forget Password</a> -->    
            </form>
        
        
        </div>
    
    </body>
</html>