<?php /* Smarty version 3.1.24, created on 2015-10-02 13:01:39
         compiled from "./estilos/templates/acceso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26367560eb873d24735_44405798%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a67047c9a985438b878f7553f7a3ae186a42226d' => 
    array (
      0 => './estilos/templates/acceso.tpl',
      1 => 1443805285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26367560eb873d24735_44405798',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560eb873e5f2d7_62769922',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560eb873e5f2d7_62769922')) {
function content_560eb873e5f2d7_62769922 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26367560eb873d24735_44405798';
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