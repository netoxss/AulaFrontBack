<?php
 include 'navbar.php';
 include 'conexao.php';
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
        <form method="POST">
          <img class="mb-4" src="./img/logo.png" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Faça o seus cadastro!</h1>
      
          <div class="form-floating">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Informe o seu nome">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating">
            <input type="date" name="nascimento" class="form-control" id="floatingInput">
            <label for="floatingInput">Data de nascimento</label>
          </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating">
            <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <input class="btn btn-primary w-100 py-2" type="submit" name="cadastrar" value="cadastrar">
        </form>
      </main> 
      </div>
      </div>
      </div>

      <?php

      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['name'];
        $nascimento = $_POST['nascimento'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
       if (isset($_POST['cadastrar'])){
      
       $query = "SELECT * FROM usuarios WHERE email='$email'";
       $result = mysqli_query($conn,$query);
       $rows = mysqli_num_rows($result);

       if($rows == 0){
       
       $query="INSERT INTO usuarios (id ,nome ,nascimento, email, senha) VALUES ('NULL','$nome','$nascimento','$email','$senha')";

       $query=mysqli_query($conn, $query);

       echo "<script>
        alert('Cadastro realizado');
        window.location='login.php';
        </script>";
      
       } else {
        echo "<script>
        alert('Erro ao cadastrar: Email já cadastrado');
        window.location='cadastro.php'
        <\script>";
       }
     }
    }
      ?>

      <!-- Final do Login-->

    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>