<?php
     include ("conexion.php");
//----------------------------------------------------PAGINACION-------------------------------------------------

$tamano_paginas=5;
if(isset($_GET["pagina"])){
  if ($_GET["pagina"]==1){
    header("Location:index.php");
  }else{
    $pagina=$_GET["pagina"];
  }
}else{
  $pagina=1;
}
$empezar_desde=($pagina-1)*$tamano_paginas;
$sql_total="SELECT * FROM crud";
$resultado=$base->prepare($sql_total);
$resultado->execute(array());
$num_filas=$resultado->rowCount();
$total_paginas=ceil($num_filas/$tamano_paginas);
echo $resultado->length;

//------------------------------------------------------------------------------------------



    //$conexion=$base->query("SELECT * DATOS_USUARIOS");                              //almacenamos un resultset
    // $registros=$conexion->fetchAll(PDO::FETCH_OBJ);                                 //almacenamos un array de objetos
     $registros=$base->query("SELECT * FROM crud LIMIT $empezar_desde, $tamano_paginas")->fetchAll(PDO::FETCH_OBJ);    // almasena en un array(registros) cada consulta(query) a traves dela conexion($base)
if(isset($_POST['cr'])){
  $nombre=$_POST['Nom'];
  $apellido=$_POST['Ape'];
  $direccion=$_POST['Dir'];
  $sql="INSERT INTO crud (Nombre, Apellido, Direccion) VALUES (:nom, :ape, :dir)";
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));
  header("Location:index.php");
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>


<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" METHOD="post">
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>
    <?php     foreach ($registros as $persona) :    ?>                        <!------------------ $registros= array de usuario--------repite el bucle por cada $persona en array-->


   	<tr>
      <td><?php echo $persona->Id?></td>
      <td><?php echo $persona->Nombre?></td>
      <td><?php echo $persona->Apellido?></td>
      <td><?php echo $persona->Direccion?></td>
                                                           <!--abajo se pasa por la URL a la pagina "borrar.php" el ID de cada persona donde se encuentra el bucle foreach -->
      <td class="bot"><a href="borrar.php?id=<?php echo $persona->Id?>"> <input type='button' name='del' id='del' value='Borrar'></a></td>
                                                                                       <!--abajo se pasa por la URL a la pagina editar.php el ID, NOMBRE, APELLIDO, DIRECCION-->
      <td class='bot'><a href="editar.php?id=<?php echo $persona->Id?> & nom=<?php echo $persona->Nombre?> & ape=<?php echo
        $persona->Apellido?> & dir=<?php echo $persona->Direccion?>"> <input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>       
	<tr>
      <?php
      endforeach;                                                                //aqui termina el bucle foreach,
      ?>




	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
      <tr><td colspan="4"><?php   //----------------------------------------------------------------paginacion----------------------
          for($i=1; $i<=$total_paginas; $i++){
            echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";
          }
          ?></td></tr>
  </table>
</form>

</body>
</html>
