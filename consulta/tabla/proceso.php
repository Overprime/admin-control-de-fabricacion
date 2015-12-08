<script type="text/javascript" language="javascript"src="listado/proceso.js"></script>
<meta charset="UTF-8">
<?php
require_once('../../includes/bd/conexion.php');
$db    = new Conexion();
$query = "SELECT idprocesos,descripcion FROM procesos  ORDER BY descripcion  ";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed" id="proceso">
<thead>
<tr class="success">
<th>ID</th>
<th>DESCRIPCIÓN</th>
<th width="10"><a class="btn btn-primary t10" href="#>">  <i class="fa fa-cogs"></i></a></th>
</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="default t12">
<td><?php echo $fila->idprocesos ?></td>
<td><?php echo $fila->descripcion   ?></td>
<td><a class="btn btn-primary t12" 
href="../editar/creacion-de-proceso?/=<?php echo $fila->idprocesos ?>">
  <i class="fa fa-cogs"></i></a></td>
</tr>
<?php
}
?>


</table>
</div>