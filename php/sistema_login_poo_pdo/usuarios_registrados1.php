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
?>--</h1>

<p>Este es el sitio para usuario registrados.</p>
<p><a href="usuarios_registrados2.php">Pagina 1</a> </p>
<p><a href="usuarios_registrados3.php">Pagina 2</a> </p>
<p><a href="usuarios_registrados4.php">Pagina 3</a> </p>
<p><a href="serar.php">Serrar session</a> </p>
</body>
</html>