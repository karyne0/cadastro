<?php

    $hostname = "localhost";
    $bancodedados = "cadastro";
    $usuario = "root";
    $senha = "";

    $conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);
    /*if($mysqli->connect_error)
        {
            echo "falha ao conectar :(" . $mysqli->connect_error . ")" . $mysqli->connect_error;
        }
    else
        echo "conectado ao banco de dados";*/
?>