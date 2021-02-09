
<html >
<head>
    <title> Transparent Login Form Design </title> 
    <link rel="stylesheet" type="text/css" href="css/login.css">   
</head>
    <body>
    <div class="login-box" >
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="verifyingloginchecker.php" method="post">
            <p>Checker Id</p>
            <input type="text" name="c_id" placeholder="Enter your ID">

            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit"  name="submit" value="Login">
           <!--  <p id="text">OR</p>
        <input type="submit" formaction="sign_up.php" name="SignUp" value="Sign Up">
            -->
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div>
    
    </body>
</html>