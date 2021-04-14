<?php

session_start();

if(isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !==true){
    header("location:../home.php");
    exit;
  }

include "config.php";

    $username = $_POST['username'];
    $password=$_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($username);
    $password = mysqli_real_escape_string($password);

    $sql="SELECT * FROM `admin` WHERE username='$username' and password ='$password'";

    $result=mysqli_query($link,$sql) or die("failed to connect".mysqli_error());

    $row=mysqli_fetch_array($result);

    if($row['username']==$username && $row['password']==$password){
        echo "Login Successful".row['username'];
        header("Location:../home.php");
    }else{
        echo "unsuccessful login $sql" .mysqli_error();
    }


?>




<!?php
session_start();
 include "config.php";

 if(isset(

    $_POST['create']
  
 )){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `admin` WHERE username='$username' & password='$password'";

    $result=mysqli_query($link,$sql);
    $rows=mysqli_num_rows($result);

    if($rows==1){

        $row=mysqli_fetch_array($result);

        if(password_verify($password, $row['password'])){

            // start session
            session_start();

            $_SESSION["loggedin"]=true;
            $_SESSION['username']=$username;
            $_SESSION['id']=$id;
            $_SESSION['start']="Welcome, Logged in";
            header("Location:home.php");
        }else{
            echo "password not matching $sql".mysqli_connect_error($link);
        }
    }
 }
 ?>