<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "geracaozumbi";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados do formulário
$usuario = $_POST['login'];
$senha = $_POST['senha'];

// Insere o novo usuário no banco de dados
$sql = "INSERT INTO usuarios (login, senha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$usuario, $senha);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
    header("Location: cadastroFeito.php");
    exit();
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$stmt->close();
$conn->close();
