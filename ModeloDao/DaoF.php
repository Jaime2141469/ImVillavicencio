<?php

    class DaoF{

        public function registrarFolio(DtoF $DtoF)
        {
            $cnn = Conexion::getConexion();
            $mensaje = "";

            try {
                
                $query = $cnn -> prepare("INSERT INTO folios VALUES(?,?,?,?)");
                $query -> bindParam(1, $DtoF->getId());
                $query -> bindParam(2, $DtoF->getNombre());
                $query -> bindParam(3, $DtoF->getNombre2());
                $query -> bindParam(4, $DtoF->getObservaciones());
                $query -> execute();
                $mensaje -> "Folio registrado Correctamente";

            } catch(Exception $ex) {
                
                $mensaje = $ex -> getMessage();

            }
            $cnn = null;
            return $mensaje;

        }

        public function obtenerFolio($id){

            $cnn = Conexion::getConexion();
            $mensaje = "";

            try {
                
                $query = $cnn

            } catch (\Throwable $th) {
                //throw $th;
            }

        }

    }

?>