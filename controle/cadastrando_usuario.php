<script language="JavaScript">
    function confirmacao()
    {
        alert("Usuario cadastrado com sucesso!");
        location.href="../login.php";
    }
</script>

<?php
require_once '../classes/Usuario.php';

$user = isset($_POST['user_usuario']) ? $_POST['user_usuario'] : '';
$senha = isset($_POST['senha_usuario']) ? $_POST['senha_usuario'] : '';
$nome = isset($_POST['nome_usuario']) ? $_POST['nome_usuario'] : '';
$fone = isset($_POST['fone_usuario']) ? $_POST['fone_usuario'] : '';
$email = isset($_POST['email_usuario']) ? $_POST['email_usuario'] : '';
$escolaridade = isset($_POST['escolaridade_usuario']) ? $_POST['escolaridade_usuario'] : '';
$funcao = isset($_POST['funcao_usuario']) ? $_POST['funcao_usuario'] : '';
$local = isset($_POST['local_usuario']) ? $_POST['local_usuario'] : '';
$rua = isset($_POST['rua_usuario']) ? $_POST['rua_usuario'] : '';
$cidade = isset($_POST['cidade_usuario']) ? $_POST['cidade_usuario'] : '';
$estado = isset($_POST['estado_usuario']) ? $_POST['estado_usuario'] : '';
$endereco = $rua.", ".$cidade.", ".$estado; //o endereco eh concatenacao de tres campos
$permissao = "t"; //t = permissao temporaria
$nivel = "u"; //u = usuario padrao


$novo_usuario = new Usuario();

$novo_usuario->setUser($user);
$novo_usuario->setSenha($senha);
$novo_usuario->setNome($nome);
$novo_usuario->setFone($fone);
$novo_usuario->setEmail($email);
$novo_usuario->setEscolaridade($escolaridade);
$novo_usuario->setFuncao($funcao);
$novo_usuario->setLocal($local);
$novo_usuario->setEndereco($endereco);
$novo_usuario->setPermissao($permissao);
$novo_usuario->setNivel($nivel);

$novo_usuario->inserir_usuario();

echo "<script>confirmacao()</script>";


