<?php

require_once 'model/Rest.php';

$entradaOK = true;

$aFormulario = ['descripcion' => null
];

$aErrores = ['descripcion' => null
];

$_SESSION['IPDaw208'] = '';
$_SESSION['aemet'] = '';

if (isset($_REQUEST['Volver'])) {
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit;
}

if (isset($_POST['ConsultarEstacion'])) {
    $aemet = Rest::aemet($_POST['estacion']);
    $_SESSION['aemet'] = $aemet;
}

if (isset($_POST['ConsultarIP'])) {
    $IP = Rest::nacionalidadIP($_POST['ip']);
    $_SESSION['IPDaw208'] = $IP;
    //$datosIP = $IP;
}
$_SESSION['pagina'] = 'REST';
require_once $vistas["layout"];
?>

