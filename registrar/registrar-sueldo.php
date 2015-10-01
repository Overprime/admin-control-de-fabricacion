<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Sueldo.php');

$Fechaproceso=$_POST['anio'].$_POST['mes'];



$sueldo=  new Sueldo('',$_POST['id'],$_POST['tipo'],$_POST['sueldo'],
	$_POST['bonificacion'],$_POST['familiar'],$_POST['bono'],
	$_POST['anio'],$_POST['mes'],$Fechaproceso);
$sueldo -> Registrar();

 ?>