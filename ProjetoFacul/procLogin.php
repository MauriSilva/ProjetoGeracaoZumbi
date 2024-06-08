<?php
session_start();

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
$login = $_POST['login'];
$senha = $_POST['senha'];

// Consulta para verificar as credenciais do usuário
$sql = "SELECT id, login, senha FROM usuarios WHERE login = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $login_bd, $senha_bd);
$stmt->fetch();

if ($stmt->num_rows > 0) {
    // Verifica se a senha está correta
    if ( $senha == $senha_bd ) {
        // Define variáveis de sessão
        $_SESSION['userid'] = $id;
        $_SESSION['login'] = $login_bd;
        $_SESSION['loggedin'] = true;
        
        // Redireciona para a página inicial
        header("Location: index.php");
        exit();
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Email não encontrado.";
}

// Fecha a conexão
$stmt->close();
$conn->close();

