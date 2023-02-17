<?php
require 'db_config.php';

$sql = "SELECT * FROM product_categories";
$results = mysqli_query($conn, $sql);
if($results){
    $categories_array = mysqli_fetch_assoc($results);
}
?>