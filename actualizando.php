<!DOCTYPE html>
<html>
<head>
	<title>Prueba PHP</title>
</head>
<body>
<?php
$id=$_GET['id'];
$titulo=$_GET['titulo'];
$fecha=$_GET['fecha'];
$hora=$_GET['hora'];
$tarea=$_GET['tarea'];


echo "<form action='modelo/actualizar.php?id=".$id."' method='post'>";
echo "<div>";
echo "<label>Titulo:</label>";
echo "<input type='text' name='titulo' value='".$titulo."'>";
echo "</div>";
echo "<div>";
echo "<label>Fecha:</label>";
echo "<input type='date' name='fecha' value='".$fecha."'>";
echo "</div>";	
echo "<div>";
echo "<label>Hora:</label>";	
echo "<input type='time' name='hora' value='".$hora."'>";
echo "</div>";
echo "<div>";	
echo "<label>Tarea:</label>";		
echo "<textarea name='tarea'>".$tarea."</textarea>";		
echo "</div>";	
echo "<div>";	
echo "<button type='submit'>Enviar</button>";		
echo "</div>";	
echo "</form>";	

?>
</body>
</html>