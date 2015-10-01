<?php 

include('../header.php');

$db      = new Conexion();
$link    = Conectarse();

$clasificacion = new CLasificacion($_POST['id'],$_POST['descripcion'],$_POST['tipo']); 

$clasificacion -> Actualizar();

?>