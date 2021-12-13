<?php

    class DaoE{

        public function registrarEmpleado(DtoE $DtoE){

            $cnn = Conexion::getConexion();
            $mensaje = "";
            try {
                $query = $cnn -> prepare("INSERT INTO empleados VALUES (?,?,?,?,?,?)");
                $query -> bindParam(1, $DtoE->getId());
                $query -> bindParam(2, $DtoE->getNombre());
                $query -> bindParam(3, $DtoE->getApellido());
                $query -> bindParam(4, $DtoE->getRol());
                $query -> bindParam(5, $DtoE->getUsuario());
                $query -> bindParam(6, $DtoE->getContraseña());
                $query -> execute();
                $mensaje = "Empleado Registrado Bien";
            } catch (Exception $ex) {
               $mensaje = $ex -> getMessage(); 
            }
            $cnn = null;
            return $mensaje;

        } 

        public function ObtenerEmpleado($id){

            $cnn = Conexion::getConexion();
            $mensaje = "";

            try {
                $query = $cnn -> prepare('SELECT * FROM empleados WHERE Id = ?');
                $query -> bindParam(1, $id);
                $query -> execute();
                return $query -> feth();
            } catch (Exception $ex) {
                echo 'Error'.$ex -> getMessage();
            }
            $cnn = null;
            return $mensaje;

        }

        public function listarEmpleados(){

            $cnn = Conexion::getConexion();
            try {
                $listarTodos = "select * from empleados";
                $query = $cnn->prepare($listarTodos);
                $query->execute();
                return $query -> fetchAll();
            }catch (Exception $ex) {
                echo 'Error'.$ex-> getConexion();
            }

        }

    }

?>