

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <title>Admin</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>

        <style type="text/css">

            body{
                height: 100vh;
          background-color: white;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          margin-left: 90px;
          margin-right: 90px;
          margin-bottom: 150px;
              }
header{
    width: 100%;
    height: 70px;
    background-color: lightgrey;
}

h2{
    position: absolute;
    padding: 3px;
    float: left;
    margin-left: 2%;
    margin-top: 10px;
    font-family: 'Alfa Slab One', cursive;
    color: black;
}

h1{
    position: absolute;
    padding: 5px;
    margin-left: 28%;
    margin-top: 210px;
    font-family: 'Alfa Slab One', cursive;
    color: blue;
    
}

h2{
    font-family: 'Alfa Slab One', cursive;
    color: blue;

}

span{
    color: blue;
}

ul{
    width: auto;
    float: right;
    margin-top: 8px;
}

li{
    display: inline-block;
    padding: 15px 30px;
}

a{
    text-align: center;
    color: black;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.2vw;
}

a:hover{
    color: #f0c330;
    transition: 0.5s ;
}
      
    
            </style>
    
       
    </head>
    <body>
        <header>
            <h2>CHARTECHY<span>carhire</span></h2>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="viewbookings.php">View</a></li>
                    <li><a href="addcar.php">Add Car</a></li>
                    <li><a href="deletecar.php">Delete Car</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>

        <div>

        <h1>Welcome Back Admin</h1>

        </div>
              
    </body>
    </html>