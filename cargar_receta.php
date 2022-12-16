<?php
session_start();

include("./conexion.php");

$codigo_captcha=$_POST['captcha'];
if($codigo_captcha== $_SESSION['codigo_captcha']){

$nombre_receta = $_POST["nombre"];
//$imagen_receta = $_POST["imagen"];
$receta = $_POST["receta"];

$nombre_img= $_FILES['imagen']['name'];
$tamaño_img= $_FILES['imagen']['size'];
$tipo_img= $_FILES['imagen']['type'];
$tmp_img= $_FILES['imagen']['name'];

$destino = 'imagenes/' . $nombre_img;
if(($tipo_img != 'image/jpeg' && $tipo_img != 'image/jpg' && $tipo_img != 'image/png' && $tipo_img != 'image/gif') or $tamaño_img > 200000)
{
    header("Location:ver_recetas.php?error");
}else{
    move_uploaded_file($tmp_img, $destino);
}

mysqli_query($conexion_db, "INSERT INTO recetas VALUE (DEFAULT, '$nombre_receta', '$nombre_img', '$receta')"); 

mysqli_close($conexion_db);
header("Location:ver_recetas.php?ok");
}else{
    header("Location:ver_recetas.php?error_codigo");
}
