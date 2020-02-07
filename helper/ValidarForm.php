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
    public function validar($fuente, $reglasValidacion, $idioma)
    {
        foreach ($fuente as $campo => $valor) {
            foreach ($reglasValidacion as $nombreCampo => $reglasCampo) {
                if ($campo === $nombreCampo) {
                    if ($idioma == "eusk") {
                        switch ($nombreCampo) {
                            case 'numchip':
                                $nombreCampo = "TxipZenbakia";
                                break;
                            case 'nombre':
                                $nombreCampo = "Izena";
                                break;
                            case 'edad':
                                $nombreCampo = "Adina";
                                break;
                            case 'descripcion':
                                $nombreCampo = "Deskribapena";
                                break;
                            case 'genero':
                                $nombreCampo = "Generoa";
                                break;
                            case 'foto':
                                $nombreCampo = "Argazkia";
                                break;
                        }
                    }
                    foreach ($reglasCampo as $nombreRegla => $valorRegla) {
                        if ($nombreRegla === "required" && $valorRegla) {
                            if (empty($valor)) {
                                if ($idioma == "eusk") {
                                    $this->addError($nombreCampo, "Datua derrigorrezkoa da.");
                                } else {
                                    $this->addError($nombreCampo, "El campo es obligatorio.");
                                }
                            }
                        }

                        if ($nombreRegla === 'onlynumber' && $valorRegla) {
                            if (!is_numeric($valor)) {
                                if ($idioma == "eusk") {
                                    $this->addError($nombreCampo, "Zenbakia sartu behar duzu.");
                                } else {
                                    $this->addError($nombreCampo, "Debes introducir un número.");
                                }
                            }
                        }

                        if ($nombreRegla === 'min') {
                            if ($valor < $valorRegla) {
                                if ($idioma == "eusk") {
                                    $this->addError($nombreCampo, "Gutxieneko balorea 0 urteko da.");
                                } else {
                                    $this->addError($nombreCampo, "El valor mínimo es 0 años.");
                                }
                            }
                        }

                        if ($nombreRegla === 'checked' && $valorRegla) {
                            if (empty($valor)) {
                                if ($idioma == "eusk") {
                                    $this->addError($nombreCampo, "Balorea ez dago aukeratuta.");
                                } else {
                                    $this->addError($nombreCampo, "No se ha seleccionado un valor.");
                                }
                            }
                        }

                        if ($nombreRegla === 'selected' && $valorRegla) {
                            if (empty($valor)) {
                                if ($idioma == "eusk") {
                                    $this->addError($nombreCampo, "Balorea ez dago aukeratuta.");
                                } else {
                                    $this->addError($nombreCampo, "No se ha seleccionado un valor.");
                                }
                            }
                        }

                        if ($nombreRegla === 'formato' && $valorRegla) {
                            $patron = "/[0-9]{8}[a-zA-Z]/";
                            if (!preg_match($patron, $valor)) {
                                if ($idioma == "eusk") {
                                    $this->addError($nombreCampo, "Txiparen formatua oker dago.");
                                } else {
                                    $this->addError($nombreCampo, "El formato del chip es erroneo");
                                }
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
