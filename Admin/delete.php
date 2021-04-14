<?php

require_once "handleadmin/config.php";

if(isset($_POST["id"]) and !empty($_POST["id"])) {
    //get hidden input
    $id=$_POST["id"];
    $updated_carname=$_POST['carname'];
    $updated_numberplate=$_POST['numberplate'];

    //run the delete query
    
    
    if(isset($_POST["id"]) and !empty($_POST["id"])){
    
    
        $id=trim($_POST["id"]);
    
        $sql="DELETE FROM `cars` WHERE id='$id'";
    
        $result=mysqli_query($link,$sql);
    
        if($result){
    
            echo "<div class='alert alert-success' role='alert'>Record was deleted successfully</div>";
            header("Location:home.php");
        }else{
            echo "Error executing query $sql".mysqli_error($link);   
         }
        }else{
    
        echo "<div class='alert alert-danger' role='alert'>ID parameter was not picked</div>";
    
    }
    
    
    
}else{
    //pick id param $ values

    if(isset($_GET["id"]) and !empty($_GET["id"])){

        $id=trim($_GET["id"]);

        $sql="SELECT * FROM `cars` WHERE id='$id'";

        $result=mysqli_query($link,$sql);

        if($result){

            if(mysqli_num_rows($result)==1){

                //fetch the data

                $row=mysqli_fetch_array($result);

                //retrive individual data

                $carname=$row['carname'];
                $numberplate=$row["numberplate"];
              
            }

        }else{

            echo "Error executing query $sql".mysqli_error($link);
        }


    }else{
        echo "Id parameter was not found";
    }
    
}


?>



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

h1{
    text-align: center;
    color: blue;
    font-family: 'Alfa Slab One', cursive;
    font-size: 5.2vw;
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

        </div><br>

<div class="container " >
<form action="delete.php" method="post" class="desc">

<h1>Delete Car</h1>
<h3></h3><br>

Car Name:<input class="form-control" type="text" name="carname" value="<?php echo $carname; ?>"><br>

Number Plate:<input class="form-control" type="text" name="numberplate" value="<?php echo $numberplate; ?>"><br>

<input type="hidden" name="id" value="<?php echo $id;?>">
<center><input   class="btn btn-primary" type="submit" value="Delete Car" ></center> 

</div>
</form>

       
              
    </body>
    </html>