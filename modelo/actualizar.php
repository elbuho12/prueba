<?php
require_once("../controlador/class.conexion.php");
require_once("../controlador/class.consultas.php");
$id=$_GET['id'];
$titulo=$_POST['titulo'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$tarea=$_POST['tarea'];
$consulta=new Consultas();
$consulta->modificar($id,$titulo,$fecha,$hora,$tarea);
header('Location: ../mensaje.php')


?>