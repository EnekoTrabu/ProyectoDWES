<?php
include 'helper/ValidarForm.php';

class Controlador
{

    public function run()
    {
        // TODO Listar animales
        session_start();
        include 'funciones/funciones.php';
        include 'includes/cabecera.php';

        if (!isset($_POST['enviar'])) { //no se ha enviado el formulario // primera petición
            //se llama al método para mostrar el formulario inicial
            $this->mostrarFormulario("validar", null, null);
            exit();
        }
        if (isset($_POST['enviar']) && ($_POST['enviar']) == 'validar') { //se ha enviado el formulario //se valida el formulario
            $this->validar();
            exit();
        }
        if (isset($_POST['enviar']) && ($_POST['enviar']) == 'continuar') { //se ha enviado el formulario
            //Terminar
            unset($_POST); //Se deja limpio $_POST como la primera vez
            //echo 'Programa Finalizado';
            $this->mostrarFormulario("validar", null, null);
            exit();
        }
    }

    private function mostrarFormulario($fase, $validador, $resultado)
    {
        //se muestra la vista del formulario (la plantilla form_bienvenida.php) 
        include 'vistas/formAnadir.php';
    }

    private function crearReglasValidacion()
    {
        $reglasValidacion = array(
            "nombre" => array('required' => true),
            "edad" => array('onlynumber' => true, 'min' => 0, 'required' => true),
            "procedencia" => array('required' => false),
            "genero" => array('checked' => true),
            "raza" => array('required' => false),
            "foto" => array('required' => true),
            "salud" => array('selected' => true),
            "descripcion" => array('required' => true)
        );

        return $reglasValidacion;
    }

    private function validar(){
        $validador = new ValidarForm();
        $reglasValidacion = $this->crearReglasValidacion();
        $validador->validar($_POST, $reglasValidacion);
        if ($validador->esValido()) {  // formulario correcto, recoger datos y 
            //volver a mostrar formulario con el resultado correcto
            $nombre = $_POST['nombre'];
            $edad =  $_POST['edad'];
            $procedencia = $_POST['procedencia'];
            $genero = $_POST['genero'];
            $raza = $_POST['raza'];
            $foto = $_POST['foto'];
            $salud = $_POST['salud'];
            $descripcion = $_POST['descripcion'];
            $resultado = crearTarjeta($nombre, $edad, $procedencia, $genero, $raza, $foto, $salud, $descripcion);
        
            $this->mostrarFormulario("continuar", $validador, $resultado);
            exit();
        }
        $this->mostrarFormulario("validar", $validador, null);
        exit();
    }
}
