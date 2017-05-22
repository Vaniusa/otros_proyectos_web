<?php

   include_once ("../modelo/objeto_blog.php");
   include_once ("../modelo/manejo_objetos.php");
   
   try{
	   $miconexion=new PDO('mysql:host=db_host.com; dbname=name', 'dbo_usuario', 'contraseña');
	   $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
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
       $manejo_objetos=new manejo_objetos($miconexion);
	   $blog=new objeto_blog();
	   $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
	   $blog->setFecha(Date("Y-m-d H:i:s"));
	   $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
	   $blog->setImagen($_FILES["imagen"]["name"]);
	   $manejo_objetos->insertaContenido($blog);
	   echo "<br/> La entrada se ha agregado con exito <br/>";

   }catch(Exception $e){
	   
	die("Se ha producido un error: " . $e->getMessage());   
   }
   echo "<br/>";
   echo '<a href="../vista/index.php">Volver al formulario</a><br/>';
   echo '<a href="../vista/mostrar_blog.php">Mostrar las entradas</a>';
 
	?>
