<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21179027_jed1rey"; // usuário do MySQL
$pass = "Pa&&w0rd"; // senha do MySQL
$dbname = "id21179027_fatecfrancabancoteste"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
