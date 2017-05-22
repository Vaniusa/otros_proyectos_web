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

   $cod = $_GET["c_art"];
$sec = $_GET["seccion"];
$nom = $_GET["n_art"];
$pre = $_GET["precio"];
$por = $_GET["p_orig"];
require ("conexion_bbdd.php");

$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);

   if(mysqli_connect_errno()){
       echo "Fallo al conectar con la BBDD";
       exit();
   }

   mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
   mysqli_set_charset($conexion, "utf8");
   $consulta = "UPDATE productos SET Codigo='$cod', Seccion='$sec', Nombre_articulo='$nom', Precio='$pre', Pais_de_Origen='$por' WHERE Codigo='$cod'";
   $resultados = mysqli_query($conexion, $consulta);
   if($resultados==false){
       echo "Error en la consulta";
   }else {
       echo "<p>Articulo actualizado.</p><br><br>";
      echo "<table><tr><td>Codigo</td><td>$cod</td></tr>";
       echo "<tr><td>Seccion</td><td>$sec</td></tr>";
       echo "<tr><td>Nombre articulo</td><td>$nom</td></tr>";
       echo "<tr><td>Precio</td><td>$pre</td></tr>";
       echo "<tr><td>Pais de Origen</td><td>$por</td></tr></table><br><br>";
   }
echo "<a href='index.php'>Volver a formularios</a>";
mysqli_close($conexion);

?>

</body>
</html>