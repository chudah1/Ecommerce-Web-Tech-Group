

<?php
require 'db_config.php';
$response = array("success"=>false, "message"=>"");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $school_id = htmlspecialchars($_POST["uni"]);
    $user_email = htmlspecialchars($_POST["email"]);
    $user_password = htmlspecialchars($_POST["password"]);
    $confirm_password = htmlspecialchars($_POST["confirm_password"]);

    if (empty($fname)) {
        $response['message'] = 'Firstname is required';
    }
    else if (empty($lname)) {
        $response['message'] = 'Lastname is required';
    }
    else if (empty($user_email)) {
        $response['message'] = 'Email is required';
    } 
    else if (!preg_match('/^[a-zA-Z0-9._%+-]+@(ashesi\.edu\.gh|aucampus\.microsoft\.com)$/', $user_email)) {
        $response['message']= 'Please put a valid ashesi email';
        }
    

    else if (empty($user_password)) {
        $response['message']= 'A password is required';
    } 
    else if (!preg_match("/^(?=.*[!@#$%^&*(),.?\":{}|<>])(?=.*[a-z]).{8,}$/", $user_password)) {
        $response['message'] = 'Please enter a valid password';
        }
    
    else if (empty($confirm_password)) {
        $response['message'] = 'Please confirm your password';
    } 
    else if ($user_password != $confirm_password) {
         $response['message'] = 'Please confirm your password';
    }
    
    else{
        $response["success"] = true;
        }

    // no errors
    if ($response["success"]===true and empty($response["message"])) {
        /* This is checking if the email is already in use. */
        $email_check_query = "SELECT * FROM customers WHERE email=?";
        $stmt = mysqli_prepare($conn, $email_check_query);
        mysqli_stmt_bind_param($stmt, "s", $user_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);

        if (!empty($user)) {
            if ($user['email'] === $user_email) {
                $response["success"] = false;
                $response['message'] = "Email already exists";
            }
        }
        // If the email is available, proceed with registration
        if (empty($response["message"]) and $response["success"]==true) {
            // Hash the password
            $password_hash = password_hash($user_password, PASSWORD_DEFAULT);
            // Insert the user into the database
            $query = "INSERT INTO customers (fname, lname, email, customer_password, university_id) values('$fname', '$lname', '$user_email', '$password_hash', '$school_id')";
            if (mysqli_query($conn, $query)) {
                $response["success"] = true;
               
            } else {
                $response["success"] = false;
            }
        }
    }
    header('Content-Type: application/json');
     echo json_encode($response);
}

?>