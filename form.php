<?php

$nombre = $_POST['name'];
$email = $_POST['email'];

// Cuerpo tentativo del mensaje
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

// Establecer destinatario y referencia del mensaje
$para = 'a.e.coronel.e@gmail.com';
$asunto = 'Este e-mail fue enviado desde la Web ITSE';

// Función que envía el mail con los datos establecidos en las variables previamente
mail($para, $asunto, utf8_decode($mensaje));

// Función que dirige al usuario a la dirección establecida
header('Location:index.html');



?>