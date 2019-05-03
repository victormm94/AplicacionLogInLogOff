<?php

if (isset($_POST['Aceptar'])) {
    $usuario = $_SESSION['usuarioDAW208'];
    if ($usuario->borrarUsuario()) {
        unset($_SESSION['usuarioDAW208']);
        session_destroy();
        $_SESSION['pagina'] = 'login';
        header('Location: index.php');
        exit;
    }
}

if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['pagina'] = 'miCuenta';
    header('Location: index.php');
    exit;
}
?>

