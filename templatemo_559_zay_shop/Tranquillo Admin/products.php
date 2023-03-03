<?php require '../db_config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>
<?php $sql = "SELECT Product_name, product_id, Unit_price, Product_desc, product_image from products";
    $query = mysqli_query($conn, $sql);

    $categories = "select category_id, category_name from product_categories";
    $exec = mysqli_query($conn, $categories);
?>
  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link active" href="products.php">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>

           
            
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block">
                <?php echo $_SESSION["fname"]; ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">PRODUCT DESC</th>
                    <th scope="col">UNIT PRICES</th>
                    <th scope="col">PRODUCT IMAGE</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($row=mysqli_fetch_assoc($query)): ?>
                  <tr>
                    <!-- <th scope="row"><input type="checkbox" /></th> -->
                    <td class="tm-product-name" data-id="<?php echo $row['product_id'];?>">
                    <?php echo $row["Product_name"]; ?></td>
                    <td><?php echo $row["Product_desc"]; ?></td>
                    <td><?php echo $row["Unit_price"]; ?></td>
                    <td><?php echo $row["Product_name"]; ?></td>
                    <td>
                      <a class="tm-product-delete-link delete" data-delete="<?php echo $row['product_id'];?>">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    
                    </td>
                  </tr>
                  <?php endwhile; ?>
                
             
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a href="add-product.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  <?php while($row=mysqli_fetch_assoc($exec)): ?>
                  <tr>
                    <td><?php echo $row["category_name"];?> </td>
                    <td class="text-center">
                      <a class="tm-product-delete-link delete_cat" data-delete="<?php echo $row['category_id']; ?>">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <?php endwhile; ?>
              
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a href=" add-category.php">
              <button class="btn btn-primary btn-block text-uppercase mb-3">
                Add new category
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
    
          
     
    </script>
    <script src="./js/delete_cat_products.js">
    
      </script>
  </body>
</html>

