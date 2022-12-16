<?php
$archivo = fopen('registro.txt', 'r');
while (!feof($archivo)) {
        $linea = fgets($archivo);
        $saltodelinea = nl2br($linea);
        echo ($saltodelinea);
}

fclose($archivo);
