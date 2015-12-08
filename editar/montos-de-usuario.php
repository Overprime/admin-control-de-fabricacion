<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db = new Conexion();//clase de conexion
$sueldo= new Sueldo('',$_GET['/'],'','','','','','','','');//clase  Sueldo
$usuario= new Usuario($_GET['/'],'','','','','','','','','');//clase  Usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Montos de Usuario</title>
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
<div class="col-md-12">
<h2 class="text-success"><i class="fa fa-user fa-2x"></i>
<?php $usuario->Mostrar('nombres'); ?> 
<?php $usuario->Mostrar('apellidos'); ?>
</h2>
<hr>
</div>
</div>

<form action="../actualizar/montos-de-usuario.php"  method="POST">
<div class="row">
<div class="col-md-12">
<h1 class="text-primary" >BENEFICIOS</h1>
<hr>
</div>
</div>
<div class="row">

<input type="hidden"  name="idusuario" value="<?php echo $_GET['/']; ?>">

<div class="col-md-2">
<div class="form-group">
<label for="">VACACIONES %</label>
<input name="vacaciones"type="number" step="any" min="0" class="form-control"
 value="<?php $sueldo->Mostrar('vacaciones'); ?>">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label for="">GRATIFICACIÓN %</label>
<input name="gratificacion"type="number" step="any" min="0" class="form-control" value="<?php $sueldo->Mostrar('gratificacion'); ?>">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label for="">CTS %</label>
<input  name="cts" type="number" step="any" min="0" class="form-control" value="<?php $sueldo->Mostrar('cts'); ?>">
</div>
</div>

</div>

<div class="row">
<div class="col-md-12">
<h1 class="text-primary">APORTES</h1>
<hr>
</div>
</div>
<div class="row">

<div class="col-md-2">
<div class="form-group">
<label for="">ESSALUD %</label>
<input name="essalud" type="number" step="any" min="0" class="form-control" value="<?php $sueldo->Mostrar('essalud'); ?>">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label for="">SCTR PENSIÓN %</label>
<input  name="sctr_pension"type="number" step="any" min="0" class="form-control" value="<?php $sueldo->Mostrar('sctr_pension'); ?>">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label for="">SCTR SALUD %</label>
<input name="sctr_salud" type="number" step="any" min="0" class="form-control" value="<?php $sueldo->Mostrar('sctr_salud'); ?>">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label for="">SCTR VIDA %</label>
<input name="sctr_vida" type="number" step="any" min="0" class="form-control" value="<?php $sueldo->Mostrar('sctr_vida'); ?>">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label for="">SENATI %</label>
<input name="senati" type="number" step="any" min="0" class="form-control" value="<?php $sueldo->Mostrar('senati'); ?>">
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label for="">DESCANSO MÉDICO %</label>
<input  name="desc_medico" type="number" step="any" min="0"  class="form-control" value="<?php $sueldo->Mostrar('desc_medico'); ?>">
</div>
</div>

</div>


<div class="row">
<div class="col-md-12">
<button class="btn btn-block btn-primary btn-lg">ACTUALIZAR INFORMACIÓN</button>
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