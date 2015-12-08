<?php 
include('../header.php');
$procesos = new Procesos($_GET['/'],''); 

$procesos -> Eliminar();

 ?>