<?php
session_start();
header("Content-type:image/jpege");

$imagen_captcha= imagecreate(120,15);
$fondo= imagecolorallocate($imagen_captcha, 23, 28, 201);
$texto= imagecolorallocate($imagen_captcha, 246, 246, 246);

imagestring($imagen_captcha, 15,30,0,$_SESSION['codigo_captcha'] , $texto);
imagejpeg($imagen_captcha);

