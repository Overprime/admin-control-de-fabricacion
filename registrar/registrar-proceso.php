<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Procesos.php');


$procesos=  new Procesos('',$_POST['descripcion']);
$procesos -> Registrar();

 ?>