<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <title>Register</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/jquery.min.js"></script>

        <style type="text/css">

            body{
              height: 100vh;
              background-color: lightgrey;
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-position: center; 
              margin-left: 90px;
              margin-top: 70px;
              }

              h1{
                  text-align: center;
              }
            
    
            </style>
    
       
    </head>
    <body  style="padding: 10px; background-color: white" >
        <div class="container m-3">
        

<div style="padding: 10px; background-color: blue" > 
            <div class="text-center">
                <h1>Welcome Back</h1>
            </div>

            <div>

       <form action="handleadmin/handlelogin.php" method="post"  col-md-8 style="padding: 10px; background-color: lightblue "  >

        <label for="email"><b>Username:</label>
            <input class="form-control" type="text" name="username" required><br>

           <br> <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" required></b><br>


       <center><input class="btn btn-primary" type="submit" name="create" value="login"></center>      
                  
                </form>
            </div>
             

           
            </div>
              
    </body>
    </html>