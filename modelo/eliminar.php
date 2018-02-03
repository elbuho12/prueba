<?php 
require_once("../controlador/class.conexion.php");
require_once("../controlador/class.consultas.php");
$consulta=new Consultas;
$id=$_GET['id'];
$consulta->eliminar($id);
header('Location: ../mensaje.php');
?>