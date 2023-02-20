

<?php
require 'db_config.php';
if (isset($_POST["signin"])){
    $fname = htmlspecialchars( $_POST["fname"]);
    $lname = htmlspecialchars( $_POST["lname"]);
    $school_id = htmlspecialchars($_POST["uni"]);
    $user_email =htmlspecialchars( $_POST["email"]);
    $user_password = htmlspecialchars($_POST["password"]);
    $confirm_password = htmlspecialchars($_POST["confirm_password"]);

    $error_array = array('email'=>"", "fname"=>"", "lname"=>"", "password"=>"", "confirm_pass"=>"");

    if (empty($fname)){
        $error_array['fname'] = 'Firstname is required';
    }
    if (empty($lname)){
        $error_array['lname'] = 'Lastname is required';
    }
    if(empty($user_email)){
        $error_array['email'] = 'Email is required';
    }
    else{
        if (!preg_match('/^[a-zA-Z0-9._%+-]+@(ashesi\.edu\.gh|aucampus\.microsoft\.com)$/', $user_email)){
            $error_array['email'] = 'Please put a valid ashesi email';
        }
    }

    if(empty($user_password)){
        $error_array['password'] = 'Password is required';
    }

    // else{
    //     if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $user_password)){
    //         echo "pwd";
    //         $error_array['password'] = 'Please enter a valid password';
    //     }
    // }
    if(empty($confirm_password)){
        $error_array['confirm_pass'] = 'Please confirm your password';
    }
    else{
   /* Checking if the password and confirm password are the same. */
        if ($user_password != $confirm_password) {
            $error_array['password'] = 'Please confirm your password';
        }
}

    // no errors
    if (empty($error_array["email"]) and empty($error_array["password"])  and empty($error_array["confirm_pass"]) and empty($error_array["fname"]) and empty($error_array["lname"])){
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
         if (empty($error_array["email"])) {
             // Hash the password
             $password_hash = password_hash($user_password, PASSWORD_DEFAULT);
             // Insert the user into the database
             $query = "INSERT INTO customers (fname, lname, email, customer_password, university_id) values('$fname', '$lname', '$user_email', '$password_hash', '$school_id')";
               if(mysqli_query($conn, $query)){
                 header('location: login.php');
                 exit();
               }
               else{
                 header("location: register.php");
                exit();
               }
         }
    }else{
        header("location: register.php");
        exit();
    }
}
else{
    header("location: index.php");
}

?>