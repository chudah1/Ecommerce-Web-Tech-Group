<?php
$response = array("success"=>false);
require "../db_config.php";
$category_id = $_GET["category_id"];

$delete = "DELETE FROM product_categories WHERE category_id='$category_id' ";
$result = mysqli_query($conn, $delete);

if($result){
    $response["success"] = true;
}
echo json_encode($response);
?>