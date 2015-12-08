<input type="hidden"  name="id"  value="{$Id}">



<div class="form-group">
<label>NOMBRES:</label>
<input type="text" name="nombres" class="form-control"  value="{$Nombres}">
</div>	



<div class="form-group">
<label>APELLIDOS:</label>
<input type="text" name="apellidos" class="form-control"  value="{$Apellidos}">
</div>	




<div class="form-group">
<label>DNI:</label>
<input type="text" name="dni" class="form-control"  value="{$Dni}">
</div>	




<div class="form-group">
<label>ESTADO:</label>
<select name="estado" class="form-control">
<option value="{$Estado}">
{if $Estado eq "00"}
 ACTIVO
 {else}
INACTIVO
{/if}
</option>
<option value="00">ACTIVO</option>
<option value="01">INACTIVO</option>
</select>
</div>	



<div class="form-group">
<label>TIPO:</label>
<select name="tipo" class="form-control">
<option value="{$Tipo}">
{if $Tipo eq "02"}
ADMIN
 {else}
USUARIO
{/if}
</option>
<option value="02">ADMIN</option>
<option value="03">USUARIO</option>
</select>
</div>	




<div class="form-group">
<label>CAMBIO DE FECHA DE TRABAJO</label>
<select name="permiso" class="form-control">
<option value="{$Permiso}">
{if $Permiso eq 1}
DESACTIVADO
 {else}
ACTIVADO
{/if}
</option>
<option value="2">ACTIVAR</option>
<option value="1">DESACTIVAR</option>
</select>
</div>	



