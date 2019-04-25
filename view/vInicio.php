<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa</title>
        <link rel="stylesheet" href="webroot/estilos/estilosAñadir.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
    </head>
    <body>
        <header><h1>Ventana de Programa</h1></header>
        <?php
        /**
          @author: Victor Martinez Mielgo
          @since: 02/04/2019
          Comentarios: Desarrollo de una aplicación con control de acceso e identificación del usuario basado en un formulario (Login.php)
         */
        ?>   
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="contenedor">                
                <table class="busqueda">   
                    <tr>
                        <td>
                            <p><?php echo $_SESSION['visitas'] ?></p>   
                        </td>
                    </tr>
                    <tr>                   
                        <td>
                            <input class="btn btn-primary" type="submit" name="Cerrar_Sesion" value="Cerrar_Sesion" >   
                            <input class="btn btn-primary" type="button" name="ListarUsuarios" value="ListarUsuarios" onclick="location = 'listarUsuarios.php'" >                                 
                            <input class="btn btn-primary" type="submit" name="Detalle" value="Detalle"> 
                            <input class="btn btn-primary" type="submit" name="EditarPerfil" value="EditarPerfil"> 
                            <input class="btn btn-primary" type="submit" name="CambiarContraseña" value="CambiarContraseña"> 
                            <input class="btn btn-primary" type="submit" name="BorrarUsuario" value="BorrarUsuario"> 
                            <?php if ($_SESSION['usuarioDAW208']->getPerfil() == 'administrador') { ?>
                                <input class="btn btn-primary" type="button" name="AdministrarUsuarios" value="AdministrarUsuarios" onclick="location = '../../MantenimientoTema5LoginLogoff/codigoPHP/index.php'">
                            <?php } ?>
                        </td>
                    </tr>
                </table> 
            </div>
        </form>    
    </body>
</html>

