<?php

class Controlador
{

    public function run()
    {
        // TODO Listar animales
        session_start();
        include 'funciones/funciones.php';
        include 'vistas/cabecera.php';

        if (isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];

            switch ($pagina) {
                case 'animal':
                    $this->verAnadirAnimal();
                    break;

                case 'visita':
                    $this->verVisita();
                    break;

                case 'login':
                    $this->verLogin();
                    break;
            }
        } else {
            $this->vistaInicio();
        }
    }

    private function verAnadirAnimal()
    {
        include 'vistas/formAnadir.php';
    }

    private function verVisita()
    {
        include 'vistas/formVisita.php';
    }

    private function verLogin()
    {
        include 'vistas/formLogIn.php';
    }

    private function vistaInicio()
    { 
        include 'vistas/vistaInicio.php';
        include 'vistas/pie.php';
    }
}
