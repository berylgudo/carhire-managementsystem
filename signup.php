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

       <form action="handlefiles/handlesignup.php" method="post"  col-md-8 style="padding: 10px; background-color: lightblue "  >

        <label for="firstname"><b>First Name:</label>			
            <input class="form-control" type="text" name="firstname" required><br>

            <label for="lastname">Last Name:</label>		
            <input class="form-control" type="text" name="lastname" required><br>

            <label for="email">Email Address:</label>
            <input class="form-control" type="email" name="email" required><br>

           <label for="password">Password:</label>
           <input class="form-control" type="password" name="password" required><br>

           <label for="confirmpassword">Confirm Password:</b></label>
           <input class="form-control" type="password" name="confirmpassword" required><br>


       <center><input class="btn btn-primary" type="submit" name="create" value="Register"></center>      
                  
                </form>
            </div>
             

           
            </div>
            <center><b><label>If you already have an account: <a href="login.php">Login Here</label></center>
              
    </body>
    </html>