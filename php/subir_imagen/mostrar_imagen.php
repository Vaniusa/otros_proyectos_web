<?php
require ("conexion.php");
$sql="SELECT foto FROM subir_foto WHERE codigo='1'";
$resultado=$base->prepare($sql);
$resultado->execute(array());
while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
     if($fila['foto']!="vacio"){
		 echo "<img src='/temp/" . $fila['foto'] . "' width='300px' />";
		 echo "<br><br>";
		 echo "<a href='borrar.php'>Eliminar imagen</a>";
		 }else{
			 echo "Imagen no encontrada en la BBDD. <br><br>";
			 echo "<a href='index.php'>Volver</a>";
			 }
}
?>  


