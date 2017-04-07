<html>
    <head>
        <meta charset="UTF-8">
        <title>Novo Usuário</title>
    </head>
    <body>
        <form id="cadastro" method="post" action="controle/cadastrando_usuario.php">
            <div>
                <label>Nome</label>    
                <input type="text" name="nome">
            </div>
            <div>
                <label>Email</label>     
                <input type="text" name="email">
            </div>
            <div>
                <label>Senha</label>     
                <input type="text" name="senha">
            </div>
            <input type="submit" value="Salvar">
        </form>
    </body>
</html>
