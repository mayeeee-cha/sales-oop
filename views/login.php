<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    
  </head>
  <body>
   <main class="container mx-auto mt-5 w-50">
    <h1 class="text-center text-primary mb-4">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>

    <form action="../actions/login.php" method="post">
      <div class="row">
        <div class="col-4">
          <label for="username" class="form-label float-end mt-2">Username</label>
        </div>
        <div class="col-5">
          <input type="text" name="username" id="username" class="form-control float-start mb-2" placeholder="Username" required>
        </div>
      </div>
         <div class="row">
        <div class="col-4">
          <label for="password" class="form-label float-end mt-2">Password</label>
        </div>
        <div class="col-5">
          <input type="password" name="password" id="password" class="form-control float-start mb-2" placeholder="Password" required>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
         <label for=""></label>
        </div>
        <div class="col-5">
         <button type="submit" class="btn btn-primary w-100 mt-2 float-end">Login</button>
        </div>
      </div>
      <a href="register.php" class="btn btn-danger text-white mx-auto d-block w-25 mt-3">Create an Account</a>
   
      
    </form>
   </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>