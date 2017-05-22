<?php
    setcookie("idioma_seleccionado", $_GET["idioma"], time()+120);	
header("location:ver_cookie.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>