<?php 
require "../db_config.php";
$pdt_name = $_POST["pdt_name"];
$pdt_desc = $_POST["desc"];
$price = $_POST["price"];
$category_id = $_POST["category"];
$brand_id = $_POST["brand"];
$image = $_FILES['pdt_image'];

if ($image['error'] == UPLOAD_ERR_OK) {
    $pdt_image = addslashes(file_get_contents($image['tmp_name']));

    $update = "update products set category_id='$category_id', Product_desc='$pdt_desc', Unit_price='$price', brand_id='$brand_id', product_image= '$pdt_image' where Product_name='$pdt_name' ";
    $exec = mysqli_query($conn, $update);

    if($exec){
        header("Location:products.php");
        exit();
    }
} else {
    header("Location:edit-product.php");
}
?>
