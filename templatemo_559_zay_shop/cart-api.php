<?php
session_start();
if(isset($_SESSION["user_id"])){
$customer_id = $_SESSION["user_id"];
require 'db_config.php'; 
$quantity_query = "SELECT SUM(Quantity) as quantity FROM `cart` WHERE customer_id = '$customer_id'";

$result_query = mysqli_query($conn, $quantity_query);
if($result_query){
    $response = array("success"=>true,"quantity"=> mysqli_fetch_assoc($result_query)["quantity"]);
}

header('Content-Type: application/json');
echo json_encode($response);
}
 ?>