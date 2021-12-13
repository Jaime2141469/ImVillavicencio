<?php

$destinatario = 'gaes4javaweb@gmail.com';
//correo predeterminado para hacer el envio
$nombre = $_POST['nombre'];
$email = $_POST['email']; 
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Envidado desde la pagina Im Villavicencio";
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

mail($destinatario, "Contacto", $contenido);
header("Location:Correos.php");



?> 