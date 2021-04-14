<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset = "UTF-8">
        <title>Home</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style type="text/css">

        body{
          height: 100vh;
          background-image: url("/CHARTECHY/images/back1.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          margin-left: 90px;
          margin-bottom: 150px; 
          margin-right: 90px;
          }

          .container{
            background: lightgrey;
            overflow: auto;
            margin-left: 20px;
            

          }

          ul{
            float: right;
            background-color: blue;
            
          }

          p1{
            font-family: 'Alfa Slab One', cursive;
            color: blue;
          }
           .desc{
             padding: 5px;
             text-align:center;
             color: blue;
             margin-right: 10px;
             border: 0px;
             font-family:georgia,garamond,serif;
             font-size:16px;
             font-style:italic;
             } 

          .a{
            height:150px; 
            width:200px; 
          }    

          footer{
            padding: 10px;
            font-size: 17px;
            font-weight:bold;
            text-align: center;
            background: #594848;
            color: white;
            font-family: Arial;
            letter-spacing: 1px;
            margin-left: 2px;
            margin-right: 2px;
          }

          .card{
            border: 1px solid blue;

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

          </div>

      
          <div class="container mt-3">
      <?php
      
     
      include "handlefiles/config.php";

      $sql="SELECT * FROM `cars`";

      $result=mysqli_query($link,$sql);
      ?>

      <container class="container-fluid">
      <div class="row">
    
     
   <?php
      
      while($row=mysqli_fetch_assoc($result)){
    ?>

<div class="col-md-4 md-3 mt-3">
       <div class="card">
    <center><a href="hire.php?id=<?php echo $row['id'] ?>"><img src="images/<?php echo $row['image']; ?>" height="130" width="180" alt="Card image cap"></center>
        <div class="card-body">
         <h4 class="desc"><?php echo $row['carname'];?></h4>
         <h4 class="desc"><?php echo $row['numberplate'];?></h4> 
         <h4 class="desc"><?php echo $row['priceperkm'];?></h4>
         <h4 class="desc"><?php echo $row['priceperday'];?></h4>

      </div>
        </div>
      </div>   

      </container>
        
     <?php
     
      
    }
     

      ?>

    

        

      </div>   
      </div><br>

        <footer>

        All right reserved

        </footer>
        
</body>
</html>