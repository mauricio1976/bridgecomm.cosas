<?php
$destino= "sales@bridgecomm.co";
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$Mensaje=$_POST["Mensaje"];
$contenido= "Nombre:" . $nombre ."\nCorreo" . $correo ."\nTelefono" . $telefono . "\nMensaje" . $Mensaje;
mail($destino, "contacto", $contenido);
if ($_POST[‘submit’]) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo “<script language=’javascript’>
alert(‘Mensaje enviado, muchas gracias.’);
window.location.href = ‘http://TUSITIOWEB.COM';
</script>”;
} else {
echo ‘Falló el envio';
}
}

?>