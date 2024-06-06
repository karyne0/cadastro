<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Usuários</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="table.css">
    </head>
    <body class="d-flex align-itens-center py-4 bg-body-tertiary">
        <div>
            <ul> 
                <li>
                    <a href="home.php"><img src="home.png" alt="" width="30" height="30" style="float:left"></a>
                </li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="tabela.php">Usuários</a></li>
            </ul>
        </div>
        <main class="w-100 m-auto form-container">
            <form action="testlogin.php" method="POST">
                <h1>Login</h1>
                <br>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" />
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="senha" class="form-control" id="floatingInput" placeholder="senha" />
                    <label for="floatingInput">Senha</label>
                </div>
                <br>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Entrar</button>
            </form>
        </main>
    </body>
</html>