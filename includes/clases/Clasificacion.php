<?php 

class Clasificacion
{

protected $idclasificacion;
protected $descripcion;
protected $tipo;


function __construct($idclasificacion,$descripcion,$tipo)
{
$this->idclasificacion = $idclasificacion;
$this->descripcion     = $descripcion;
$this->tipo            = $tipo;
}

public function Registrar()
{
$db = new Conexion();

$query = "SELECT * FROM clasificacion where descripcion='$this->descripcion'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;

if ($numfilas>0) 
{
echo "<script>
alert('YA EXISTE UN CLASIFICACION CON ESE NOMBRE');
window.location='/admin-control-de-fabricacion/consulta/clasificacion';
</script>";
}

else {

$query = "INSERT INTO clasificacion(descripcion,tipo)
values('$this->descripcion','$this->tipo');";
$result = $db->query($query);

if ($result)
echo "<script>
window.location='/admin-control-de-fabricacion/consulta/clasificacion';
</script>";
else
echo "<script>
alert('HA OCURRIDO UN ERROR');
window.location='/admin-control-de-fabricacion/consulta/clasificacion';
</script>";

$db->close();

}



}



public function Mostrar($posicion)
{

$db = new Conexion();
$sql= $db->query("SELECT * FROM  usuario WHERE idusuario='$this->id';");
$dato = $db->recorrer($sql);
echo $dato[$posicion];
}


public function Actualizar()
{
$db = new Conexion();
$sql= $db->query("UPDATE clasificacion SET descripcion='$this->descripcion',
	              tipo='$this->tipo' WHERE idclasificacion='$this->idclasificacion'");
echo "<script>
       window.location='/admin-control-de-fabricacion/consulta/clasificacion';
      </script>";
}




public function Eliminar()
{
$db = new Conexion();
$sql= $db->query("DELETE  FROM  clasificacion WHERE idclasificacion='$this->idclasificacion';");
echo "<script>
       window.location='/admin-control-de-fabricacion/consulta/clasificacion';
      </script>";

}


}







?>