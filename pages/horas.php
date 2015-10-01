<?php
include('../includes/bd/conexion.php');

$db = new Conexion();
$horafin=$_POST["elegido"];

$sql        =  "SELECT * FROM fechafin WHERE valor>$horafin";
$result     = $db->query($sql);
while ($row = $result->fetch_assoc()) {
echo "<option value=\"{$row['valor']}\">";
echo $row['descripcion'];
echo "</option>";
}
		
?>