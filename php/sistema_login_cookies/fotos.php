<?php
if(isset($_COOKIE["nombre_usuario"])){
    echo  "Hola " . $_COOKIE["nombre_usuario"];
}elseif ($GLOBALS=['autentificado']==true){
    echo "Hola " . $_POST["login"];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Contenido de la pagina web</h2>


<table width="800" border="0">
    <tr>
        <td><img src="img/apa.jpg" width="300" heigth="166"></td>
        <td><img src="img/chile.jpg" width="300" heigth="166"></td>
    </tr>
    <tr>
        <td><img src="img/faranume.jpg" width="300" heigth="166"></td>
        <td><img src="img/peizaj.jpg" width="300" heigth="166"></td>
    </tr>
</table>
<p><a href="serar.php">Salir y borrar cookies</a> </p>

</body>
</html>