<?php

$hostname = "localhost";
$bancodedados = "cadastro";
$usuario = "root";
$senha = "";

$conexao = mysqli($hostname, $usuario, $senha, $bancodedados);
$sql = "SELECT * FROM usuarios";

$result = $result->query($sql);

$quantidade = $result->mysqli_num_rows;

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
        print "<td>" .$row->senha. "</td>";
       print "<td>
        <button class='btn btn-sucess'>Editar</button>
        <button class='btn btn-danger'>Excluir</button>
       </td>";
        print"</tr>";
    }
    print"</table>";
}else{
    print "<p class='alert-danger' >Não Encontrou Resultados!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios-lista</title>
</head>
<body>
    
</body>
</html>