<meta charset="UTF-8">
<link href="/admin-control-de-fabricacion/assets/b3/css/bootstrap.min.css" rel="stylesheet">
<link href="/admin-control-de-fabricacion/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="/admin-control-de-fabricacion/assets/img/logo48.png">
<link href="/admin-control-de-fabricacion/assets/b3/css/mis-estilos.css" rel="stylesheet">
 <script src="/admin-control-de-fabricacion/assets/b3/js/jquery.min.js"></script>

<!-- Inicio Script convertir en mayuscula al ingresar -->
<script language    =""="JavaScript">
function conMayusculas(field) {
field.value         = field.value.toUpperCase()
}
</script>
<!-- Fin Script convertir en mayuscula al ingresar-->




<!-- Inicio de Script para exportar un tabla html a excel -->

<script language="javascript">
$(document).ready(function() {
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();
});
});
</script>

<!-- Fin de Script para exportar un tabla html a excel-->