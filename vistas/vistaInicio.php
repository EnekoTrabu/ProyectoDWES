<?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $edad =  $_POST['edad'];
        $procedencia = $_POST['procedencia'];
        $genero = $_POST['genero'];
        $raza = $_POST['raza'];
        $foto = $_POST['foto'];
        $salud = $_POST['salud'];
        $descripcion = $_POST['descripcion'];
        echo crearTarjeta($nombre, $edad, $procedencia, $genero, $raza, $foto, $salud, $descripcion);
    }
?>
<br>