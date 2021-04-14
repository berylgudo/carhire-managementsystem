<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset = "UTF-8">
        <title>Home</title>
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
          .container{
            max-width: 1200px;
            margin: auto;
            background: lightgrey;
            overflow: auto;
            margin-right: 40px;

          } 

          ul{
            float: right;
            background-color: blue;
            
          }
          p1{
            color: blue;
            font-family: 'Alfa Slab One', cursive;
            
          }

         
        </style>


        
       
    </head>
    <body>

    <div class="container p-4" >

                 <p1><b>  CHARTECHY CAR HIRE </b></p1>
    
            <ul class="breadcrumb ">
             <li class="breadcrumb-item"><a href="home.php">Home</a></li>
             <li class="breadcrumb-item active"><a href="booking.php">My Booking</a></li>
             <li class="breadcrumb-item pull-right"><a href="return.php">Return Now</a></li>
             <li class="breadcrumb-item pull-right"><a href="logout.php">Logout</a></li>
            </ul>
          

          </div><br>

          

    <div>

    <?php

    require "handlefiles/config.php";

    // select query

    $sql="SELECT * FROM `bookings`";

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
    
    
    </div>
        
    </body>
    </html>