<?php

//print_r($_POST);
session_start();
require '../utilidades/conexion.php';
$cnn = Conexion::getConexion();
$usu = $_POST['usuario'];
$cont = $_POST['contraseña'];
$sentencia = $cnn -> prepare("SELECT * FROM empleados WHERE Usuario = ? and Contraseña = ?");
$sentencia ->execute([$usu, $cont]);
$valor = $sentencia->fetch(PDO::FETCH_OBJ);

if ($valor===FALSE) {
    header('Location:../Empleados.php');
}elseif ($sentencia->rowcount()==1) {
    $_SESSION['nombre'] = $valor->Usuario;
    header('Location:../PaginasE/empleado.php');
}

?>