<?php
require 'db_config.php';
// Get the logged-in user's ID
$user_id = $_SESSION['user_id'];

// Get the product ID and quantity from the form submission
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

// Check if the user has an existing cart
$query = "SELECT * FROM cart WHERE customer_id = $user_id";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0) {
    // If the user doesn't have a cart, create a new one
    $query = "INSERT INTO cart (user_id) VALUES ($user_id)";
    mysqli_query($conn, $query);
}

// Check if the product already exists in the cart
$query = "SELECT * FROM cart WHERE customer_id = $user_id AND product_id = $product_id";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    // If the product already exists in the cart, update the quantity
    $row = mysqli_fetch_assoc($result);
    $cart_id = $row['id'];
    $new_quantity = $row['quantity'] + $quantity;
    $query = "UPDATE cart SET quantity = $new_quantity WHERE id = $cart_id";
    mysqli_query($conn, $query);
} else {
    // If the product doesn't exist in the cart, add it
    $query = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, $quantity)";
    mysqli_query($conn, $query);
}

// Redirect the user to the cart page
header("Location: cart.php");
exit;

?>
