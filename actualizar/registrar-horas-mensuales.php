<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Horastrabajo.php');

$horastrabajo=  new Horastrabajo($_POST['id'],'','','',$_POST['horasmensuales'],
	$_POST['costohora']);
$horastrabajo -> Actualizar();

 ?>