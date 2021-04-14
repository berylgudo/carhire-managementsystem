<?php

include "config.php";

if(isset(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['email'],
    $_POST['password'],
    $_POST['confirmpassword']

)){

    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmpass = trim($_POST['confirmpassword']);

    //validate entries
    //validate passsword

    if(strlen($password)<6){
        $password_error="Password must have 6 characters";
        echo "$password_error";
    }else{
        $store_password=password_hash($password, PASSWORD_DEFAULT);
    }

    //validate confirm password

    if($confirmpass!=$password){
        $confirm_pass_error="Passwords do not match";
        echo "$confirm_pass_error";
    }else{
        $store_confirm_pass=password_hash($confirmpass, PASSWORD_DEFAULT);
    }

    //check errors before insert data query

    if (empty($password_error) and empty($confirm_pass_error)) {
       
        $sql="INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$store_password')";

        $result=mysqli_query($link,$sql);

        if($result){
            echo "You have been Registered successfully";
            header("Location:../login.php");
        }else{
            echo "ERROR executing $sql".mysqli_connect_error($link);
        }
    }

    //close connection
    mysqli_close($link);

}

    
