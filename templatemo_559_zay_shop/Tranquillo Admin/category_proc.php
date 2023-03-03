<?php 
require "../db_config.php"; 

$response = array("success"=>false);

if (!empty($_POST["category_name"]) && !empty($_POST["desc"]) && !empty($_FILES["image"])) {
    $category_name = $_POST["category_name"];
    $desc = $_POST["desc"];
    $image = $_FILES["image"];

    if ($image['error'] == UPLOAD_ERR_OK) {
        $cat_image = addslashes(file_get_contents($image['tmp_name']));

        $insert = "insert into product_categories(category_name, category_desc, Category_image) values('$category_name', '$desc', '$cat_image')";
        $exec = mysqli_query($conn, $insert);

        if($exec){
            $response["success"] = true;
        }
    } else {
        $response["error"] = "File upload failed";
    }
} else {
    $response["error"] = "Invalid form data";
}

echo json_encode($response);
?>
