<?php

    require '../ModeloDao/Dao.php';
    require '../ModeloDto/Dto.php';
    require '../utilidades/conexion.php';

    if (isset($_POST['registro'])) {
        
        $uDao = new Dao();
        $uDto = new Dto();
        $uDto -> setId($_POST['Id']);
        $uDto -> setNombre($_POST['nombre']);
        $uDto -> setApellido($_POST['apellido']);
        $uDto -> setUsuario($_POST['usuario']);
        $uDto -> setContraseña($_POST['contraseña']);

        $mensaje = $uDao->registrarUsuario($uDto);

        header("Location:../Registro.php?mensaje=".$mensaje);

    }

?>