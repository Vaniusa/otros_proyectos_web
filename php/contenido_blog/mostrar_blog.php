<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
   $miconexion=mysqli_connect("db_host.com","dbo_usuario", "contraseña", "db_name");
  if(!$miconexion){
      echo "La conexion ha fallado: " . mysqli_errno();
      exit();
  }
  
  $miconsulta="select * from contenido_blog order by fecha desc";
  if($resultado=mysqli_query($miconexion,$miconsulta)){
	while($registro=mysqli_fetch_assoc($resultado)){
		echo "<h3>" . $registro['Titulo'] . "</h3>";
		echo "<h4>" . $registro['Fecha'] . "</h4>";
		echo "<div style='width:400px'>" . $registro['Comentario'] . "</div><br/><br/>";
		if($registro['Imagen']!=""){
			echo "<img src='/temp/" . $registro['Imagen'] . "' width='300px' />";
			echo '<a href="index.php">Añadir nueva entrada.</a><br>';
			}
			echo "<hr/>";
				}	
  }
?>
 
</body>
</html>
