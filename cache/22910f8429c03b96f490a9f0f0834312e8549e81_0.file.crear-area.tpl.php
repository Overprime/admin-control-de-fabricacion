<?php /* Smarty version 3.1.24, created on 2015-09-30 14:06:41
         compiled from "../estilos/templates/crear-area.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28222560c24b1ebf287_96261913%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22910f8429c03b96f490a9f0f0834312e8549e81' => 
    array (
      0 => '../estilos/templates/crear-area.tpl',
      1 => 1443537972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28222560c24b1ebf287_96261913',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560c24b2037e09_27239091',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c24b2037e09_27239091')) {
function content_560c24b2037e09_27239091 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28222560c24b1ebf287_96261913';
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