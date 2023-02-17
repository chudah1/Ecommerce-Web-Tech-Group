<?php

$servername = "localhost";
$username = "root";
$dbname = "ecommerce_platform";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Database connection Failed". mysqli_connect_error());

}


?>