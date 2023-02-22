<?php
require 'db_config.php';
$response = array("success"=>false, "message"=>"Invalid email or password");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user_password = $_POST["password"];
    $user_email = $_POST["email"];
    $sql_query ="SELECT * FROM customers where `email` = '$user_email' ";

    $exec_query = mysqli_query($conn, $sql_query);
    if($exec_query){
        if (empty($user_email)){
            $response["message"] = "An email is required";
        }
        
        else if(mysqli_num_rows($exec_query)==0){
            $response["message"] = "User with the email does not exist";
        }
    
    else if(empty($user_password)){
        $response["message"] = "Password is required";
    }
    else{
        $result_arr = mysqli_fetch_assoc($exec_query);
        $db_password = $result_arr["customer_password"];
        if(password_verify($user_password, $db_password)){
            session_start();
            $_SESSION["fname"] =  $result_arr["fname"];
            $_SESSION["user_id"] = $result_arr["customer_id"];
            $response['success'] =  true;
            $response['message'] =  "logged in successful";
        }
        else{
            $response["message"]="Password is incorrect";
            $response['success'] =  false;

        }
    }
}
header('Content-Type: application/json');
echo json_encode($response);
}

?>