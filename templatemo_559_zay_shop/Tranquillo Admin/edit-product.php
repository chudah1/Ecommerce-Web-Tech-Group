<?php require '../db_config.php';
$product_id = $_GET['product_id'];
$product_query = "select * from products inner join product_categories using(category_id) inner join brands using(brand_id) where product_id='$product_id'";
$query_categories = "select category_name, category_id from product_categories";
$query_brands = "select brand_id, brand_name from brands";
$exec_categories = mysqli_query($conn, $query_categories);
$exec_brands = mysqli_query($conn, $query_brands);
$products_exec = mysqli_query($conn, $product_query);
$pdt_name = mysqli_fetch_assoc($products_exec)["Product_name"];
$pdt_desc = mysqli_fetch_assoc($products_exec)["Product_desc"];
$pdt_category = mysqli_fetch_assoc($products_exec)["category_name"];
$brand_name = mysqli_fetch_assoc($products_exec)["Brand_name"];
$price = mysqli_fetch_assoc($products_exec)["Unit_price"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Add Product - Dashboard HTML Template</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="css/fontawesome.min.css" />
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
  <!-- http://api.jqueryui.com/datepicker/ -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/templatemo-style.css">
  <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body>
  <nav class="navbar navbar-expand-xl">
    <div class="container h-100">
      <a class="navbar-brand" href="index.html">
        <h1 class="tm-site-title mb-0">Product Admin</h1>
      </a>
      <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars tm-nav-icon"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto h-100">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="fas fa-tachometer-alt"></i> Dashboard
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="products.php">
              <i class="fas fa-shopping-cart"></i> Products
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="accounts.html">
              <i class="far fa-user"></i> Accounts
            </a>
          </li>

        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link d-block" href="login.html">
              Admin, <b>Logout</b>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-block-title d-inline-block">Add Product</h2>
            </div>
          </div>
          <div class="row tm-edit-product-row">
            <div class="col-xl-6 col-lg-6 col-md-12">
              <form id="upload_form" class="tm-edit-product-form" action="update_proc.php" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                  <label for="name">Product Name
                  </label>
                  <input id="name" name="pdt_name" type="text" class="form-control validate" value="<?php echo $pdt_name; ?>" required />
                </div>
                <div class="form-group mb-3">
                  <label for="description">Description</label>
                  <textarea name="desc" class="form-control validate" rows="3" value="<?php echo $pdt_desc; ?>" required></textarea>
                </div>
                <div class="form-group mb-3">
                  <label for="category">Category</label>
                  <select class="custom-select tm-select-accounts" name="category">
                    <?php while ($row = mysqli_fetch_assoc($exec_categories)) : ?>
                      <option value="<?php echo $row['category_id']; ?>"><?php echo $row["category_name"]; ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>

                <div class="form-group mb-3">
                  <label for="category">Brands</label>
                  <select class="custom-select tm-select-accounts" name="brand">
                    <?php while ($row = mysqli_fetch_assoc($exec_brands)) : ?>
                      <option value="<?php echo $row['brand_id']; ?>"><?php echo $row["brand_name"]; ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>

                <div class="row">
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label for="Price">Price
                    </label>
                    <input id="price" name="price" type="text" value="<?php echo $price; ?>" class="form-control validate" data-large-mode="true" value="<?php echo $price; ?>" />
                  </div>

                </div>

            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <div class="tm-product-img-dummy mx-auto">
                <i class="fas fa-cloud-upload-alt tm-upload-icon"></i>
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="fileInput" type="file" name="pdt_image" />

              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="tm-footer row tm-mt-small">

  </footer>

  

  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
  <!-- https://jqueryui.com/download/ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->

</body>

</html>