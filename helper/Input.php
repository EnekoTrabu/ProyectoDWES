<?php

class Input
{
    public static function siEnviado($tipo = 'post'){
        switch ($tipo) {
            case 'post':
                return !empty($_POST);
                break;
            
            default:
                return false;
                break;
        }
    }
    public static function get($dato)
    {
        if (isset($_POST[$dato])) {
            $dato = $_POST[$dato];
        } else {
            $dato = "";
        }
        return Input::filtrar($dato);
    }

    public static function filtrar($dato)
    {
        //Elimina las etiquetas HTML
        $filtrado = strip_tags($dato);
        //Convierte los carácteres especiales a código
        $filtrado = htmlspecialchars($filtrado);
        //Elimina los espacios en blanco al principio y al final
        $filtrado = trim($filtrado);

        return $filtrado;
    }

    public static function verificarLista($valor,$valorMenu){
        if ($valor == $valorMenu){
            echo ' selected = "selected"';
        }
    }
}
