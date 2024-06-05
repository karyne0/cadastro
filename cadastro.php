<?php

if(isset($_POST['submit']))
{
    /*
        print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('E-mail: ' . $_POST['email']);
        print_r('<br>');
        print_r('Senha: ' . $_POST['senha']);
    */

    include_once('config.php');

    $nome =  $_POST['nome'];
    $email =  $_POST['email'];
    $senha =  $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')";
    $result = mysqli_query ($conexao, $sql);
}

?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cadastro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="painel.css">
    </head>
    <body class="d-flex align-itens-center py-4 bg-body-tertiary">
        <ul> 
            <li>
                <a href="home.php"><img src="home.png" alt="" width="30" height="30" style="float:left"></a>
            </li>
            <li><a href="login.php">Login</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="tabela.php">Usuários</a></li>
        </ul>
         <main class="w-100 m-auto form-container">
            <form action="" method="POST">
                <h1>Cadastre-se</h1>
                <br>
                <div class="form-floating">
                    <input type="name" name="nome" class="form-control" id="floatingInput" placeholder="seu nome completo"/>
                    <label for="floatingInput">Nome</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" />
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="senha" class="form-control" id="floatingInput" placeholder="senha" />
                    <label for="floatingInput">Criar Senha</label>
                </div>
                <br>
                <div>
                    <button style="float: right; vertical-align: middle;" type="submit" name="submit" id="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </main>
    </body>
</html>