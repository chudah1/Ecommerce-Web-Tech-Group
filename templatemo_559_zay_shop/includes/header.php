<?php session_start(); 
require "db_config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tranquillo</title>
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

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">tranquillo@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                Tranquillo
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark" id="cart-icon"></span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="login.php">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <?php if(isset($_SESSION["fname"])): ?>
                         <span>
                            <?php echo $_SESSION["fname"] ;?>

                         </span>
                        <?php else: ?>
                         <span class='position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark'></span>
                        <?php endif; ?>
                    </a>

                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->


    <!-- Search Modal : When you want to serch this is what comes up-->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

  


    <!-- Cart Modal : When you want to see cart this is what comes up-->

    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Your Shopping Cart
                    </h5>
                    <div class="cart_close">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                </div>
                <?php if(isset($_SESSION["user_id"])): ?>
                 <?php 
                 $user_id = $_SESSION["user_id"];
                $sql_query = "SELECT * FROM cart inner join products using(product_id) where customer_id='$user_id'";
                $result = mysqli_query($conn, $sql_query);
                $total = 0;

                 if($result):?>
                <div class="modal-body">
                    <table class="table table-image" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col" class="centre_align">Product</th>
                                <th scope="col" class="centre_align">Price</th>
                                <th scope="col" class="centre_align">Qty</th>
                                <th scope="col" class="centre_align">Total</th>
                                <th scope="col" class="centre_align">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Item 1-->
                            <?php while($row=mysqli_fetch_assoc($result)): ?>
                                <?php $product_image = base64_encode($row["product_image"]); 
                                $unit_price = $row["Unit_price"];
                                $quantity = $row["Quantity"];
                                ?>

                            <tr class="remove">
                                <td class="w-25">
                                    <img src="data:image/png;base64,<?php echo $product_image; ?>" class="img-fluid img-thumbnail" alt="<?php echo $row['product_name'];?>">
                                </td>
                             
                                <td>
                                    <p class="vertical_align"><?php echo '&#8373;'. $unit_price; ?></p>
                                </td>
                                <td class="qty "><input type="text" disabled class="form-control vertical_align cart-qty" id="input1" value="<?php echo $quantity; ?>"></td>
                                <td class="vertical_align">
                                <?php $total+= $unit_price*$quantity; ?>

                                    <p class="vertical_align"><?php echo '&#8373;'. $quantity*$unit_price;?></p>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm td_close vertical_align remove-item" data-action="remove" data-product_id="<?php echo $row['product_id'];?>">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                        </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <h5>Total: <span class="price text-success"><?php echo '&#8373;'.$total;?></span></h5>
                    </div>
                </div>
                <?php endif; ?>
                <div class="modal-footer border-top-0 d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Checkout</button>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- End of Cart Modal-->