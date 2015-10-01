<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Area.php');


$area=  new Area('',$_POST['area']);
$area -> Registrar();

 ?>