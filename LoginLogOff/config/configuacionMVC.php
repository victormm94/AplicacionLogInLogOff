<?php

require_once 'config/configuracion.php';
require_once 'core/181025validacionFormularios.php';
require_once 'model/Usuario.php';
require_once 'model/Rest.php';   

$controladores = [
    'login' => 'controller/cLogin.php',
    'inicio' => 'controller/cInicio.php',
    'wip' => 'controller/cWIP.php',
    'error' => 'controller/cError.php',
    'registro' => 'controller/cRegistro.php',
    'miCuenta' => 'controller/cMiCuenta.php',
    'borrarCuenta' => 'controller/cBorrarCuenta.php',
    'REST' => 'controller/cREST.php'
];
$vistas = [
    'layout' => 'view/layout.php',
    'inicio' => 'view/vInicio.php',
    'login' => 'view/vLogin.php',
    'wip' => 'view/vWIP.php',
    'error' => 'view/vError.php',
    'registro' => 'view/vRegistro.php',
    'miCuenta' => 'view/vMiCuenta.php',
    'borrarCuenta' => 'view/vBorrarCuenta.php',
    'REST' => 'view/vREST.php'
];
?>

