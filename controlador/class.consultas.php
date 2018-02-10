<?php

class Consultas 
{
	
	function insertar($titulo,$fecha,$hora,$tarea)
	{
	$modelo=new Conexion();
    $conectado=$modelo->recibir_conexion();
	$consulta="INSERT INTO registro (titulo,fecha,hora,tarea) VALUES(:titulo,:fecha,:hora,:tarea)";
	$iniciandoconsulta=$conectado->prepare($consulta);
	$iniciandoconsulta->bindParam(':titulo',$titulo,PDO::PARAM_STR);
	$iniciandoconsulta->bindParam(':fecha',$fecha,PDO::PARAM_STR);
	$iniciandoconsulta->bindParam(':hora',$hora,PDO::PARAM_STR);
	$iniciandoconsulta->bindParam(':tarea',$tarea,PDO::PARAM_STR);
	if (!$iniciandoconsulta) {
		echo "Error al crear el registro";
	}
	else{
		$iniciandoconsulta->execute();
		echo "Registro registrado";
	}
	}

function mostrar()
{
	//$filas=null;
	$modelo=new Conexion();
	$conectado=$modelo->recibir_conexion();
	$tamaño_paginas=3;
	if(isset($_GET['pagina'])){
	if ($_GET['pagina']==1) {
		header("Location:index.php");
	}else{
		$pagina=$_GET['pagina'];
	}}else{
		$pagina=1;
	}
	$empezar_desde=($pagina-1)*$tamaño_paginas;
	
	$consulta="SELECT* FROM registro ORDER BY fecha, hora";
	$iniciandoconsulta=$conectado->prepare($consulta);
	$iniciandoconsulta->execute();
	$num_filas=$iniciandoconsulta->rowCount();
	$total_paginas=ceil($num_filas/$tamaño_paginas);
	$iniciandoconsulta->closeCursor();
	$consulta="SELECT* FROM registro ORDER BY fecha, hora LIMIT $empezar_desde,$tamaño_paginas";
	$iniciandoconsulta=$conectado->prepare($consulta);
	$iniciandoconsulta->execute();
	while ( $resultados=$iniciandoconsulta->fetch()) {
		$filas[]=$resultados;
	}
	return ['f'=>$filas,'t'=>$total_paginas];
}

function modificar($id,$titulo,$fecha,$hora,$tarea)
{
	$modelo=new Conexion();
	$conectado=$modelo->recibir_conexion();
	$consulta="UPDATE registro SET titulo=:titulo, fecha=:fecha, hora=:hora, tarea=:tarea WHERE id=:id";
	$iniciandoconsulta=$conectado->prepare($consulta);
	$iniciandoconsulta->bindParam(":id",$id,PDO::PARAM_INT);
	$iniciandoconsulta->bindParam(":titulo",$titulo,PDO::PARAM_STR);
	$iniciandoconsulta->bindParam(":fecha",$fecha,PDO::PARAM_STR);
	$iniciandoconsulta->bindParam(":hora",$hora,PDO::PARAM_STR);
	$iniciandoconsulta->bindParam(":tarea",$tarea,PDO::PARAM_STR);
	if (!$iniciandoconsulta) {
		echo "Error al actualizar registro";
	}
	else{
		$iniciandoconsulta->execute();
		echo "Actualizado registrado";
	}
}
 function eliminar($id)
 {
$modelo=new Conexion();
$conectado=$modelo->recibir_conexion();
$consulta="DELETE FROM registro WHERE id=:id";
$iniciandoconsulta=$conectado->prepare($consulta);
$iniciandoconsulta->bindParam(":id",$id,PDO::PARAM_INT);
$iniciandoconsulta->execute();
 }

}




?>
