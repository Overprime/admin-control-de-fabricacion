<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Horastrabajo.php');

$fechaproceso=$_POST['anio'].$_POST['mes'];

$horastrabajo=  new Horastrabajo('',$_POST['anio'],$_POST['mes'],$fechaproceso,
	$_POST['horasmensuales'],'');
$horastrabajo -> Registrar();

 ?>