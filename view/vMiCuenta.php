 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MiCuenta </title>
        <link rel="stylesheet" href="webroot/estilos/estilosAñadir.css">
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
    </head>
    <body> 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  
            <div class="container-fluid col-lg-3">
                <legend>MiCuenta</legend>
                <div class="form-group">
                    <label for="exampleInputUsuario">Usuario</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" name="usuario" value="<?php echo $_SESSION['usuarioDAW208']->getCodUsuario(); ?>" disabled > 
                </div>
                <div class="form-group">
                    <label for="exampleInputUsuario">Descripcion</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" name="descripcion" value="<?php
                    if (isset($_POST['descripcion']) && is_null($_POST['descripcion'])) {
                        echo $_POST['descripcion'];
                    } else {
                        echo $_SESSION['usuarioDAW208']->getDescUsuario();
                    }
                    ?>">
                    <input class="btn btn-primary" type="submit" name="CambiarDescripcion" value="CambiarDescripcion">                       
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password" value="<?php echo $_SESSION['usuarioDAW208']->getPassword(); ?>">
                    <input class="btn btn-primary" type="submit" name="CambiarPassword" value="CambiarPassword">  
                </div>
                <div class="form-group">
                    <label for="exampleInputUsuario">Perfil</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" name="usuario" value="<?php echo $_SESSION['usuarioDAW208']->getPerfil(); ?>" disabled > 
                </div>
                <div class="form-group">
                    <label for="exampleInputUsuario">Visitas</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" name="usuario" value="<?php echo $_SESSION['usuarioDAW208']->getNumAccesos(); ?>" disabled > 
                </div>
                <div class="form-group">
                    <label for="exampleInputUsuario">FechaUltimaVisita</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" name="usuario" value="<?php
                    setlocale(LC_TIME, 'es_ES.UTF-8');
                    date_default_timezone_set('Europe/Madrid');
                    $fecha = date('d-m-Y, H:i:s', $_SESSION['usuarioDAW208']->getFechaHoraUltimaConexion());
                    echo $fecha;
                    ?>" disabled > 
                </div>
                <input class="btn btn-primary" type="submit" name="BorrarCuenta" value="BorrarCuenta">  
                <input class="btn btn-primary" type="submit" name="Volver" value="Volver">
            </div>
        </form>         
    </body>
</html>


