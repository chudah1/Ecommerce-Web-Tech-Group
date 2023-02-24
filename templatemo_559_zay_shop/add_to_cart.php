<?php
session_start();
require 'db_config.php';
//json response that will be returned
$response = array("success"=>false, "message"=>"","quantity"=>0);

// Get the logged-in user's ID
$customer_id = $_SESSION['user_id'];

if(!isset($_GET["action"])){
// Get the product ID and quantity from the form submission
$product_id = $_GET['product_id'];
$quantity = $_GET['quantity'];

// Check if the product already exists in the cart
$cart_query = "SELECT * FROM cart WHERE customer_id = $customer_id AND product_id = $product_id";
$exec = mysqli_query($conn, $cart_query);

if (mysqli_num_rows($exec) > 0) {
    // If the product already exists in the cart, update the quantity
    $row = mysqli_fetch_assoc($exec);
    $new_quantity = $row['Quantity'] + $quantity;
    $update_cart = "UPDATE cart SET Quantity = $new_quantity WHERE product_id = '$product_id' and customer_id = '$customer_id'";
    if(mysqli_query($conn, $update_cart)){
        $response["success"]=true;
        $response["message"]="Added to cart successfully";
    }
} 
else{
    // If the product doesn't exist in the cart, add it
    $query = "INSERT INTO cart (customer_id, product_id, Quantity) VALUES ($customer_id, $product_id, $quantity)";
    if(mysqli_query($conn, $query)){
        $response["success"]=true;
        $response["message"]="Added to cart successfully";
        $response["quantity"]=$quantity;

    }
}
//getting the  quantity
$quantity_query = "SELECT SUM(Quantity) as quantity FROM `cart` WHERE customer_id = '$customer_id'";
$result_query = mysqli_query($conn, $quantity_query);
if(mysqli_num_rows($result_query)>0){
    $response["quantity"] =  mysqli_fetch_assoc($result_query)["quantity"];
}

header('Content-Type: application/json');
echo json_encode($response);
}

else{
    $product_id = $_GET['product_id'];
    
    // $remove_quant = -1;
    // $sql = "SELECT * FROM cart where customer_id='$customer_id' and product_id='$product_id'";
    // $exec_query =mysqli_query($conn, $sql);
    
    // $result_quantity = mysqli_fetch_assoc($exec_query);
    // $new_quant = $result_quantity["Quantity"]+ $remove_quant; 
  
    // $update_cart = "UPDATE cart SET Quantity = $new_quant WHERE product_id = '$product_id' and customer_id = '$customer_id'";
    // if(mysqli_query($conn, $update_cart)){
    //     $response["success"]=true;
    //     $response["message"]="Quantity has been reduced successfully";
    // }
    
    $delete_query = "delete from cart where customer_id='$customer_id' and product_id='$product_id'";
    if(mysqli_query($conn, $delete_query)){
        $response["success"]=true;
        $response["message"]="Removed from cart successfully";
    }
    
    $quantity_query = "SELECT SUM(Quantity) as quantity FROM `cart` WHERE customer_id = '$customer_id'";
    $result_query = mysqli_query($conn, $quantity_query);
    if(mysqli_num_rows($result_query)>0){
        $response["quantity"] =  mysqli_fetch_assoc($result_query)["quantity"];
    
}
    header('Content-Type: application/json');
    echo json_encode($response);
} 

?>
