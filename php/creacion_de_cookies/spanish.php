<?php
if(!$_COOKIE["idioma_seleccionado"]){
    header("location:index.php");
}else if($_COOKIE["idioma_seleccionado"]=="in") {
    header("location:english.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creacion de Cookies</title>
    <style>
    table{
          text-align: center;
    }
    h1 {
        text-align: center;
    }
    p{
        font-size: 1.5em;
        color:#00f;
    }
    </style>

</head>
<body>
 <h1> 3 Maravillas del mundo</h1>
<p>&nbsp;</p>
<p>Bienvenido a mi pagina de ejemplo. A continuacion podras ver una muestra de fotografias de las 3 maravillas del mundo</p>
 <p>&nbsp;</p>
<table width="=25%" border="0" align="center">
    <tr>
        <td><img src="img/piramida.jpg" width="250" height="187"></td>
        <td><img src="img/coliseo.jpeg" width="250" height="187"></td>
        <td><img src="img/muralla.jpg" width="250" height="187"></td>
    </tr>
    <tr>
        <td>Pirámides de Egipto</td>
        <td>Coliseo</td>
        <td>Gran Muralla China</td>
    </tr>
</table>
 <p><a href="destruye_cookie.php">Borrar cookies</a> </p>

</body>
</html>