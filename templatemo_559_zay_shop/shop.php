<?php include("./includes/header.php");
    require 'db_config.php';
    $sql = "SELECT * FROM product_categories";
    $products_sql = "SELECT * FROM products inner join ratings using(product_id) order by Unit_price desc";
    $results = mysqli_query($conn, $sql);
    $products_result = mysqli_query($conn, $products_sql);


    ?>

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <?php if ($results) :?>
                <ul class="list-unstyled templatemo-accordion">
                <?php while ($row = mysqli_fetch_assoc($results)) : ?>

                    <!-- for decor -->
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" 
                        href="category-single.php?category_id=<?php echo $row['category_id']; ?>">
                            <?php echo $row["category_name"]; ?>
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#"> to be decided</a></li>
                            <li><a class="text-decoration-none" href="#"> to be decided</a></li>
                            <li><a class="text-decoration-none" href="#">To be decided</a></li>
                        </ul>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php else: ?>
                    <p>No categories found.</p>
                <?php endif; ?>
            </div>

            <div class="col-lg-9">
                <?php if($products_result): ?>
                <div class="row">
                    <?php while($row=mysqli_fetch_assoc($products_result)): ?>
                    <?php $product_img =  base64_encode($row['product_image']);?>

                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img style="height:300px;" class="card-img rounded-0 img-fluid" src="data:image/png;base64,<?php echo $product_img;?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.php"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.php" class="h3 text-decoration-none"><?php echo $row["Product_name"];?></a>
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
                                <?php for ($i = 0; $i < $row['Rating']; $i++): ?>
                                <li><i class="text-warning fa fa-star"></i></li>
                                  <?php endfor; ?>
                                </ul>
                                <p class="text-center mb-0"><?php echo "$". $row["Unit_price"];?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
              
                
               
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
    <?php include("./includes/footer.php");?>