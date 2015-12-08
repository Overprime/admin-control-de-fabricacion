<?php /* Smarty version 3.1.24, created on 2015-10-01 09:33:24
         compiled from "../estilos/templates/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1294482614560d44344ab391_52232062%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0c5cc72b8b0743e2c951a9c8e0aa07cee76880d' => 
    array (
      0 => '../estilos/templates/nav.tpl',
      1 => 1443709681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1294482614560d44344ab391_52232062',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560d44344bf937_65691775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560d44344bf937_65691775')) {
function content_560d44344bf937_65691775 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/admin-control-de-fabricacion/includes/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1294482614560d44344ab391_52232062';
?>
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
</button> <a class="navbar-brand" href="/admin-control-de-fabricacion/home">
<i class="fa fa-home fa-x text-info"></i>
Home</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimientos<strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="/admin-control-de-fabricacion/consulta/area">Registro de Áreas</a>
</li>
<li>
<a href="/admin-control-de-fabricacion/consulta/usuario">Registro de Usuario</a>
</li>

<li class="divider"></li>
<li>
<a href="/admin-control-de-fabricacion/consulta/clasificacion">Registro de Clasificaciones</a>
</li>
<li>
<a href="/admin-control-de-fabricacion/consulta/proceso">Registro de Procesos</a>
</li>
<li class="divider"></li>
<li>
<a href="/admin-control-de-fabricacion/consulta/horas-mensuales">Registro de Horas Mensuales</a>
</li>
</ul>
</li>
</ul>


<form class="navbar-form navbar-left" role="search" method="POST"
action="/admin-control-de-fabricacion/pages/reportes">
<div class="form-group">
<input type="date" name="fechainicio" class="form-control" 
value="<?php echo $_POST['fechainicio'];?>
" 
max="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" required>
</div> 
<div class="form-group">
<input type="date" name="fechafin" class="form-control" 
value="<?php echo $_POST['fechafin'];?>
" 
max="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" required>
</div> 
<button type="submit" class="btn btn-success">
<i class="fa fa-search fa-1x"></i>
Consultar Reportes
</button>
</form>
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#">
<i class="glyphicon glyphicon-user text-success"></i>
<?php echo $_SESSION['nom'];?>

<?php echo $_SESSION['ape'];?>

</a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="/admin-control-de-fabricacion/registrar/salir">Salir</a>
</li>
</ul>
</li>
</ul>
</div>

</nav><?php }
}
?>