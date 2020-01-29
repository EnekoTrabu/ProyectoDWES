<?php

interface IDataBase
{

    public function conectar();

    public function desconectar();

    public function ejecutarSQL($sql);

    public function ejecutarSQLactualizacion($sql, $args);
}
