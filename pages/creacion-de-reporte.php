<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db = new Conexion();//clase de conexion
$fecha = new Fecha($_SESSION['id'],'');//clase  fecha de progreso
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Creacion de Reporte</title>
<?php $template->display('meta.tpl'); ?>
<?php $template->display('estilos.tpl'); ?>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
// Parametros para el combo
$("#horainicio").change(function () {
$("#horainicio option:selected").each(function () {
elegido=$(this).val();
$.post("horas.php", { elegido: elegido }, function(data){
$("#horafin").html(data);
});     
});
});    
});
</script>

</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php $template->display('nav.tpl'); ?>
</div>
</div>
</div>

<div class="container-fluid">
<form action="../registrar/registrar-reporte.php" method="POST">
<div class="row">

<div class="col-md-2">
<div class="form-group">
<label>ORDEN  DE TRABAJO</label>
<select name="ot" class="form-control"required autofocus>
<option value="">[SELECCIONAR]</option>
<?php
$link=Conectarse();
$Sql="SELECT CODIGOOT FROM  [020BDCOMUN].DBO.CENCOSOT 
WHERE USUARIO in ('45')
AND
CODIGOOT  IN (SELECT OF_COD FROM [011BDCOMUN].dbo.ORD_FAB
WHERE OF_ESTADO ='ACTIVO') ORDER BY CODIGOOT;";
$result=mssql_query($Sql) or die(mssql_error());
while ($row=mssql_fetch_array($result)) {
?>
<option value ="<?php echo $row['CODIGOOT']?>"><?php echo $row['CODIGOOT']?></option>
<?php }?>
</select>
</div>
</div>

<div class="col-md-2">
<div class="form-group">	
<label>FECHA </label>
<input type="text"  name="fecha"class="form-control"  value="<?php $fecha ->Mostrar(); ?>"
readonly>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>HORA INICIO</label>
<select name="horainicio" id="horainicio" class="form-control" required="">
<option value="">[SELECCIONAR]</option>
<?php
$sql    = "SELECT  * FROM fechainicio";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
echo "<option value=\"{$row['valor']}\">";
echo $row['descripcion'];
echo "</option>";
}
?>
</select>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>HORA FIN</label>
<select class="form-control"  name="horafin" id="horafin" required>
</select>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>CLASIFICACIÓN</label>
<select name="clasificacion"  class="form-control" required="">
<option value="">[SELECCIONAR]</option>
<?php
$sql    = "SELECT  idclasificacion,descripcion FROM clasificacion
ORDER BY descripcion";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
echo "<option value=\"{$row['idclasificacion']}\">";
echo $row['descripcion'];
echo "</option>";
}
?>
</select>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>PROCESO</label>
<select name="proceso"  class="form-control" required="">
<option value="">[SELECCIONAR]</option>
<?php
$sql    = "SELECT  idprocesos,descripcion FROM procesos
ORDER BY descripcion";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
echo "<option value=\"{$row['idprocesos']}\">";
echo $row['descripcion'];
echo "</option>";
}
?>
</select>
</div>
</div>

</div>

<div class="row">

<div class="col-md-9">
<div class="form-group">
<label>DETALLE DE TRABAJO</label>
<textarea name="detalle" class="form-control"  rows="3"  
placeholder="INGRESE EL DETALLE DEL TRABAJO" required  
onchange="conMayusculas(this);" >
</textarea>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>&nbsp;</label>
<button class="btn btn-primary btn-lg btn-block">AGREGAR</button>
</div>
</div>

</div>

</form>

</div>


<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- CONSULTA DE REPORTES -->
<?php include('../grids/creacion-de-reporte.php'); ?>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<!-- CONSULTA DE REPORTES -->
<?php include('../grids/horas-trabajadas.php'); ?>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php $template->display('footer.tpl'); ?>
</div>
</div>
</div>
</body>
</html>