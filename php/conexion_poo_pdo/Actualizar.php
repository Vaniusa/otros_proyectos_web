<?php
require ("LasConsultas.php");
 $cod = $_GET["c_art"];
$sec = $_GET["seccion"];
$nom = $_GET["n_art"];
$pre = $_GET["precio"];
$por = $_GET["p_orig"];
$productos=new LasConsultas();
$productos->actualizar($cod,$sec,$nom,$pre,$por);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
     <style>
	 a{
		 margin:20px;}
	 td{border:1px solid #F00;}
	
	table{
	border:1px solid #F00;
	padding:20px 20px;
	margin:-30px 20px;
	</style>
</head>
<body>
<?php

  
 
       echo "<p>Articulo actualizado.</p><br><br>";
      echo "<table><tr><td>Codigo</td><td>$cod</td></tr>";
       echo "<tr><td>Seccion</td><td>$sec</td></tr>";
       echo "<tr><td>Nombre articulo</td><td>$nom</td></tr>";
       echo "<tr><td>Precio</td><td>$pre</td></tr>";
       echo "<tr><td>Pais de Origen</td><td>$por</td></tr></table><br><br>";
   
echo "<p><a href='../conexion_poo_pdo/'>Volver a formularios</a></p>";


?>

</body>
</html>