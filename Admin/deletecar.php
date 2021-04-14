<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <title>Admin</title>
       
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
.desc{
    padding: 5px;
    text-align:center;
    margin-right: 10px;
    border: 0px;
    font-family:georgia,garamond,serif;
    font-size:16px;
    font-style:italic;
} 

.card{
    border: 1px solid blue;
}
      
    
            </style>
    
       
    </head>
    <body>
    <div>
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
     </div>    
      
    <div class="container mt-3">
      <?php
      
     
      include "handleadmin/config.php";

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
    <center><a href="delete.php?id=<?php echo $row['id'] ?>"><img src="images/<?php echo $row['image']; ?>" height="130" width="150" alt="Card image cap"></center>
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
    </div>   
       
              
    </body>
    </html>