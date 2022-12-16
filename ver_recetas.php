<!DOCTYPE html>
<html lang="es">

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
    session_start();
    if (isset($_SESSION['admin'])) {
    ?>
        <section class="carga">
        <?php
        $nro1=rand(0,9);
        $nro2=rand(0,9);
        $nro3=rand(0,9);
        $letra= array("a","s","h","y","e","k","m",);
        $simbolo= array("$","%","&","@","#","=","/",);
        $mezcla_letra=rand(0,6);
        $mezcla_simbolo=rand(0,6);

        $_SESSION['codigo_captcha'] = $letra[$mezcla_letra]  . $nro1 . $nro2. $simbolo[$mezcla_simbolo] . $nro3;

        ?>
            <div class="carga-contenedor">
                <h3>cargar receta</h3>
                <form class="carga-form" action="cargar_receta.php" method="POST" enctype="multipart/form-data">
                    <label for="nombre">nombre</label>
                    <input class="imputs" type="text" name="nombre">
                    <label for="imagen"> insertar imagen</label>
                    <input  type="file" name="imagen">
                    <label for="receta">receta</label>
                    <textarea class="imputs" name="receta" id="" cols="30" rows="10"></textarea>
                    <label for="captcha">Complete el siguiente captcha para cargar la receta</label>
                    <img src="captcha.php" alt="">
                    <input class="imputs" type="text" name="captcha">
                    <input class="boton" type="submit" value="carga de receta">
                </form>
                <?php
                if (isset($_GET['error_codigo'])) {
                    echo '<h3 class="no" >Codigo de verificacion incorrecto</h3>';
                }

                if (isset($_GET["ok"])) {
                    echo '<h3 class="ok" >su receta ha sido cargada con exito!</h3>';
                }
                if (isset($_GET['error'])) {
                    echo '<h3 class="no" >Imagen incorrecta</h3>';
                }
                ?>
            </div>
        </section>
    <?php
    }
    ?>
    <section class="ver_recetas">
        <?php
        include("./conexion.php");
        $consulta_db = mysqli_query($conexion_db, "SELECT * FROM recetas");
        while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
        ?>
            <div class="caja-receta">
                <h2> <?php echo $mostrar_datos['nombre']; ?></h2>
                <img class="foto" src="./imagenes/ <?php echo $mostrar_datos['imagen']; ?>" alt="">
                <p><?php echo $mostrar_datos['Receta']; ?></p>
                <a class="boton2" href="./eliminar_receta.php?id=<?php echo $mostrar_datos['id'] ?>">elmiminar receta</a>
            </div>
        <?php
        }
        ?>
    </section>
</body>

</html>