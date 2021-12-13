<?php

    class DtoN{

        private $id = 0;
        private $fecha = "";
        private $motivo = "";
        private $solicitante = "";
        private $descripcion = "";

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
 
        public function getFecha()
        {
                return $this->fecha;
        }

        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        public function getMotivo()
        {
                return $this->motivo;
        }

        public function setMotivo($motivo)
        {
                $this->motivo = $motivo;

                return $this;
        }

        public function getSolicitante()
        {
                return $this->solicitante;
        }
 
        public function setSolicitante($solicitante)
        {
                $this->solicitante = $solicitante;

                return $this;
        }

        public function getDescripcion()
        {
                return $this->descripcion;
        }

        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }
    }

?>