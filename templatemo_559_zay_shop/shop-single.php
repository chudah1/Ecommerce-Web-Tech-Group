<?php include "./includes/header.php"; 
require 'db_config.php';

if(!isset($_SESSION["user_id"])){
    echo "<script>
    alert('Please login to view the page')
    window.location.href='login.php'
    </script>";
}
 $single_product_id = $_GET['product_id'];
$sql = "SELECT * FROM PRODUCTS RIGHT JOIN RATINGS USING(product_id) 
inner join product_categories using(category_id) inner join brands using(brand_id) 
where product_id='$single_product_id'";
$result = mysqli_query($conn, $sql);
$result_assoc = mysqli_fetch_assoc($result);
$product_name = $result_assoc["Product_name"];
$product_image = base64_encode($result_assoc["product_image"]);
$price =$result_assoc["Unit_price"];
$ratings = $result_assoc["Rating"];
$desc = $result_assoc["Product_desc"];
$brand = $result_assoc["Brand_name"];
$category_id =$result_assoc["Category_id"];
$related_products = "SELECT * FROM RATINGS RIGHT JOIN PRODUCTS USING(product_id) INNER JOIN PRODUCT_CATEGORIES
 USING(category_id) where Category_id='$category_id' and product_id!='$single_product_id'";

$query = mysqli_query($conn, $related_products);
?>

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid"  src="data:image/png;base64,<?php echo $product_image; ?>" alt="<?php echo $product_name;?>" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_01.jpg" alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_02.jpg" alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_03.jpg" alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_04.jpg" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_05.jpg" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_06.jpg" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_07.jpg" alt="Product Image 7">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_08.jpg" alt="Product Image 8">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/product_single_09.jpg" alt="Product Image 9">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Third slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $product_name; ?></h1>
                            <p class="h3 py-2"><?php echo '&#8373;' . $price; ?></p>
                            <p class="py-2">
                            <?php for ($i = 0; $i < $ratings; $i++) : ?>

                                <?php echo "<i class='text-warning fa fa-star'></i>"; ?>
                                <?php endfor; ?>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $brand; ?></strong></p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p><?php echo $desc;?></p>
                        
                            <form id="cart_form">
                                <input type="hidden" name="product_id" id="product_id" value="<?php echo $single_product_id;?>">
                                <div class="row">
                                    <!-- <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                        </ul>
                                    </div> -->
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="quantity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg">Buy</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" id=" cart_btn" value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>

            <!--Start Carousel Wrapper-->

            <div id="carousel-related-product">
            <?php while($row=mysqli_fetch_assoc($query)):?>
                <?php $pdt_category_image = base64_encode($row["product_image"]);
                $pdt_category_ratings = $row["Rating"];
                
                ?>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="data:image/png;base64,<?php echo $pdt_category_image; ?>">
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
                            <li>
                                        <?php for ($i = 0; $i < $pdt_category_ratings; $i++) : ?>

                                            <?php echo "<i class='text-warning fa fa-star'></i>"; ?>
                                        <?php endfor; ?>
                                    </li>
                            </ul>
                            <p class="text-center mb-0"><?php echo '&#8373;' . $row["Unit_price"];?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- End Article -->


    <!-- Start Footer  (remove all links)-->
<?php include "./includes/footer.php";?>
    <!-- End Script -->

    <!-- -->
    <script>
let form_cart = document.getElementById("cart_form")
form_cart.addEventListener("submit", (e)=>{
    e.preventDefault()
    let product_id = document.getElementById("product_id").value
    let quantity = document.getElementById("product-quanity").value
    fetch('add_to_cart.php?product_id=' + encodeURIComponent(product_id)  + '&quantity=' + encodeURIComponent(quantity),
        {
            method:"GET"
        })
        .then(res=>res.json())
        .then(data=>{
            console.log(data)
            if(data.success){
                updateCartIcon(data.quantity)
                alert(data.message)
                location.reload()
            }else{
                alert("Could not add to cart")
            }
        }).catch(err=>alert("Request was unsuccessful"))
})
document.addEventListener('DOMContentLoaded', () => {
    // Get the quantity from the json object returned
    fetch('cart-api.php',
        {
            method:"GET"
        })
        .then(res=>res.json())
        .then(data=>{
            if(data.success){
                updateCartIcon(data.quantity)
            }
        }).catch(err=>console.error(err))
    
        })
        const updateCartIcon= (quantity)=>{
    const cartIcon = document.getElementById('cart-icon');
    cartIcon.textContent = quantity;
          }
    </script>

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>