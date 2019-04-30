
<?php

/**
  @author: Victor Martinez Mielgo
  @since: 02/04/2019
  Comentarios: Desarrollo de una aplicación con control de acceso e identificación del usuario basado en un formulario (Login.php)
 */
?>   

<?php

$entradaOK = true;

//Inicializa un array de valores con tantas posiciones como campos de datos tenga el formulario.
$aFormulario = ['usuario' => null,
    'password' => null
];
//Se inicializa un array de errores con tantas posiciones como campos de entrada de datos tenga el formulario.
$aErrores = ['usuario' => null,
    'password' => null,
    'error' => null
];

if (isset($_POST['Registro'])) {
    $_SESSION['pagina'] = 'registro';
    Header("Location: index.php");
    exit;
}

if (isset($_POST['Aceptar'])) {

    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_POST['usuario'], 255, 1, 1);
    $aErrores['password'] = validacionFormularios::comprobarAlfaNumerico($_POST['password'], 255, 1, 1);

    foreach ($aErrores as $campo => $error) { //Recorre el array de errores en busca de algún mensaje de error.
        if ($error != null) {
            $entradaOK = false;
            $_POST[$campo] = "";
        }
    }
}

if (isset($_POST['Aceptar']) && $entradaOK) {

    $aFormulario['usuario'] = $_POST['usuario'];
    $aFormulario['password'] = $_POST['password'];

    $usuario = Usuario::validarUsuario($aFormulario['usuario'], $aFormulario['password']);

    if (is_null($usuario)) {
        $aErrores['error'] = 'Acceso Incorrecto';
    } else {
        $_SESSION['usuarioDAW208'] = $usuario;
        $_SESSION['pagina'] = 'inicio';
        $_SESSION['visitas'] = $usuario->registrarUltimaConexion();
        header('Location: index.php');
        exit;
    }
}
$_SESSION['pagina'] = 'login';
require_once $vistas["layout"];
?>




