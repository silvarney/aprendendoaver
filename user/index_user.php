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

        <title>Bem Vindo</title>
    </head>
    <body>

        <div class="titulo-login">
            <img class="imagem-titulo-index" src="../imagem/logo_amarelo.png" alt="imagem com a logo,  Aprendendo a ver.">
        </div>
        <hr>
        
        <ul>
            <li><a href="#selecionarAluno" accesskey="2">Iniciar Teste(2)</a></li>
            <li><a href="#cadastroAluno" accesskey="3">Cadastrar Aluno(3)</a></li>
            <li><a href="teste_user.php" accesskey="4">Resultado(4)</a></li>
            <li><a href="#" accesskey="5">Contatos(5)</a></li>
            <li><a href="../controle/sair.php" accesskey="6">sair(6)</a></li>
        </ul>
        
        <?php
        echo " <form method='POST' action='../controle/cadastrando_teste.php'>"
        . "
            <div id='selecionarAluno' class='modalDialog'>
            <div>
                <h2>Selecionar Aluno</h2><hr>
                
                <label>Nome</label><br>
                <select name='questao[0]'>";
                    
                foreach ($mostrar_aluno as $linha) {
                    echo '<option value='. $linha->id_aluno .'>' . $linha->nome_aluno . '</option>';
                }
                echo "</select><br><br><hr><br>
                <a href='#openModal1'> <button type='button'>Iniciar</button></a><br><br>
                <a href='#'> <button type='button'>Fechar</button></a>
            </div>
        </div>
          ";

        for ($i = 1; $i <= 10; $i++) {
            echo "<div id='openModal" . $i . "' class='modalDialog'>

            <div>
                <h2>" . $i . ") Questão</h2><hr>        
                
                <div class='row'>
                    <div class='column column-3'>
                        
                        <img src='../imagem/questoes/questao_" . $i . "/" . $i . "modelo.png' alt='modelo'/>
                    </div>
                    <div class='column column-2'>
                        <label>
                            <input type='radio' name='questao[" . $i . "]' value='a'>
                            <img src='../imagem/questoes/questao_" . $i . "/" . $i . "a.png' alt='questao'/>
                        <label>
                    </div>
                    <div class='column column-2'>
                        <label>
                            <input type='radio' name='questao[" . $i . "]' value='b'>
                            <img src='../imagem/questoes/questao_" . $i . "/" . $i . "b.png' alt='questao'/>
                        <label>
                    </div>
                    <div class='column column-2'>
                        <label>
                            <input type='radio' name='questao[" . $i . "]' value='c'>
                            <img src='../imagem/questoes/questao_" . $i . "/" . $i . "c.png' alt='questao'/>
                        <label>
                    </div>
                    <div class='column column-2'>
                        <label>
                            <input type='radio' name='questao[" . $i . "]' value='d'>
                            <img src='../imagem/questoes/questao_" . $i . "/" . $i . "d.png' alt='questao'/>
                        <label>
                    </div>
                </div><br>
                <hr>
                <a href='#'> <input type='button' value='Fechar'></a>";

            if ($i > 1) {
                $p = $i - 1;
                echo "<a href='#openModal" . $p . "'> <input type='button' value='Anterior'></a>";
            } if ($i < 10) {
                $p = $i + 1;
                echo "<a href='#openModal" . $p . "'> <input type='button' value='Proximo'></a>";
            } elseif ($i == 10) {
                echo "<input type='submit' value='salvar'>";
            }
            echo "</div>
        </div><br><br>";
        }
        echo '</form>';
        ?>

        <div id='cadastroAluno' class='modalDialog'>
            <div>
                <h2>Cadastro de novo aluno</h2><hr>

                <form  id="login" method="POST" action="../controle/cadastrando_aluno.php">
                    <div class="row">
                        <div class="column column-6">
                            <label>Nome Completo</label><br>
                            <input type="text" name="nome_aluno" size="32"><br><br>
                            <div class="row">
                                <div class="column column-4">
                                    <label>Nascimento</label><br>
                                    <input type="text" name="nascimento_aluno" size="10">
                                </div>
                                <div class="column column-4">
                                    <label>Telefone</label><br>
                                    <input type="text" name="fone_aluno" size="15">
                                </div>
                            </div><br>
                            <label>Mãe</label><br>
                            <input type="text" name="mae_aluno" size="32"><br><br>
                        </div>
                        <div class="column column-4">
                            <label>Endereço</label><br>
                            <textarea name="endereco_aluno"></textarea><br><br>
                            <label>Escola</label><br>
                            <input type="text" name="escola_aluno" size="30"><br><br>
                        </div>
                    </div>
                    <a href='#'>
                        <input type="button" value="Fechar">
                    </a>
                    <input type="submit" value="Cadastrar Aluno">
                </form>
            </div>
        </div>

        <div id='aluno' class='modalDialog'>
            <div>
                <h2>Selecionar aluno</h2><hr>

                <form  id="login" method="POST" action="../controle/cadastrando_aluno.php">
                    <div class="row">
                        <div class="column column-6">
                            <label>Nome Completo</label><br>
                            <input type="text" name="nome_aluno" size="32"><br><br>
                            <div class="row">
                                <div class="column column-4">
                                    <label>Nascimento</label><br>
                                    <input type="text" name="nascimento_aluno" size="10">
                                </div>
                                <div class="column column-4">
                                    <label>Telefone</label><br>
                                    <input type="text" name="fone_aluno" size="15">
                                </div>
                            </div><br>
                            <label>Mãe</label><br>
                            <input type="text" name="mae_aluno" size="32"><br><br>
                        </div>
                        <div class="column column-4">
                            <label>Endereço</label><br>
                            <textarea name="endereco_aluno"></textarea><br><br>
                            <label>Escola</label><br>
                            <input type="text" name="escola_aluno" size="30"><br><br>
                        </div>
                    </div>
                    <a href='#'>
                        <input type="button" value="Fechar">
                    </a>
                    <input type="submit" value="Cadastrar Aluno">
                </form>
            </div>
        </div>
        
        <div id='openModal' class='modalDialog'>
            <div id="body-modal">
                <h2>Exercicio</h2><br><br>        

                <a href='#'> <button type='button'>Fechar</button></a>
            </div>
        </div>
        
        <table>
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
                    "</tr>";
                }
                ?>
            </tbody>
        </table>
       
    </body>
</html>
