<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro-usuarios"; // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
// Opcional: para verificar se a conexão foi bem-sucedida
// echo "Conexão bem-sucedida!";
?>