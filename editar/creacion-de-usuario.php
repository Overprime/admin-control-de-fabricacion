<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db = new Conexion();//clase de conexion
$fecha = new Fecha($_SESSION['id'],'');//clase  fecha de progreso
$id=$_GET['/'];

/*Generar la consulta para obtener ot,proceso,clasificacion*/
$sql= $db->query("SELECT u.idusuario,u.nombres,u.apellidos,u.dni,u.estado,u.tipo,
u.area_idarea,a.descripcion,a.idarea,u.permiso FROM usuario as u INNER JOIN area as a  ON 
u.area_idarea=a.idarea WHERE  idusuario=$id");
while ($fila = mysqli_fetch_array($sql))
{
$Nombres=$fila['nombres'];
$Apellidos=$fila['apellidos'];
$Dni=$fila['dni'];
$Estado=$fila['estado'];
$Tipo=$fila['tipo'];
$Area=$fila['descripcion'];
$Idrea=$fila['idarea'];
$Permiso=$fila['permiso'];

}


$template->assign(array('Id'=>$id,'Nombres'=>$Nombres,'Apellidos'=>$Apellidos,
'Dni'=>$Dni,'Estado'=>$Estado,'Tipo'=>$Tipo,'Sueldo'=>$Sueldo));

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizar Usuario</title>
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
<form action="../actualizar/registrar-usuario.php" method="POST">
<div class="col-md-4">
<div class="list-group">
<a href="#" class="list-group-item active">DATOS USUARIO</a>
<div class="list-group-item">

<?php $template->display('editar-crear-usuario-1.tpl'); ?>

<div class="form-group">
<label>ÁREA</label>
<select name="area"  class="form-control" required="">
<option value="<?php echo $Idrea; ?>"><?php echo $Area; ?></option>
<?php
$sql    = "SELECT idarea,descripcion FROM area  WHERE idarea NOT LIKE '$Idrea'
order by descripcion";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
echo "<option value=\"{$row['idarea']}\">";
echo $row['descripcion'];
echo "</option>";
}
?>
</select>
</div>

</div>
<a class="list-group-item">
<button class="btn btn-primary ">ACTUALIZAR</button>

</a>
</div>
</div>
</form>

<div class="col-md-8">
<div class="list-group">
<a href="#modal-eliminar-usuario" role="button" 
data-toggle="modal" class="list-group-item active">
<span class="badge">AGREGAR NUEVO SUELDO
</span>LISTA DE SUELDOS
</a>

</div>

<?php 
$query = "SELECT idsueldos_usuario,usuario_idusuario,sueldo_basico,bonificacion,
asignacion_familiar,bono_puntualidad,anio,mes,fecha_proceso
FROM sueldos_usuario WHERE usuario_idusuario='$id'  ORDER BY fecha_proceso desc";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed">
<thead>
<tr class="info t12">
<th>AÑO</th>
<th>MES</th>
<th>SUELDO BÁSICO</th>
<th>BONIFICACIÓN</th>
<th>ASIGNACIÓN FAMILIAR</th>
<th>BONO PUNTUALIDAD</th>
<th>SUELDO  TOTAL</th>
<th><a href="#" class="btn btn-primary"><i class="fa fa-cogs"></i></a></th>
<th><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></th>
</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<?php 
$txta ='modal-containera-';
$txtxa='#modal-containera-';
$txta .=$j;
$txtxa=$txtxa.=$j;

$txt ='modal-container-';
$txtx='#modal-container-';
$txt .=$i;
$txtx=$txtx.=$i;
?>
<tr class="default t12">

<td><?php echo $fila->anio;?></td>
<td>
<?php 
if      ($fila->mes=='01') { echo "ENERO"; } 
elseif ($fila->mes=='02') {echo "FEBRERO";}
elseif ($fila->mes=='03') {echo "MARZO";} 
elseif ($fila->mes=='04') {echo "ABRIL";}
elseif ($fila->mes=='05') {echo "MAYO";} 
elseif ($fila->mes=='06') {echo "JUNIO";}
elseif ($fila->mes=='07') {echo "JULIO";} 
elseif ($fila->mes=='08') {echo "AGOSTO";} 
elseif ($fila->mes=='09') {echo "SEPTIEMBRE";}
elseif ($fila->mes=='10') {echo "OCTUBRE";}
elseif ($fila->mes=='11') {echo "NOVIEMBRE";}
elseif ($fila->mes=='12') {echo "DICIEMBRE";}
else {echo "error";}
?>
</td>
<td><?php echo round($fila->sueldo_basico,2);?></td>
<td><?php echo round($fila->bonificacion,2);?></td>
<td><?php echo round($fila->asignacion_familiar,2);?></td>
<td><?php echo round($fila->bono_puntualidad,2);?></td>
<td>
<?php echo
$fila->sueldo_basico+$fila->bonificacion+
$fila->asignacion_familiar+$fila->bono_puntualidad;
?>
</td>
<td>
<a id="modal-899574" href='<?php echo $txtxa;?>'
role="button" class="btn btn-primary" data-toggle="modal">
<i class="fa fa-cogs"></i></a>
</td>
<td>
<a id="modal-899574" href='<?php echo $txtx;?>'
role="button" class="btn btn-danger" data-toggle="modal">
<i class="fa fa-trash"></i></a>
</td>


<!-- INICIO MODAL ACTUALIZAR -->

<form action="../actualizar/registrar-sueldo.php"  method="POST" >

<div class="modal fade" id="<?php echo $txta;?>" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-primary" id="myModalLabel">
ACTUALIZAR INFORMACIÓN
</h4>
</div>
<div class="modal-body">
<?php 
$template->assign(array('Sueldo'=>round($fila->sueldo_basico,2),
	'Bonificacion'=>round($fila->bonificacion,2),
	'Familiar'=>round($fila->asignacion_familiar,2),
	'Bono'=>round($fila->bono_puntualidad,2),
	'Mes'=>$fila->mes,'Anio'=>$fila->anio,'Idsueldo'=>$fila->idsueldos_usuario,
	'Id'=>$id));
$template->display('actualizar-sueldo.tpl');
 ?>


</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary">
Actualizar Información
</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
Cerrar
</button> 

</div>
</div>

</div>

</div>
</form>
<!-- FIN MODAL ACTUALIZAR -->



<!-- INICIO MODAL ELIMINAR -->



<div class="modal fade" id="<?php echo $txt;?>" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-danger" id="myModalLabel">
ELIMINAR REGISTRO
</h4>
</div>
<!--  
<div class="modal-body">

</div>
-->
<div class="modal-footer">
<form method="POST" action="../eliminar/creacion-de-sueldo.php">
<input type="hidden" name="idusuario"  value="<?php echo $id;?>" >
<input type="hidden" name="idsueldo"
value="<?php echo  $fila->idsueldos_usuario; ?>"/>
<button type="submit" class="btn btn-danger">
Eliminar Registro
</button>
</form>

<button type="button" class="btn btn-default" data-dismiss="modal">
Cerrar
</button> 

</div>
</div>

</div>

</div>

<!-- FIN MODAL ELIMINAR -->


</tr>
<?php
$j=$j+1;
$i=$i+1; 
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

<!-- inicio modal eliminar -->
<form action="../registrar/registrar-sueldo" method="POST">
<div class="modal fade" id="modal-eliminar-usuario" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-primary" id="myModalLabel">
AGREGAR SUELDO
</h4>
</div>
<div class="modal-body">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="hidden" name="tipo" value="03">
<?php $template->display('crear-sueldo.tpl'); ?>
</div>
<div class="modal-footer">

<button type="submit" class="btn btn-primary">
Agregar
</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
Cerrar
</button> 

</div>
</div>

</div>

</div>
</form>
<!-- fin modal eliminar -->


</html>


