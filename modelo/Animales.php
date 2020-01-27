<?php
    class Animales{
        private $numChip;
        private $nombre;
        private $edad;
        private $procedencia;
        private $genero;
        private $raza;
        private $foto;
        private $salud;
        private $descripcion;
        
        function __construct($numChip, $nombre, $edad, $genero, $foto, $descripcion)
        {
            $this->numChip = $numChip;
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->genero = $genero;
            $this->foto = $foto;
            $this->descripcion = $descripcion;
        }
        
        function getNumChip()
        {
            return $this->numChip;
        }

        function getNombre()
        {
            return $this->nombre;
        }

        function getEdad()
        {
            return $this->edad;
        }

        function getProcedencia()
        {
            return $this->procedencia;
        }

        function getGenero()
        {
            return $this->genero;
        }

        function getRaza()
        {
            return $this->raza;
        }

        function getFoto()
        {
            return $this->foto;
        }

        function getSalud()
        {
            return $this->salud;
        }

        function getDescripcion()
        {
            return $this->descripcion;
        }

        function setNumChip($numChip)
        {
            $this->numChip = $numChip;
        }

        function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        function setEdad($edad)
        {
            $this->edad = $edad;
        }

        function setProcedencia($procedencia)
        {
            $this->procedencia = $procedencia;
        }

        function setGenero($genero)
        {
            $this->genero = $genero;
        }

        function setRaza($raza)
        {
            $this->raza = $raza;
        }

        function setFoto($foto)
        {
            $this->foto = $foto;
        }

        function setSalud($salud)
        {
            $this->salud = $salud;
        }

        function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }



    }
?>