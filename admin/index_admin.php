<?php
session_start();
require '../controle/autenticacao.php';
usuarioLogado();
Admin();
?>

<html>
    <head>
        <meta charset="UTF-8">

        <!-- MEUS CSS-->
        <link type="text/css" href="../layout/css/acessibilizando.css" rel="stylesheet">
        <link type="text/css" href="../layout/css/<?php echo $_SESSION['padrao']; ?>" rel="stylesheet">

        <title>Pagina Inicial do Usuário</title>
    </head>
    <body class="body">

        <div class="titulo">APRENDENDO A VER</div>

        <ul>
            <li><a class="active" href="#home">Pagina Inicial(1)</a></li>
            <li><a href="listar_usuarios.php" accesskey="2">Usuarios(2)</a></li>
            <li><a href="#alunos">Alunos</a></li>
            <li><a href="#resultados">Resultados</a></li>
            <li><a href="../controle/sair.php">sair</a></li>
        </ul>

        <?php
        echo "Nome: " . $_SESSION['nome'];
        echo "<br>Email: " . $_SESSION['email'];
        echo "<br>Senha: " . $_SESSION['senha'];
        echo "<br>Nivel: " . $_SESSION['nivel'];
        ?>

    </body>
</html>
