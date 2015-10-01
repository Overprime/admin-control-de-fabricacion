<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Sueldo.php');


$sueldo=  new Sueldo($_POST['idsueldo'],$_POST['idusuario'],'',$_POST['sueldo'],
	$_POST['bonificacion'],$_POST['familiar'],
	$_POST['bono'],'','','');
$sueldo -> Actualizar();

 ?>