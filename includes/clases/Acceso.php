<?php 
class Acceso
{

protected $user;
protected $pass;

public function __construct($usuario,$password)
{
$this->user = $usuario;
$this->pass = $password;

}

public function  Login()
{

$db = new Conexion();
$sql= $db->query("SELECT idusuario,nombres,apellidos,usuario,contrasena FROM  
usuario WHERE  estado='00' AND tipo='02'  AND usuario='$this->user' AND  contrasena='$this->pass';");
$dato = $db->recorrer($sql);

if (strtolower($dato['usuario'])==strtolower($this->user) 
	and $dato['contrasena']==$this->pass)
{
session_start();
$_SESSION['id']=$dato['idusuario'];
$_SESSION['nom']=$dato['nombres'];
$_SESSION['ape']=$dato['apellidos'];
$_SESSION['user']=$dato['usuario'];
header('Location: /admin-control-de-fabricacion/home');


}
else
{
header('Location: /admin-control-de-fabricacion/');
}
}

public function  Salir()
{
	@session_start();
	
	if ($_SESSION['user'])
	{	
	session_destroy();
	echo "
	<script language = javascript>
	alert('Su sesion ha terminado correctamente')
	self.location = '/admin-control-de-fabricacion/'
	</script>";
	
	}
	else
	{
	echo '<script language = javascript>
	alert("No ha iniciado ninguna sesion, por favor registrese")
	self.location = "/admin-control-de-fabricacion/"
	</script>';}

}




}

?>