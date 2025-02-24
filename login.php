<?php
$host = "localhost";
$user = "root"; // Altere se necessário
$pass = ""; // Coloque sua senha do MySQL
$dbname = "exercito_irlandes";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
