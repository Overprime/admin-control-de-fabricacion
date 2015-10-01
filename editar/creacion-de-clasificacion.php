<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db = new Conexion();//clase de conexion
$fecha = new Fecha($_SESSION['id'],'');//clase  fecha de progreso
$id=$_GET['/'];

/*Generar la consulta para obtener ot,proceso,clasificacion*/
$sql= $db->query("SELECT idclasificacion,descripcion,tipo FROM clasificacion 
	WHERE  idclasificacion=$id");
while ($fila = mysqli_fetch_array($sql))
{
$Descripcion = $fila['descripcion'];
$Tipo        = $fila['tipo'];
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizar Clasificación</title>
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

<!-- CUERPO DEL FORMULARIO -->
<form action="../actualizar/registrar-clasificacion.php" method="POST">

<div class="row">
<div class="col-md-12">

<h2 class="text-success">ACTUALIZAR INFORMACIÓN:</h2>
<hr>

</div>
</div>


<div class="row">

<div class="col-md-4">

<div class="form-group">

<input type="hidden" name="id" value="<?php echo $id; ?>">
<label>NOMBRE DE CLASIFICACIÓN:</label>
<input type="text" name="descripcion" class="form-control" value="<?php echo $Descripcion; ?>"
onchange="conMayusculas(this);" required>

</div>

<div class="form-group">
<button class="btn btn-success">Actualizar Información</button>
</div>

</div>

<div class="col-md-4">
<div class="form-group">
<label>INGRESE EL TIPO DE CLASIFICACIÓN:</label>
<select name="tipo" class="form-control" required>
<option value="<?php echo $Tipo; ?>"><?php echo $Tipo; ?></option>
<option value="HE25">HE25</option>
<option value="HE35">HE35</option>
<option value="HE100">HE100</option>
<option value="REGULAR">REGULAR</option>
<option value="NINGUNO">NINGUNO</option>
</select>
</div>
</div>


<div class="col-md-4">
<h2 class="text-right">

<a href="#modal-eliminar-clasificacion" role="button" 
class="btn btn-danger btn-lg" data-toggle="modal">
<i class="fa fa-trash-o fa-2x"></i>
&nbsp;
ELIMINAR
</a>

</h2>

<!-- inicio modal eliminar -->
<div class="modal fade" id="modal-eliminar-clasificacion" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-danger" id="myModalLabel">
ELIMINAR CLASIFICACIÓN
</h4>
</div>
<div class="modal-body">
<p>Nota:Tenga en cuenta que, si ya se ha registrado un reporte  con esta clasificacion
no se puede eliminar.</p>
<p>La solución es eliminar el reporte o los reportes con esta clasificación.</p>

</div>
<div class="modal-footer">
<a href="../eliminar/creacion-de-clasificacion.php?/=<?php echo $id; ?>"
class="btn btn-danger"
 >ELIMINAR</a>
<button type="button" class="btn btn-default" data-dismiss="modal">
Cerrar
</button> 
</div>
</div>

</div>

</div>

<!-- fin modal eliminar -->

</div>

</div>
</form>

<div class="row">
<div class="col-md-12">
<?php $template->display('footer.tpl'); ?>
</div>
</div>
</div>

</body>
</html>

