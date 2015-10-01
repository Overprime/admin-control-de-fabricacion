<?php 

class Reporte
{

protected $id;
protected $fechainicio;
protected $horainicio;
protected $horafin;
protected $horastrabajo;
protected $descripciontrabajo;
protected $horashombre;
protected $ot;
protected $cencos;
protected $idusuario;
protected $procesos;
protected $clasificacion;

function __construct($id,$fechainicio,$horainicio,$horafin,
	$horastrabajo,$descripciontrabajo,
	$horashombre,$ot,$cencos,$idusuario,$procesos,$clasificacion)
{
$this->id = $id;
$this->fechainicio = $fechainicio;
$this->horainicio = $horainicio;
$this->horafin = $horafin;
$this->horastrabajo= $horastrabajo;
$this->descripciontrabajo = $descripciontrabajo;
$this->horashombre = $horashombre;
$this->ot = $ot;
$this->cencos = $cencos;
$this->idusuario = $idusuario;
$this->procesos = $procesos;
$this->clasificacion = $clasificacion;
}

public function Registrar()
{
$db = new Conexion();

$query = "SELECT * FROM reporte where usuario_idusuario='$this->idusuario'
and fechainicio='$this->fechainicio' and horainicio='$this->horainicio'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;

if ($numfilas>0) 
{
echo "<script>
alert('YA EXISTE UN REGISTRO CON ESAS HORAS');
window.location='/admin-control-de-fabricacion/pages/creacion-de-reporte';
</script>";
}

else {

$query = "INSERT INTO reporte(fechainicio,horainicio,horafin,horastrabajo,
descripciontrabajo,horashombre,ot,cencos,usuario_idusuario,procesos_idprocesos,
clasificacion_idclasificacion)
values('$this->fechainicio','$this->horainicio','$this->horafin',
'$this->horastrabajo','$this->descripciontrabajo','$this->horashombre',
'$this->ot','$this->cencos','$this->idusuario','$this->procesos','$this->clasificacion');";
$result = $db->query($query);

if ($result)
echo "<script>
window.location='/admin-control-de-fabricacion/pages/creacion-de-reporte';
</script>";
else
echo "<script>
alert('HA OCURRIDO UN ERROR');
window.location='/admin-control-de-fabricacion/pages/creacion-de-reporte';
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
$sql= $db->query("UPDATE reporte SET ot='$this->ot',
procesos_idprocesos='$this->procesos',cencos='$this->cencos',
clasificacion_idclasificacion='$this->clasificacion',
descripciontrabajo='$this->descripciontrabajo'
WHERE idreporte='$this->id';");
echo "<script>
       window.location='/admin-control-de-fabricacion/pages/creacion-de-reporte';
      </script>";
}




public function Eliminar()
{
$db = new Conexion();
$sql= $db->query("DELETE  FROM  reporte WHERE idreporte='$this->id';");
echo "<script>alert('REGISTRO ELIMINADO');
       window.location='/admin-control-de-fabricacion/pages/creacion-de-reporte';
      </script>";

}


}







?>