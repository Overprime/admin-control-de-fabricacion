<?php /* Smarty version 3.1.24, created on 2015-10-02 11:57:59
         compiled from "./estilos/templates/acceso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:928948168560eb7978dcbe8_78823254%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7141e1c730fca21c513edcc4521bc1ee0ab24469' => 
    array (
      0 => './estilos/templates/acceso.tpl',
      1 => 1443805074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928948168560eb7978dcbe8_78823254',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560eb79790c1b1_75332217',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560eb79790c1b1_75332217')) {
function content_560eb79790c1b1_75332217 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '928948168560eb7978dcbe8_78823254';
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
<input type="password"  name="contrasena"class="form-control" placeholder="Ingrese su Contraseña" required>
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