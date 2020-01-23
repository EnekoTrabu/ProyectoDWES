<?php

class DataBase implements IDataBase
{
    private $conexion;


    public function conectar()
    {

        try {

            $datos= "mysql:host=localhost;dbname=ejemplo_pdo";
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
    }

    public function ejecutarSQLactualizacion($sql, $args)
    {
    }
}
