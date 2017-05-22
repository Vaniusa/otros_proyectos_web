<?php
require ("LasConsultas.php");
$pais =$_GET["buscar"];
$productos=new LasConsultas();
$array_productos=$productos->get_buscar($pais);
?>
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
  foreach ($array_productos as $fila){

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


?>

</body>
</html>