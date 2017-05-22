<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
	div{
		float:left;}
	td,tr{
		border:1px solid #F00;
		}
	
	table{
	    
	border:1px solid #F00;
	padding:20px 20px;
	margin:-30px 10px;
	</style>
</head>
<body>
<?php


require ("conexion_bbdd.php");

$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);
 $busqueda = mysqli_real_escape_string($conexion,$_GET["buscar"]);

   if(mysqli_connect_errno()){
       echo "Fallo al conectar con la BBDD";
       exit();
   }

   mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
   mysqli_set_charset($conexion, "utf8");
   $consulta = "SELECT * FROM productos";
   $resultados = mysqli_query($conexion, $consulta);
   mysqli_query($conexion, $consulta);

   if(mysqli_affected_rows($conexion)>0){
       echo "Consulta procesada";
   }else {
       echo "Consulta NO procesada";
   }
   while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

       
	   echo "<div><table>";
       echo "<tr><td>Codigo</td><td>" . $fila['Codigo'] . "</td></tr><br>";
       echo "<tr><td>Nombre articulo</td><td>" . $fila['Nombre_articulo'] . "</td></tr><br>";
       echo "<tr><td>Secction</td><td>" . $fila['Seccion'] . "</td></tr><br>";
       echo "<tr><td>Precio</td><td>" . $fila['Precio'] . "</td></tr><br>";
       echo "<tr><td>Pais de Origen</td><td>" . $fila['Pais_de_Origen'] . "</td></tr><br>";
       echo "</table></div>";
}
mysqli_close($conexion);
echo "<p><a href='index.php'>Volver a formularios</a></p>";
?>

</body>
</html>