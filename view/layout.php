<!DOCTYPE html>
<?php
if (isset($_SESSION['usuarioDAW208'])) {
    $vista = $vistas['inicio'];
} else {
    $vista = $vistas['login'];
}
if (isset($_SESSION['pagina'])) {
    $vista = $vistas[$_SESSION['pagina']];
}
?>
<html>
    <head>
        <title>Aplicacion LoginLogoff</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
        <link rel="stylesheet" href="webroot/estilos/layout.css">
        
    </head>
    <body>
        <header>
            <div class="container-fluid text-center bg-light">
                <h1>Aplicacion LogInLogOff Modelo-Vista-Controlador</h1>
            </div>
        </header>
        <?php require_once $vista; ?>
        <footer>
            <div class="container-fluid text-center bg-light">
                <span id="headerSpan">Victor Martinez Mielgo</span>
                <span id="headerSpan"><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">licencia de Creative Commons Reconocimiento-NoComercial 4.0 Internacional</a></span>
                <span><a href="http://daw-usgit.sauces.local/victormm/proyectoTema6/tree/master" target="_blank"><img src="webroot/images/logo-git.png"></a></span>
            </div>  
        </footer>
    </body>
</html>

