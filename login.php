<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Usuários</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                <?php
                    session_start();
                    include('config.php');

                    if(!empty($_GET['id']))
                    {
                        $data = $_GET['id'];
                        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or nome LIKE '%$data%' ORDER BY id DESC";
                    }
                else
                    {
                        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
                    }
            

                    $result = $conexao->query($sql);

    $quantidade = $result->num_rows;

    if($quantidade >0)
    {
        while($row = $result->fetch_object())
        {
            print "<td>" .$row->id. "</td>";
            echo "<td>
                <a class='btn btn-sm btn-primary' type='submit' id='submit' href='painel.php?id=$row->id'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check2-circle' viewBox='0 0 16 16'>
                        <path d='M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0'/>
                        <path d='M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z'/>
                    </svg>
                    </a>
            </td>"; 
        }
    }
                ?>
            </form>
        </main>
    </body>
</html>