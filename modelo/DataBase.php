<?php

class DataBase implements IDataBase
{
    private $conexion;


    public function conectar()
    {

        try {

            $datos = "mysql:host=localhost;dbname=ejemplo_pdo";
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
        //los select
        //Query
        $db = $this->conectar();

        if ($db->query($sql)) {
            echo "  <p>Registro creado correctamente.</p>\n";
        } else {
            echo "  <p>Error al crear el registro.<p>\n";
        }

        $this->desconectar();
    }

    public function ejecutarSQLactualizacion($sql, $args)
    {
        //insert, delete, update
        //prepare
        $db = $this->conectar();

        $result = $db->prepare($sql);
        $result->execute();
    }
}
