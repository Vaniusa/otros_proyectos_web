<?php
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamano_imagen=$_FILES['imagen']['size'];
      if($tamano_imagen<=200000){
          if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png"  || $tipo_imagen=="image/gif"){
              //ruta del la carpeta destino en servidor
              $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/temp/';      //ruta al la carpreta temporar dezde la raiz del servidor
              //movemos la imagen del ditectorio temporal al ditectorio escogido
              move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
               header("Location:mostrar_imagen.php");
          }else{
              echo "Solo se puede subir imagenes jpg/jpeg/png/gif  <br><br>";
			  echo  "<a href=index.php>Volver</a>";
          }
      }else{
          echo "El tamaño es demasiado grande <br> No mas de 200 kb. <br><br>";
		echo  "<a href=index.php>Volver</a>";
		      }
      require ("conexion.php");

$sql="update subir_foto set foto= '$nombre_imagen' WHERE codigo='1'";
$resultado=$base->prepare($sql);
$resultado->execute(array());

      