<?php

class ValidarForm
{

    private $errores = array();
    private $reglasValidacion = null;
    private $valido = false;

    public function __construct()
    {
    }

    /**
     * Recorre todos los campos, comprueba si se cumplen las normas y en caso de que no lo haga,
     * añade un error con su correspondiente mensaje.
     * 
     * @author Itziar Roldan <itziar21roldan@gmail.com>
     * @param $fuente Array con los valores del formulario
     * @param $reglasValidacion Array con las reglas de validación
     */
    public function validar($fuente, $reglasValidacion)
    {
        foreach ($fuente as $campo => $valor) {
            foreach ($reglasValidacion as $nombreCampo => $reglasCampo) {
                if ($campo === $nombreCampo) {
                    foreach ($reglasCampo as $nombreRegla => $valorRegla) {
                        if ($nombreRegla === "required" && $valorRegla) {
                            if (empty($valor)) {
                                $this->addError($nombreCampo, "El campo es obligatorio.");
                            }
                        }

                        if ($nombreRegla === 'onlynumber' && $valorRegla) {
                            if (!is_numeric($valor)) {
                                $this->addError($nombreCampo, "Debes introducir un número.");
                            }
                        }

                        if ($nombreRegla === 'min') {
                            if ($valor < $valorRegla) {
                                $this->addError($nombreCampo, "El valor mínimo es 0 años.");
                            }
                        }

                        if ($nombreRegla === 'checked' && $valorRegla) {
                            if (empty($valor)) {
                                $this->addError($nombreCampo, "No se ha seleccionado un valor.");
                            }
                        }

                        if ($nombreRegla === 'selected' && $valorRegla) {
                            if (empty($valor)) {
                                $this->addError($nombreCampo, "No se ha seleccionado un valor.");
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

    public function esValido()
    {
        if (empty($this->errores)) {
            $this->valido = true;
        }

        return $this->valido;
    }

    public function getErrores()
    {
        return $this->errores;
    }

    public function getMensajeError($campo)
    {
        return $this->errores[$campo];
    }
}
