

<?php
require 'db_config.php';

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $username = htmlspecialchars( $_POST["username"]);
    $user_email =htmlspecialchars( $_POST["email"]);
    $user_password = htmlspecialchars($_POST["password"]);
    $confirm_password = htmlspecialchars($_POST["confirm_password"]);

    $error_array = array('email'=>"", "username"=>"", "mobile"=>"", "password"=>"", "confirm_pass"=>"");

    if (empty($username)){
        $error_array['username'] = 'Username is required';
    }
    if(empty($user_email)){
        $error_array['email'] = 'Email is required';
        array_push($error_array, "Email is required");
    }
    else{
        if (!preg_match('/^[a-zA-Z0-9._%+-]+@(ashesi\.edu\.gh|aucampus\.microsoft\.com)$/', $user_email)){
            $error_array['email'] = 'Please put a valid ashesi email';
        }
    }
    if(empty($phone_number)){
        $error_array['mobile'] = "A phone number is required";
    }

    if(empty($user_password)){
        $error_array['password'] = 'Password is required';
    }
    else{
        if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $user_password)){
            $error_array['password'] = 'Please enter a valid password';
        }
    }
    if(empty($confirm_password)){
        $error_array['password'] = 'Please confirm your password';
    }
    else{
   /* Checking if the password and confirm password are the same. */
        if ($password != $confirm_password) {
            array_push($error_array, "Passwords do not match");
        }
}
     
    // no errors
    if (count($error_array)==0){
            /* This is checking if the email is already in use. */
             $email_check_query = "SELECT * FROM customers WHERE email=?";
             $stmt = mysqli_prepare($conn, $email_check_query);
             mysqli_stmt_bind_param($stmt, "s", $user_email);
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             $user = mysqli_fetch_assoc($result);
     
             if (!empty($user)) {
                 if ($user['email'] === $user_email) {
                    $error_array['email'] = "Email already exists";
                 }
             }
             // If the email is available, proceed with registration
             if (count($errors) == 0) {
                 // Hash the password
                 $password = password_hash($user_password, PASSWORD_DEFAULT);
     
                 // Insert the user into the database
                 $query = "INSERT INTO users (username, email, customer_password) VALUES (?, ?, ?)";
                 $stmt = mysqli_prepare($conn, $query);
                 mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
                 mysqli_stmt_execute($stmt);
     
                 // Redirect the user to the login page
                 header('location: login.php');
             }

    }
}
else{
    header("location: login.php");
}

?>