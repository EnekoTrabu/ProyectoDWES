<?php

class Controlador{
    
    public function run(){
        // TODO Listar animales
        include 'vistas/cabecera.php';
        
        if(isset($_GET['anadir'])){
            $this->verAnadirAnimal();
            exit;
        }

        if(isset($_GET['visita'])){
            $this->verVisita();
            exit;
        }

        if(isset($_GET['inicio'])){
            $this->verInicio();
            exit;
        }
    }

    private function verAnadirAnimal(){
        include 'vistas/formAnadir.php';
    }

    private function verVisita(){
        include 'vistas/formVisita.php';
    }

    private function verInicio(){
        include 'vistas/formLogIn.php';
    }
}
?>