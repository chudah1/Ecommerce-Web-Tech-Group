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

        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
                <a href="index.php">
                <button type="button" class="btn-close btn-close-black" aria-label="Close"></button></a>
                <div class="form-area bg-white">
                    <h1 class="text-center font_black" >Login Form</h1>
                    <form action="login_processing.php" method="POST">
                        <div class="mb-3 mt-4">
                            <input type="email" class="form-control2 form-font" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
                        </div>
                        <div class="mb-3 mt-4">
                            <input type="password" class="form-control2 form-font" id="exampleInputPassword1"placeholder="Your Password">
                        </div>
                        <button type="submit" class="btn btn-light mt-3">LOGIN</button>
                        <p class="text-center text-muted delimiter">or use a social network</p>
                        <div class=" justify-content-center social-buttons">
                        <button type="button" class="icon-btn btn_hover" title="Twitter">
                          <i class="fab fa-twitter"></i>
                        </button>
                        <button type="button" class="icon-btn btn_hover" title="Facebook">
                          <i class="fab fa-facebook"></i>
                        </button>
                        <button type="button" class="icon-btn btn_hover" title="Linkedin">
                          <i class="fab fa-linkedin"></i>
                        </button>
                    </div>
                        

                    </form>
                      <div class="modal-footer2 d-flex justify-content-center">
                        <div class="signup-section "><p>New Here? <a href="register.php">Signup</a>.</p></div>
                      </div>

                </div>
            </div>
          </div>
        </div>
  

<script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>