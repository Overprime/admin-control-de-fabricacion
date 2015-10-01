<div class="row">
<div class="col-md-12">
<h2 class="text-primary">REGISTRAR HORAS MENSUALES</h2>
<hr>
</div>
</div>

<form action="../registrar/registrar-horas-mensuales.php"  method="POST">
<div class="row">

<div class="col-md-2">

<div class="form-group">

<label>Año</label>
<select name="anio" class="form-control" required>
<option value="">[SELECCIONAR]</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
</select>
</div>

</div>

<div class="col-md-2">

<div class="form-group">

<label>Mes</label>
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

</div>


<div class="col-md-2">

<div class="form-group">

<label>HORAS MENSUALES</label>
<input type="number"  name="horasmensuales" class="form-control" step="any" min="1"
required
  >

</div>

</div>

</div>


<div class="row">

<div class="col-md-2">

<div class="form-group">

<button class="btn btn-primary">Registrar Horas Mensuales</button>

</div>

</div>

</div>


</form>