<script language="JavaScript">
    function confirmacao()
    {
        alert("Aluno cadastrado com sucesso!");
        location.href="../user/index_user.php";
    }
</script>

<?php
session_start();
require_once '../classes/Aluno.php';

$nome = isset($_POST['nome_aluno']) ? $_POST['nome_aluno'] : '';
$nascimento = isset($_POST['nascimento_aluno']) ? $_POST['nascimento_aluno'] : '';
$fone = isset($_POST['fone_aluno']) ? $_POST['fone_aluno'] : '';
$mae = isset($_POST['mae_aluno']) ? $_POST['mae_aluno'] : '';
$endereco = isset($_POST['endereco_aluno']) ? $_POST['endereco_aluno'] : '';
$escola = isset($_POST['escola_aluno']) ? $_POST['escola_aluno'] : '';
$id_usuario = $_SESSION['id'];


$a = new Aluno();

$a ->setNome($nome);
$a ->setNascimento($nascimento);
$a ->setFone($fone);
$a ->setMae($mae);
$a ->setEndereco($endereco);
$a ->setEscola($escola);
$a ->setId_usuario($id_usuario);

$a->inserir_aluno();

echo "<script>confirmacao()</script>";


