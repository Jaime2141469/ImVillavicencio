<?php

    class Dao{

        public function registrarUsuario(Dto $Dto){

            $cnn = Conexion::getConexion();
            $mensaje = "";
            try {
                $query = $cnn->prepare("INSERT INTO usuarios VALUES (?,?,?,?,?)");
                $query -> bindParam(1, $Dto->getId());
                $query -> bindParam(2, $Dto->getNombre());
                $query -> bindParam(3, $Dto->getApellido());
                $query -> bindParam(4, $Dto->getUsuario());
                $query -> bindParam(5, $Dto->getContraseña());
                $query -> execute();
                $mensaje = "Usuario Registrado Bien";
            } catch (Exception $ex) {
                $mensaje = $ex->getMessage();
            }
            $cnn = null;
            return $mensaje;

        }

        public function obtenerUsuario($id){

            $cnn = Conexion::getConexion(); 
            $mensaje = "";
            try {
                $query = $cnn->prepare('SELECT * FROM usuarios WHERE Id = ?');
                $query -> bindParam(1, $id);
                $query -> execute();
                return $query -> fetch();                
            } catch (Exception $ex) {
                 echo 'Error'.$ex -> getMessage();
            }     
            $cnn = null;
            return $mensaje;
            
        }

        public function listarTodos(){
        
            $cnn = Conexion::getConexion();
            try{

                $listarUsuarios = "select * from usuarios";
                $query = $cnn->prepare($listarUsuarios);
                $query->execute();
                return $query-> fetchAll();                

            }catch (Exception $ex){

                echo 'Error'.$ex-> getMessage();                

            }
            
        }

    }

?>