<?php

class DataBase implements IDataBase
{
    private $conexion;


    /**
     * conectar.
     *
     * @author	Eneko Trabudua <etrabudua5@gmail.com>
     * @since	v0.0.1
     * 
     * Conecta a nuestra BBDD
     * 
     * @version	v1.0.0	Thursday, February 13th, 2020.
     * @access	public
     */
    public function conectar()
    {

        try {

            $datos = "mysql:host=localhost;dbname=adoptamedb";
            $this->conexion = new PDO($datos, 'root', '');
            $this->conexion->exec("set names utf8");

            return $this->conexion;
        } catch (PDOException $error) {
            echo "<p>Error: " . $error->getMessage() . "</p>";
            exit();
        }
    }

    /**
     * desconectar.
     *
     * @author	Eneko Trabudua <etrabudua5@gmail.com>
     * @since	v0.0.1
     * 
     * Destruye el objeto PDO.
     * 
     * @version	v1.0.0	Thursday, February 13th, 2020.
     * @access	public
     * @return	void
     */
    public function desconectar()
    {
        $this->conexion = null;
    }


    /**
     * ejecutarSQL.
     *
     * @author	Eneko Trabudua <etrabudua5@gmail.com>
     * @since	v0.0.1
     * 
     * Ejecuta la consulta select que mandan por parámetro,
     * si no la puede ejecutar devulve el error
     * 
     * @version	v1.0.0	Thursday, February 13th, 2020.
     * @access	public
     * @param	mixed	$sql	
     */
    public function ejecutarSQL($sql)
    {
        try {
            $result = $this->conexion->query($sql);
            return $result;
        } catch (Exception $ex) {
            $error = $ex->getMessage();
            include "vistas/error.php";
            exit();
        }
    }

    /**
     * ejecutarSQLactualizacion.
     *
     * @author	Eneko Trabudua <etrabudua5@gmail.com>
     * @since	v0.0.1
     * @version	v1.0.0	Thursday, February 13th, 2020.
     * 
     * Ejecuta la consulta update que mandan por parámetro,
     * si no la puede ejecutar devulve el error
     * 
     * @access	public
     * @param	mixed	$sql 	
     * @param	mixed	$args	
     */
    public function ejecutarSQLactualizacion($sql, $args)
    {
        try {
            $result = $this->conexion->prepare($sql);
            $result->execute($args);
        } catch (PDOException $ex) {
            $error = $ex->getMessage();
            include "vistas/error.php";
            exit();
        }
    }

    /**
     * cantidadFilas.
     *
     * @author	Eneko Trabudua <etrabudua5@gmail.com>
     * @since	v0.0.1
     * @version	v1.0.0	Thursday, February 13th, 2020.
     * @access	public
     * @param	mixed	$result	
     * @return	mixed Devulve la cantidad de filas
     */
    public function cantidadFilas($result)
    {
        $filas = count($result);
        return $filas;
    }
}
