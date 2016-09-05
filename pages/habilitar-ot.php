<?php include('../header.php'); 
$template = new Smarty(1);//template 
$link       = Conectarse();//clase de conexion
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Habilitar Ot</title>
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
<h2 class="text-success">Lista de Ot Activas Servicios:</h2>
<hr>
<?php include('../grids/habilitar-ot.php'); ?>
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