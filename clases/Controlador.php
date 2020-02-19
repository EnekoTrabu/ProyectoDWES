<?php

class Controlador
{
    private $dao;

    public function run()
    {
        session_start();
        if(isset($_GET["idioma"])){
            $lang = $_GET["idioma"];
            if(!empty($lang)){
                $_SESSION["idioma"] = $lang;
            }
        }

        if(isset($_SESSION['idioma'])){
            $lang = $_SESSION["idioma"];
            include "idiomas/".$lang.".php";
        }else{
            include "idiomas/cast.php";
        }

        include 'funciones/funciones.php';
        include 'includes/cabecera.php';

        if (!isset($_POST['enviar'])) {
            
            if(isset($_GET['animales'])){
                $this->mostrar();
                exit();
            }
            $this->mostrarFormulario("validar", null, null);
            exit();
        }

        if (isset($_POST['enviar']) && ($_POST['enviar']) == 'validar') {
            $this->validar();
            exit();
        }
    }

    private function mostrarFormulario($fase, $validador, $resultado)
    {
        include 'vistas/formAnadir.php';
    }

    private function mostrarTarjetas($resultado){
        include 'vistas/verAnimales.php';
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

    private function validar()
    {
        $validador = new ValidarForm();
        $reglasValidacion = $this->crearReglasValidacion();

        if (!isset($_POST['genero'])) {
            $_POST['genero'] = "";
        }

        if (!isset($_POST['foto'])) {
            $_POST['foto'] = "";
        }

        $validador->validar($_POST, $reglasValidacion, $_SESSION["idioma"]);

        if ($validador->esValido()) {
            $this->registrar($validador);
            exit();
        }
        $this->mostrarFormulario("validar", $validador, null);
        exit();
    }

    private function registrar($validador)
    {
        $this->dao = new AnimalesDAO();
        $animal = $this->crearAnimal($_POST, $_FILES);
        $existe = $this->dao->existeAnimal($animal->getNumChip());
        if (!$existe) {
            $this->dao->insertarAnimal($animal);
            if($_SESSION["idioma"] == "eusk"){
                $result = '<div class="alert alert-success" role="alert">Erregistroa gehituta!</div>';
            }else{
                $result = '<div class="alert alert-success" role="alert">Registro añadido!</div>';
            }
            
            $this->mostrarFormulario("continuar", $validador, $result);
            exit();
        }

        if($_SESSION["idioma"] == "eusk"){
            $result = '<div class="alert alert-danger" role="alert">Txip Zenbakia hartuta dago!</div>';
        }else{
            $result = '<div class="alert alert-danger" role="alert">Numero Chip ya existe!</div>';
        }
        $this->mostrarFormulario("continuar", $validador, $result);
    }

    private function mostrar(){
        $this->dao = new AnimalesDAO();
        $animales = $this->dao->seleccionarTodosAnimales();
        $this->mostrarTarjetas($animales);
        
    }

    private function crearAnimal($datos, $foto)
    {
        $limite_kb = 16384;
        $numChip = htmlspecialchars(stripslashes($datos['numchip']));
        $nombre = htmlspecialchars(stripslashes($datos['nombre']));
        $edad = htmlspecialchars(stripslashes($datos['edad']));
        $procedencia = htmlspecialchars(stripslashes($datos['procedencia']));
        $genero = htmlspecialchars(stripslashes($datos['genero']));
        $raza = htmlspecialchars(stripslashes($datos['raza']));
        if($_FILES['foto']['error'] == 1){
            $foto = base64_encode(file_get_contents("img/no_disponible.png"));
        }else{
            $foto = base64_encode(file_get_contents($foto['foto']['tmp_name']));
        }
        $salud = htmlspecialchars(stripslashes($datos['salud']));
        $descripcion = htmlspecialchars(stripslashes($datos['descripcion']));
        $animal = new Animales($numChip, $nombre, $edad, $procedencia, $genero, $raza, $foto, $salud, $descripcion);
        return $animal;
    }
}
