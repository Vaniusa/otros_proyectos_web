<?php
try{
   $base=new PDO("mysql:host=db_host.com; dbname=db_name" , "dbo_usuario" , "contraseña");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO sistema_login (usuarios, password) values ( :login, :password)";
    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){
        session_start();
        $_SESSION["usuario"]=$_POST["login"];
        header("location:index.php");
    }else{
        header("location:index.php");
    }
}catch(Exception $e){
    die("Error: " . $e->getMessage());
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
