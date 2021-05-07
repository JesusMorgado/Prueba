<?php
$destino= "itj.18469@gmail.com"
$nombre= $_POST["Nombre"];
$correo= $_POST["Correo"];
$telefono= $_POST["Telefono"];
$mensaje= $_POST["Mensaje"];
$contenido = "Nombre: ".$nombre."\n Correo:".$correo."\n Telefono:".$telefono."\n Mensaje:".$mensaje;

$header = "From: jesus8hato@gmail.com" . "\r\n";
$header.= "Reply-To: jesus8hato@gmail.com" . "\r\n";
$header.= "X-Mailer: PHP/". phpversion();

mail($destino,"Contacto",$contenido,$header);
header("Location: gracias.html");

?>
