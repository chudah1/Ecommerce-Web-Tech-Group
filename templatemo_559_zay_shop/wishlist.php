<?php
require "db_config.php";
session_start();
$customer_id = $_SESSION["user_id"];
$response = array("success"=>false, "message"=>"");
$action = $_GET["action"];
$product_id = $_GET["product_id"];

if($action=="add"){
$query = "Select * from wishlist where `customer_id`=$customer_id and `product_id`=$product_id";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
$response["message"] = "The item is already in your wishlist";

}
else{
    $insert_query = "INSERT INTO wishlist VALUES('$customer_id','$product_id')";
    $exec_query = mysqli_query($conn,$insert_query);
    if($exec_query){
        $response["success"] = true;
        $response["message"] = "Successfully added to your wishlist";
    }
}
header('Content-Type: application/json');
echo json_encode($response);
}
else if ($action=="display"){
    $display_query = "select * from wishlist inner join products using(product_id) where `customer_id` = '$customer_id'";
    $display_exec = mysqli_query($conn, $display_query);
    if($display_exec){
        $response["success"] = true;
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

?>