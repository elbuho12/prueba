<?php
function cargar()
{



	$consulta=new Consultas;
	$filas=$consulta->mostrar();
	if ($filas==NULL) {
		echo "<h2>Agregar registros</h2>";
	}else{

		foreach ($filas as $fila) {
			echo "<script>";
			echo "$(document).ready(function() {";
			echo "$('#actualiza".$fila['id']." a').click(function(){";
			echo "var titulo=escape('".$fila['titulo']."');";
			echo "var tarea=escape('".$fila['tarea']."');";			
			echo "$('#contenidos_externos').load('actualizando.php?id=".$fila['id']."&titulo='+titulo+'&fecha=".$fila['fecha']."&hora=".$fila['hora']."&tarea='+tarea);";

			echo "return false;";
			echo "});";
			echo "});";
			echo "</script>";
		}

	echo "<table style='text-align:center; margin: 0 auto;'>";
	foreach ($filas as $fila) {
	echo "<tr><td>ID: ".$fila['id'] ."</td>
	<td>TITULO: ".$fila['titulo']."</td></tr>
	<tr><td>FECHA: ".$fila['fecha']."</td>
	<td>HORA: ".$fila['hora']."</td></tr>
	<tr><td>TAREA: ".$fila['tarea']."</td></tr><tr><td><button id='actualiza".$fila['id']."'><a href='actualizando.php?id=".$fila['id']."&titulo=".$fila['titulo']."&fecha=".$fila['fecha']."&hora=".$fila['hora']."&tarea=".$fila['tarea']."'>actualizar</a></button></td><td><button><a href='modelo/eliminar.php?id=".$fila['id']."'>Eliminar</a></button></td></tr>";

	}	
	echo "</table>";
	
}

	
}
	
		

?>