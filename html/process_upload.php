<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['submit'])) {
    $targetDirectory = "pdf/";

    // Verifica se o diretório de destino existe, senão, tenta criá-lo
    if (!file_exists($targetDirectory) && !mkdir($targetDirectory, 0777, true)) {
        die("Erro ao criar o diretório de destino.");
    }

    $uploadedFiles = [];

    foreach ($_FILES["apostila"]["name"] as $key => $filename) {
        $targetFile = $targetDirectory . basename($filename);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Verifica se o arquivo é um PDF
        if ($fileType != "pdf") {
            echo "Apenas arquivos PDF são permitidos.";
            exit;
        }

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES["apostila"]["tmp_name"][$key], $targetFile)) {
            $uploadedFiles[] = $filename;
        } else {
            echo "Erro ao fazer upload do arquivo $filename.";
        }
    }

    if (!empty($uploadedFiles)) {
        echo "Upload do Arquivo: " . implode(", ", $uploadedFiles);
        // Você pode salvar os nomes dos arquivos na sessão se precisar exibi-los na página apostilas.php
        $_SESSION['uploadedFiles'] = $uploadedFiles;
        header('Location: materiais_estudos.php');
    }
}
?>
