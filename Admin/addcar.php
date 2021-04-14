<?php

include "handleadmin/config.php";

if(isset($_POST["upload"])){

      
      
      $carname= $_POST['carname'];
      $numberplate= $_POST['numberplate'];
      $target = "images/".basename($_FILES['image']['name']);
      $image = $_FILES['image']['name'];
      $priceperkm= $_POST['priceperkm'];
      $priceperday= $_POST['priceperday'];
      $status = $_POST['status'];
     
    
      
      $sql = "INSERT INTO `cars`(`carname`, `numberplate`, `image`, `priceperkm`, `priceperday`, `status`) 
           VALUES ('$carname','$numberplate','$image','$priceperkm','$priceperday','$status')" or die(mysqli_error());
           mysqli_query($link, $sql);
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
          echo '<script type="text/javascript">alert("Car Added") </script>';
        header("Location:home.php");
        exit;
      } else{
        echo "Record not added, $sql ".mysqli_error($link);
      }
      
    }

?>



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

.container{
            max-width: 1200px;
            margin: auto;
            background: lightgrey;
            overflow: auto;
            margin-right: 40px;
            padding: 50px 50px;

          }

h2{
    position: absolute;
    padding: 3px;
    float: left;
    margin-left: 2%;
    margin-top: 10px;
    font-family: 'Alfa Slab One', cursive;
    color: blue;
}

h1{
    position: absolute;
    padding: 5px;
    font-family: 'Alfa Slab One', cursive;
    color: blue;
    margin-left: 500px;
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
        </header><br>

        <div class="container" >
        <form action="addcar.php" method="post" enctype="multipart/form-data">

        <h1>Add Car</h1><br>

<br><div><br>

Car Name:<input class="form-control" type="text" name="carname" ><br>

Number Plate:<input class="form-control" type="text" name="numberplate"><br>

<div class="col-md-4">
        <label> Upload Car Image
            <input type="file"  name="image" id="image">
        </label>
</div><br>

Price Per KM:<input class="form-control" type="text" name="priceperkm"><br>

Price Per Day:<input class="form-control" type="text" name="priceperday"><br>

Status:<input class="form-control" type="text" name="status" ><br>                


 <input type="hidden" name="id" >
 <center><input   class="btn btn-primary" name="upload" type="submit" value="Add Car" ></center>      
       
</div>


</form> 
        </div>

        
              
    </body>
    </html>