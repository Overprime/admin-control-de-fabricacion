<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Usuario.php');


$usuario=  new Usuario($_GET['/'],'','','','','','','','','','');

$usuario -> Eliminar();

 ?>