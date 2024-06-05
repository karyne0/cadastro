<?php

include('config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

   
    $sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        header("Location: tabela.php");
    } else {
        echo "Erro ao atualizar o registro: " . $conexao->error;
    }
} else {
    echo "O formulário não foi enviado corretamente.";
}
?>
