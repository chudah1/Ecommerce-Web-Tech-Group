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
  
else{
     
    $delete_query = "Delete from wishlist where Customer_id='$customer_id' and Product_id='$product_id'";
    if(mysqli_query($conn, $delete_query)){
        $response["success"]=true;
        $response["message"]="Removed from wishlist successfully";
    }
    else{
        $response["message"]="Could not remove from wishlist";
    }
    header('Content-Type: application/json');
    echo json_encode($response);
    
}

?>