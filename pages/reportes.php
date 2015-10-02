<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db       = new Conexion();//clase de conexion
$Fechainicio    = $_POST['fechainicio'];//fecha  recibidad por post
$Fechafin    = $_POST['fechafin'];//fecha  recibidad por post
$date        = new DateTime($_POST['fecha']); 
$Fechaformato       = $date->format('d-m-Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Reporte Consolidado</title>
<?php $template->display('meta.tpl'); ?>
<?php $template->display('estilos.tpl'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php $template->display('nav.tpl'); ?>
</div>
</div>

<div class="row">
<div class="col-md-11">
<h1 class="text-success">REPORTE CONSOLIDADO</h1>
</div>
<div class="col-md-1">
<form action="/admin-control-de-fabricacion/includes/excel/generador-excel.php" 
method="post" target="_blank" id="FormularioExportacion">
<button class="btn btn-success botonExcel"  title="DESCARGAR ARCHIVO"id="#excel">
<i class="fa fa-file-excel-o fa-3x"></i>
</button>

<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

</div>
</div>

<div class="row">
<div class="col-md-12">
<?php
$query = "SELECT idreporte,concat(u.nombres,' ',u.apellidos)AS fullname,a.descripcion AS area,r.ot,r.horainicio,r.horafin,
horashombre,r.descripciontrabajo,DATE_FORMAT(r.fechainicio,'%d/%m/%Y') AS fecha,r.cencos,
p.descripcion as proceso,c.descripcion as clasificacion,
su.sueldo_basico AS  sueldobasico,
(su.sueldo_basico+su.bonificacion+su.asignacion_familiar+su.bono_puntualidad)as  'totalingreso',
((su.sueldo_basico+su.bonificacion+su.asignacion_familiar+su.bono_puntualidad)+(su.sueldo_basico * 47.01)/100) AS  sueldo2,
h.horas_mes as 'horasdetrabajo',
 (((su.sueldo_basico+su.bonificacion+su.asignacion_familiar+su.bono_puntualidad)+(su.sueldo_basico * 47.01)/100) / h.horas_mes) as 'regular',
  (((su.sueldo_basico+su.bonificacion+su.asignacion_familiar+su.bono_puntualidad)+(su.sueldo_basico * 47.01)/100) / h.horas_mes)*1.25 as 'he25',
    (((su.sueldo_basico+su.bonificacion+su.asignacion_familiar+su.bono_puntualidad)+(su.sueldo_basico * 47.01)/100) / h.horas_mes)*1.35 as 'he35',
      (((su.sueldo_basico+su.bonificacion+su.asignacion_familiar+su.bono_puntualidad)+(su.sueldo_basico * 47.01)/100) / h.horas_mes)*2 as 'he100',
      c.tipo as 'tipoclasificacion',h.costo_horas_mn
 from reporte AS r  INNER JOIN usuario AS u ON 
r.usuario_idusuario=u.idusuario INNER JOIN  area AS a ON 
u.area_idarea=a.idarea INNER JOIN procesos AS p ON  
r.procesos_idprocesos=p.idprocesos INNER JOIN clasificacion AS c ON 
r.clasificacion_idclasificacion=c.idclasificacion  INNER JOIN horas_trabajo as h
ON r.fecha_proceso=h.fecha_proceso  INNER JOIN  sueldos_usuario su on
r.usuario_idusuario=su.usuario_idusuario AND r.fecha_proceso=su.fecha_proceso
WHERE  r.fechainicio  BETWEEN  '$Fechainicio' AND '$Fechafin'
ORDER BY r.horastrabajo ";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed" id="Exportar_a_Excel" border="1">
<thead>
<tr   class="success t12">
<th>USUARIO</th>
<th>ÁREA TÉCNICO</th>
<th>OT</th>
<th>S. CENCOS</th>
<th>CENCOS</th>
<th>ÁREA CENCOS</th>
<th>H.INICIO</th>
<th>H.FIN</th>
<th>DESCRIPCIÓN</th>
<th>FECHA</th>
<th>PROCESO</th>
<th>CLASIFICACIÓN</th>
<th>H.HOMBRE</th>
<th>CU REAL</th>
<th>CT REAL</th>
<th>CU COMERCIAL</th>
<th>CT COMERCIAL</th>
</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="default t12">
<td  style="mso-number-format:'@'"><?php echo $fila->fullname ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->area?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->ot ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->cencos ?></td>
<td  style="mso-number-format:'@'">  
<?php 
if ($fila->cencos=="010101")
 {
   echo"010100";
 } 
else if ($fila->cencos="020101")
{
   echo "020100";
}
else
{
	echo "no registrado";
}
?>

</td>
<td  style="mso-number-format:'@'">
<?php 
if ($fila->cencos=="010101")
 {
   echo "EQUIPOS DE PRODUCCIÓN";
 } 
else if ($fila->cencos="020101")
{
   echo "EQUIPOS DE EXPLORACIÓN";
}
else
{
	echo "no registrado";
}
?>

</td>
<td                               ><?php echo $fila->horainicio ?></td>
<td                               ><?php echo $fila->horafin ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->descripciontrabajo?></td>
<td                               ><?php echo $fila->fecha ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->proceso ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->clasificacion ?></td>
<td                               ><?php echo $fila->horashombre ?></td>
<td style="mso-number-format:'0.00'">
<?php 
if($fila->tipoclasificacion=='REGULAR')
{
 echo round($fila->regular,3);
} 
else if ($fila->tipoclasificacion=='HE25')
{
 echo round($fila->he25,3);
} 
else if ($fila->tipoclasificacion=='HE35')
{
 echo round($fila->he35,3);
} 
else if ($fila->tipoclasificacion=='HE100')
{
 echo round($fila->he100,3);
} 
else
{
echo "no hay tipo";
}
?>
</td>

<td style="mso-number-format:'0.00'">
<?php 
if($fila->tipoclasificacion=='REGULAR')
{
 echo  round($fila->regular*$fila->horashombre,3);
} 
else if ($fila->tipoclasificacion=='HE25')
{
 echo  round($fila->he25*$fila->horashombre,3);
} 
else if ($fila->tipoclasificacion=='HE35')
{
 echo  round($fila->he35*$fila->horashombre,3);
} 
else if ($fila->tipoclasificacion=='HE100')
{
 echo  round($fila->he100*$fila->horashombre,3);
} 
else
{
echo "no hay tipo";
}
?>
</td>
<td style="mso-number-format:'0.00'"><?php echo round($fila->costo_horas_mn,3) ?></td>
<td style="mso-number-format:'0.00'"><?php echo round($fila->costo_horas_mn*$fila->horashombre,3) ?></td>
</tr>
<?php
}
?>


</table>
</div>

</div>
</div>


<div class="row">
<div class="col-md-12">
<?php $template->display('footer.tpl'); ?>
</div>
</div>
</div>

</body>
</html>

