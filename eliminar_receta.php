<?php
include("./conexion.php");
$id_receta= $_GET['id'];

mysqli_query($conexion_db, "DELETE FROM recetas WHERE id = $id_receta");

header("location:ver_recetas.php");