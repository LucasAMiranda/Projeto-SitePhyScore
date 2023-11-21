<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Conectar ao banco de dados (substitua com suas próprias configurações)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "physcore_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processar dados do formulário quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se as chaves estão definidas antes de acessá-las
    $tipo_usuario = isset($_POST["tipo_usuario"]) ? $_POST["tipo_usuario"] : "";
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $confirmPassword = isset($_POST["confirmPassword"]) ? $_POST["confirmPassword"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";

    // Validar os dados (pode adicionar mais validações conforme necessário)
    if ($password != $confirmPassword) {
        echo "As senhas não coincidem. Por favor, tente novamente.";
    } else {
        // Hash da senha para maior segurança (você pode usar métodos mais seguros)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Inserir dados no banco de dados (substitua com suas próprias consultas SQL)
        $sql = "INSERT INTO usuarios (tipo_usuario, username, password, email) VALUES ('$tipo_usuario', '$username', '$hashed_password', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro foi bem-sucedido. Bem-vindo, $username!";
            header('Location: login.html');
        } else {
            echo "Erro ao registrar: " . $conn->error;
        }
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
