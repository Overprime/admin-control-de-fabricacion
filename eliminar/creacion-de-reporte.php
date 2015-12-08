<?php 
include('../header.php');
$reporte = new Reporte($_GET['/'],'','','','','','','','','','',''); 

$reporte -> Eliminar();

 ?>