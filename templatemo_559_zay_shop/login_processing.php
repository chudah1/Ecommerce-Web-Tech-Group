<?php
require 'db_config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $errors_array = array("email"=>"", "password"=>"");

    $user_email = $_POST["email"];
    $user_password = $_POST["password"];

    $sql_query ="SELECT * FROM customers where `email` = '$user_email' ";

    $exec_query = mysqli_query($conn, $sql_query);
    if($exec_query){
        if(mysqli_num_rows($exec_query)==0){
            $errors_array["email"] = "User with the email does not exist";
            header("location: login.php");
            exit();

        }
        $result_arr = mysqli_fetch_assoc($exec_query);
        //check the exact coulmn  name in db
        $db_password = $result_arr["customer_password"];
        if(password_verify($user_password, $db_password)){
            session_start();
            $_SESSION["fname"] =  $result_arr["fname"];
            $_SESSION["user_id"] = $result_arr["customer_id"];
            header("location: index.php");
        }
        else{
            $errors_array["password"]="Password is incorrect";
            header("location: login.php");
        }
    }

}
else{
    header("location: login.php");
}

?>