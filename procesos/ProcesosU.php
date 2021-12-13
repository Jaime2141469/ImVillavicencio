<?php
//print_r($_POST);
session_start();
require '../utilidades/conexion.php';
$cnn = Conexion::getConexion();
$usu = $_POST['usuario'];
$cont = $_POST['contraseña'];
$sentencia = $cnn -> prepare("SELECT * FROM usuarios WHERE Usuario = ? and Contraseña = ?");
$sentencia -> execute([$usu, $cont]);
$valor = $sentencia->fetch(PDO::FETCH_OBJ);

if ($valor===FALSE) {
    header('Location:../Usuarios.php');
}elseif ($sentencia->rowcount()==1) {
    $_SESSION['nombre'] = $valor->Usuario;
    header('Location:../PaginasU/pagina.php');
}

?>