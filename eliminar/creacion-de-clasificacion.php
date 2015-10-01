<?php 
include('../header.php');
$clasificacion = new Clasificacion($_GET['/'],'',''); 

$clasificacion -> Eliminar();

 ?>