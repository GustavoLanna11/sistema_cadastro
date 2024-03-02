<?php
  if(!empty($_GET['id']))
  {

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $data_nasc = $user_data['data_nasc'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $cpf = $user_data['cpf'];
            $estadocivil = $user_data['estadocivil'];
            $estado = $user_data['estado'];
            $cidade = $user_data['cidade'];
            $endereco = $user_data['endereco'];
        }
        
    }
    else{
        header('Location: sistema.php');
    }
  }

  else {
    header('Location: sistema.php');
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
      <form action="saveEdit.php" method="POST">

      <br>
      <div id="fundo">
        <p id="titulo_c"><i>Cadastro Pessoal</i></p>
      </div>
     

      <a href="sistema.php"><i class="bi bi-back" id="icon">Voltar</i></a>

      
      <div id="formulario">

        <div id=pag1>
          <h4 id="input">Nome Completo:</h4>
          <input type="text" name="nome" id="" value="<?php echo $nome ?>"><br><br>
  
          <h4 id="input">Senha:</h4>
          <input type="text" name="senha" id="" value="<?php echo $senha ?>"><br><br>
  
          <h4 id="input">Email:</h4>
          <input type="email" name="email" id="" value="<?php echo $email ?>"><br><br>
  
          <h4 id="input">Data de nascimento:</h4>
          <input type="date" name="data_nasc" id="" value="<?php echo $data_nasc ?>"><br><br>
  
          <h4 id="input">Telefone:</h4>
          <input type="tel" name="telefone" id="" value="<?php echo $telefone ?>">
          <br><br>

          <h4 id="input">Sexo:</h4>
        <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?> required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" id="outro" name="sexo" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '' ?> required>
        <label for="outro">Outro</label>
        <br><br>
        </div>
        <!-- FINAL DA PRIMEIRA PÁGINA -->

        <div id="sep"></div>

        <div id="pag2">
        <h4 id="input">CPF:</h4>
        <input type="text" name="cpf" id="" value="<?php echo $cpf ?>"><br><br>

        <h4 id="input">Estado civil:</h4>
        <input type="radio" id="casado" name="tipo" value="casado" <?php echo ($estadocivil == 'casado') ? 'checked' : '' ?> required>
        <label for="casado">Casado</label>
        <br>
        <input type="radio" id="solteiro" name="tipo" value="solteiro" <?php echo ($estadocivil == 'solteiro') ? 'checked' : '' ?> required>
        <label for="solteiro">Solteiro</label>
        <br>
        <input type="radio" id="divorciado" name="tipo" value="divorciado" <?php echo ($estadocivil == 'divorciado') ? 'checked' : '' ?> required>
        <label for="divorciado">Divorciado</label>
        <br>
        <input type="radio" id="viuvo" name="tipo" value="viuvo" <?php echo ($estadocivil == 'viuvo') ? 'checked' : '' ?> required>
        <label for="viuvo">Viúvo(a)</label>
        <br><br>

        <h4 id="input">Estado:</h4>
        <input type="text" name="estado" id="" value="<?php echo $estado ?>"><br><br>

        <h4 id="input">Cidade:</h4>
        <input type="text" name="cidade" id="" value="<?php echo $cidade ?>"><br><br>

        <h4 id="input">Endereço:</h4>
        <input type="text" name="endereco" id="" value="<?php echo $endereco ?>">
        </div>
      </div>
      
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <input type="submit" value="ATUALIZAR" id="update" name="update">
      
      </form>
    </div>


    </div>

    

     
      
      

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"                '         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>
</html>