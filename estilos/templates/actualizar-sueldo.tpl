<center>
<button class="btn btn-warning">
<i class="fa fa-calendar fa-5x"></i>
<h4>
{if $Mes eq "01"}
ENERO
{elseif $Mes eq "02"}
FEBRERO
{elseif $Mes eq "03"}
MARZO
{elseif $Mes eq "04"}
ABRIL
{elseif $Mes eq "05"}
MAYO
{elseif $Mes eq "06"}
JUNIO
{elseif $Mes eq "07"}
JULIO
{elseif $Mes eq "08"}
AGOSTO
{elseif $Mes eq "09"}
SEPTIEMBRE
{elseif $Mes eq "10"}
OCTUBRE
{elseif $Mes eq "11"}
NOVIEMBRE
{elseif $Mes eq "12"}
DICIEMBRE
{else}
NO EXISTE EL MES

{/if} 
del {$Anio}</h4>
</button>
</center>

<input type="hidden" name="idsueldo" value="{$Idsueldo}">
<input type="hidden" name="idusuario" value="{$Id}">

<div class="form-group">
<label>SUELDO</label>
<input type="number" min="0" step="any" name="sueldo" class="form-control" value="{$Sueldo}"  required >
</div>

<div class="form-group">
<label>BONIFICACIÓN</label>
<input type="number" min="0" step="any" name="bonificacion" class="form-control" value="{$Bonificacion}">
</div>

<div class="form-group">
<label>ASIGNACIÓN FAMILIAR</label>
<input type="number" min="0" step="any" name="familiar" class="form-control" value="{$Familiar}">
</div>

<div class="form-group">
<label>BONO PUNTUALIDAD</label>
<input type="number" min="0" step="any" name="bono" class="form-control" value="{$Bono}">
</div>