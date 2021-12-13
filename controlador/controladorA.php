<?php

    require '../ModeloDao/DaoA.php';
    require '../ModeloDto/DtoA.php';
    require '../utilidades/conexion.php';

    if (isset($_POST['registro4'])) {
        
        $uDaoA = new DaoA();
        $uDtoA = new DtoA();
        $uDtoA -> setId($_POST['Id']);
        $uDtoA -> setFecha($_POST['fecha']);
        $uDtoA -> setEps($_POST['eps']);
        $uDtoA -> setFn_fech($_POST['fin']);

        $mensaje = $uDaoA -> registrarAfiliacion($uDtoA);

        header("Location:../PaginasE/novedades.php?mensaje=".$mensaje); 
    }

?>