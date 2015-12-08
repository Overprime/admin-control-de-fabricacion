<meta charset="UTF-8">

<?php 

class Sueldo
{

protected $idsueldo;
protected $idusuario;
protected $tipo;
protected $sueldo;
protected $bonificacion;
protected $familiar;
protected $bono;
protected $anio;
protected $mes;
protected $fechaproceso;


function __construct($idsueldo,$idusuario,$tipo,$sueldo,$bonificacion,
	$familiar,$bono,$anio,$mes,$fechaproceso)
{
$this->idsueldo     = $idsueldo;
$this->idusuario    = $idusuario;
$this->tipo         = $tipo;
$this->sueldo       = $sueldo;
$this->bonificacion = $bonificacion;
$this->familiar 	= $familiar;
$this->bono 		= $bono;
$this->anio 		= $anio;
$this->mes 			= $mes;
$this->fechaproceso = $fechaproceso;
}

public function Registrar()
{
$db = new Conexion();

$query = "SELECT * FROM sueldos_usuario where fecha_proceso='$this->fechaproceso'
AND usuario_idusuario='$this->idusuario'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;

if ($numfilas>0) 
{
echo "<script>
var mensaje='YA EXISTE UN REGISTRO CON EL MISMO AÑO Y FECHA';
alert(mensaje);
window.location='/admin-control-de-fabricacion/editar/creacion-de-usuario?/='+$this->idusuario;
</script>";
}

else {

$query = "INSERT INTO sueldos_usuario(usuario_idusuario,usuario_tipo,
sueldo_basico,bonificacion,asignacion_familiar,bono_puntualidad,anio,mes,fecha_proceso)
values('$this->idusuario','$this->tipo','$this->sueldo',
	   '$this->bonificacion','$this->familiar','$this->bono',
	   '$this->anio','$this->mes','$this->fechaproceso')";
$result = $db->query($query);

if ($result)
echo "<script>
window.location='/admin-control-de-fabricacion/editar/creacion-de-usuario?/='+$this->idusuario;
</script>";
else
echo "<script>
alert('HA OCURRIDO UN ERROR');
window.location='/admin-control-de-fabricacion/editar/creacion-de-usuario?/='+$this->idusuario;
</script>";

$db->close();

}



}



public function Mostrar($posicion)
{

$db = new Conexion();
$sql= $db->query("SELECT usuario_idusuario,
round(vacaciones,2)as vacaciones,
round(gratificacion,2)as gratificacion,
round(cts,2)as cts,
round(essalud,2)as essalud,
round(sctr_pension,2)as sctr_pension,
round(sctr_salud,2)as sctr_salud,
round(sctr_vida,2)as sctr_vida,
round(senati,2)as senati,
round(desc_medico,2)as desc_medico
 FROM  sueldos_usuario WHERE usuario_idusuario='$this->idusuario';");
$dato = $db->recorrer($sql);
echo $dato[$posicion];
}


public function Actualizar()
{
$db = new Conexion();
$sql= $db->query("UPDATE sueldos_usuario SET sueldo_basico='$this->sueldo',
	bono_puntualidad='$this->bono',asignacion_familiar='$this->familiar',
	bonificacion='$this->bonificacion'
WHERE idsueldos_usuario='$this->idsueldo'");
echo "<script>
       window.location='/admin-control-de-fabricacion/editar/creacion-de-usuario?/='+$this->idusuario;
      </script>";
}




public function Eliminar()
{
$db = new Conexion();
$sql= $db->query("DELETE  FROM  sueldos_usuario WHERE
 idsueldos_usuario='$this->idsueldo';");
echo "<script>
      window.location='/admin-control-de-fabricacion/editar/creacion-de-usuario?/='+$this->idusuario;
      </script>";

}




public function ActualizarMonto($vacaciones,$gratificacion,$cts,$essalud,$sctr_pension,
	$sctr_salud,$sctr_vida,$senati,$desc_medico)
{

$db = new Conexion();
$sql= $db->query("UPDATE sueldos_usuario SET vacaciones='$vacaciones',
gratificacion='$gratificacion',cts='$cts',essalud='$essalud',sctr_pension='$sctr_pension',
sctr_salud='$sctr_salud',sctr_vida='$sctr_vida',senati='$senati',desc_medico='$desc_medico'
WHERE usuario_idusuario='$this->idusuario'");
echo "<script>
       window.location='/admin-control-de-fabricacion/editar/montos-de-usuario?/='+$this->idusuario;
      </script>";





}






}







?>