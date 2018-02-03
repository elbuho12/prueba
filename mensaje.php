<?php
require_once("controlador/class.conexion.php");
require_once("controlador/class.consultas.php");
require_once("modelo/cargar.php");
?>
<!DOCTYPE html>
<html>
<head>
<script src="Jquery/jquery-3.1.1.min.js"></script>
<script>
$(document).ready(function() {

$("#nuevoMensaje a").click(function(){
	$("#contenidos_externos").load("nuevoMensaje.php");
	return false;
});
			
}); 
</script>



	<title>Mensajes</title>
</head>
<body>
<h1>Mensajes</h1>
<button id="nuevoMensaje"><a href="nuevoMensaje.php">Nuevo recordatorio</a></button>
<div id="contenidos_externos"></div>
<?php
cargar();
?>


</body>
</html>