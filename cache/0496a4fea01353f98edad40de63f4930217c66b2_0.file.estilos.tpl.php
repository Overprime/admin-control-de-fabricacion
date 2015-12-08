<?php /* Smarty version 3.1.24, created on 2015-10-01 09:39:00
         compiled from "../estilos/templates/estilos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2502108560d4584a25ed3_66250545%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0496a4fea01353f98edad40de63f4930217c66b2' => 
    array (
      0 => '../estilos/templates/estilos.tpl',
      1 => 1443709681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2502108560d4584a25ed3_66250545',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560d4584a2a6b9_65167631',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560d4584a2a6b9_65167631')) {
function content_560d4584a2a6b9_65167631 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2502108560d4584a25ed3_66250545';
?>
<meta charset="UTF-8">
<link href="/admin-control-de-fabricacion/assets/b3/css/bootstrap.min.css" rel="stylesheet">
<link href="/admin-control-de-fabricacion/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="/admin-control-de-fabricacion/assets/img/logo48.png">
<link href="/admin-control-de-fabricacion/assets/b3/css/mis-estilos.css" rel="stylesheet">
 <?php echo '<script'; ?>
 src="/admin-control-de-fabricacion/assets/b3/js/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Inicio Script convertir en mayuscula al ingresar -->
<?php echo '<script'; ?>
 language    =""="JavaScript">
function conMayusculas(field) {
field.value         = field.value.toUpperCase()
}
<?php echo '</script'; ?>
>
<!-- Fin Script convertir en mayuscula al ingresar-->




<!-- Inicio de Script para exportar un tabla html a excel -->

<?php echo '<script'; ?>
 language="javascript">
$(document).ready(function() {
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();
});
});
<?php echo '</script'; ?>
>

<!-- Fin de Script para exportar un tabla html a excel--><?php }
}
?>