<?php 

include('../includes/bd/conexionSQL.php');

$link=Conectarse();

if ($_GET['estado']==14)
 {
	$SQL="UPDATE [020BDCOMUN].DBO.CENCOSOT  SET  PFAB=0 WHERE CODIGOOT='$_GET[ot]'";

$RESULT=mssql_query($SQL);

if (!$RESULT)
 {
	echo "error";
}

else
{
header('Location: /admin-control-de-fabricacion/pages/habilitar-ot#'.$_GET['ot']);
}

}
else if ($_GET['estado']==0)
{
 $SQL="UPDATE [020BDCOMUN].DBO.CENCOSOT  SET  PFAB=14 WHERE CODIGOOT='$_GET[ot]'";

$RESULT=mssql_query($SQL);

if (!$RESULT)
 {
	echo "error";
}

else
{
header('Location: /admin-control-de-fabricacion/pages/habilitar-ot#'.$_GET['ot']);
}

}

else
{
	echo "no existe el tipo";
}




 ?>