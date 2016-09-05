<div class="table-responsive">
<table class="table table-bordered table-condensed" >
<thead>
<tr class="success">
<th>ITEM</th>
<th>CENTRO DE COSTO</th>
<th>OT</th>
<th>ESTADO</th>

</tr>
<?php
$link=  Conectarse();
$listado=  mssql_query("SELECT (ROW_NUMBER() OVER(ORDER BY CODIGOOT))AS ITEM,CODIGOCENTROCOSTO,CODIGOOT,USUARIO,PFAB,PSEV 	FROM [020BDCOMUN].DBO.CENCOSOT  WHERE  USUARIO IN ('4','5','6') AND 
	CODIGOOT IN (SELECT OF_COD FROM [011BDCOMUN].dbo.ORD_FAB
WHERE OF_ESTADO ='ACTIVO')
GROUP BY CODIGOCENTROCOSTO,CODIGOOT,USUARIO,PFAB,PSEV ",$link);
?>

<tbody>
<?php
while($reg=  mssql_fetch_array($listado)) 
{
?>
<tr class="active">

<td id="<?php echo $reg[CODIGOOT]; ?>" ><?php echo $reg['ITEM']; ?></td>
<td><?php echo $reg['CODIGOCENTROCOSTO']; ?></td>
<td><?php echo $reg['CODIGOOT']; ?></td>
<td><a href="../actualizar/habilitar-ot.php?ot=<?php echo $reg['CODIGOOT']; ?>&
estado=<?php echo $reg['PFAB']; ?>">
<?php  
if ($reg['PFAB']==0) 
{
	echo "<button class='btn btn-danger'>Inactivo</button>";
}
else
{
	echo "<button class='btn btn-primary'>Activo</button>";
}

?>
</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>