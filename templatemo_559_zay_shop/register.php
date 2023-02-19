<!DOCTYPE html>
<html>

<head>

  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> <!-- change Favicon here-->

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/templatemo.css">
  <link rel="stylesheet" href="assets/css/custom.css">

  <!-- Load fonts style after rendering the layout styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body >

  <!--sign up-->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <a href="index.php">
          <button type="button" class="btn-close btn-close-black" aria-label="Close"></button></a>
        <div class="form-area bg-white">
          <h1 class="text-center font_black">Sign Up Form</h1>
          <form action="processing.php" method="POST">

            <div class="mb-3 mt-4">
              <input class="form-control3 form-font" id="firstName" placeholder="Your First Name">
              <input class="form-control3 form-font form_margin" id="lastName" placeholder="Your Last Name">
            </div>

            <div class="mb-3 mt-4">

              <select class="select form-control2">
                <?php require 'db_config.php'; 
                $sql_query  = "SELECT university_name from universities";
                $result = mysqli_query($conn, $sql_query);
                $index = 0;

                while($row = mysqli_fetch_assoc($result)):
                ?>
                <option value="<?php echo $index+1;?>"><?php echo $row["university_name"]; ?></option>
                <?php $index++; ?>

                <?php endwhile; ?>
                
              </select>

            </div>

            <div class="mb-3 mt-4">
              <input type="email" class="form-control2 form-font" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" name="email">
            </div>
            <div class="mb-3 mt-4">
              <input type="password" class="form-control2 form-font" id="exampleInputPassword1" placeholder="Your Password" name="password">
            </div>

            <div class="mb-3 mt-4">
              <input type="password" class="form-control2 form-font" id="exampleInputPassword1" placeholder="Confirm Password" name="password">
            </div>

            <input type="submit" class="btn btn-light mt-3">SIGN UP</input>



          </form>
          <div class="modal-footer2 d-flex justify-content-center">
            <div class="signup-section">
              <p>Already Have An Account? <a href="login.php">Login</a>.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/templatemo.js"></script>

</body>

</html>