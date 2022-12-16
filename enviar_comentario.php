<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_actual= date("l/m/y h:i");

$texto="<h3 class='comentario'> nombre: " . $_POST['nombre']." - ". $fecha_actual ."<br>". "  " . $_POST['comentario'] . "</h3>";
$archivo= fopen('registro.txt', 'a');
fputs($archivo,$texto);

header("location:ver_comentarios.php");



