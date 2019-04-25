<?php

require_once 'config/configuracion.php';
require_once 'core/181025validacionFormularios.php';
require_once 'model/Usuario.php';

$controladores = [
    'login' => 'controller/cLogin.php',
    'inicio' => 'controller/cInicio.php',
    'wip' => 'controller/cWIP.php',
    'error' => 'controller/cError.php'
];
$vistas = [
    'layout' => 'view/layout.php',
    'inicio' => 'view/vInicio.php',
    'login' => 'view/vLogin.php',
    'wip' => 'view/vWIP.php',
    'error' => 'view/vError.php'
];
?>

