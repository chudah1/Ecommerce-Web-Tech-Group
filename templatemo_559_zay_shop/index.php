<?php
include './includes/header.php';
?>
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
    $category_id = "";
    $category_name = "";
    $category_image = "";
    ?>
    <div class="row">
        <?php if ($results) : ?>
            <?php while ($row = mysqli_fetch_assoc($results)) : ?>
                <?php 
                 $category_id = $row["category_id"];
                $category_name = $row['category_name'];
                $category_image = $row['Category_image'];
                ?>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <?php echo '<img class="card-img rounded-0 img-fluid" src= "data:image/png;base64,' . base64_encode($category_image) . '">'; ?>

                    <h5 class="text-center mt-3 mb-3">
                        <?php echo $category_name; ?>
                    </h5>
                    <p class="text-center"><a class="btn btn-success" 
                    href="category-single.php?category_id=<?php echo $category_id;?>
                        ">Go Shop</a></p>
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
                    $product_id = $item["product_id"];
                    $rated_product = $item["Product_name"];
                    $rated_product_image = base64_encode($item["product_image"]);
                    $price = $item["Unit_price"];
                    $ratings = $item["Rating"];
                    $desc = $item["Product_desc"];
                    ?>

                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-90">
                            <a href="shop-single.html">
                                <img style="height:390px;" class="card-img rounded-0 img-fluid" src="data:image/png;base64,<?php echo $rated_product_image; ?>" alt="<?php echo $rated_product; ?>">
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


<?php include("./includes/footer.php"); ?>
</body>

</html>