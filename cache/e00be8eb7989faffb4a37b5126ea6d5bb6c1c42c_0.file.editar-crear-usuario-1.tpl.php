<?php /* Smarty version 3.1.24, created on 2015-10-02 11:57:14
         compiled from "../estilos/templates/editar-crear-usuario-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6708560ea95a388ca6_03588966%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e00be8eb7989faffb4a37b5126ea6d5bb6c1c42c' => 
    array (
      0 => '../estilos/templates/editar-crear-usuario-1.tpl',
      1 => 1443801432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6708560ea95a388ca6_03588966',
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
  'unifunc' => 'content_560ea95a57b363_46043162',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560ea95a57b363_46043162')) {
function content_560ea95a57b363_46043162 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6708560ea95a388ca6_03588966';
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