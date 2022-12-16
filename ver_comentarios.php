<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
</head>
<body>
    
<?php
    include("./header.php");
    ?>
    <section>
        <div class="comentarios_contenedor">
        <h1>Caja de comentarios</h1>
        <form class="carga-form" action="enviar_comentario.php" method="POST">
            <input class="form_nombre" type="text" name="nombre" placeholder="insertar nombre">
            <textarea name="comentario" id="" cols="30" rows="10"></textarea>
            <input class="boton" type="submit" value="enviar">
        </form>
        </div>  
    </section>
<section class="caja_contenedor">
    <div class="caja_comentarios"> 
    <?php
        include("./registro.php");
        ?>
    </div>
    
</section>
       
        
</body>
</html>