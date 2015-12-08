<?php 

include('../header.php');

$db      = new Conexion();
$link    = Conectarse();

$procesos = new Procesos($_POST['id'],$_POST['descripcion']); 

$procesos -> Actualizar();

?>