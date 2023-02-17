<!DOCTYPE html>
<html lang="en">

<!-- Display all products-->

<head>
    <title>Products searched Listing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Tranquillo
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
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
            <form action="search.php" method="get" class="modal-content modal-body border-0 p-0">
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
                            <tr id="remove_first">
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
                                    <a href="#" class="btn btn-danger btn-sm td_close vertical_align" id="remove">
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
                        <form action="login_processing.php" method="POST">
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


    <!-- Start Content -->
    <div class="container py-5">
        <?php
        require 'db_config.php';
        $search_term = mysqli_real_escape_string($conn, $_GET["search_term"]);
        $sql = "select *
        from  products
        inner join ratings
        using(product_id)
        inner join product_categories
        using(category_id)
        where category_name LIKE '%$search_term%'
        group by product_name
        order by avg(rating) desc LIMIT 5";
        
        $sql_products = "select * from products where product_name LIKE '%$search_term%'";
        $results = mysqli_query($conn, $sql);
        $category_name = "";
        $product_name = "";
        ?>
        <div class="row">
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <?php if ($results) : ?>
                    <?php while ($row = mysqli_fetch_assoc($results)) : ?>
                        <?php print_r($results); ?>

                        <?php $category_name = $row['category_name']; ?>
                        <?php echo $category_name; ?>

                        <ul class="list-unstyled templatemo-accordion">

                            <!-- for decor -->

                            <li class="pb-3">
                                <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                                    <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                                </a>
                                <ul class="collapse show list-unstyled pl-3">
                                    <li><a class="text-decoration-none" href="#"> <?php echo $row['Product_name']; ?></a></li>
                                </ul>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Clothes</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Electronics</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($results)) : ?>
                        <div class="col-md-4">
                            <div class="card mb-4 product-wap rounded-circle">
                                <div class="card rounded-0">
                                    echo '<img class="card-img rounded-0 img-fluid" src="data:image/jpeg;base64,' . base64_encode($row['product_image']).'">'
                                    <div class="card-img-overlay rounded-circle product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $row['product_name']; ?></a>
                                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                        <li>M/L/X/XL</li>
                                        <li class="pt-2">
                                            <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                                        <li>
                                            <?php for ($i = 0; $i < count($row['Rating']); $i++) : ?>

                                                <?php echo "<i class='text-warning fa fa-star'></i>"; ?>
                                            <?php endfor; ?>


                                        </li>
                                    </ul>
                                    <p class="text-center mb-0">
                                        <?php echo "$" . $row['Unit_price']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>


                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

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
                            <a class="text-decoration-none">Tranquillo@company.com</a>
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
                                    Copyright &copy; <?php echo date("Y") ?> Tranquillo
                                    | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">Tranquillo Team</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script type="text/javascript">
        let remove_btn = document.getElementById("remove");
        remove_btn.addEventListener("click", () => {
            let row = document.getElementById("remove_first");
            row.remove();
        })
    </script>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>