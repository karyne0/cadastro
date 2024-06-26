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
    <div class="container" >
        <table class="table table-hover table-striped table-bordered">
            <br>
            <br>
        <h1>Usuários</h1>
        <br>
            <div class="box-search">
                <style>.box-search
                    {
                    display: flex;
                    justify-content: center;
                    gap: .2%;
                    }               
                </style>
                <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
                <button onclick="searchData()" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
            </div>
            <br>
<?php
    session_start();
    include('config.php');

    if(!empty($_GET['search']))
        {
            $data = $_GET['search'];
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
        print"<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Email</th>";
            print "<th>Senha</th>";
            print "<th>editar/excluir</th>";
        print"</tr>";
    while($row = $result->fetch_object())
        {
            print"<tr>";
                print "<td>" .$row->id. "</td>";
                print "<td>" .$row->nome. "</td>";
                print "<td>" .$row->email. "</td>";
                print "<td>
                    <a class='btn btn-sm btn-secondary' href='redefinir.php?id=$row->id'>
                        Redefinir Senha
                    </a>
                </td>";
                print "<td>
                    <a class='btn btn-sm btn-primary' href='edit.php?id=$row->id'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                        </svg>
                    </a>
                    <a class='btn btn-sm btn-danger' href='delete.php?id=$row->id'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                            <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                        </svg>
                    </a>
                </td>";
            print"</tr>";
        }
            print"</table>";
        }
    else
        {
            print "<p class='alert-danger' >Sem Resultados!</p>";
        }
?>
                </tbody>
            </table>
        </div>
    </body>
    <script>
       var search = document.getElementById('pesquisar');

       search.addEventListener("keydown", function(event){
            if (event.key === "Enter")
            {
                searchData();
            }
        });

       function searchData()
       {
            window.location =  'tabela.php?search='+search.value;
       }
    </script>
</html>