<?php
include "../classes/Product.php";
$product = new Product;
$all_products = $product->getAllProducts();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    
  </head>
  <body>
    <nav class="navbar navbar-expand">
      <div class="container">
        <a href="dashboard.php" class="nav-brand">
          <i class="fa-solid fa-house text-dark nav-icon fa-2x"></i>
        </a>
        <div class="navbar-nav">
          <div class="navbar-text">
             <i class="fa-solid fa-user-xmark text-danger nav-icon fa-2x"></i>
          </div>
        </div>
      </div>
    </nav>

    <main class="container w-50 mt-5">
      <div class="row">
        <div class="col">
          <h2>Product List</h2>
        </div>
        <div class="col">
          <a href="add-product.php" class="float-end text-info h2">
            <i class="fa-solid fa-plus"></i>
          </a>
        </div>
      </div>

      <div class="mt-1 bg-dark text-center" style="height: 350px;">
          <h2 class="text-danger pt-5">No Records Found</h2>
          <h1 class="display-2 text-danger fa-8x"><i class="fa-regular fa-circle-xmark"></i></h1>
      </div>

      <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($product = $all_products->fetch_assoc()){
          ?>
          <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['product_name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['quantity'] ?></td>
            <td>
              <a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
              <a href="delete-product.php?id=<?= $product['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
            <td></td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    
    </main>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>