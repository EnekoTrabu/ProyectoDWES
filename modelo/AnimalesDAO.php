<?php
    class AnimalesDAO{
        private $db;

        function __construct()
        {
            $this->db = new DataBase();
        }

        function existeAnimal($numchip){
            $this->db->conectar();
            $sql = "SELECT * FROM animales WHERE numChip = '$numchip'";
            $result = $this->db->ejecutarSQL($sql);
            $numeroFilas = $this->db->cantidadFilas($result);
            $this->db->desconectar();
            return $numeroFilas <> 0;
        }

        function insertarAnimal($animal){
            $this->db->conectar();
            $sql = "INSERT INTO animales (numChip, nombre, edad, procedencia, genero, raza, foto, salud, descripcion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $args = [
                utf8_decode($animal->getNumChip()),
                utf8_decode($animal->getNombre()),
                utf8_decode($animal->getEdad()),
                utf8_decode($animal->getProcedencia()),
                utf8_decode($animal->getGenero()),
                utf8_decode($animal->getRaza()),
                $animal->getFoto(),
                utf8_decode($animal->getSalud()),
                utf8_decode($animal->getDescripcion())
            ];

            try {
                $this->db->ejecutarSQLactualizacion($sql, $args);
            } catch (Exception $ex) {
                echo "Fail";
            }

            $this->db->desconectar();
        }
    }
