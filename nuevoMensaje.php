<!DOCTYPE html>
<html>
<head>
	<title>Prueba PHP</title>
</head>
<body>
<form action="modelo/registro.php" method="post">
<div>
	<label>Titulo:</label>
	<input type="text" name="titulo">
</div>
<div>
	<label>Fecha:</label>
	<input type="date" name="fecha">
</div>
<div>
	<label>Hora:</label>
	<input type="time" name="hora">
</div>
	<div>
		<label>Tarea:</label>
		<textarea name="tarea"></textarea>
	</div>
	<div>
		<button type="submit">Enviar</button>
	</div>
	
</form>

</body>
</html>