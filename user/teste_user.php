<?php
session_start();
require '../controle/autenticacao.php';
require_once '../classes/Aluno.php';
require_once '../classes/Teste.php';
usuarioLogado();
User();

$aluno = new Aluno();
$mostrar_aluno = $aluno->ler_alunos($_SESSION['id']);

$teste = new Teste();
$mostrar_teste = $teste->ler_teste();
?>

<html>
    <head>
        <meta charset="UTF-8">

        <!-- MEUS CSS-->
        <link type="text/css" href="../layout/css/acessibilizando.css" rel="stylesheet">
        <link type="text/css" href="../layout/css/<?php echo $_SESSION['padrao']; ?>" rel="stylesheet">
        <link rel="icon" href="../favicon.png" type="image/png">

        <title>Resultados</title>
    </head>
    <body>
        <div class="titulo-login">
            <img class="imagem-titulo-index" src="../imagem/logo_amarelo.png" alt="imagem com a logo,  Aprendendo a ver.">
        </div>
        <hr>

        <ul>
            <li><a href="#selecionarAluno" accesskey="1">Pagina Inicial(1)</a></li>
            <li><a href="#selecionarAluno" accesskey="2">Iniciar Teste(2)</a></li>
            <li><a href="#cadastroAluno" accesskey="3">Cadastrar Aluno(3)</a></li>
            <li><a href="#" accesskey="4">Resultado(4)</a></li>
            <li><a href="#" accesskey="5">Contatos(5)</a></li>
            <li><a href="../controle/sair.php" accesskey="5">sair(6)</a></li>
        </ul>

        <table class="tabela-resultado">
            <thead>
                <tr>
                    <th data-field="teste">Resposta 1</th>
                    <th data-field="teste">Resposta 2</th>
                    <th data-field="teste">Resposta 3</th>
                    <th data-field="teste">Resposta 4</th>
                    <th data-field="teste">Resposta 5</th>
                    <th data-field="teste">Resposta 6</th>
                    <th data-field="teste">Resposta 7</th>
                    <th data-field="teste">Resposta 8</th>
                    <th data-field="teste">Resposta 9</th>
                    <th data-field="teste">Resposta 10</th>
                    <th data-field="aluno">Aluno</th>
                </tr>
            </thead>

            <tbody> 
                <?php
                foreach ($mostrar_teste as $linha_teste) {
                    echo "<tr>" .
                    "<td>" . $linha_teste->teste_1 . "</td>" .
                    "<td>" . $linha_teste->teste_2 . "</td>" .
                    "<td>" . $linha_teste->teste_3 . "</td>" .
                    "<td>" . $linha_teste->teste_4 . "</td>" .
                    "<td>" . $linha_teste->teste_5 . "</td>" .
                    "<td>" . $linha_teste->teste_6 . "</td>" .
                    "<td>" . $linha_teste->teste_7 . "</td>" .
                    "<td>" . $linha_teste->teste_8 . "</td>" .
                    "<td>" . $linha_teste->teste_9 . "</td>" .
                    "<td>" . $linha_teste->teste_10 . "</td>" .
                    "<td>" . $linha_teste->nome_aluno . "</td>" .
                    "</tr>";
                }
                ?>
            </tbody>
        </table>

    </body>
</html>
