<?php 
class Fecha
{

protected $idusuario;
protected $fecha;

function __construct($idusuario,$fecha)
{
$this->idusuario = $idusuario;
$this->fecha = $fecha;
}


public function Mostrar()
{

$db = new Conexion();
$sql= $db->query("SELECT DATE_FORMAT(fecha,'%d-%m-%Y') as fecha FROM fecha_trabajo WHERE 
usuario_idusuario='$this->idusuario';");
$dato = $db->recorrer($sql);
echo $dato['fecha'];
}





public function Fechatrabajo()
{
$db = new Conexion();
$query = "INSERT INTO fecha_trabajo (usuario_idusuario,fecha) 
VALUES ('$this->idusuario','$this->fecha')
ON DUPLICATE KEY UPDATE fecha='$this->fecha'";
$result = $db->query($query);
if ($result)
echo "<script>
window.location='/admin-control-de-fabricacion/pages/creacion-de-reporte';
</script>";
else
echo "<script>
alert('HA OCURRIDO UN ERROR');
window.location='/admin-control-de-fabricacion/home';
</script>";
$db->close();
}







}


?>