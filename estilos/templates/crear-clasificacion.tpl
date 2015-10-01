<form action="../registrar/registrar-clasificacion.php" method="POST">
<div class="row">
<div class="col-md-12">
<h2 class="text-primary">REGISTRO DE CLASIFICACIONES:</h2>
<hr>
</div>
</div>


<div class="row">

<div class="col-md-4">

<div class="form-group">
<label>INGRESE EL NOMBRE DE LA CLASIFICACIÓN:</label>
<input type="text" name="descripcion" class="form-control" 
onchange="conMayusculas(this);"
required>
</div>

</div>

<div class="col-md-4">

<div class="form-group">
<label>INGRESE EL TIPO DE CLASIFICACIÓN:</label>
<select name="tipo" class="form-control" required>
<option value="">[SELECCIONAR]</option>
<option value="HE25">HE25</option>
<option value="HE35">HE35</option>
<option value="HE100">HE100</option>
<option value="REGULAR">REGULAR</option>
<option value="NINGUNO">NINGUNO</option>
</select>
</div>

</div>

</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<button class="btn btn-primary">Agregar Clasificación</button>
</div>
</div>
</div>

</form>