<?php
function conexao(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $db = "teste";

    $conexao = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conexao, $db);
    return $conexao;
}

function limpapost($dado){
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}

?>