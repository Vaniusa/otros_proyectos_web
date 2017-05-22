<?php
if(!$_COOKIE["idioma_seleccionado"]){
    header("location:index.php");
}else if($_COOKIE["idioma_seleccionado"]=="es"){
    header("location:spanish.php");
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
<h1> 3 Wonders of the World</h1>
<p>&nbsp;</p>
<p>Welcome ti my example webpage. Then you will see an exhibition of the 3 Wonders of the World pictures</p>
<p>&nbsp;</p>
<table width="=25%" border="0" align="center">
    <tr>
        <td><img src="img/piramida.jpg" width="250" height="187"></td>
        <td><img src="img/coliseo.jpeg" width="250" height="187"></td>
        <td><img src="img/muralla.jpg" width="250" height="187"></td>
    </tr>
    <tr>
        <td>Egyptian pyramids</td>
        <td>Coliseum</td>
        <td>Great Wall of China</td>
    </tr>
</table>

<p><a href="destruye_cookie.php">Borrar cookies</a> </p>

</body>
</html>