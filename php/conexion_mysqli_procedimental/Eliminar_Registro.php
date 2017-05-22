<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

  
require ("conexion_bbdd.php");

$conexion = mysqli_connect($db_host,$db_usuario,$db_contra);
$cod = mysqli_real_escape_string($conexion,$_GET["art"]);

   if(mysqli_connect_errno()){
       echo "Fallo al conectar con la BBDD";
       exit();
   }

   mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
   mysqli_set_charset($conexion, "utf8");
   $consulta = "DELETE FROM productos WHERE Codigo='$cod'";
   $resultados = mysqli_query($conexion, $consulta);
   if($resultados==false){
       echo "<p>Error en la consulta</p>";
   }else{
       if(mysqli_affected_rows($conexion)==0){
           echo "<p>No hay registros que eliminar con este criterio</p>";
       }
      else {
          echo "<p>Se han eliminado " . mysqli_affected_rows($conexion) . " registros</p>";
      }
   }
echo "<a href='index.php'>Volver a formularios</a>";

mysqli_close($conexion);

?>

</body>
</html>