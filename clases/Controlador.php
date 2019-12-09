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

        if(isset($_GET['login'])){
            $this->verLogin();
            exit;
        }
    }

    private function verAnadirAnimal(){
        include 'vistas/formAnadir.php';
    }

    private function verVisita(){
        include 'vistas/formVisita.php';
    }

    private function verLogin(){
        include 'vistas/formLogIn.php';
    }
}
?>