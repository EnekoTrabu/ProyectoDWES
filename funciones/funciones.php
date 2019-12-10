<?php

function crearTarjeta($nombre, $edad){
    $tarjeta = "";

    $tarjeta .= '<div class="card col-md-4">';
    $tarjeta .= '<img src="https://www.hola.com/imagenes/estar-bien/20190820147813/razas-perros-pequenos-parecen-grandes/0-711-550/razas-perro-pequenos-grandes-m.jpg" class="card-img-top" alt="...">';
    $tarjeta .= '<div class="card-body">';
    $tarjeta .=   '<h5 class="card-title">' . $nombre . '</h5>';
    $tarjeta .='<h6 class="card-subtitle mb-2 text-muted">' . $edad . ' Años</h6>';
    $tarjeta .='<p class="card-text">Macho</p>';
    $tarjeta .='<p class="card-text">Este animalillo es muy majete y viene con una manta, que es su juguete favorito.</p>';
    $tarjeta .='<a href="#" class="btn btn-dark btn-lg btn-block">Ver más</a>';
    $tarjeta .='</div>';
    $tarjeta .='</div>';

    return $tarjeta;
}