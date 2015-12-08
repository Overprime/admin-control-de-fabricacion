<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db = new Conexion();//clase de conexion
$fecha = new Fecha($_SESSION['id'],'');//clase  fecha de progreso
?>
<!DOCTYPE html>
<html>
<head>
<title>Usuario</title>
<meta charset="UTF-8">
<!--   CSS Y JS HEADER   -->
<?php $template->display('estilos.tpl'); ?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link type="text/css" href="css/style.css" rel="stylesheet" />

<!--   CSS Y JS DATATABLE   -->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="funcion/usuario.js"></script>
<!--    JQUERY    -->
<!--    FORMATO DE TABLAS -->  
<link type="text/css" href="css/demo_table.css" rel="stylesheet" /> 
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<!--    FORMATO DE TABLAS    -->

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
<h2 class="text-primary">REGISTRAR USUARIO</h2>
<hr>
</div>
</div>

<form action="../registrar/registrar-usuario.php"   method="POST">
<div class="row">

<div class="col-md-3">
<div class="form-group">
<label>NOMBRES:</label>
<input type="text" name="nombres" class="form-control" required
 onchange="conMayusculas(this);" >
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>APELLIDOS:</label>
<input type="text" name="apellidos" class="form-control" required 
 onchange="conMayusculas(this);" >
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>DNI:</label>
<input type="number" name="dni" min="1" class="form-control" required>
</div>
</div>
 
<div class="col-md-2">
<div class="form-group">
<label>TIPO:</label>
<select name="tipo" class="form-control" required>
<option value="">[SELECCIONAR]</option>
<option value="02">ADMIN</option>
<option value="03">USUARIO</option>
</select>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>ÁREA:</label>
<select name="area"  class="form-control" required="">
<option value="">[SELECCIONAR]</option>
<?php
$sql    = "SELECT idarea,descripcion FROM area order by descripcion";
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

</div>


<div class="row">
<div class="col-md-3">
<div class="form-group">
<button class="btn btn-primary">Registrar Ususario</button>
</div>
</div>
</div>

</form>

<div class="row">
<div class="col-md-12">
<article id="contenido"></article>
</div>
</div>

</div>
</body>
</html>