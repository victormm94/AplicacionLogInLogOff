<html>
    <head>
        <meta charset="UTF-8">
        <title>Work In Progress</title>
        <link rel="stylesheet" href="webroot/estilos/estilosAñadir.css">
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
        <style>
            .imagen{
                text-align: center;
            }
            .imagen img{
                width: 55%;
            }
        </style>
    </head>
    <body>        
        <?php
        /**
          @author: Victor Martinez Mielgo
          @since: 25/04/2019
          Comentarios: WIP
         */
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">      
            <div class="imagen">
                <h1>WORK IN PROGRESS</h1>
                <h3>Estamos trabajando en esta pagina. Disculpad las molestias</h3>
                <img src="webroot/images/pikachu.jpg">
            </div> 
            <div class="imagen">
                <input class='btn btn-primary' type="submit" name="Volver" value="Volver"/> 
            </div>
        </form>  
    </body>
</html>


