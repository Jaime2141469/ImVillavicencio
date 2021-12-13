<?php

    class DaoN{

        public function registarNovedad(DtoN $DtoN){

            $cnn = Conexion::getConexion();
            $mensaje = "";
            try {
                $query = $cnn -> prepare("INSERT INTO novedades VALUES (?,?,?,?,?)");
                $query -> bindParam(1,  $DtoN->getId());
                $query -> bindParam(2,  $DtoN->getFecha());
                $query -> bindParam(3,  $DtoN->getMotivo());
                $query -> bindParam(4,  $DtoN->getSolicitante());
                $query -> bindParam(5,  $DtoN->getDescripcion());
                $query -> execute();
                $mensaje = "Novedad registrada correctamente";

            } catch (Exception $ex) {

                $mensaje = $ex -> getMessage();
                
            }   
            $cnn = null;
            return $mensaje;
        }

        public function ObtenerNovedad($id){

            $cnn = Conexion::getConexion();
            $mensaje = "";

            try {
                
                $query = $cnn -> prepare('SELECT * FROM novedades WHERE Id = ?');
                $query -> bindParam(1, $id);
                $query -> execute();
                return $query -> feth();

            } catch (Exception $ex) {
                
                echo 'Error'.$ex -> getMessage();

            }
            $cnn = null;
            return $mensaje;
        }

        public function listarNovedad(){

            $cnn = Conexion::getConexion();
            try {
                $listar = "select * from novedades";
                $query = $cnn -> prepare($listar);
                $query -> execute();
                return $query -> fetchAll();
            } catch (Exception $ex) {
                echo 'Error'.$ex-> getConexion();
            }

        }

    }

?>