<?php
$destino = "culturizateBG5@gmail.com";
$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$telefono = $_POST["Telefono"];
$mensaje = $_POST["Mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo " . $correo . "\nTeléfono " . $telefono . "\Mensaje " .$mensaje;
mail($destino, "Contacto", $contenido);
header("Location:gra.html")
?>