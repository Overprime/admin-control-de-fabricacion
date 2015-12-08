<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Clasificacion.php');


$area=  new Clasificacion('',$_POST['descripcion'],$_POST['tipo']);
$area -> Registrar();

 ?>