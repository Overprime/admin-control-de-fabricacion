<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db = new Conexion();//clase de conexion
$fecha = new Fecha($_SESSION['id'],'');//clase  fecha de progreso
$id=$_GET['/'];

/*Generar la consulta para obtener ot,proceso,clasificacion*/
$sql= $db->query("SELECT idhoras_trabajo,anio,mes,horas_mes,costo_horas_mn
 FROM horas_trabajo WHERE  idhoras_trabajo=$id");
while ($fila = mysqli_fetch_array($sql))
{
$Anio=$fila['anio'];
$Mes=$fila['mes'];
$Horas_mes=$fila['horas_mes'];
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizar Horas Mensuales</title>
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


<div class="row">
<div class="col-md-6">
<h2 class="text-success">ACTUALIZAR INFORMACIÓN:</h2>
<hr>
</div>
<div class="col-md-6">
<h2 class="text-right">
<a href="#modal-eliminar-horas" role="button" 
class="btn btn-danger btn-lg" data-toggle="modal">
<i class="fa fa-trash-o fa-2x"></i>
&nbsp;
ELIMINAR
</a>
</h2>
</div>
</div>

<form action="../actualizar/registrar-horas-mensuales.php" method="POST">
<div class="row">
<input type="hidden" name="id"  value="<?php echo $id; ?>">

<div class="col-md-1">
<div class="form-group">
<label>Año</label>
<input type="text" name="anio" class="form-control" value="<?php echo $Anio; ?>">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>Mes</label>
<input type="text" name="mes" class="form-control"
 value="
<?php 
if ($Mes=='01') {echo "ENERO";} else if ($Mes=='02') {echo "FEBRERO";}
else if ($Mes=='03') {echo "MARZO";} else if ($Mes=='04') {echo "ABRIL";}
else if ($Mes=='05') {echo "MAYO";} else if ($Mes=='06') {echo "JUNIO";}
else if ($Mes=='07') {echo "JULIO";} else if ($Mes=='08') {echo "AGOSTO";}
else if ($Mes=='09') {echo "SEPTIEMBRE";} else if ($Mes=='10') {echo "OCTUBRE";}
else if ($Mes=='11') {echo "NOVIEMBRE";} else if ($Mes=='12') {echo "DICIEMBRE";}
else {echo "NO EXISTE LA EDAD";}
?>"
>

</div>
</div>


<div class="col-md-2">
<div class="form-group">
<label>Horas Mensuales</label>
<input type="number" name="horasmensuales" class="form-control" 
value="<?php echo round($Horas_mes,3); ?>" 
 min="1"  step="any"   required>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>Costo por hora</label>
<input type="number" name="costohora" class="form-control" value="30" min="1"
step="any" required>
</div>
</div>

</div>

<div class="row">
<div class="col-md-12">
<button class="btn btn-primary">Actualizar Horas Mensuales</button>
</div>
</div>

</form>



<div class="row">
<div class="col-md-12">
<?php $template->display('footer.tpl'); ?>
</div>
</div>


</div>

<!-- inicio modal eliminar -->
<div class="modal fade" id="modal-eliminar-horas" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<p>Nota:Tenga en cuenta que si elimina este registro puede afectar
en los calculos del reporte consolidado. </p>
</div>
<div class="modal-footer">
<a href="../eliminar/creacion-de-horas-mensuales.php?/=<?php echo $id; ?>"
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

</body>
</html>

