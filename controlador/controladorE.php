<?php

    require '../ModeloDao/DaoE.php';
    require '../ModeloDto/DtoE.php';
    require '../utilidades/conexion.php';

    if (isset($_POST['registro2'])) {
        
        $uDaoE = new DaoE();
        $uDtoE = new DtoE();
        $uDtoE -> setId($_POST['Id']);
        $uDtoE -> setNombre($_POST['nombre']);
        $uDtoE -> setApellido($_POST['apellido']);
        $uDtoE -> setRol($_POST['rol']);
        $uDtoE -> setUsuario($_POST['usuario']);
        $uDtoE -> setContraseña($_POST['contraseña']);
        
        $mensaje = $uDaoE->registrarEmpleado($uDtoE);

        header("Location:../RegistroE.php?mensaje=".$mensaje);

    }

?>