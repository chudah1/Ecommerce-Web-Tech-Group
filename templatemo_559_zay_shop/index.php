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
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
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
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#ModalForm">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
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
                <div class="modal-body">
                    <table class="table table-image">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="centre_align">Product</th>
                                <th scope="col" class="centre_align">Price</th>
                                <th scope="col" class="centre_align">Qty</th>
                                <th scope="col" class="centre_align">Total</th>
                                <th scope="col" class="centre_align">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--Item 1-->
                            <tr>
                                <td class="w-25">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" class="img-fluid img-thumbnail" alt="Sheep">
                                </td>
                                <td>
                                    <p class="vertical_align">Vans Sk8-Hi MTE Shoes</p>
                                </td>
                                <td>
                                    <p class="vertical_align">89$</p>
                                </td>
                                <td class="qty "><input type="text" class="form-control vertical_align" id="input1" value="2"></td>
                                <td class="vertical_align">
                                    <p class="vertical_align">178$</p>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm td_close vertical_align">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <!--Item 2-->
                            <tr>
                                <td class="w-25">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" class="img-fluid img-thumbnail" alt="Sheep">
                                </td>
                                <td>
                                    <p class="vertical_align">Vans Sk8-Hi MTE Shoes</p>
                                </td>
                                <td>
                                    <p class="vertical_align">89$</p>
                                </td>
                                <td class="qty "><input type="text" class="form-control vertical_align" id="input1" value="2"></td>
                                <td class="vertical_align">
                                    <p class="vertical_align">178$</p>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm td_close vertical_align">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <h5>Total: <span class="price text-success">89$</span></h5>
                    </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Checkout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Cart Modal-->


    <!-- Account Modal : When you want to see the account this is what comes up-->

    <!--log in-->

    <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="form-area bg-white">
                        <h1 class="text-center font_black">Login Form</h1>
                        <form>
                            <div class="mb-3 mt-4">
                                <input type="email" class="form-control2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control2" id="exampleInputPassword1" placeholder="Your Password">
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
                            <div class="signup-section ">
                                <p>New Here? <a href="#" data-bs-toggle="modal" data-bs-target="#ModalForm2" data-bs-dismiss="modal">Signup</a>.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sign up-->



    <div class="modal fade" id="ModalForm2" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="form-area bg-white">
                        <h1 class="text-center font_black">Sign Up Form</h1>
                        <form>
                            <div class="mb-3 mt-4">
                                <input class="form-control2" id="firstName" placeholder="Your First Name">
                            </div>
                            <div class="mb-3 mt-4">
                                <input class="form-control2" id="firstName" placeholder="Your Last Name">
                            </div>

                            <div class="mb-3 mt-4">
                                <input type="email" class="form-control2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control2" id="exampleInputPassword1" placeholder="Your Password">
                            </div>
                            <button type="submit" class="btn btn-light mt-3">SIGN UP</button>



                        </form>
                        <div class="modal-footer2 d-flex justify-content-center">
                            <div class="signup-section">
                                <p>Already Have An Account? <a href="#" data-bs-toggle="modal" data-bs-target="#ModalForm" data-bs-dismiss="modal">Login</a>.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Account Modal-->


    <!-- Start Banner Hero -->
    <!-- 3 slides -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Tranquillo</b> eCommerce</h1>
                                <h3 class="h2">Unleash the power of Shopping Online</h3>
                                <p>
                                    Tranquillo is an ecommerce web application designed to provide a calm and hassle-free shopping experience. With a user-friendly interface and easy navigation, Tranquillo makes online shopping a breeze.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/bannerimg2.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Tranquillo</h1>
                                <h3 class="h2">Shop the Best Deals Online!</h3>
                                <p>
                                    The platform offers a wide range of products across categories, making it a one-stop-shop for all your needs. With secure payment options, quick delivery, and 24/7 customer support, Tranquillo ensures that you have a tranquil shopping experience every time. Whether you're looking for the latest fashion trends, home appliances, or anything in between, Tranquillo has you covered.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Tranquillo</h1>
                                <h3 class="h2">Unbeatable service, unmatched satisfaction</h3>
                                <p>
                                    The platform also offers hassle-free returns and exchanges, so you can shop with confidence. If you have any questions or concerns, Tranquillo's dedicated customer support team is available to assist you 24/7, so you can have a stress-free shopping experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories</h1>
                <p>
                    Unleash the Power of Shopping Online
                </p>
            </div>
        </div>
        <!-- Outputting the data from the categories coulmn dynamically-->
        <?php
        require 'db_config.php';
        $sql = "SELECT * FROM product_categories";
        $results = mysqli_query($conn, $sql);
        $category_name = "";
        $category_image = "";
        ?>
        <div class="row">
            <?php if ($results) : ?>
                <?php while ($row = mysqli_fetch_assoc($results)) : ?>
                    <?php $category_name = $row['category_name'];
                    $category_image = $row['Category_image'];
                    ?>
                    <div class="col-12 col-md-4 p-5 mt-3">
                        <?php echo '<img class="card-img rounded-0 img-fluid" src= "data:image/png;base64,' . base64_encode($category_image) . '">'; ?>

                        <h5 class="text-center mt-3 mb-3">
                            <?php echo $category_name; ?>
                        </h5>
                        <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
                    </div>
                <?php endwhile; ?>
        </div>
    <?php endif; ?>



    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product (can take this out) -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Top Rated Products</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <?php
            $sql_query = "select *, round(avg(rating)) 
             as `Average rating` from ratings 
             right join products using(product_id) 
             group by products.product_name order by avg(rating) desc limit 3";
            // $sql_query = "SELECT * FROM products";
            $sql_results = mysqli_query($conn, $sql_query);
            $rated_product = "";
            $rated_product_image = "";
            $ratings = "";
            $desc = ""
            ?>

            <div class="row">
                <?php if ($sql_results && mysqli_num_rows($sql_results) > 0) : ?>
                    <?php while ($item = mysqli_fetch_assoc($sql_results)) : ?>
                        <?php
                        $rated_product = $item["Product_name"];
                        $rated_product_image = base64_encode($item["product_image"]);
                        $price = $item["Unit_price"];
                        $ratings = $item["Rating"];
                        $desc = $item["Product_desc"];


                        ?>

                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-90">
                                <a href="shop-single.html">
                                    <img style="height:340px;" class="card-img rounded-0 img-fluid" src="data:image/png;base64,<?php echo $rated_product_image; ?>" alt="<?php echo $rated_product; ?>">
                                </a>
                                <div class="card-body">
                                    <ul class="list-unstyled d-flex justify-content-between">
                                        <li>
                                            <?php for ($i = 0; $i < $ratings; $i++) : ?>

                                                <?php echo "<i class='text-warning fa fa-star'></i>"; ?>
                                            <?php endfor; ?>
                                        </li>
                                        <li class="text-muted text-right"><?php echo "$" . $price; ?></li>
                                    </ul>
                                    <a href="shop-single.html" class="h2 text-decoration-none text-dark"><?php echo $rated_product; ?></a>
                                    <p class="card-text">
                                        <?php echo $desc; ?>
                                    </p>
                                    <p class="text-muted">Reviews (24)</p>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p>No products found.</p>
                <?php endif; ?>
            </div>

        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer  (remove all links)-->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo" style="color: #cfd6e1 !important;">Tranquillo</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            1 University Ave
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none">tanquillo@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none">Luxury</a></li>
                        <li><a class="text-decoration-none">Sport Wear</a></li>
                        <li><a class="text-decoration-none">Men's Shoes</a></li>
                        <li><a class="text-decoration-none">Women's Shoes</a></li>
                        <li><a class="text-decoration-none">Popular Dress</a></li>
                        <li><a class="text-decoration-none">Gym Accessories</a></li>
                        <li><a class="text-decoration-none">Sport Shoes</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none">Home</a></li>
                        <li><a class="text-decoration-none">About Us</a></li>
                        <li><a class="text-decoration-none">Shop Locations</a></li>
                        <li><a class="text-decoration-none">FAQs</a></li>
                        <li><a class="text-decoration-none">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>


                <div class="w-100 bg-black py-3">
                    <div class="container">
                        <div class="row pt-2">
                            <div class="col-12">
                                <p class="text-left text-light">
                                    Copyright &copy; 2022 Traquillo
                                    | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">Tranquillo Team</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>
