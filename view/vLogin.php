<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <style>
            p{
                color:red;
            }
        </style>
        <link rel="stylesheet" href="webroot/estilos/estilosAñadir.css">
    </head>
    <body>
        <header><h1>Login</h1></header>
        <?php
        /**
          @author: Victor Martinez Mielgo
          @since: 02/04/2019
          Comentarios: Desarrollo de una aplicación con control de acceso e identificación del usuario basado en un formulario (Login.php)
         */
        ?>   

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="contenedor">
                <table>                            
                    <tr>
                        <td>Usuario</td>
                        <td><input type="text" name="usuario" value="<?php
                            if (isset($_POST['usuario']) && is_null($_POST['usuario'])) {
                                echo $_POST['usuario'];
                            }
                            ?>">
                        </td>                                
                    </tr>
                    <tr>
                        <td>Password</td>                                
                        <td><input type="password" name="password" value="<?php
                            if (isset($_POST['password']) && is_null($_POST['password'])) {
                                echo $_POST['password'];
                            }
                            ?>">
                        </td>                                
                    </tr>                            
                    <tr>                                                         
                        <td><input class="btn btn-primary" type="submit" name="Aceptar" value="Aceptar"></td>
                        <td><input class="btn btn-primary" type="button" name="Salir" value="Salir" onclick="location = '../indexProyectoDWES.html'"></td>   
                        <td><input class="btn btn-primary" type="button" name="Registro" value="Registro" onclick="location = 'registro.php'"></td>
                    </tr>
                </table>
            </div>
        </form>              
    </body>
</html>
