<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contenido Blog</title>
<body>
<?php
  $miconexion=mysqli_connect("db_host.com","dbo_usuario", "contraseña", "db_name");
  if(!$miconexion){
      echo "La conexion ha fallado: " . mysqli_errno();
      exit();
  }
  if($_FILES['imagen']['error']){
      switch ($_FILES['imagen']['error']){
          case 1:
              echo "El tamaño del archivo supera el limite permitido por el seridor";
              break;
          case 2:
              echo "El tamaño del archivo supera el tamaño permitido por el formulario";
              break;
          case 3:
              echo "El envio del archivo se ha interrumpido durante la transmision";
              break;
          case 4;
              echo "El tamaño del archivo es nulo o no se ha enviado el archivo";
              break;
      }
  }else{

      echo "No hay error en la transferencia del archivo. <br>";
      if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK))){
       $destino_de_ruta=$_SERVER['DOCUMENT_ROOT'].'/temp/';
          move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta.$_FILES['imagen']['name']);
          echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
      }else{
          echo "El archivo no se ha copiado en el directorio de imagenes";
      }
}

    $eltitulo=$_POST['campo_titulo'];
    $lafecha=date("Y-m-d H:i:s");
    $elcomentario=$_POST['area_comentarios'];
    $laimagen=$_FILES['imagen']['name'];

     $miconsulta="INSERT INTO contenido_blog (Titulo, Fecha, Comentario, Imagen) VALUES ('" . $eltitulo . "' , '" . $lafecha . "', '" . $elcomentario . "', '" . $laimagen . "')";
     $resultado=mysqli_query($miconexion, $miconsulta);
    // ceramos la conexion
    mysqli_close($miconexion);
    echo "<br> Se ha agregado comentario con exito. <br><br>";
	?>
    <a href="index.php">Añadir nueva entrada.</a><br>
    <a href="mostrar_blog.php">Ver todas las entradas</a>
    
		</body>
</html>
