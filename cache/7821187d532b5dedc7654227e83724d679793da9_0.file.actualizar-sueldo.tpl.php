<?php /* Smarty version 3.1.24, created on 2015-09-30 20:12:17
         compiled from "../estilos/templates/actualizar-sueldo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30136560c7a61256d58_92085465%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7821187d532b5dedc7654227e83724d679793da9' => 
    array (
      0 => '../estilos/templates/actualizar-sueldo.tpl',
      1 => 1443658333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30136560c7a61256d58_92085465',
  'variables' => 
  array (
    'Mes' => 0,
    'Anio' => 0,
    'Idsueldo' => 0,
    'Id' => 0,
    'Sueldo' => 0,
    'Bonificacion' => 0,
    'Familiar' => 0,
    'Bono' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560c7a61362bf9_37225259',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c7a61362bf9_37225259')) {
function content_560c7a61362bf9_37225259 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30136560c7a61256d58_92085465';
?>
<center>
<button class="btn btn-warning">
<i class="fa fa-calendar fa-5x"></i>
<h4>
<?php if ($_smarty_tpl->tpl_vars['Mes']->value == "01") {?>
ENERO
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "02") {?>
FEBRERO
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "03") {?>
MARZO
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "04") {?>
ABRIL
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "05") {?>
MAYO
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "06") {?>
JUNIO
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "07") {?>
JULIO
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "08") {?>
AGOSTO
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "09") {?>
SEPTIEMBRE
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "10") {?>
OCTUBRE
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "11") {?>
NOVIEMBRE
<?php } elseif ($_smarty_tpl->tpl_vars['Mes']->value == "12") {?>
DICIEMBRE
<?php } else { ?>
NO EXISTE EL MES

<?php }?> 
del <?php echo $_smarty_tpl->tpl_vars['Anio']->value;?>
</h4>
</button>
</center>

<input type="hidden" name="idsueldo" value="<?php echo $_smarty_tpl->tpl_vars['Idsueldo']->value;?>
">
<input type="hidden" name="idusuario" value="<?php echo $_smarty_tpl->tpl_vars['Id']->value;?>
">

<div class="form-group">
<label>SUELDO</label>
<input type="number" min="0" step="any" name="sueldo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Sueldo']->value;?>
"  required >
</div>

<div class="form-group">
<label>BONIFICACIÓN</label>
<input type="number" min="0" step="any" name="bonificacion" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Bonificacion']->value;?>
">
</div>

<div class="form-group">
<label>ASIGNACIÓN FAMILIAR</label>
<input type="number" min="0" step="any" name="familiar" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Familiar']->value;?>
">
</div>

<div class="form-group">
<label>BONO PUNTUALIDAD</label>
<input type="number" min="0" step="any" name="bono" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Bono']->value;?>
">
</div><?php }
}
?>