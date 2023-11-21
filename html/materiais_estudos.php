<?php
    include 'process_upload.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhysCore - Materiais de Estudo</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        span > a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>PhysCore</h1>
        <p>Materiais de Estudos</p>
    </header>
    <nav>
        <a href="index.html">Sobre Nós</a>
        <a href="apostilas.php">Materiais de Estudo</a>
		<a href="olimpiadas.html">Olimpíadas</a>
        <a href="softwares.html">Softwares</a>
        <a href="incentivo.html">Incentivo Científico</a>
        <a href="ic.html">Iniciação Científica</a>
        <a href="login.html">Login</a>
        <a href="registro.html">Registro</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="container">
        <div class="content">

            <!-- Seção: Materiais de Estudo -->
            <div class="apostilas-section">
                <h3>Materiais de Estudos</h3>

                <p>Faça o download dos materiais em PDF</p>

                <br>

                <?php
                // Verifica se 'uploadedFiles' está definido e não é nulo
                if (isset($_SESSION['uploadedFiles']) && is_array($_SESSION['uploadedFiles'])) {
                    // Loop através dos arquivos enviados
                    foreach ($_SESSION['uploadedFiles'] as $filename) {
                        echo '<span><a href="pdf/' . $filename . '" class="apostila-link" download>' . $filename . '</a></span><br><br>';
                    }
                } else {
                    echo '<p>Nenhum material disponível.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
