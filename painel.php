<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel(logado)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="painel.css">
</head>
<body>
<ul> 
<li>
<a href="home.php"><img src="home.png" alt="" width="30" height="30" style="float:left"></a>
</li>
<li><a href="login.php">Login</a></li>
<li><a href="cadastro.php">Cadastro</a></li>
<li><a href="tabela.php">Usuários</a></li>
</ul>
<br>
<br>
<br>
<h1>Programa de boas vindas</h1>
    <p>
       Olá, <?php echo($_SESSION['nome']);?> Seja bem vindo!
</p>
</body>
</html>