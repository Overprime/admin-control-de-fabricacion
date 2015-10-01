<?php /* Smarty version 3.1.24, created on 2015-09-30 15:14:58
         compiled from "../estilos/templates/editar-crear-usuario-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6636560c34b24cd8b5_73615401%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e00be8eb7989faffb4a37b5126ea6d5bb6c1c42c' => 
    array (
      0 => '../estilos/templates/editar-crear-usuario-1.tpl',
      1 => 1443640496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6636560c34b24cd8b5_73615401',
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
  'unifunc' => 'content_560c34b2590a97_69921321',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c34b2590a97_69921321')) {
function content_560c34b2590a97_69921321 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6636560c34b24cd8b5_73615401';
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
<label>ACTIVAR CAMBIO DE FECHA</label>
<select name="permiso" class="form-control">
<option value="<?php echo $_smarty_tpl->tpl_vars['Permiso']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['Permiso']->value == 1) {?>
NO
 <?php } else { ?>
SI
<?php }?>
</option>
<option value="2">SI</option>
<option value="1">NO</option>
</select>
</div>	



<?php }
}
?>