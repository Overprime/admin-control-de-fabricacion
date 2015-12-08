<?php 
include('header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(0);//template 
$conexion = new Conexion();//clase de conexion
$fecha = new Fecha($_SESSION['id'],'');//clase  fecha de progreso
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenidos</title>
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
<?php $template->display('home.tpl'); ?>
</div>

</div>

<div class="row">
<div class="col-md-12">
<?php $template->display('footer.tpl'); ?>
</div>
</div>
</div>

</body>
</html>

