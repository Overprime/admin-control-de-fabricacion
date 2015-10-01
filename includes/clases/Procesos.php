<?php 

class Procesos
{

protected $idprocesos;
protected $descripcion;


function __construct($idprocesos,$descripcion)
{
$this->idprocesos  = $idprocesos;
$this->descripcion = $descripcion;
}

public function Registrar()
{
$db = new Conexion();

$query = "SELECT * FROM procesos where descripcion='$this->descripcion'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;

if ($numfilas>0) 
{
echo "<script>
alert('YA EXISTE UN PROCESO CON ESE NOMBRE');
window.location='/admin-control-de-fabricacion/consulta/proceso';
</script>";
}

else {

$query = "INSERT INTO procesos(descripcion)
values('$this->descripcion');";
$result = $db->query($query);

if ($result)
echo "<script>
window.location='/admin-control-de-fabricacion/consulta/proceso';
</script>";
else
echo "<script>
alert('HA OCURRIDO UN ERROR');
window.location='/admin-control-de-fabricacion/consulta/proceso';
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
$sql= $db->query("UPDATE procesos SET descripcion='$this->descripcion'
WHERE idprocesos='$this->idprocesos'");
echo "<script>
       window.location='/admin-control-de-fabricacion/consulta/proceso';
      </script>";
}




public function Eliminar()
{
$db = new Conexion();
$sql= $db->query("DELETE  FROM  procesos WHERE idprocesos='$this->idprocesos';");
echo "<script>
       window.location='/admin-control-de-fabricacion/consulta/proceso';
      </script>";

}


}







?>