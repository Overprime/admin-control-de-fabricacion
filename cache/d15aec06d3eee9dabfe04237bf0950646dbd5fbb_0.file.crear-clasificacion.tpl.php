<?php /* Smarty version 3.1.24, created on 2015-10-01 09:40:24
         compiled from "../estilos/templates/crear-clasificacion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:270812478560d45d8e1c268_46258802%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd15aec06d3eee9dabfe04237bf0950646dbd5fbb' => 
    array (
      0 => '../estilos/templates/crear-clasificacion.tpl',
      1 => 1443709681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270812478560d45d8e1c268_46258802',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560d45d8e35738_16207487',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560d45d8e35738_16207487')) {
function content_560d45d8e35738_16207487 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '270812478560d45d8e1c268_46258802';
?>
<form action="../registrar/registrar-clasificacion.php" method="POST">
<div class="row">
<div class="col-md-12">
<h2 class="text-primary">REGISTRO DE CLASIFICACIONES:</h2>
<hr>
</div>
</div>


<div class="row">

<div class="col-md-4">

<div class="form-group">
<label>INGRESE EL NOMBRE DE LA CLASIFICACIÓN:</label>
<input type="text" name="descripcion" class="form-control" 
onchange="conMayusculas(this);"
required>
</div>

</div>

<div class="col-md-4">

<div class="form-group">
<label>INGRESE EL TIPO DE CLASIFICACIÓN:</label>
<select name="tipo" class="form-control" required>
<option value="">[SELECCIONAR]</option>
<option value="HE25">HE25</option>
<option value="HE35">HE35</option>
<option value="HE100">HE100</option>
<option value="REGULAR">REGULAR</option>
<option value="NINGUNO">NINGUNO</option>
</select>
</div>

</div>

</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<button class="btn btn-primary">Agregar Clasificación</button>
</div>
</div>
</div>

</form><?php }
}
?>