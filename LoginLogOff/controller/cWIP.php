<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_REQUEST['Volver'])) {    
    $_SESSION['pagina'] = $_SESSION['paginaAnterior'];
    header("Location: index.php"); 
    exit;
}
if (!isset($_SESSION['usuarioDAW208'])) { 
    header("Location: index.php");
} else {    
    $_SESSION['pagina'] = 'wip';
    require_once $vistas['layout'];
}
?>
