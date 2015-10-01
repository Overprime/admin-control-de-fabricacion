<?php 

class Area
{

protected $idarea;
protected $area;


function __construct($idarea,$area)
{
$this->idarea = $idarea;
$this->area = $area;
}

public function Registrar()
{
$db = new Conexion();

$query = "SELECT * FROM area where descripcion='$this->area'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;

if ($numfilas>0) 
{
echo "<script>
alert('YA EXISTE UN AREA CON ESE NOMBRE');
window.location='/admin-control-de-fabricacion/consulta/area';
</script>";
}

else {

$query = "INSERT INTO area(descripcion)
values('$this->area');";
$result = $db->query($query);

if ($result)
echo "<script>
window.location='/admin-control-de-fabricacion/consulta/area';
</script>";
else
echo "<script>
alert('HA OCURRIDO UN ERROR');
window.location='/admin-control-de-fabricacion/consulta/area';
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
$sql= $db->query("UPDATE area SET descripcion='$this->area'
WHERE idarea='$this->idarea'");
echo "<script>
       window.location='/admin-control-de-fabricacion/consulta/area';
      </script>";
}




public function Eliminar()
{
$db = new Conexion();
$sql= $db->query("DELETE  FROM  area WHERE idarea='$this->idarea';");
echo "<script>
       window.location='/admin-control-de-fabricacion/consulta/area';
      </script>";

}


}







?>