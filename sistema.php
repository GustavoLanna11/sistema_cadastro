<?php
    session_start();
    //print_r($_SESSION);
    include_once('config.php');

    if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }

    $logado = $_SESSION['email'];
    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);
?>



<!DOCTYPE html>
<html lang="utf-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/sistema.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger mr-5">Sair</a>
    </div>
</nav>
<br><br>

   <?php
    echo "<h1> Bem vindo <u>$logado</u></h1>";
   ?>
   <br>
   <div class="m-5">
   <table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Telefone</th>
      <th scope="col">Sexo</th>
      <th scope="col">CPF</th>
      <th scope="col">Estado Civil</th>
      <th scope="col">Estado</th>
      <th scope="col">cidade</th>
      <th scope="col">Endereço</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['nome']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['senha']."</td>";
            echo "<td>".$user_data['data_nasc']."</td>";
            echo "<td>".$user_data['telefone']."</td>";
            echo "<td>".$user_data['sexo']."</td>";
            echo "<td>".$user_data['cpf']."</td>";
            echo "<td>".$user_data['estadocivil']."</td>";
            echo "<td>".$user_data['estado']."</td>";
            echo "<td>".$user_data['cidade']."</td>";
            echo "<td>".$user_data['endereco']."</td>";
            echo "<td>Ações</td>";
            echo "</tr>";
        }
    
    ?>
  </tbody>
</table>
   </div>
</body>
</html>