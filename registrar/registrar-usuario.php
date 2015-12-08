<?php 

include('../includes/bd/conexion.php');
include('../includes/clases/Usuario.php');


$usuario=  new Usuario('',$_POST['nombres'],$_POST['apellidos'],$_POST['dni'],
	$_POST['dni'],$_POST['dni'],'',$_POST['tipo'],$_POST['area'],'');

$usuario -> Registrar();

 ?>