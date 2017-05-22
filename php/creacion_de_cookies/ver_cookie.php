<?php
if(!$_COOKIE["idioma_seleccionado"]){
    header("location:index.php");
}else if($_COOKIE["idioma_seleccionado"]=="es"){
    header("location:spanish.php");
}else if($_COOKIE["idioma_seleccionado"]=="in") {
    header("location:english.php");
}
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