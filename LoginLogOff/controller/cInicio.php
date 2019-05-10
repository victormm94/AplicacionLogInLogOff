<?php

/**
  @author: Victor Martinez Mielgo
  @since: 02/04/2019
  Comentarios: Desarrollo de una aplicación con control de acceso e identificación del usuario basado en un formulario (Login.php)
 */
?>   

<?php

if (isset($_POST['MiCuenta'])) {
    $_SESSION['pagina'] = 'miCuenta';
    Header("Location: index.php");
    exit;
}

if (isset($_POST['REST'])) {
    $_SESSION['pagina'] = 'REST';
    Header("Location: index.php");
    exit;
}

if (isset($_POST['Detalle'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['pagina'];
    $_SESSION['pagina'] = 'wip';
    Header("Location: index.php");
    exit;
}

if (isset($_POST['Cerrar_Sesion'])) { //si le damos a cerrar sesion destruira la sesion
    unset($_SESSION['usuarioDAW208']);
    session_destroy();
    Header("Location: index.php");
    exit;
}

if (!isset($_SESSION['usuarioDAW208'])) {
    header('Location: index.php');
} else {
    require_once $vistas['layout'];
}
?>