<?php
/*1. Obtener la descripción de la hora de inicio*/
$sql= $db->query("SELECT fecha,usuario_idusuario FROM fecha_trabajo WHERE 
usuario_idusuario=$_SESSION[id];");
while ($fila = mysqli_fetch_array($sql))
{
$Fecha=$fila['fecha'];
}




$query = "SELECT idreporte,concat(u.nombres)AS fullname,a.descripcion AS area,r.ot,r.horainicio,r.horafin,
horashombre,r.descripciontrabajo,DATE_FORMAT(r.fechainicio,'%d/%m/%Y') AS fecha,
p.descripcion as proceso,c.descripcion as clasificacion from reporte AS r  INNER JOIN usuario AS u ON 
r.usuario_idusuario=u.idusuario INNER JOIN  area AS a ON 
u.area_idarea=a.idarea INNER JOIN procesos AS p ON 
r.procesos_idprocesos=p.idprocesos INNER JOIN clasificacion AS c ON 
r.clasificacion_idclasificacion=c.idclasificacion 
WHERE  usuario_idusuario=$_SESSION[id] AND r.fechainicio='$Fecha'
ORDER BY r.horainicio";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed">
<thead>
<tr class="success t12">
<th>USUARIO</th>
<th>ÁREA</th>
<th>OT</th>
<th>H.INICIO</th>
<th>H.FIN</th>
<th>H.HOMBRES</th>
<th>DESCRIPCIÓN</th>
<th>FECHA</th>
<th>PROCESO</th>
<th>CLASIFICACION</th>
<th><a class="btn btn-primary t12" href="#"> <i class="fa fa-cogs"></i></a></th>
<th><a class="btn btn-danger t12" href="#"> <i class="fa fa-trash"></i></a></th>
</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="default t12">
<td><?php echo $fila->fullname ?></td>
<td><?php echo $fila->area?></td>
<td><?php echo $fila->ot ?></td>
<td><?php echo $fila->horainicio ?></td>
<td><?php echo $fila->horafin ?></td>
<td><?php echo $fila->horashombre ?></td>
<td><?php echo $fila->descripciontrabajo?></td>
<td><?php echo $fila->fecha ?></td>
<td><?php echo $fila->proceso ?></td>
<td><?php echo $fila->clasificacion ?></td>
<td><a class="btn btn-primary t12" 
href="../editar/creacion-de-reporte?/=<?php echo $fila->idreporte ?>">
  <i class="fa fa-cogs"></i></a></td>
  <td><a class="btn btn-danger t12" 
href="../eliminar/creacion-de-reporte?/=<?php echo $fila->idreporte ?>">
  <i class="fa fa-trash"></i></a></td>
</tr>
<?php
}
?>


</table>
</div>