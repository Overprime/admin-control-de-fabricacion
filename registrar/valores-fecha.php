<?php 

include('../header.php');

$fecha = new Fecha($_SESSION['id'],$_POST['fecha']);

$fecha -> Fechatrabajo();

?>