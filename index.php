<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
/**
  @author: Victor Martinez Mielgo
  @since: 19/04/2019
  Comentarios: LoginLogoff Modelo-Vista-Controlador
 */
require_once 'config/configuracion.php';
require_once 'config/configuacionMVC.php';

session_start();

if (isset($_SESSION['usuarioDAW208']) && (!isset($_SESSION['pagina']))) {
    include_once $controladores['inicio'];
}
if (isset($_SESSION['pagina'])) {
    include_once $controladores[$_SESSION['pagina']];
} else {
    include_once $controladores['login'];
}
?>

