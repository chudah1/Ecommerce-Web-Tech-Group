<?php
include './includes/header.php';
?>


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
   <?php include("./includes/footer.php"); ?>

</body>

</html>