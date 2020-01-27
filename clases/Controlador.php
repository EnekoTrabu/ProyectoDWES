<?php
include 'helper/ValidarForm.php';

class Controlador
{
    public function run()
    {
        // TODO Listar animales
        include 'funciones/funciones.php';
        include 'includes/cabecera.php';

        // Si no se ha enviado el formulario
        // Se llama al método para mostrar el formulario inicial
        if (!isset($_POST['enviar'])) {
            $this->mostrarFormulario("validar", null, null);
            exit();
        }
        // Si se ha enviado el formulario y los datos del formulario son validos
        // Introduce la tarjeta con dichos valores
        if (isset($_POST['enviar']) && ($_POST['enviar']) == 'validar') {
            $this->validar();
            exit();
        }
    }

    // Se muestra la vista del formulario (la plantilla formAnadir.php) 
    private function mostrarFormulario($fase, $validador, $resultado)
    {
        include 'vistas/formAnadir.php';
    }

    /**
     * Crear las reglas de validación
     * 
     * @author Itziar Roldan <itziar21roldan@gmail.com>
     * @return $reglasValidacion Array con las reglas de validación
     */

    private function crearReglasValidacion()
    {
        $reglasValidacion = array(
            "numchip" => array('formato' => true, 'required' => true), 
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

    // Valida el formulario
    private function validar()
    {
        $validador = new ValidarForm();
        $reglasValidacion = $this->crearReglasValidacion();
        if(!isset($_POST['genero'])){
            $_POST['genero'] = "";
        }
        $validador->validar($_POST, $reglasValidacion);
        // Si el formulario es correcto
        // Recoge los datos y vuelve a mostrar el formulario con el resultado en una tarjeta
        if ($validador->esValido()) {
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
