<?php
require ("LasConsultas.php");
$cod =$_GET["art"];
$productos=new LasConsultas();
$productos->eliminar($cod);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
 Registro eliminado

</body>
</html>