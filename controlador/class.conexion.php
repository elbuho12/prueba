<?php 

class Conexion
{
	
	public function recibir_conexion(){
try {
	$conexionDB= new PDO('mysql:host=localhost; dbname=registros', 'root','');
	
	
} catch (PDOException $e) {
	echo "Fallo de conexion: ".$e->getMessage();
	
}

return $conexionDB;	

}
}



?>