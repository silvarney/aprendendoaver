<script type="text/javascript">
    function falha_login() {
        alert("Login invalido.");
        window.location.href = "../login.php";
    }
</script>

<?php
session_start();

require_once '../classes/Usuario.php';

$user_login = isset($_POST['user_login']) ? $_POST['user_login'] : '';
$senha_login = isset($_POST['senha_login']) ? $_POST['senha_login'] : '';

$usuario_login = new Usuario();

$login = $usuario_login->login_usuario($user_login, $senha_login);

if (isset($login)) {
    $_SESSION['id'] = $login->id_usuario;
    $_SESSION['nome'] = $login->nome_usuario;
    $_SESSION['email'] = $login->email_usuario;
    $_SESSION['senha'] = $login->senha_usuario;
    $_SESSION['nivel'] = $login->nivel_usuario;
    if ($_SESSION['nivel'] == "u") {
        header("location:../user/index_user.php");
    } elseif ($_SESSION['nivel'] == "a") {
        header("location:../admin/index_admin.php");
    } else {
        echo "<script>falha_login()</script>";
    }
} else {
    echo "<script>falha_login()</script>";
}

