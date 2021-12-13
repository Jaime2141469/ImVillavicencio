<?php

    class DtoA{

        private $id = 0;
        private $fecha = "";
        private $eps = "";
        private $fn_fech = "";

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

        public function getEps()
        {
                return $this->eps;
        }

        public function setEps($eps)
        {
                $this->eps = $eps;

                return $this;
        }

        public function getFn_fech()
        {
                return $this->fn_fech;
        }

        public function setFn_fech($fn_fech)
        {
                $this->fn_fech = $fn_fech;

                return $this;
        }
}

?>