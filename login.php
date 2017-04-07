<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- MEUS CSS-->
        <link type="text/css" href="layout/css/acessibilizando.css" rel="stylesheet">
        <link type="text/css" href="layout/css/<?php echo $_SESSION['padrao']; ?>" rel="stylesheet">

        <title>Login</title>
    </head>
    <body>
        <div class="titulo-login">
            <img class="imagem-titulo-index" src="imagem/logo_amarelo.png" alt="imagem com a logo,  Aprendendo a ver.">
        </div>
        <div class="row">
            <div class="column column-1"></div>

            <div class="column column-6">
                <div class="box-apresentacao">
                    <p style="text-align:justify"> 
                        Acuidade Visual é o grau de aptidão do olho, para discriminar os detalhes espaciais, 
                        ou seja, a capacidade de perceber a forma e o contorno dos objetos. Este teste é voltado 
                        para pessoas com baixa visão, são aquelas que possuem até 20% da visão e através dos 
                        resultados serão propostos exercícios que estimulem determinada área como cognição, 
                        memoria, entre outras.
                    </p>
                </div>
            </div>

            <div class="column column-5">
                <fieldset class="box-login">

                    <form  id="login" method="POST" action="controle/logando_usuario.php">
                        <label>Usuário</label><br>
                        <input type="text" name="user_login" size="30"><br>

                        <label>Senha</label><br>
                        <input type="password" name="senha_login" size="30"><br><br>

                        <input type="submit" value="Entrar">

                        <a href="#novoUsuario">
                            <input type="button" value="Cadastrar Usuário">
                        </a>
                    </form>
                </fieldset>
            </div>
        </div>

        <div id='novoUsuario' class='modalDialog'>
            <div>
                <h2>Cadastro</h2><hr>

                <form method="post" action="controle/cadastrando_usuario.php">
                    <div class="row">
                        <div class="column column-6">
                            <label>Apelido de usuário</label><br>    
                            <input type="text" name="user_usuario" size="30"><br><br>

                            <label>Senha</label><br>     
                            <input type="text" name="senha_usuario" size="30"><br><br>

                            <label>Repetir Senha</label><br>     
                            <input type="text" name="senha2_usuario" size="30"><br><br>

                            <label>Nome Completo</label><br>    
                            <input type="text" name="nome_usuario" size="40"><br><br>

                            <label>Telefone</label><br>    
                            <input type="text" name="fone_usuario" size="15"><br><br>

                            <label>Endereço</label><br>    
                            <input type="text" name="rua_usuario" size="40"><br><br>

                            <div class="row">
                                <div class="column column-6">
                                    <label>Cidade</label><br>    
                                    <input type="text" name="cidade_usuario" size="15"><br><br>
                                </div>
                                <div class="column column-4">
                                    <label>Estado</label><br>    
                                    <input type="text" name="estado_usuario" size="15"><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="column column-4">
                            <label>Email</label><br>     
                            <input type="text" name="email_usuario" size="30"><br><br>

                            <label>Nivel Acadêmico</label><br>     
                            <select name="escolaridade_usuario">
                                <option>Graduação</option>
                                <option>Especialização</option>
                                <option>Mestrado</option>
                                <option>Doutorado</option>
                            </select><br><br>

                            <label>Função exercida</label><br>     
                            <input type="text" name="funcao_usuario" size="30"><br><br>

                            <label>Local de trabalho</label><br>     
                            <input type="text" name="local_usuario" size="30"><br><br>
                        </div>
                    </div>




                    <button type="submit">Salvar</button>
                    <a href="#">
                        <button type="button">Fechar</button>
                    </a>
                </form>

            </div>
        </div>
    </body>
</html>
