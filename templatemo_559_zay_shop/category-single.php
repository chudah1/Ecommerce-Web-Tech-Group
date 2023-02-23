<?php
include("./includes/header.php");
require 'db_config.php';

// Check if category_id is set in the URL
if (isset($_GET['category_id'])) {
    $category_id = (int) $_GET['category_id']; // cast to integer to prevent SQL injection
    $category_query = "SELECT * FROM Products
                       INNER JOIN Product_categories USING(category_id)
                       INNER JOIN ratings USING(product_id)
                       WHERE category_id = $category_id";
    $exec_query = mysqli_query($conn, $category_query);
    $results_arr = mysqli_fetch_all($exec_query, MYSQLI_ASSOC);
}
?>

<!-- Start Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <?php if (isset($results_arr[0]['category_name'])): ?>
                <h1 class="h2 pb-4"><?php echo $results_arr[0]['category_name']; ?></h1>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <?php foreach ($results_arr as $row): ?>
            <?php
            $product_image = base64_encode($row['product_image']);
            $product_name = $row['Product_name'];
            $rating = (int) $row['Rating']; ?>
            <div class="col-md-4">
                <div class="card mb-4 product-wap rounded-0">
                    <div class="card rounded-0">
                        <img style="height: 400px;" class="card-img rounded-0 img-fluid" src="data:image/png;base64,<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>">
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>
                                <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>
                                <li><a class="btn btn-success text-white mt-2 cart" data-product_id="<?php echo $row['product_id'];?>"
                                >
                                 <i class="fas fa-cart-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="shop-single.php" class="h3 text-decoration-none"><?php echo $product_name; ?></a>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li class="pt-2">
                                <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                            </li>
                        </ul>
                        <ul class="list-unstyled d-flex justify-content-center mb-1">
                            <?php for ($i = 0; $i < $rating; $i++): ?>
                                <li><i class="text-warning fa fa-star"></i></li>
                            <?php endfor; ?>
                        </ul>
                        <p class="text-center mb-0"><?php echo '&#8373;'. $row['Unit_price']; ?></p>
                            </div>
                        </div>

            </div>
            <?php endforeach;?>

        </div>


    </div>
    <!-- End Content -->

    <!-- Start Footer  (remove all links)-->
    <?php include("./includes/footer.php"); ?>
    <script src="assets/js/custom.js"></script>

</body>

</html>