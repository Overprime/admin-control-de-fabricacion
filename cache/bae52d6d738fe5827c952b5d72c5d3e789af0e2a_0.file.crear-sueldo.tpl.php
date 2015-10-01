<?php /* Smarty version 3.1.24, created on 2015-09-30 17:35:49
         compiled from "../estilos/templates/crear-sueldo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10540560c55b5309fe3_27018093%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bae52d6d738fe5827c952b5d72c5d3e789af0e2a' => 
    array (
      0 => '../estilos/templates/crear-sueldo.tpl',
      1 => 1443648925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10540560c55b5309fe3_27018093',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560c55b53bbf42_83652073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c55b53bbf42_83652073')) {
function content_560c55b53bbf42_83652073 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10540560c55b5309fe3_27018093';
?>
<div class="form-group">
<label>AÑO</label>
<select name="anio" class="form-control" required>
<option value="">[SELECCIONAR]</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
</select>
</div>


<div class="form-group">
<label>MES</label>
<select name="mes" class="form-control" required>
<option value="">[SELECCIONAR]</option>
<option value="01">ENERO</option>
<option value="02">FEBRERO</option>
<option value="03">MARZO</option>
<option value="04">ABRIL</option>
<option value="05">MAYO</option>
<option value="06">JUNIO</option>
<option value="07">JULIO</option>
<option value="08">AGOSTO</option>
<option value="09">SEPTIEMBRE</option>
<option value="10">OCTUBRE</option>
<option value="11">NOVIEMBRE</option>
<option value="12">DICIEMBRE</option>
</select>
</div>


<div class="form-group">
<label>SUELDO BÁSICO</label>
<input type="number" name="sueldo" min="1" step="any" class="form-control" required>
</div>

<div class="form-group">
<label>BONIFICACIÓN</label>
<input type="number" name="bonificacion" min="1" step="any"  class="form-control" >
</div>

<div class="form-group">
<label>ASIGNACIÓN FAMILIAR</label>
<input type="number" name="familiar" min="1" step="any"  class="form-control" >
</div>


<div class="form-group">
<label>BONO DE PUNTUALIDAD</label>
<input type="number" name="bono"  min="1" step="any" class="form-control" >
</div><?php }
}
?>