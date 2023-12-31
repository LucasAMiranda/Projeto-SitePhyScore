<?php
// Conectar ao banco de dados 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "physcore_db";

// Verifica a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe dados do formulário
$username = isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) : "";
$password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : "";


// Busca o usuário no banco de dados
$sql = "SELECT * FROM usuarios WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verifica a senha
    if (password_verify($password, $row['password'])) {
        // Redireciona o usuário com base no tipo de usuário
        if ($row['tipo_usuario'] == 'Professor') {
            echo "Bem vindo Professor ". $username;
            // Redireciona para a página do professor com links para o fórum, adição de apostilas, etc.
            header("Location: apostilas.php");
            exit();
        }else if ($row['tipo_usuario'] == 'Aluno'){
            echo "Bem vindo Aluno ". $username;
            // Redireciona para a página do professor com links para o fórum, adição de apostilas, etc.
            header("Location: materiais_estudos.php");
            exit();
        }
    }
}
$stmt->close();
$conn->close();
?>
