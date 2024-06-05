<?php
include('config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $email = $row['email'];
        $senha = $row['senha'];
        ?>

        <!DOCTYPE html>
        <html lang="pt-br" data-bs-theme="dark">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Editar</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <link rel="stylesheet" href="table.css">
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
                        <fieldset>
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
                            <br><br>
                            <input type="hidden" name="id" value="<?php echo $id?>">
                            <input style="float: right; vertical-align: middle;" type="submit" name="update" id="update" class="btn btn-success">
                        </fieldset>
                    </form>
                </main>
            </body>
        </html>
        <?php
    } else {
        echo "Nenhum usuário encontrado com o ID fornecido.";
    }
} else {
    echo "ID do usuário não especificado.";
}

$conexao->close();
?>
