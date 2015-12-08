<meta charset="UTF-8">
<script type="text/javascript" language="javascript"src="listado/usuario.js"></script>
<meta charset="UTF-8">
<?php
require_once('../../includes/bd/conexion.php');
$db    = new Conexion();
$query = "SELECT u.idusuario,concat(u.nombres,' ',u.apellidos)AS nombres,
u.dni,u.usuario,u.contrasena,
u.fecha_creacion,a.descripcion AS areas,
case u.estado
WHEN '00' then 'ACTIVO'
WHEN '01' THEN  'INACTIVO'
END  AS estados,
case u.tipo
WHEN '02' then 'ADMIN'
WHEN '03' THEN 'USUARIO'
END  AS tipos,
DATE_FORMAT(u.fecha_creacion,'%d/%m/%Y') AS fecha
from  usuario AS u  INNER JOIN  area AS a ON 
u.area_idarea=a.idarea ORDER BY u.nombres";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed" id="usuario">
<thead>
<tr class="success">
<th>ID</th>
<th>NOMBRES Y APELLIDOS</th>
<th>AREA</th>
<th>ESTADO</th>
<th>TIPO</th>
<th>FECHA DE CREACIÓN</th>
<th><a class="btn btn-primary t12" href="#"><i class="fa fa-cogs"></i></a></th>
<th><a class="btn btn-success t12" href="#"><i class="fa fa-usd"></i></a></th>
</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="default t12">
<td><?php echo $fila->idusuario ?></td>
<td><?php echo $fila->nombres?></td>
<td><?php echo $fila->areas ?></td>
<td><?php echo $fila->estados ?></td>
<td><?php echo $fila->tipos?></td>
<td><?php echo $fila->fecha?></td>
<td><a class="btn btn-primary t12" 
href="../editar/creacion-de-usuario?/=<?php echo $fila->idusuario ?>">
  <i class="fa fa-cogs"></i></a></td>
<td><a class="btn btn-success t12" 
href="../editar/montos-de-usuario?/=<?php echo $fila->idusuario ?>">
<i class="fa fa-usd"></i></a></td>

</tr>
<?php
}
?>


</table>
</div>