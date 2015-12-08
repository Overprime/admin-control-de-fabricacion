<form action="../registrar/registrar-proceso.php" method="POST">

<div class="col-md-4">

<h2 class="text-primary">REGISTRO DE PROCESO:</h2>
<hr>

<div class="form-group">
<label>INGRESE EL NOMBRE DEL PROCESO:</label>
<input type="text"  name="descripcion"  class="form-control" autofocus
onchange="conMayusculas(this);" required>
</div>

<div class="form-group">
<button class="btn btn-primary">Agregar Proceso</button>
</div>
</div>

</form>