<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ragistration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    
  </head>
  <body>
   <main class="container mx-auto w-50 mt-5">
    <div class="row">
      <div class="col text-center mb-4">
        <h1 class="text-danger"><i class="fa-solid fa-user-plus"></i> Registrarion</h1>
      </div>
    </div>
    <form action="../actions/register.php" method="post">
    <div class="row">
      <div class="col">
        <label for="first-name" class="form-label">First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control mb-3" required autofocus>
      </div>
       <div class="col">
        <label for="last-name" class="form-label">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="form-control mb-3" required>
      </div>
    </div>
     <label for="username" class="form-label">Userame</label>
     <input type="text" name="username" id="username" class="form-control mb-3" required>
     <label for="password" class="form-label">Password</label>
     <input type="password" name="password" id="password" class="form-control mb-3" required>
     <button type="submit" class="btn btn-danger w-100 mt-3">Register</button>
    </form>
   </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>