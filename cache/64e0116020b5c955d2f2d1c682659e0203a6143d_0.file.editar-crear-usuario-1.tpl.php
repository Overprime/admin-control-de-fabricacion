<?php /* Smarty version 3.1.24, created on 2015-10-01 09:33:30
         compiled from "../estilos/templates/editar-crear-usuario-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:710018035560d443ad60915_33203294%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64e0116020b5c955d2f2d1c682659e0203a6143d' => 
    array (
      0 => '../estilos/templates/editar-crear-usuario-1.tpl',
      1 => 1443709691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '710018035560d443ad60915_33203294',
  'variables' => 
  array (
    'Id' => 0,
    'Nombres' => 0,
    'Apellidos' => 0,
    'Dni' => 0,
    'Estado' => 0,
    'Tipo' => 0,
    'Permiso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560d443ad760c4_48606485',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560d443ad760c4_48606485')) {
function content_560d443ad760c4_48606485 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '710018035560d443ad60915_33203294';
?>
<input type="hidden"  name="id"  value="<?php echo $_smarty_tpl->tpl_vars['Id']->value;?>
">



<div class="form-group">
<label>NOMBRES:</label>
<input type="text" name="nombres" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['Nombres']->value;?>
">
</div>	



<div class="form-group">
<label>APELLIDOS:</label>
<input type="text" name="apellidos" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['Apellidos']->value;?>
">
</div>	




<div class="form-group">
<label>DNI:</label>
<input type="text" name="dni" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['Dni']->value;?>
">
</div>	




<div class="form-group">
<label>ESTADO:</label>
<select name="estado" class="form-control">
<option value="<?php echo $_smarty_tpl->tpl_vars['Estado']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['Estado']->value == "00") {?>
 ACTIVO
 <?php } else { ?>
INACTIVO
<?php }?>
</option>
<option value="00">ACTIVO</option>
<option value="01">INACTIVO</option>
</select>
</div>	



<div class="form-group">
<label>TIPO:</label>
<select name="tipo" class="form-control">
<option value="<?php echo $_smarty_tpl->tpl_vars['Tipo']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['Tipo']->value == "02") {?>
ADMIN
 <?php } else { ?>
USUARIO
<?php }?>
</option>
<option value="02">ADMIN</option>
<option value="03">USUARIO</option>
</select>
</div>	




<div class="form-group">
<label>CAMBIO DE FECHA DE TRABAJO</label>
<select name="permiso" class="form-control">
<option value="<?php echo $_smarty_tpl->tpl_vars['Permiso']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['Permiso']->value == 1) {?>
DESACTIVADO
 <?php } else { ?>
ACTIVADO
<?php }?>
</option>
<option value="2">ACTIVAR</option>
<option value="1">DESACTIVAR</option>
</select>
</div>	



<?php }
}
?>