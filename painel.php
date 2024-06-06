<?php
session_start();

if(!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

include_once('config.php');

$email = $_SESSION['email'];

$sql = "SELECT nome FROM usuarios WHERE email = '$email'";
$result = $conexao->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nome = $row['nome'];
}
?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuarios-lista</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="table.css">
    </head>
    <body class="d-flex align-itens-center py-4 bg-body-tertiary">
    <div>
        <ul> 
            <li>
                <a href="home.php"><img src="home.png" alt="" width="30" height="30" style="float:left"></a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
            <li>
                <a href="cadastro.php">Cadastro</a>
            </li>
            <li>
                <a href="tabela.php">Usuários</a>
            </li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <br>
        <br>
            <h1>Bem-vindo!</h1>
            <p>Olá <?php echo $nome ?>. </p>
            <a href="logout.php" class="btn btn-sm btn-danger text-white text-decoration-none">Sair</a>
        </div>
    </body>
</html>
