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
</div>


<input type="hidden" name="tipo" value="{$Tipo}">


<input type="hidden" name="id" value="{$Id}">