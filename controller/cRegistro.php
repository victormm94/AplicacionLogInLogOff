<?php

$entradaOK = true;

$aFormulario = ['usuario' => null,
    'password' => null,
    'descripcion' => null
];

$aErrores = ['usuario' => null,
    'password' => null,
    'descripcion' => null
];

if (isset($_POST['Volver'])) {
    $_SESSION['pagina'] = 'login';
    header('Location: index.php');
}

if (isset($_POST['Aceptar'])) {
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_POST['usuario'], 60, 1, 1);
    $aErrores['descripcion'] = validacionFormularios::comprobarAlfabetico($_POST['descripcion'], 60, 1, 1);
    $aErrores['password'] = validacionFormularios::comprobarAlfanumerico($_POST['password'], 60, 3, 1);

    if (Usuario::validarCodNoExiste($_POST['usuario'])) {
        $aErrores['usuario'] = 'El usuario ya existe';
        $entradaOK = false;
    }

    foreach ($aErrores as $campo => $error) {
        if ($error != null) {
            $entradaOK = false;
            $_POST[$campo] = "";
        }
    }
} else {
    $entradaOK = false;
}
if (isset($_POST['Aceptar']) && $entradaOK) {

    $aFormulario['usuario'] = $_POST['usuario'];
    $aFormulario['password'] = $password;
    $aFormulario['descripcion'] = $_POST['descripcion'];

    $usuario = Usuario::altaUsuario($aFormulario['usuario'], $aFormulario['password'], $aFormulario['descripcion']);
    $_SESSION['usuarioDAW208'] = $usuario;
    $_SESSION['visitas'] = $usuario->registrarUltimaConexion();
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
} else {
    $_SESSION['pagina'] = 'registro';
    require_once $vistas["layout"];
}
?>


