<?php

require_once 'model/RestIP.php';

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

//if (isset($_POST['Aceptar'])) {
//
//    $aErrores['ip'] = validacionFormularios::validar($_POST['descripcion'], 60, 1, 1);
//
//    foreach ($aErrores as $campo => $error) {
//        if ($error != null) {
//            $entradaOK = false;
//            $_POST[$campo] = "";
//        }
//    }
//}
$_SESSION['IPDaw208'] = '';

if (isset($_POST['Aceptar'])) {
    $IP = paisIP::nacionalidadIP($_POST['ip']);
    $_SESSION['IPDaw208'] = $IP;
    //$datosIP = $IP;
}
$_SESSION['pagina'] = 'REST';
require_once $vistas["layout"];
?>

