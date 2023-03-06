<?php include("./includes/header.php");
    require 'db_config.php';
    $sql = "SELECT * FROM product_categories";
    $products_sql = "select *, round(avg(rating)) 
             as `Average rating` from ratings 
             right join products using(product_id) 
             group by products.product_name order by `Average rating` desc";
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
                        <?php $category =  $row['category_id'];
                         $query = "SELECT product_name from products where Category_id = $category order by Unit_price LIMIT 3";
                         $exec_query = mysqli_query($conn, $query);
                         ?>
                        <ul class="collapse show list-unstyled pl-3">
                             <?php while($product = mysqli_fetch_assoc($exec_query)): ?>

                            <li><a class="text-decoration-none" href="#"><?php echo $product["product_name"];?></a></li>
                            <?php endwhile; ?>

                        </ul>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php else: ?>
                    <p>No categories found.</p>
                <?php endif; ?>
            </div>

            <div class="col-lg-9">
            <div class="row">
                    <div class="col-md-6 pb-4 form-control4">
                        <div class="d-flex">
                            <div class="input-group rounded">
                      <input type="search" class="rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="search" />
                      <span class="input-group-text border-0">
                        <i class="fas fa-search"></i>
                      </span>
                    </div>
                        </div>
                    </div>
                </div>
                <?php if($products_result): ?>
                <div class="row">
                    <?php while($row=mysqli_fetch_assoc($products_result)): ?>
                    <?php $product_img =  base64_encode($row['product_image']);?>

                    
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0 pdt_item">
                            <div class="card rounded-0">
                                <img style="height:300px;" class="card-img rounded-0 img-fluid" src="data:image/jpeg;base64,<?php echo $product_img;?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white wishlist"  data-product_id="<?php echo $row['product_id'];?>"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.php?product_id=<?php echo $row['product_id'];?>"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2 cart"
                                        data-product_id="<?php echo $row['product_id'];?>">
                                        <i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.php" class="h3 text-decoration-none pdt_title"><?php echo $row["Product_name"];?></a>
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
                                <p class="text-center mb-0"><?php echo '&#8373;'. $row["Unit_price"];?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
              
                
               
                </div>
          
            </div>

        </div>
    </div>
    <!-- End Content -->

    <!-- Start Footer  (remove all links)-->
    <?php include("./includes/footer.php");?>
    <script src="assets/js/custom.js"></script>
    <script>
     let search_btn = document.getElementById("search");
      let cards = document.getElementsByClassName("pdt_item");
      search_btn.addEventListener("keyup", (e)=>{
        let search_query = e.target.value.toLowerCase();

        for(let card of cards){
            let title = card.querySelector(".pdt_title").textContent.toLowerCase();
            if(title.includes(search_query)){
                card.style.display = "block";
            }
            else{
                card.style.display = "none";
            }
        }
      })

    </script>
</body>
</html>