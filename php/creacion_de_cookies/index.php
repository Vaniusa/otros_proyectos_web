<?php
if(isset($_COOKIE["idioma_seleccionado"])) {
    if ($_COOKIE["idioma_seleccionado"] == "es") {
        header("location:spanish.php");
    } else if ($_COOKIE["idioma_seleccionado"] == "in") {
        header("location:english.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creacion de Cookies</title>
    <style>
	#ojo{
	font-size:1.5em;
	margin:400px auto;
	padding:20px;	
	width:60%;
	background-color:#F00;
	text-align:center;
	color:#FFF;
}
    </style>
</head>
<body>
<table width="25%" border="0" align="center">
    <tr>
        <td colspan="2" align="center"><h1>Elige idioma</h1> </td>
   </tr>
    <tr>
        <td align="center"><a href="creaCookie.php?idioma=es"><img src="img/espana.jpg" width="90" height="60"></a> </td>
        <td align="center"><a href="creaCookie.php?idioma=in"><img src="img/english.jpg" width="90" height="60"></a> </td>
    </tr>
</table>
<p id="ojo">Al elegir una idioma, se crea una COOKIE con el nombre "idioma_seleccionado".
Tiempo de validez de 2 minutos.</p>
</body>
</html>