<?php
$destino= "sales@bridgecomm.co";
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$Mensaje=$_POST["Mensaje"];
$contenido= "Nombre:" . $nombre ."\nCorreo" . $correo ."\nTelefono" . $telefono . "\nMensaje" . $Mensaje;

mail($destino, "contacto", $contenido);
header("Location:gracias.html");

?>


  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>
	  $(document).ready(function(){

   alert('Su mensaje fue enviado.');

});
	  
	 </script>