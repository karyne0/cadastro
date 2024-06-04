<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $nome =  $_POST['nome'];
        $email =  $_POST['email'];
        $senha =  $_POST['senha'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

    }
    header('Location: tabela.php');
?>