<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
?>
<!DOCTYPE html>
<html>
<head>
<title>CLASIFICACIÓN</title>
<meta charset="UTF-8">
<!--   CSS Y JS HEADER   -->
<?php $template->display('estilos.tpl'); ?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link type="text/css" href="css/style.css" rel="stylesheet" />

<!--   CSS Y JS DATATABLE   -->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="funcion/clasificacion.js"></script>
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

<!-- INICIO CONTENEDOR DEL FORMULARIO -->

<?php $template->display('crear-clasificacion.tpl'); ?>

<!-- FIN CONTENEDOR DEL FORMULARIO -->

<div class="row">
<div class="col-md-12">
<article id="contenido"></article>
</div>
</div>

</div>
</body>
</html>