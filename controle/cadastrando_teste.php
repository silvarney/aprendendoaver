<script language="JavaScript">
    function confirmacao()
    {
        location.href="../user/index_user.php#resultado";
    }
</script>

<?php
session_start();
require_once '../classes/Teste.php';

$questao = isset($_POST['questao']) ? $_POST['questao'] : '';

$p = new Teste();

$p->setTeste_1($questao[1]);
$p->setTeste_2($questao[2]);
$p->setTeste_3($questao[3]);
$p->setTeste_4($questao[4]);
$p->setTeste_5($questao[5]);
$p->setTeste_6($questao[6]);
$p->setTeste_7($questao[7]);
$p->setTeste_8($questao[8]);
$p->setTeste_9($questao[9]);
$p->setTeste_10($questao[10]);
$p->setId_aluno($questao[0]);
$p->setId_usuario($_SESSION['id']);
$p->inserir_teste();

echo "<script>confirmacao()</script>";