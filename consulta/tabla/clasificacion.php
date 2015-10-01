<script type="text/javascript" language="javascript"src="listado/clasificacion.js"></script>
<meta charset="UTF-8">
<?php
require_once('../../includes/bd/conexion.php');
$db    = new Conexion();
$query = "SELECT idclasificacion,descripcion,tipo FROM clasificacion  ORDER BY descripcion  ";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed" id="clasificacion">
<thead>
<tr class="success">
<th>ID</th>
<th>DESCRIPCIÓN</th>
<th>TIPO</th>
<th width="10"><a class="btn btn-primary t10" href="#>">  <i class="fa fa-cogs"></i></a></th>
</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="default t12">
<td><?php echo $fila->idclasificacion ?></td>
<td><?php echo $fila->descripcion   ?></td>
<td><?php echo $fila->tipo   ?></td>
<td><a class="btn btn-primary t12" 
href="../editar/creacion-de-clasificacion?/=<?php echo $fila->idclasificacion ?>">
  <i class="fa fa-cogs"></i></a></td>
</tr>
<?php
}
?>


</table>
</div>