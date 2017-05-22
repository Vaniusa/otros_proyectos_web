<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
  
  <?php
   include_once("../modelo/manejo_objetos.php");
   try{
	   $miconexion=new PDO('mysql:host=db_host.com; dbname=name', 'dbo_usuario', 'contraseña');
	   $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   $manejo_objetos=new manejo_objetos($miconexion);
	   $tabla_blog=$manejo_objetos->getContenidoPorFecha();
	   if(empty($tabla_blog)){
		echo "No hay entrada de blog aún";   
	   }else{
		  foreach($tabla_blog as $valor){
			echo "<h3>" . $valor->getTitulo() . "</h3>"; 
			echo "<h4>" . $valor->getFecha() . "</h4>";
			echo "<div style='width:400px'>";
			echo $valor->getComentario() . "</div>";
			if($valor->getImagen()!=""){
			echo "<img src='../../temp/";
			echo $valor->getImagen() . "' width='300px' height='200px'/>";
			}
			echo '<a href="index.php">Volver al formulario</a>';
			echo "<hr/>";
		  }
	   }
	    }catch(Exception $e){
	   
	die("Se ha producido un error: " . $e->getMessage());   
   }
  
  ?>
  <br/>
  
</body>
</html>
