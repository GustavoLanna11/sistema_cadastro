<?php
  if(isset($_POST['submit']))
  {
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Senha: ' . $_POST['senha']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Data de Nascimento: ' . $_POST['data_nasc']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Sexo: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('CPF: ' . $_POST['cpf']);
    //print_r('<br>');
    //print_r('Estado Civil: ' . $_POST['tipo']);
    //print_r('<br>');
    //print_r('Estado: ' . $_POST['estado']);
    //print_r('<br>');
    //print_r('Cidade: ' . $_POST['cidade']);
    //print_r('<br>');
    //print_r('Endereco: ' . $_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $data_nasc = $_POST['data_nasc'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $cpf = $_POST['cpf'];
    $estadocivil = $_POST['tipo'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,data_nasc,telefone,sexo,cpf,estadocivil,estado,cidade,endereco) VALUES ('$nome','$senha','$email','$data_nasc','$telefone','$sexo','$cpf','$estadocivil','$estado','$cidade','$endereco')");

    header('Location: index.php');

  }


?>





<!DOCTYPE html>
<html lang="utf-8">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/home.css">

  <link rel="icon" type="image/x-icon" href="assets/imagens/cadastro.png">
  <title>Cadastro</title>
</head>
<body>
  <div id="wrapper">
    
    <div id="box_form">
      <form action="cadastrar.php" method="POST">


      
      <div id="fundo">
        <p id="titulo_c"><i>Cadastro Pessoal</i></p>
      </div>

      <a href="index.php"><i class="bi bi-back" id="icon">Voltar</i></a>

      
      <div id="formulario">

        <div id=pag1>
          <h4 id="input">Nome Completo:</h4>
          <input type="text" name="nome" id=""><br><br>
  
          <h4 id="input">Senha:</h4>
          <input type="password" name="senha" id=""><br><br>
  
          <h4 id="input">Email:</h4>
          <input type="email" name="email" id=""><br><br>
  
          <h4 id="input">Data de nascimento:</h4>
          <input type="date" name="data_nasc" id=""><br><br>
  
          <h4 id="input">Telefone:</h4>
          <input type="tel" name="telefone" id="">
          <br><br>

          <h4 id="input">Sexo:</h4>
        <input type="radio" id="feminino" name="genero" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" id="masculino" name="genero" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" id="outro" name="genero" value="outro" required>
        <label for="outro">Outro</label>
        <br><br>
        </div>
        <!-- FINAL DA PRIMEIRA PÁGINA -->

        <div id="sep"></div>

        <div id="pag2">
        <h4 id="input">CPF:</h4>
        <input type="text" name="cpf" id=""><br><br>

        <h4 id="input">Estado civil:</h4>
        <input type="radio" id="casado" name="tipo" value="casado" required>
        <label for="casado">Casado</label>
        <br>
        <input type="radio" id="solteiro" name="tipo" value="solteiro" required>
        <label for="solteiro">Solteiro</label>
        <br>
        <input type="radio" id="divorciado" name="tipo" value="divorciado" required>
        <label for="divorciado">Divorciado</label>
        <br>
        <input type="radio" id="viuvo" name="tipo" value="viuvo" required>
        <label for="viuvo">Viúvo(a)</label>
        <br><br>

        <h4 id="input">Estado:</h4>
        <input type="text" name="estado" id=""><br><br>

        <h4 id="input">Cidade:</h4>
        <input type="text" name="cidade" id=""><br><br>

        <h4 id="input">Endereço:</h4>
        <input type="text" name="endereco" id="">
        </div>
      </div>

      <input type="submit" value="CADASTRAR" id="botao2" name="submit">
      
      </form>
    </div>


    </div>

    

     
      
      

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"                '         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>
</html>