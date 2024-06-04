<?php

if(!empty($_GET['id']))
{
    include_once('config.php');

    $id= $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

   if($result->num_rows > 0){

    while($row = mysqli_fetch_assoc($result))
    {
    $nome =  $row['nome'];
    $email =  $row['email'];
    $senha =  $row['senha'];
    }
    print_r($nome);
   }

   else{
    header('Location: home.php');
   }

}

?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
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
            <form action="saveEdit.php" method="POST">
                <h1>Editar</h1>
                <br>
                <div class="form-floating">
                    <input type="name" name="nome" value="<?php echo($nome) ?>" class="form-control" id="floatingInput" placeholder="seu nome completo"/>
                    <label for="floatingInput">Nome</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" value="<?php echo($email) ?>" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" />
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="senha"  value="<?php echo($senha) ?>" class="form-control" id="floatingInput" placeholder="senha" />
                    <label for="floatingInput">Senha</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value=" <?php echo $id?>">
                <input style="float: right; vertical-align: middle;" type="submit" name="update" id="update" class="btn btn-success">
            </form>
        </main>
    </body>
</html>