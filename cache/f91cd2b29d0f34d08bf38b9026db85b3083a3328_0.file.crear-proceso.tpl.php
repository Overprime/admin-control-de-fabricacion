<?php /* Smarty version 3.1.24, created on 2015-10-01 09:40:27
         compiled from "../estilos/templates/crear-proceso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1705496973560d45db396096_64320164%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f91cd2b29d0f34d08bf38b9026db85b3083a3328' => 
    array (
      0 => '../estilos/templates/crear-proceso.tpl',
      1 => 1443709681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705496973560d45db396096_64320164',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560d45db3a34a0_60549889',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560d45db3a34a0_60549889')) {
function content_560d45db3a34a0_60549889 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1705496973560d45db396096_64320164';
?>
<form action="../registrar/registrar-proceso.php" method="POST">

<div class="col-md-4">

<h2 class="text-primary">REGISTRO DE PROCESO:</h2>
<hr>

<div class="form-group">
<label>INGRESE EL NOMBRE DEL PROCESO:</label>
<input type="text"  name="descripcion"  class="form-control" autofocus
onchange="conMayusculas(this);" required>
</div>

<div class="form-group">
<button class="btn btn-primary">Agregar Proceso</button>
</div>
</div>

</form><?php }
}
?>