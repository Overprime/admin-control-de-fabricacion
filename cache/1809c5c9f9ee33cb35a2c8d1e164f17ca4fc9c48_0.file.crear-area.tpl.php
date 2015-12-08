<?php /* Smarty version 3.1.24, created on 2015-10-01 09:40:21
         compiled from "../estilos/templates/crear-area.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:868682619560d45d5cf5a78_88736545%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1809c5c9f9ee33cb35a2c8d1e164f17ca4fc9c48' => 
    array (
      0 => '../estilos/templates/crear-area.tpl',
      1 => 1443709681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '868682619560d45d5cf5a78_88736545',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560d45d5d0efe2_90808441',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560d45d5d0efe2_90808441')) {
function content_560d45d5d0efe2_90808441 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '868682619560d45d5cf5a78_88736545';
?>
<form action="../registrar/registrar-area.php" method="POST">

<div class="col-md-4">

<h2 class="text-primary">REGISTRO DE ÁREA:</h2>
<hr>

<div class="form-group">
<label>INGRESE EL NOMBRE DEL ÁREA:</label>
<input type="text"  name="area"  class="form-control" autofocus
onchange="conMayusculas(this);" required>
</div>

<div class="form-group">
<button class="btn btn-primary">Agregar área</button>
</div>
</div>

</form><?php }
}
?>