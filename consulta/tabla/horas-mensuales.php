<script type="text/javascript" language="javascript"src="listado/horas-mensuales.js"></script>
<meta charset="UTF-8">
<?php
require_once('../../includes/bd/conexion.php');
$db    = new Conexion();
$query = "SELECT idhoras_trabajo,anio,
case mes 
WHEN '01'  THEN 'ENERO'
WHEN '02'  THEN 'FEBRERO'
WHEN '03'  THEN 'MARZO'
WHEN '04'  THEN 'ABRIL'
WHEN '05'  THEN 'MAYO'
WHEN '06'  THEN 'JUNIO'
WHEN '07'  THEN 'JULIO'
WHEN '08'  THEN 'AGOSTO'
WHEN '09'  THEN 'SEPTIEMBRE'
WHEN '10'  THEN 'OCTUBRE'
WHEN '11'  THEN 'NOVIEMBRE'
WHEN '12'  THEN 'DICIEMBRE'
ELSE 'OTRO MES'
END AS mes
,horas_mes,costo_horas_mn FROM horas_trabajo  
ORDER BY anio ";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed" id="horas-mensuales">
<thead>
<tr class="success">
<th>ID</th>
<th>AÑO</th>
<th>MES</th>
<th>HORAS MENSUAL</th>
<th>COSTO POR HORA</th>
<th width="10"><a class="btn btn-primary t10" href="#>">  <i class="fa fa-cogs"></i></a></th>

</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="default t12">
<td><?php echo $fila->idhoras_trabajo ?></td>
<td><?php echo $fila->anio   ?></td>
<td><?php echo $fila->mes   ?></td>
<td><?php echo round($fila->horas_mes,2) ?></td>
<td><?php echo round($fila->costo_horas_mn,2)  ?></td>
<td><a class="btn btn-primary t12" 
href="../editar/creacion-de-horas-mensuales?/=<?php echo $fila->idhoras_trabajo ?>">
  <i class="fa fa-cogs"></i></a></td>

</tr>
<?php
}
?>


</table>
</div>