<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "teste_crud";


global $conn;
$conn = mysqli_connect($servidor, $usuario, $senha, $bd);
// Verificar a conexão 
if (!$conn) {
    die("Falha na conexão" . mysqli_connect_error());
}

function executarComando($sql) {
    global $conn;
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['$conn']);
        return false;
    }
}
