<?php /* Smarty version 3.1.24, created on 2015-09-30 12:10:41
         compiled from "./estilos/templates/acceso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26268560c0981764121_36527718%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a67047c9a985438b878f7553f7a3ae186a42226d' => 
    array (
      0 => './estilos/templates/acceso.tpl',
      1 => 1443208314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26268560c0981764121_36527718',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560c09817e5ef6_75012750',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c09817e5ef6_75012750')) {
function content_560c09817e5ef6_75012750 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26268560c0981764121_36527718';
?>
<div class="modal-dialog">
<form action="registrar/validar.php" method="POST" autocomplete="Off">
<div class="modal-content">
<div class="modal-header">
<h2 class="modal-title text-center text-success" id="myModalLabel">
ADMINISTRADOR
</h2>
</div>
<div class="modal-body">
<div class="form-group">
<input type="text"  name="usuario"  class="form-control" placeholder="Ingrese su Usuario" required autofocus>
</div>
<div class="form-group">
<input type="text"  name="contrasena"class="form-control" placeholder="Ingrese su Contraseña" required>
</div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-success btn-block btn-lg">
Iniciar Sesión
</button>
</div>
</div>
</form>
</div>

<?php }
}
?>