<?php
include('../header.php');

$db      = new Conexion();
$link    = Conectarse();

$sueldo= new Sueldo('',$_POST['idusuario'],'','','','','','','','');

$sueldo -> ActualizarMonto($_POST['vacaciones'],$_POST['gratificacion'],$_POST['cts'],
	$_POST['essalud'],$_POST['sctr_pension'],$_POST['sctr_salud'],$_POST['sctr_vida'],
$_POST['senati'],$_POST['desc_medico']);