<?php 

class Usuario
{

protected $idusuario;
protected $nombres;
protected $apellidos;
protected $dni;
protected $usuario;
protected $contrasena;
protected $estado;
protected $tipo;
protected $area_idarea;
protected $permiso;

function __construct($idusuario,$nombres,$apellidos,$dni,$usuario,
	$contrasena,$estado,$tipo,$area_idarea,$permiso)
{
$this->idusuario           = $idusuario;
$this->nombres	           = $nombres;
$this->apellidos           = $apellidos;
$this->dni                 = $dni;
$this->usuario             = $usuario;
$this->contrasena	       = $contrasena;
$this->estado              = $estado;
$this->tipo                = $tipo;
$this->area_idarea         = $area_idarea;
$this->permiso             = $permiso; 

}

public function Registrar()
{
$db = new Conexion();

$query = "SELECT * FROM usuario where dni='$this->dni'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;

if ($numfilas>0) 
{
echo "<script>
alert('YA EXISTE UN USUARIO CON ESE DNI');
window.location='/admin-control-de-fabricacion/consulta/usuario';
</script>";
}

else {

$query = "INSERT INTO usuario(nombres,apellidos,dni,usuario,contrasena,
tipo,area_idarea)
values('$this->nombres','$this->apellidos','$this->dni','$this->usuario',
	'$this->contrasena','$this->tipo','$this->area_idarea');";
$result = $db->query($query);

if ($result)
echo "<script>
window.location='/admin-control-de-fabricacion/consulta/usuario';
</script>";
else
echo "<script>
alert('HA OCURRIDO UN ERROR');
window.location='/admin-control-de-fabricacion/consulta/usuario';
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
$sql= $db->query("UPDATE usuario SET nombres='$this->nombres',
	apellidos='$this->apellidos',dni='$this->dni',usuario='$this->usuario',
	contrasena='$this->contrasena',estado='$this->estado',tipo='$this->tipo',
	area_idarea='$this->area_idarea',permiso='$this->permiso'
WHERE idusuario='$this->idusuario'");
echo "<script>
       window.location='/admin-control-de-fabricacion/editar/creacion-de-usuario?/='+$this->idusuario;
      </script>";
}




public function Eliminar()
{
$db = new Conexion();
$sql= $db->query("DELETE  FROM  usuario WHERE idusuario='$this->idusuario';");
echo "<script>
       window.location='/admin-control-de-fabricacion/consulta/usuario';
      </script>";

}


}







?>