<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
	
	table{
	border:1px solid #F00;
	padding:20px 20px;
	margin:-30px 20px;
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
   $consulta = "SELECT * FROM productos WHERE Nombre_articulo LIKE '%$busqueda%'";
   $resultados = mysqli_query($conexion, $consulta);
   mysqli_query($conexion, $consulta);

   if(mysqli_affected_rows($conexion)>0){
       echo "Consulta procesada";
   }else {
       echo "Consulta NO procesada";
   }
   while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

       echo "<form action='Actualizar.php' method='get'>";
	   echo "<table>";
       echo "<tr><td><label>Codigo</td><td>" . $fila['Codigo'] . "<input hidden='num' name='c_art' value='" . $fila['Codigo'] . "'></label></td></tr><br>";
       echo "<tr><td><label>Nombre articulo</td><td><input type='text' name='n_art' value='" . $fila['Nombre_articulo'] . "'></label></td></tr><br>";
       echo "<tr><td><label>Secction</td><td><input type='text' name='seccion' value='" . $fila['Seccion'] . "'></label></td></tr><br>";
       echo "<tr><td><label>Precio</td><td><input type='num' name='precio' value='" . $fila['Precio'] . "'></label></td></tr><br>";
       echo "<tr><td><label>Pais de Origen</td><td><input type='text' name='p_orig' value='" . $fila['Pais_de_Origen'] . "'></label></td></tr><br>";
       echo "<tr><td><input type='submit' name='enviando' value='Actualizar!'></td></tr>";
       echo "</table>";
   echo "</form>";
}
mysqli_close($conexion);

?>

</body>
</html>