<?php
class AnimalesDAO
{
    private $db;

    function __construct()
    {
        $this->db = new DataBase();
    }

    /**
     * existeAnimal.
     *
     * @author	Eneko Trabudua <etrabudua5@gmail.com>
     * @since	v0.0.1
     * 
     * Conectamos a la BBDD, hacemos la consulta del animal con el numChip 
     * que está intentado introducir el usuario
     * 
     * Comprobamos que el resultado de la consulta tenga alguna fila
     * Para saber si ese animal ya está introducido en la BBDD
     * 
     * @version	v1.0.0	Thursday, February 13th, 2020.
     * @param	mixed	$numchip	
     * @return	mixed   Boolean dependiendo de si existe un animal con ese numChip
     */
    function existeAnimal($numchip)
    {
        $this->db->conectar();
        $sql = "SELECT * FROM animales WHERE numChip = '$numchip'";
        $result = $this->db->ejecutarSQL($sql);
        $rows = $result->fetchAll();
        $numeroFilas = $this->db->cantidadFilas($rows);
        $this->db->desconectar();
        return $numeroFilas <> 0;
    }


    /**
     * insertarAnimal.
     *
     * @author	Eneko Trabudua <etrabudua5@gmail.com>
     * @since	v0.0.1
     * 
     * Inserta el registro con los datos del formulario validados a la BBDD
     * 
     * @version	v1.0.0	Thursday, February 13th, 2020.
     * @param	mixed	$animal	
     */
    function insertarAnimal($animal)
    {
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

    /**
     * seleccionarTodosAnimales.
     *
     * @author  Eneko Trabudua <etrabudua5@gmail.com>
     * @since	v0.0.1
     * 
     * Se hace una consulta select para contar todos los animales que hay
     * 
     * @version	v1.0.0	Thursday, February 13th, 2020.
     * @return	mixed $result 
     */
    function seleccionarTodosAnimales()
    {
        $this->db->conectar();
        $sql = "SELECT * FROM animales";
        $result = $this->db->ejecutarSQL($sql);
        $result = $result->fetchAll();
        return $result;
    }
}
