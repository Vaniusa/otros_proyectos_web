<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Bienvenido --<?php
echo $_SESSION["usuario"];
?>-- pagina 2</h1>

<p>Este es el sitio para usuario registrados.</p>
<p><a href="usuarios_registrados1.php">Volver</a> </p>
<p><a href="cerrar.php">Cerrar session</a> </p>
</body>
</html>
