<?php

    class DaoA{

        public function registrarAfiliacion(DtoA $DtoA){

            $cnn = Conexion::getConexion();
            $mensaje = "";
            try {

            $query = $cnn -> prepare("INSERT INTO afiliaciones VALUES (?,?,?,?)");
            $query -> bindParam(1, $DtoA->getId());
            $query -> bindParam(2, $DtoA->getFecha());
            $query -> bindParam(3, $DtoA->getEps());
            $query -> bindParam(4, $DtoA->getFn_fech());
            $query -> execute();
            $mensaje = "Afiliacion registrada correctamente";

            }catch (Exception $ex) {

                $mensaje = $ex -> getMessage();
    
            }
            $cnn = null;
            return $mensaje;

        }

        public function obtenerAfiliaciones($id){

            $cnn = Conexion::getConexion();
            $mensaje = "";

            try{

                $query = $cnn -> prepare('SELECT * FROM afiliaciones WHERE Id = ?');
                $query ->bindParam(1, $id);
                $query -> execute();
                return $query -> fetch();

            }catch (Exception $ex){

                echo "Error".$ex -> getMessage();

            }
            $cnn = null;
            return $mensaje;

        }

        public function listarAfiliacion(){

            $cnn = Conexion::getConexion();
            try {

                $lista = "select * from afiliaciones";
                $query = $cnn -> prepare($lista);
                $query -> execute();
                return $query -> fetchAll();
                
            } catch (Exception $ex) {
                
                echo "Error".$ex -> getConexion();

            }

        }

    }

?>