<?php
require '../db_config.php';
$response = array("success" => false);

$pdt_name = $_POST["pdt_name"];
$pdt_desc = $_POST["desc"];
$price = $_POST["price"];
$category_id = $_POST["category"];
$brand_id = $_POST["brand"];
$image = $_FILES['pdt_image'];

if ($image['error'] == UPLOAD_ERR_OK) {
    $pdt_image = addslashes(file_get_contents($image['tmp_name']));

    // Prepare the SQL statement using a prepared statement
    $stmt = $conn->prepare("INSERT INTO products(Category_id, Brand_id, Product_name, Unit_price, Product_desc, product_image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iisdss", $category_id, $brand_id, $pdt_name, $price, $pdt_desc, $pdt_image);
    $result = $stmt->execute();

    if ($result) {
        $response["success"] = true;
        header("location: products.php");
        exit();
    } else {
        // Inform the user of any errors that occur
        $response["success"] = false;
        $response["error"] = "Error inserting data: " . $stmt->error;
    }
} else {
    // Inform the user if there was an error uploading the image
    $response["success"] = false;
    $response["error"] = "Error uploading image: " . $image['error'];
}

// // Return the response as JSON
 echo json_encode($response);
?>
