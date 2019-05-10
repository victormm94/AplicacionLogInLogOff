<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>RESTIP</title>
        <style>
            p{
                color:red;
            }
        </style>        
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
    </head>
    <body> 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
            <div class="row justify-content-center">
                <div class="container-fluid col-lg-3 col-md-4">
                    <legend>Rest IP</legend>
                    <div class="form-group">
                        <label for="exampleInputIP">Introduzca una IP PUBLICA</label>
                        <input type="text" class="form-control" id="exampleInputIP" aria-describedby="emailHelp" placeholder="Ej:80.24.0.0" name="ip" value="<?php
                        if (isset($_POST['ip'])) {
                            echo $_POST['ip'];
                        }
                        ?>">                    
                    </div> 
                    <p>
                        <?php
                        if ($_SESSION['IPDaw208'] != '') {
                            echo $_SESSION['IPDaw208'];
                        }
                        ?>
                    </p>
                    <input class="btn btn-primary" type="submit" name="ConsultarIP" value="ConsultarIP">
                    <input class="btn btn-primary" type="submit" name="Volver" value="Volver">  
                    <br><br>
                    <div class="form-group">
                        <h2>Ejemplos de prueba</h3> 
                            <p>España: 80.24.0.0</p>
                            <p>Andorra: 5.62.60.5 </p>
                            <p>Alemania: 5.6.7.8</p>
                            <p>Belgica: 2.22.55.0</p>
                            <p>Japon: 1.0.16.0</p>    
                    </div> 
                </div> 
                <div class="container-fluid col-lg-3 col-md-4">
                    <legend>Consultar Estacion Climatica</legend>
                    <div class="form-group">
                        <label for="exampleInputEstacion">Introduzca el codigo de una estacion</label>
                        <input type="text" class="form-control" id="exampleInputEstacion" aria-describedby="emailHelp" placeholder="Ej:2755X" name="estacion" value="<?php
                        if (isset($_POST['estacion'])) {
                            echo $_POST['estacion'];
                        }
                        ?>">                    
                    </div> 
                    <p>
                        <?php if ($_SESSION['aemet'] != '') {
                            ?>
                            Latitud: <?php echo $_SESSION['aemet']['latitud'] ?> <br>
                            Altitud: <?php echo $_SESSION['aemet']['altitud'] ?> <br>
                            Longitud: <?php echo $_SESSION['aemet']['longitud'] ?> <br>
                            Nombre: <?php echo $_SESSION['aemet']['nombre'] ?> <br>
                            Provincia: <?php echo $_SESSION['aemet']['latitud'] ?> <br>
                            <?php
                        }
                        ?>                  

                    </p>                
                    <input class="btn btn-primary" type="submit" name="ConsultarEstacion" value="ConsultarEstacion">
                    <input class="btn btn-primary" type="submit" name="Volver" value="Volver">
                </div>
            </div>
        </div>
    </form>         
</body>
</html>

