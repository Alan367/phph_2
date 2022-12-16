<?php
session_start();
include("./conexion.php");

$nombre_usuario = $_POST["usuario"];
$contrase_usuario = $_POST["contraseña"];




$consulta = mysqli_query($conexion_db, "SELECT * FROM administradores WHERE usuario = 'admin' AND clave ='admin123'");

if ($nombre_usuario == 'admin' && $contrase_usuario == 'admin123') {
    $_SESSION['admin'] = $_POST['usuario'];
    header("Location:index.php?ok");
} else {
    header("Location:index.php?no");
}
