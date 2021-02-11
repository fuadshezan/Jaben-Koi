
<!DOCTYPE html>
<html lang="en">
    <head>
            <link rel="stylesheet" href="css/sign_up.css"> 
            <link rel="icon" href="images/logo.png"> 

    </head>
    <body>
   <form action="varify_sign_up.php" method="post" style="border:1px solid #ccc">
                    <div class="container">
                      <h1>Sign Up</h1>
                      <p>Please fill in this form to create an account.</p>
                      <hr align="left" width=80%>

                      <label for="name"><b>User Name</b></label></br>
                      <input type="text" placeholder="Enter user name" name="Username" required></br>
                  
                      <label for="email"><b>Email</b></label></br>
                      <input type="text" placeholder="Enter Email" name="email" required></br>

                       <label for="contact"><b>Contact No</b></label></br>
                      <input type="text" placeholder="+880____" name="ContactNo" required></br>
                  
                      <label for="psw"><b>Password</b></label></br>
                      <input type="password" placeholder="Enter Password" name="psw1" required></br>
                  
                      <label for="psw-repeat"><b>Repeat Password</b></label></br>
                      <input type="password" placeholder="Repeat Password" name="psw2" required></br>
                  
                      <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                      </label></br>
                  
                      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p></br>
                  
                      <div class="clearfix">
                       <button type="button" class="cancelbtn" onclick="window.location.href = 'index.php';">Cancel</button>
                        <button type="submit" name="sign" class="signupbtn">Sign Up</button>
                      </div>
                    </div>
                </form>
    </body>
</html>