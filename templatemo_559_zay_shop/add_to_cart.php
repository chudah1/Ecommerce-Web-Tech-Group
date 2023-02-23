<?php
require 'db_config.php';

//json response that will be returned
$response = array("success"=>false, "message"=>"","quantity"=>0);

session_start();
$_SESSION["quantity"]=0;
// Get the logged-in user's ID
$customer_id = $_SESSION['user_id'];

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
//session for quantity
$quantity_query = "SELECT SUM(Quantity) as quantity FROM `cart` WHERE customer_id = '$customer_id'";
$result_query = mysqli_query($conn, $quantity_query);
if(mysqli_num_rows($result_query)>0){
    $response["quantity"] =  mysqli_fetch_assoc($result_query)["quantity"];
}

header('Content-Type: application/json');
echo json_encode($response);

?>
