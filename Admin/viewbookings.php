<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <title>Admin</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/jquery.min.js"></script>

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
    margin-left: 40%;
    margin-top: 210px;
    font-family: 'Alfa Slab One', cursive;
    color: black;
    
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

table, th, td {
  border: 1px solid black;
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
        </header><br>
       
<?php

require "handleadmin/config.php";

// select query

$sql="SELECT `id`, `carname`, `numberplate`, `fullname`,`phonenumber`, `dlnumber`, `idnumber`, `location` FROM `bookings`";

$result=mysqli_query($link,$sql);
    ?>

    <table class="table table-border table-striped">
    <thread>
    <tr>

    <th>#</th>
    <th>Car Name</th>
    <th>Number Plate</th>
    <th>Full Name</th>
    <th>Phone Number</th>
    <th>DL Number</th>
    <th>ID Number</th>
    <th>Location</th>
 
    </tr>
    </thread>

    <tbody>
    <?php
    while ($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['carname']."</td>";
      echo "<td>".$row['numberplate']."</td>";
      echo "<td>".$row['fullname']."</td>";
      echo "<td>".$row['phonenumber']."</td>";
      echo "<td>".$row['dlnumber']."</td>";
      echo "<td>".$row['idnumber']."</td>";
      echo "<td>".$row['location']."</td>";
      
    }
    ?>
    
    
    </tbody>
    
    
    
    </table>

      
              
    </body>
    </html>