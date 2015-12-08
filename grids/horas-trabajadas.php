<?php 
$query = "SELECT  'total de horas',sum(horashombre) as total 
from reporte as r
where usuario_idusuario=$_SESSION[id]  AND 
r.fechainicio=(SELECT fecha FROM fecha_trabajo where usuario_idusuario=$_SESSION[id])  AND r.estado='00'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed">
<thead>
<tr class="info t12">
<th>FECHA</th>
<th>HORAS  EL DIA DE HOY</th>
<th>HORAS PROMEDIO POR DIA</th>
<th>HORAS FALTANTES</th>
<th>HORAS EXTRAS</th>
</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="default t12">
<td><?php echo $fecha->Mostrar(); ?></td>
<td><?php echo $fila->total?></td>
<td>9.6</td>
<td style="text-align: center"><?php 
$reto=9.6-$fila->total; 
if ($reto<=0) {
echo "<label class='text-primary'>
RETO CUMPLIDO :D 
<i class='glyphicon glyphicon-ok-circle'></i></label>";
}
else { echo $reto; 
}
?>
</td>	

<td style="text-align: center">
<?php 
$extra=9.6-$fila->total; 
if ($extra<=0) {
echo abs($extra);
}
else
{
echo "0";
}
?>
</td>
</tr>
<?php
}
?>


</table>
</div>