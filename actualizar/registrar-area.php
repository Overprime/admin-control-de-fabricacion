<?php 

include('../header.php');

$db      = new Conexion();
$link    = Conectarse();

$area = new Area($_POST['id'],$_POST['area']); 

$area -> Actualizar();

?>