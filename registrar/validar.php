<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Acceso.php');


$acceso =  new Acceso(addslashes($_POST['usuario']),addslashes($_POST['contrasena']));
$acceso -> Login();

 ?>