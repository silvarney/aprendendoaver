<?php
session_start();
require '../controle/autenticacao.php';
require_once '../classes/Aluno.php';
require_once '../classes/Teste.php';
usuarioLogado();
User();

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
            <li><a href="index_user.php" accesskey="1">Pagina Inicial(1)</a></li>
            <li><a href="index_user.php#selecionarAluno" accesskey="2">Iniciar Teste(2)</a></li>
            <li><a href="index_user.php#cadastroAluno" accesskey="3">Cadastrar Aluno(3)</a></li>
            <li><a href="#" accesskey="4">Resultado(4)</a></li>
            <li><a href="#" accesskey="5">Contatos(5)</a></li>
            <li><a href="../controle/sair.php" accesskey="5">sair(6)</a></li>
        </ul>
        
        <?php
            $nome = array("ALUNO TESTE 1", "ALUNO TESTE 2", "ALUNO TESTE 3", "ALUNO TESTE 4", "ALUNO TESTE 5", "ALUNO TESTE 6", "ALUNO TESTE 7", "ALUNO TESTE 8", "ALUNO TESTE 9", "ALUNO TESTE 1");
            $acertos = array(40, 30, 42, 48, 37, 20, 30, 34, 19, 45);
            $data = array("12/01/01", "12/01/01", "14/01/01", "17/01/01", "23/01/01", "24/01/01", "05/02/01", "10/02/01", "19/02/01", "12/03/01");
        ?>
        
        <table class="tabela-resultado">
            <thead>
                <tr>
                    <th data-field="teste">Aluno</th>
                    <th data-field="teste">Acertos</th>
                    <th data-field="teste">Data</th>
                </tr>
            </thead>

            <tbody> 
                <?php
                        for ($i = 0; $i < 10; $i++){
                    echo "<tr>" .
                    "<td>" . $nome[$i] . "</td>" .
                    "<td>" . $acertos[$i]. "</td>" .
                    "<td>" . $data[$i]. "</td>" .
                    "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br><br><br><br>
    </body>
</html>
