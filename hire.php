<?php

require_once "handlefiles/config.php";

if(isset($_POST["id"]) and !empty($_POST["id"])) {
    //get hidden input
    $id=$_POST["id"];
    $updated_carname=$_POST['carname'];
    $updated_numberplate=$_POST['numberplate'];

    //run the update query
    
    if(isset(
      
    $_POST['carname'],
    $_POST['numberplate'],
    $_POST['fullname'],
    $_POST['phonenumber'],
    $_POST['dlnumber'],
    $_POST['idnumber'],
    $_POST['location'],
    
    )){
      
      $carname= ($_POST['carname']);
      $numberplate= ($_POST['numberplate']);
      $fullname= ($_POST['fullname']);
      $phonenumber = ($_POST['phonenumber']);
      $dlnumber = ($_POST['dlnumber']);
      $idnumber = ($_POST['idnumber']);
      $location = ($_POST['location']);
    
      
      $sql = "INSERT INTO `bookings`(`carname`, `numberplate`, `fullname`, `phonenumber`, `dlnumber`, `idnumber`, `location`) 
                     VALUES ('$carname','$numberplate', '$fullname','$phonenumber','$dlnumber','$idnumber','$location')" or die(mysqli_error());

      if(mysqli_query($link, $sql)){
        header("Location:booking.php");
        exit;
      } else{
        echo "Record not added, $sql ".mysqli_error($link);
      }
      
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
        <title>Home</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style type="text/css">

        body{
          height: 100vh;
          background-color: white;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          margin-left: 50px;
          margin-bottom: 150px; 
          margin-right: 30px;
          }

          ul{
            float: right;
            background-color: blue;
            
          }

          p1{
            color: blue;
            text-align: center;
          }
          .container{
            max-width: 1200px;
            margin: auto;
            background: lightgrey;
            overflow: auto;
            margin-right: 40px;

          } 

          h1{
            color: blue;
            text-align: center;
            font-family: 'Alfa Slab One', cursive;
          }
          h3{
            color: blue;
            text-align: center;
            font-family: 'Alfa Slab One', cursive;
          }

        }
          .container{
            max-width: 1200px;
            margin: auto;
            background: lightgrey;
            overflow: auto;
            margin-right: 40px;

          }

          form{
            margin-left: 30px;
            border: 0.5px solid #ccc;
            
          }

          

      
          .container{
            max-width: 1200px;
            margin: auto;
            background: lightgrey;
            overflow: auto;
            margin-right: 40px;
            padding: 50px 50px;

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
            margin-left: 30px;
            margin-right: 40px;
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

      <div class="container" >
      <form action="hire.php" method="post" class="desc" onsubmit="return checkForm(this);">

      <h1>Proceed to Hire a Car</h1>
      <h3>Fill in your info</h3>

      <div>
      
     Car Name:<input class="form-control" type="text" name="carname" value="<?php echo $carname; ?>"><br>

     Number Plate:<input class="form-control" type="text" name="numberplate" value="<?php echo $numberplate; ?>"><br>

     Full Name:<input class="form-control" type="text" name="fullname" required></b><br>

     Phone Number:<input class="form-control" type="text" name="phonenumber" required></b><br>

     DL Number:<input class="form-control" type="text" name="dlnumber" required></b><br>

     ID Number:<input class="form-control" type="text" name="idnumber" required></b><br>

     Location:<input class="form-control" type="text" name="location" required></b><br>

       <input type="hidden" name="id" value="<?php echo $id;?>">
       <center><button   class="btn btn-primary" type="submit" >Save Details</button></center>      
             
      </div>
    

      </form>  

      <script type="text/javascript">

  function checkForm(form)
  {
    //
    // validate form fields
    //

    form.myButton.disabled = true;
    return true;
  }

</script>
      

      </div>

        <footer>

        All right reserved

        </footer>
        
    </body>
    </html>