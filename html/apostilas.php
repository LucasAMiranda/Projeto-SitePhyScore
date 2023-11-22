<?php
    session_start();
    include 'process_upload.php';
    include 'registro_process.php';

    // Verifica se a chave 'tipo_usuario' está definida no array $_SESSION
    if (isset($_SESSION['tipo_usuario'])) {
        // Verifica se o usuário é do tipo "Aluno"
        if ($_SESSION['tipo_usuario'] == 'Aluno') {
            // Redireciona para uma página de acesso negado se não for um professor
            ob_clean();
            header("Location: materiais_estudos.php");
            exit();
        }
        elseif ($_SESSION['tipo_usuario'] == 'Professor'){
            // Redireciona para uma página de acesso negado se não for um professor
            ob_clean();
            header("Location: apostilas.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhysCore - Apostilas de Estudo</title>
    <style>
        /* Estilo global para o corpo da página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #380548; /* Fundo roxo escuro */
            color: #FFFFFF; /* Texto branco */
            background-image: url('https://www.transparenttextures.com/patterns/stardust.png'); /* Fundo estrelado */
        }

        /* Estilo do cabeçalho */
        header {
            background-color: #680DD0; /* Fundo roxo claro para o cabeçalho */
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        /* Estilo do menu de navegação */
        nav {
            background-color: rgba(0, 0, 0, 0.5); /* Fundo do menu com transparência */
            color: white;
            text-align: center;
        }

        /* Estilo dos links no menu de navegação */
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
        }

        /* Estilo dos links no menu de navegação quando hover */
        nav a:hover {
            background-color: rgba(0, 0, 0, 0.7); /* Fundo mais escuro ao passar o mouse */
        }

        /* Container principal com largura máxima e centralizado */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2px;
        }

        /* Estilo do conteúdo da página */
        .content {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilo das seções de apostilas */
        .apostilas-section {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Estilo dos títulos das seções de apostilas */
        .apostilas-section h3 {
            margin-bottom: 10px;
            color: #FADF61; /* Cor do título da seção */
        }

        /* Estilo das listas de apostilas */
        .apostila-list {
            padding: 0;
            list-style-type: none;
            display: flex;
            flex-wrap: wrap;
            margin: -5px; /* Espaçamento negativo para compensar o espaçamento entre as divs */
        }

        /* Estilo dos itens de apostila */
        .apostila-item {
            width: 90px; /* Largura de cada item de apostila com espaço lateral */
            height: 120px;
            position: relative;
            overflow: hidden;
            margin: 5px; /* Espaçamento entre as divs */
        }

        .apostila-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 90px; /* Largura da imagem da apostila */
            padding-top: 133.33%; /* Proporção 3x4 */
            border-radius: 5px;
        }

        .apostila-name {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 5px;
            font-size: 12px;
            color: white;
            background-color: rgba(0, 0, 0, 0.7); /* Fundo do nome da apostila */
            border-radius: 0 0 5px 5px;
        }

        .apostila-link {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #FADF61; /* Cor do link para a apostila */
            text-decoration: none;
        }
        span{ 
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>PhysCore</h1>
        <p>Apostilas de Estudo</p>
    </header>
    <nav>
        <a href="index.html">Sobre Nós</a>
        <a href="apostilas.php">Materiais de Estudo</a>
		<a href="olimpiadas.html">Olimpíadas</a>
        <a href="softwares.html">Softwares</a>
        <a href="login.html">Login</a>
        <a href="registro.html">Registro</a>
        <a href="logout.php">Logout</a>

    </nav>
    <div class="container">
        <div class="content">
            <!-- Seção: Matemática -->
            <div class="apostilas-section">
                <h3>Matemática</h3>
				<span>Introdução à Álgebra</span><br><br>
			    <span>O que são Funções?</a></span><br><br>
                <span>O que são Fatoriais?</a></span><br><br>
                <span>O que são Equações?</a></span><br><br>

                <ul class="apostila-list">
                    <li class="apostila-item">
                        <div class="apostila-name"><img src="../img/funcaoafim.png"/></div>
					</li>
                    <li class="apostila-item">
                        <div class="apostila-name"><img src="../img/fatoriais.png"/></div>
					</li>
                    <li class="apostila-item">
                        <div class="apostila-name"><img src="../img/algebra.png" /></div>
                    </li>
                </ul>
               <br>
                <form action="process_upload.php" method="post" enctype="multipart/form-data">
                    <label for="apostila">Adicionar Apostila:</label>
                    <input type="file" name="apostila[]" id="apostila" accept=".pdf" multiple>
                    <input type="submit" name="submit" value="Enviar">
                </form>
            </div>
            
            <!-- Seção: Física -->
            <div class="apostilas-section">
                <h3>Física</h3>
				<span>Introdução à Física</span><br><br> 
                <span>Física Moderna</span><br><br>
                <span>Física Nuclear</span><br><br>
                <span>Radioatividade</span><br><br>
                <span>Termodinâmica</span><br><br> 
                <span>Mecânica</span><br><br>
                <span>Ondulatória</span><br><br>
                <ul class="apostila-list">
					<li class="apostila-item">
                        <div class="apostila-name">
                            <img src="../img/mec.png" />
                        </div>
					</li>
                    <li class="apostila-item">
                        <div class="apostila-name"><img src="../img/aprad.png"></img></div>
					</li>
                    <li class="apostila-item">
                        <div class="apostila-name"><img src="../img/biorad.jpg"></img></div>
                    </li>
                    <li class="apostila-item">
                        <div class="apostila-name"><img src="../img/intrad.jpg"></img></div>
                    </li>
                </ul>
                <br>
                <form action="process_upload.php" method="post" enctype="multipart/form-data">
                    <label for="apostila">Adicionar Apostila:</label>
                    <input type="file" name="apostila[]" id="apostila" accept=".pdf" multiple />
                    <input type="submit" name="submit" value="Enviar" />
                </form>
            </div>
            
            <!-- Seção: Astronomia -->
            <div class="apostilas-section">
                <h3>Astronomia</h3>
				<span>Órbita</span><br><br>
				<span>Terra</span><br><br>
                <span>Lua</span><br><br>
                <ul class="apostila-list">
                    <li class="apostila-item">
                        <div class="apostila-name"><img src="../img/terralua.png"></img></div>
                    </li>
                    </li>
                </ul>
                <br>
                <form action="processa_upload.php" method="post" enctype="multipart/form-data">
                    <label for="apostila">Adicionar Apostila:</label>
                    <input type="file" name="apostila[]" id="apostila" accept=".pdf" multiple>
                    <input type="submit" name="submit" value="Enviar" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>