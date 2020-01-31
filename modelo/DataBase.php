<?php

class DataBase implements IDataBase
{
    private $conexion;


    public function conectar()
    {

        try {

            $datos = "mysql:host=localhost;dbname=adoptamedb";
            $this->conexion = new PDO($datos, 'alumno', 'alumno');

            return $this->conexion;
        } catch (PDOException $error) {
            echo "<p>Error: " . $error->getMessage() . "</p>";
            exit();
        }
    }

    public function desconectar()
    {
        $this->conexion = null;
    }

    public function ejecutarSQL($sql)
    {
        /*//los select
        //Query
        $db = $this->conectar();

        if ($db->query($sql)) {
            echo "  <p>Registro creado correctamente.</p>\n";
        } else {
            echo "  <p>Error al crear el registro.<p>\n";
        }

        $this->desconectar();*/
        try {
            $result = $this->conexion->query($sql);
            return $result;
        } catch (Exception $ex) {
            $error = $ex->getMessage();
            include "vistas/error.php";
            exit();
        }
    }

    public function ejecutarSQLactualizacion($sql, $args)
    {
        /*//insert, delete, update
        //prepare
        $db = $this->conectar();

        $result = $db->prepare($sql);
        $result->execute();*/
        try {
            $result = $this->conexion->prepare($sql);
            $result->execute($args);
        } catch (PDOException $ex) {
            $error = $ex->getMessage();
            include "vistas/error.php";
            exit();
        }
    }

    public function cantidadFilas($result)
    {
        $filas = count($result);
        return $filas;
    }
}
