<?php
if (isset($resultado)) {
    echo '<div class="container">';
    echo '<div class="row">';
    foreach ($resultado as $animal) {
        $foto = decodeImage($animal['foto']);

        //echo '<img src="data:image/jpg;base64,'. $foto.'" alt="">';
        $resultado = crearTarjeta($animal['nombre'], $animal['edad'], $animal['procedencia'], $animal['genero'], $animal['raza'], $foto , $animal['salud'], $animal['descripcion']);
        echo $resultado;
    }
    echo '</div>';
    echo '</div>'; 
}
include 'includes/pie.php';
?>