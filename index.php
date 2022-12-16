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
    ?>
    <section class="carga_1">
        <div class="carga-contenedor_1">
            <h3>ingreso a usuario</h3>
            <form class="carga-form" action="validar.php" method="POST">
                <label for="nombre">nombre de usuario</label>
                <input class="imputs" type="text" name="usuario">
                <input class="imputs" type="password" name="contraseña" id="" placeholder="contraseña">
                <input class="boton" type="submit" value="enviar">
            </form>
            <?php
            if (isset($_GET["ok"])) {
                echo '<h3 class="ok" >sesion iniciada con exito!</h3>';
            } elseif (isset($_GET["no"])) {
                echo '<h3 class="no" >los datos ingresado son incorrectos!</h3>';
            } elseif (isset($_GET["ok2"])) {
                echo '<h3 class="ok" >sesion cerrada con exito!</h3>';
            }
            ?>
        </div>
    </section>

</body>

</html>