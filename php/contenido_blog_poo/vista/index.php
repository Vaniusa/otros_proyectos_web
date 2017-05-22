<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contenido Blog</title>
<style>

h2{
	text-align:center;
}

table{
	width:50%;
	margin:auto;
	background-color:#FF9;
	border:solid 2px #FF9900;
	padding:5px;
	
}
#ojo{
	font-size:1.5em;
	margin:200px auto;
	padding:20px;	
	width:60%;
	background-color:#F00;
	text-align:center;
	color:#FFF;
}

td{
	padding:5px 0;
}


</style>
</head>

<body>
<h2>Nueva entrada</h2>
<form action="../controlador/transacciones.php" method="post" enctype="multipart/form-data" name="form1">
<table >
<tr>
  <td>Título: 
    <label for="campo_titulo"></label></td>
  <td><input type="text" name="campo_titulo" id="campo_titulo"></td>
  
  
  </tr>
  <tr><td>Comentarios: 
    <label for="area_comentarios"></label></td>
    <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea></td>
    </tr>
    <input type="hidden" name="MAX_TAM" value="2097152">
  <tr>
  <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td></tr>
  <tr>
    <td colspan="2" align="left"><input type="file" name="imagen" id="imagen"></td>
    </tr>
    <tr>
    <td colspan="2" align="center">  
    <input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar"></td></tr>
  <tr><td colspan="2" align="center"><a href="mostrar_blog.php">Página de visualización del blog</a></td><td><a href="../../">Salir</a></td></tr>
  
  </table>
</form>
<p>&nbsp;</p>

<p id="ojo">Esta aplicacion es creada al estilo Orientado a Objetos, con clase, metodos, y atributos, mas utilizando libreria PDO. <br/>
La aplicacion esta basada en el patron MVC, los 5 archivos son repartidos en 3 carpetas (2 modelo, 2 vista y 1 controlador).</p>

</body>
</html>