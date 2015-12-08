<form action="../registrar/registrar-area.php" method="POST">

<div class="col-md-4">

<h2 class="text-primary">REGISTRO DE ÁREA:</h2>
<hr>

<div class="form-group">
<label>INGRESE EL NOMBRE DEL ÁREA:</label>
<input type="text"  name="area"  class="form-control" autofocus
onchange="conMayusculas(this);" required>
</div>

<div class="form-group">
<button class="btn btn-primary">Agregar área</button>
</div>
</div>

</form>