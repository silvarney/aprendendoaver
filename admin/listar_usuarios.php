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

        <title>Lista de Usuários</title>
    </head>
    <body class="body">

        <div class="titulo">APRENDENDO A VER</div>

        <ul>
            <li><a href="index_admin.php" accesskey="1">Pagina Inicial</a></li>
            <li><a class="active" href="#usuarios">Usuarios</a></li>
            <li><a href="#alunos">Alunos</a></li>
            <li><a href="#resultados">Resultados</a></li>
            <li><a href="../controle/sair.php">sair</a></li>
        </ul>

        

    </body>
</html>
