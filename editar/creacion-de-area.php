<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db = new Conexion();//clase de conexion
$fecha = new Fecha($_SESSION['id'],'');//clase  fecha de progreso
$id=$_GET['/'];

/*Generar la consulta para obtener ot,proceso,clasificacion*/
$sql= $db->query("SELECT idarea,descripcion FROM area WHERE  idarea=$id");
while ($fila = mysqli_fetch_array($sql))
{
$Area=$fila['descripcion'];
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizar Área</title>
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
<form action="../actualizar/registrar-area.php" method="POST">


<div class="row">

<div class="col-md-6">

<h2 class="text-success">ACTUALIZAR INFORMACIÓN:</h2>
<hr>

<div class="form-group">

<input type="hidden" name="id" value="<?php echo $id; ?>">
<label>NOMBRE DE ÁREA:</label>
<input type="text" name="area" class="form-control" value="<?php echo $Area; ?>"
onchange="conMayusculas(this);" required>
</div>

<div class="form-group">
<button class="btn btn-success">Actualizar Área</button>
</div>



</div>

<div class="col-md-6">
<h2 class="text-right">

<a href="#modal-eliminar-area" role="button" 
class="btn btn-danger btn-lg" data-toggle="modal">
<i class="fa fa-trash-o fa-2x"></i>
&nbsp;
ELIMINAR
</a>

</h2>

<!-- inicio modal eliminar -->
<div class="modal fade" id="modal-eliminar-area" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-danger" id="myModalLabel">
ELIMINAR ÁREA
</h4>
</div>
<div class="modal-body">
<p>Nota:Tenga en cuenta que, si ya ha registrado algún usuario con esta área no podra
eliminarla.</p>
<p>La solución es eliminar al usuario registrado con esta área.</p>

</div>
<div class="modal-footer">
<a href="../eliminar/creacion-de-area.php?/=<?php echo $id; ?>"
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

