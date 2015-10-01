<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Sueldo.php');


$sueldo=  new Sueldo($_POST['idsueldo'],$_POST['idusuario'],'','','','','','','','');
$sueldo -> Eliminar();

 ?>