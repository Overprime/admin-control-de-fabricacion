<?php 

class Horastrabajo
{

protected $idhorastrabajo;
protected $anio;
protected $mes;
protected $fechaproceso;
protected $horasmes;
protected $costohora;

function __construct($idhorastrabajo,$anio,$mes,$fechaproceso,$horasmes,$costohora)
{
$this->idhorastrabajo   = $idhorastrabajo;
$this->anio            = $anio;
$this->mes             = $mes;
$this->fechaproceso    = $fechaproceso;
$this->horasmes        = $horasmes;
$this->costohora        = $costohora;
}

public function Registrar()
{
$db = new Conexion();

$query = "SELECT * FROM horas_trabajo where anio='$this->anio'
AND mes='$this->mes'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;

if ($numfilas>0) 
{
echo "<script>
alert('YA EXISTE  UN  REGISTRO CON ESOS DATOS');
window.location='/admin-control-de-fabricacion/consulta/horas-mensuales';
</script>";
}

else {

$query = "INSERT INTO horas_trabajo(anio,mes,fecha_proceso,horas_mes)
values('$this->anio','$this->mes','$this->fechaproceso','$this->horasmes');";
$result = $db->query($query);

if ($result)
echo "<script>
window.location='/admin-control-de-fabricacion/consulta/horas-mensuales';
</script>";
else
echo "<script>
alert('HA OCURRIDO UN ERROR');
window.location='/admin-control-de-fabricacion/consulta/horas-mensuales';
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
$sql= $db->query("UPDATE horas_trabajo SET horas_mes='$this->horasmes',
	              costo_horas_mn='$this->costohora' WHERE
	               idhoras_trabajo='$this->idhorastrabajo'");
echo "<script>
       window.location='/admin-control-de-fabricacion/consulta/horas-mensuales';
      </script>";
}




public function Eliminar()
{
$db = new Conexion();
$sql= $db->query("DELETE  FROM  horas_trabajo WHERE 
	idhoras_trabajo='$this->idhorastrabajo';");
echo "<script>
       window.location='/admin-control-de-fabricacion/consulta/horas-mensuales';
      </script>";

}


}







?>