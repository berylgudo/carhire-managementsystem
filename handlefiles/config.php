<?php
define('SERVER','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','chartechy');

$link=mysqli_connect("localhost", "root", "", "chartechy");

if($link==false){
    die("ERROR CONNECTING TO SERVER".mysqli_connect_error());
}
else {
    
}