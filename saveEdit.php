<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $estadocivil = $_POST['tipo'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha',email='$email',data_nasc='$data_nasc',telefone='$telefone',sexo='$sexo',cpf='$cpf',estadocivil='$estadocivil',estado='$estado',cidade='$cidade',endereco='$endereco',cep='$cep',numero='$numero' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

    }

    header('Location: sistema.php');


?>