<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios-lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
</ul>
<br>
<br>
<br>
    <h1>Usuários</h1>
</body>
</html>

<?php
$hostname = "localhost";
$bancodedados = "cadastro";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);
/*if($mysqli->connect_error){
echo "falha ao conectar :(" . $mysqli->connect_error . ")" . $mysqli->connect_error;
}
else
echo "conectado ao banco de dados";*/
$sql = "SELECT * FROM usuarios";

$result = $conexao->query($sql);

$quantidade = $result->num_rows;

if($quantidade >0){
    print"<table class='table table-hover table-striped table-bordered'>";
    print"<tr>";
    print "<th>id</td>";
    print "<th>nome</th>";
    print "<th>email</th>";
    print "<th>senha</th>";
    print "<th>ações</th>";
    print"</tr>";
    while($row = $result->fetch_object()){
        print"<tr>";
        print "<td>" .$row->id. "</td>";
        print "<td>" .$row->nome. "</td>";
        print "<td>" .$row->email. "</td>";
        print "<td>" .$row->senha. "</td>";
       print "<td>
        <button class='btn btn-sm btn-success'>Editar</button>
        <button class='btn btn-sm btn-danger'>Excluir</button>
       </td>";
        print"</tr>";
    }
    print"</table>";
}else{
    print "<p class='alert-danger' >Não Encontrou Resultados!</p>";
}
?>