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
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
    </head>
    <body>        
        <?php
        /**
          @author: Victor Martinez Mielgo
          @since: 02/04/2019
          Comentarios: Desarrollo de una aplicación con control de acceso e identificación del usuario basado en un formulario (Login.php)
         */
        ?> 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  
            <div class="container-fluid col-lg-3">
                <legend>Login</legend>
                <div class="form-group">
                    <label for="exampleInputUsuario">Usuario</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" placeholder="Enter Usuario" name="usuario" value="<?php
                    if (isset($_POST['usuario']) && is_null($_POST['usuario'])) {
                        echo $_POST['usuario'];
                    }
                    ?>">                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password" value="<?php
                    if (isset($_POST['password']) && is_null($_POST['password'])) {
                        echo $_POST['password'];
                    }
                    ?>">
                </div>  
                <?php if ($aErrores['error'] != null) { ?>
                    <div class = "alert alert-dismissible alert-primary">
                        <?php echo $aErrores['error']; ?>
                    </div>
                <?php }
                ?>

                <input class="btn btn-primary" type="submit" name="Aceptar" value="Aceptar">
                <input class="btn btn-primary" type="button" name="Salir" value="Salir" onclick="location = '../indexProyectoDWES.html'">
                <input class="btn btn-primary" type="submit" name="Registro" value="Registro">
            </div>
        </form>         
    </body>
</html>
