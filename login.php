<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <title>Register</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>

        <style type="text/css">

            body{
              height: 100vh;
              background-image: url("/CHARTECHY/images/back1.png");
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-position: center; 
              margin-left: 90px;
              margin-top: 70px;
              }

            
    
            </style>
    
       
    </head>
    <body  style="padding: 10px; background-color: lightgrey" >
        <div class="container m-3">
          

      

    <div style="padding: 10px; background-color: blue"  >

    </div>

<div style="padding: 10px; background-color: blue" > 
            <div class="text-center">
                <h1>Register</h1>
                <p> Create your account here</p>
            </div>

            <div>

       <form action="handlefiles/handlelogin.php" method="post"  col-md-8 style="padding: 10px; background-color: lightblue "  >

        <label for="email"><b>Email Address:</label>
            <input class="form-control" type="email" name="email" required><br>

            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" required></b><br>


       <center><input class="btn btn-primary" type="submit" name="create" value="login"></center>      
                  
                </form>
            </div>
             

           
            </div>
            <center><b><label>Don't have an account? <a href="signup.php">SignUp Here</a></label></center>
              
    </body>
    </html>