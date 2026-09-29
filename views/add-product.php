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

    <main class="container w-25">
      <h1 class="text-center text-info"><i class="fa-solid fa-box"></i> Add Product</h1>

      <form action="../actions/add-product.php" method="post">
        <label for="product-name" class="form-label mt-3 text-secondary">Product Name</label>
        <input type="text" name="product_name" id="product-name" class="form-control mb-3">
        <div class="row">
          <div class="col">
            <label for="price" class="form-label">Price</label>
            <div class="input-group">
              <div class="input-group-text">$</div>
              <input type="number" name="price" id="price" class="form-control">
            </div>
          </div>
          <div class="col mt-2">
            <label for="quantity" class="from-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control">
          </div>
        </div>
        <button type="submit" class="btn btn-info w-100 mt-5">Add</button>
      </form>
    </main>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>