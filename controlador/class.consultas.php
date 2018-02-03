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
	$filas=null;
	$modelo=new Conexion();
	$conectado=$modelo->recibir_conexion();
	$consulta="SELECT* FROM registro ORDER BY fecha, hora";
	$iniciandoconsulta=$conectado->prepare($consulta);
	$iniciandoconsulta->execute();
	while ( $resultados=$iniciandoconsulta->fetch()) {
		$filas[]=$resultados;
	}
	return $filas;
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