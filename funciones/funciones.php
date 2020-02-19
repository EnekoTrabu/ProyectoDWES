<?php

/**
 * Función para crear una tarjeta con una nueva adopción.
 * 
 * @author Itziar Roldán <itziar21roldan@gmail.com>
 * 
 * @param $nombre string
 * @param $edad integer
 * @param $procedencia string
 * @param $genero string
 * @param $raza string
 * @param $foto string
 * @param $salud string
 * @param $descripcion string
 * 
 * @return $tarjeta Código HTML
 */
function crearTarjeta($idioma, $nombre, $edad, $procedencia, $genero, $raza, $foto, $salud, $descripcion)
{
    if($idioma == "eusk"){
        if($genero == "Macho"){
            $genero = "Arra";
        }else{
            $genero = "Emea";
        }

        if($salud == "Buena Salud"){
            $salud = "Osasun Egokia";
        }else{
            $salud = "Osasun Txarra";
        }

        $valoresIdioma = [
            "edad" => "urte",
            "procedencia" => "Jatorria",
            "noProcedencia" => "Zehaztu gabe"
        ];
    }else{
        $valoresIdioma = [
            "edad" => "años",
            "procedencia" => "Procedencia",
            "noProcedencia" => "Sin procedencia"
        ];
    }
    
    $tarjeta = "";

    $tarjeta .= '<div class="card col-md-6 bg-light border border-dark mt-3 mb-3">';
    $tarjeta .= '<br>';
    $tarjeta .= '<div class="card-header border-top border-secondary">';
    $tarjeta .= '<h5 class="card-title">' . $nombre . '</h5>';
    $tarjeta .= '<h6 class="card-subtitle mb-2 text-muted">' . $edad . ' ' . $valoresIdioma['edad'].' </h6>';
    $tarjeta .= '</div>';
    $tarjeta .= '<div class="card-body">';
    $tarjeta .= '<img src="data:image/jpg;base64,'. $foto . '" class="img-fluid" alt="">';
    $tarjeta .= '<br><br>';
    if ($procedencia == "") {
        $tarjeta .= '<h6 class="card-subtitle mb-2 text-muted">' . $valoresIdioma['procedencia'].': <em>' . $valoresIdioma['noProcedencia'].'</em></h6>';
    } else {
        $tarjeta .= '<h6 class="card-subtitle mb-2 text-muted">' . $valoresIdioma['procedencia'].': <em>' . $procedencia . '</em></h6>';
    }

    if ($raza == "") {
        $tarjeta .= '<h6 class="card-subtitle mb-2 text-muted">' . $genero . '</h6>';
    } else {
        $tarjeta .= '<h6 class="card-subtitle mb-2 text-muted">' . $raza . ' - ' . $genero . '</h6>';
    }

    $tarjeta .= '<h6 class="card-subtitle mb-2 text-muted">' . $salud . '</h6>';
    $tarjeta .= '<p class="card-text">' . $descripcion . '</p>';
    $tarjeta .= '</div>';
    $tarjeta .= '</div>';

    return $tarjeta;
}

/**
 * decodeImage.
 *
 * @author	Eneko Trabudua <etrabudua5@gmail.com)
 * @since	v0.0.1
 * @version	v1.0.0	Wednesday, February 5th, 2020.
 * @global
 * @param	mixed	$imagen	
 * @return	mixed
 */
function decodeImage($imagen){
    $image = base64_decode($imagen);
    $image = imagecreatefromstring($image);
    ob_start(); 
    imagejpeg($image, null, 80);
    $data = ob_get_contents();
    ob_end_clean();
    
    return base64_encode($data);
}

function cambiarIdioma($idioma){
    if(isset($idioma)){
        // si es true, se crea el require y la variable lang
        $lang = $idioma;
        include "idiomas/".$lang.".php";
        // si no hay sesion por default se carga el lenguaje espanol
    }else{
        include "idiomas/cast.php";
    }
}
