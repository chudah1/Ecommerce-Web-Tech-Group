<?php
$response = array("success"=>false);
require "../db_config.php";
$product_id = $_GET["product_id"];

$delete = "DELETE FROM products WHERE product_id='$product_id' ";
$result = mysqli_query($conn, $delete);

if($result){
    $response["success"] = true;
}
echo json_encode($response);
?>