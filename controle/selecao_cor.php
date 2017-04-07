<?php
session_start();

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == 1) {
    $padrao = "padrao-preto-branco.css";
    $_SESSION['padrao'] = $padrao;
} elseif ($id == 2) {
    $padrao = "padrao-branco-preto.css";
    $_SESSION['padrao'] = $padrao;
} elseif ($id == 3) {
    $padrao = "padrao-azul-amarelo.css";
    $_SESSION['padrao'] = $padrao;
} elseif ($id == 4) {
    $padrao = "padrao-amarelo-azul.css";
    $_SESSION['padrao'] = $padrao;
}

header("location:../login.php");