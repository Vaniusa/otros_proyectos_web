<?php
require ("conexion.php");
$sql="update subir_foto set foto= 'vacio' WHERE codigo='1'";
$resultado=$base->prepare($sql);
$resultado->execute(array());
header("location:index.php");
