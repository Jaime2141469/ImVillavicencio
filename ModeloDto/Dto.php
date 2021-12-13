<?php

    class Dto{

        private $id = 0;
        private $nombre = "";
        private $apellido = "";
        private $usuario = "";
        private $contraseña = "";

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getApellido()
        {
                return $this->apellido;
        }

        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        public function getUsuario()
        {
                return $this->usuario;
        }

        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }

        public function getContraseña()
        {
                return $this->contraseña;
        }

        public function setContraseña($contraseña)
        {
                $this->contraseña = $contraseña;

                return $this;
        }
    }

?>