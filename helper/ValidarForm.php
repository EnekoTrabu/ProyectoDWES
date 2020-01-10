<?php

class ValidarForm
{

    private $errores = array();
    private $reglasValidacion = null;
    private $valido = false;

    public function __construct()
    {
    }

    public function validar($fuente, $reglasValidacion)
    {
        foreach ($fuente as $campo => $valor) {
            foreach ($reglasValidacion as $nombreCampo => $reglasCampo) {
                if ($campo === $nombreCampo) {
                    foreach ($reglasCampo as $nombreRegla => $valorRegla) {
                        if ($nombreRegla === "required" && $valorRegla) {
                            if (empty($valor)) {
                               $this -> addError($nombreCampo, "El campo es obligatorio.");
                            }
                        }

                        if ($nombreRegla === 'onlynumber' && $valorRegla) {
                            if (!is_numeric($valor)) {
                                $this -> addError($nombreCampo, "Debes introducir un número.");
                            }
                        }

                        if ($nombreRegla === 'min' && $valorRegla) {
                            if ($valor < 0) {
                                $this -> addError($nombreCampo, "El valor mínimo es 0 años.");
                            }
                        }

                        if ($nombreRegla === 'checked' && $valorRegla) {
                            if (empty($valor)) {
                                $this -> addError($nombreCampo, "No se ha seleccionado un valor.");
                            }
                        }

                        if ($nombreRegla === 'selected' && $valorRegla) {
                            if (empty($valor)) {
                                $this -> addError($nombreCampo, "No se ha seleccionado un valor.");
                            }
                        }
                    }
                }
            }
        }
    }

    public function addError($nombreCampo, $error)
    {
        $this->errores[$nombreCampo] = $error;
    }

    public function esValido(){
        if(empty($this->errores)){
            $this->valido = true;
        }

        return $this->valido;
    }

    public function getErrores(){
        return $this->errores;
    }

    public function getMensajeError($campo){
        return $this->errores[$campo];
    }
}

