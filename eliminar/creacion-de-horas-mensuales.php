<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Horastrabajo.php');

$horastrabajo=  new Horastrabajo($_GET['/'],'','','','','');
$horastrabajo -> Eliminar();

 ?>