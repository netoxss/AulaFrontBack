<?php
 include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>

      <!-- Inicio do login -->

      <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-5">

      <main class="form-signin w-100 m-auto p-5">
        <form method="post">
          <img class="mb-4" src="./img/logo.png" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Faça o seus login</h1>
      
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating">
            <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Remember me
            </label>
          </div>
          <input class="btn btn-primary w-100 py-2" type="submit" name="entrar">
        </form>
      </main>
      </div>
      </div>
      </div>
      
      <!-- Final do Login-->

    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>