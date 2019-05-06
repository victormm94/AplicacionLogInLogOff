<?php

$entradaOK = true;

$aFormulario = ['descripcion' => null
];

$aErrores = ['descripcion' => null
];

if (isset($_REQUEST['Volver'])) {    
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit;
}

if (isset($_POST['CambiarPassword'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['pagina'];
    $_SESSION['pagina'] = 'wip';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['BorrarCuenta'])) {
    $_SESSION['pagina'] = 'borrarCuenta';
    header('Location: index.php');
    exit;
}

if (isset($_POST['CambiarDescripcion'])) {

    $aErrores['descripcion'] = validacionFormularios::comprobarAlfabetico($_POST['descripcion'], 60, 1, 1);

    foreach ($aErrores as $campo => $error) {
        if ($error != null) {
            $entradaOK = false;
            $_POST[$campo] = "";
        }
    }
}

if (isset($_POST['CambiarDescripcion']) && $entradaOK) {

    $aFormulario['descripcion'] = $_POST['descripcion'];
    $usuario = $_SESSION['usuarioDAW208'];

    if ($aFormulario['descripcion'] != $_SESSION['usuarioDAW208']->getDescUsuario()) {
        $usuario = $usuario->modificarUsuario($_SESSION['usuarioDAW208']->getPassword(), $aFormulario['descripcion'], null);
        $_SESSION['usuarioDAW208'] = $usuario;
    }
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
} else {
    $_SESSION['pagina'] = 'miCuenta';
    require_once $vistas["layout"];
}
?>
