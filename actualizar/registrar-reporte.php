<?php 

include('../header.php');

$db      = new Conexion();
$link    = Conectarse();

$Ot          = $_POST['ot'];
$Horainicio  = $_POST['horainicio'];
$Horafin     = $_POST['horafin'];
$date        = new DateTime($_POST['fecha']); 
$Fecha       = $date->format('Y-m-d');
$HorasTrabajo= $Horafin-$horainicio; 
$Horashombre = (floatval($Horafin)-floatval($Horainicio))/60;



/*1. Obtener el centro de costo de la ot*/
$sql="SELECT  CODIGOCENTROCOSTO,CODIGOOT
	FROM [020BDCOMUN].DBO.CENCOSOT  WHERE
	CODIGOOT IN (SELECT OF_COD FROM [011BDCOMUN].DBO.ORD_FAB
 WHERE OF_ESTADO='ACTIVO') AND CODIGOOT='$Ot'";
$result       =mssql_query($sql,$link);
if ($row      =mssql_fetch_array($result)) {
mssql_field_seek($result,0);
while ($field =mssql_fetch_field($result)) {
}do {
 $Cencos=$row['CODIGOCENTROCOSTO'];
} while ($row =mssql_fetch_array($result));
}else { 
echo "error";
} 


$reporte = new Reporte($_POST['id'],$Fecha,$DescHorainicio,$DescHorafin,
	$HorasTrabajo,$_POST['detalle'],$Horashombre,$Ot,$Cencos,$_SESSION['id'],
	$_POST['proceso'],$_POST['clasificacion']); 

$reporte -> Actualizar();

?>