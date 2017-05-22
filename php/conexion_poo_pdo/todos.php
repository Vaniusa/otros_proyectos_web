<?php
require ("LasConsultas.php");
$productos=new LasConsultas();
$array_productos=$productos->todos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
	div{
		float:left;}
	td,tr{
		border:2px solid #F00;
		}
	
	table{
	    
	border:1px solid #F00;
	padding:20px 20px;
	margin:-30px 10px;
	</style>
</head>
<body>
<?php
foreach ($array_productos as $fila){       
	   echo "<div><table>";
       echo "<tr><td>Codigo</td><td>" . $fila['Codigo'] . "</td></tr><br>";
       echo "<tr><td>Nombre articulo</td><td>" . $fila['Nombre_articulo'] . "</td></tr><br>";
       echo "<tr><td>Secction</td><td>" . $fila['Seccion'] . "</td></tr><br>";
       echo "<tr><td>Precio</td><td>" . $fila['Precio'] . "</td></tr><br>";
       echo "<tr><td>Pais de Origen</td><td>" . $fila['Pais_de_Origen'] . "</td></tr><br>";
       echo "</table></div>";
}
echo "<p><a href='../conexion_poo_pdo/'>Volver a formularios</a></p>";
?>

</body>
</html>