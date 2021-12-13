<?php

    require '../ModeloDao/DaoN.php';
    require '../ModeloDto/DtoN.php';
    require '../utilidades/conexion.php';

    if (isset($_POST['registro3'])) {
        
        $uDaoN = new DaoN();
        $uDtoN = new DtoN();
        $uDtoN -> setId($_POST['Id']); 
        $uDtoN -> setFecha($_POST['fecha']);
        $uDtoN -> setMotivo($_POST['motivo']);
        $uDtoN -> setSolicitante($_POST['solicitante']);
        $uDtoN -> setDescripcion($_POST['descripcion']);

        $mensaje = $uDaoN ->registarNovedad($uDtoN);

        header("Location:../PaginasE/novedades.php?mensaje=".$mensaje);

    }

?>