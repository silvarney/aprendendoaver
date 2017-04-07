<script language="JavaScript">
    function naoLogado()
    {
        alert("Usuario não logado!");
        location.href="../index.php";
    }
    function erroNivel()
    {
        alert("Erro: usuario de nivel não compativel!");
        location.href="../login.php";
    }
</script>

<?php

function usuarioLogado() {
    if (!isset($_SESSION["nivel"]) || !isset($_SESSION["nivel"])) {
        echo "<script>naoLogado()</script>";
    }
}

function User() {
    if ($_SESSION['nivel']  != 'u') {
        echo "<script>erroNivel()</script>";
    }
}

function Admin() {
    if ($_SESSION["nivel"] != 'a') {
        echo "<script>erroNivel()</script>";
    }
}
