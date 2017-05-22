<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table{
            margin:auto;
            width: 450px;
            border: 2px solid #039;
        }
		#ojo{
	font-size:1.5em;
	margin:60px auto;
	padding:20px;	
	width:60%;
	background-color:#F00;
	text-align:center;
	color:#FFF;
}
    </style>
</head>
<body>
<form action="datosImagen.php" method="post" enctype="multipart/form-data">
    <table>
        <tr><td><label for="imagen">Imagen:</label></td><td><input type="file" name="imagen" size="20"></td></tr>
        <tr><td colspan="2" style="text-align: center"><input type="submit" value="Enviar Imagen"></td><td><a href="../">Salir</a></td> </tr>
    </table>
</form>
<p id="ojo">Subir una imagen en una carpeta del servidor y guardar la ruta en la BBDD y mostrarla. <br>
Tamaño < 200 kb <br>
Tipo = jpg/jpeg/png/gif.</p>
</body>
</html>