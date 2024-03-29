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
    <div id="box">
      <div id="boximg">
        <center><img src="assets/imagens/img.png" width="300px" id="img"></center>
      </div>
      <div id="cadastro">
        
        <h1 id="titulo">Bem-vindo!</h1>
        <p id="txt"><i>Entre com sua conta ou cadastre-se!</i></p>

        <form action="testelogin.php" method="POST">

        <h4>Email:</h4>
        <input type="email" name="email" id="email"><br><br>
        <h4>Senha:</h4>
        <input type="password" name="senha" id="senha"><br>
        <a href=""><input type="submit" name="submit" value="ENTRAR" id="botao"></a>
        <a href="cadastrar.php"><p id="txtcadastro"><i>Clique aqui e cadastre-se!</i></p></a>

      </form>

      </div>
      
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"                '         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>
</html>