<?php
require_once("../controlador/class.conexion.php");
require_once("../controlador/class.consultas.php");
$titulo=$_POST["titulo"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];
$tarea=$_POST["tarea"];
$consulta=new Consultas();
$consulta->insertar($titulo,$fecha,$hora,$tarea);
//phpinfo();
header('Location: ../mensaje.php');

?>