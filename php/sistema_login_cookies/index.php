<?php
$auntenticado=false;

if(isset($_POST["enviar"])){
    try {
        $base=new PDO("mysql:host=db_host.com; dbname=name" , "dbo_usuario" , "contraseña");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM sistema_login WHERE USUARIOS= :login AND PASSWORD= :password";
        $resultado = $base->prepare($sql);
        $login = htmlentities(addslashes($_POST["login"]));
        $password = htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();
        if ($numero_registro != 0) {
  $auntenticado=true;
            if (isset($_POST["recordar"])){
                setcookie("nombre_usuario", $_POST["login"], time()+120);
              }
        } else {
            echo "Error. Usuarion o contraseña incorecta.";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        h1,h2{text-align: center}
        table{
            width: 25%;
            background-color:#FFC;
            border: 2px dotted #f00;
            margin:auto;
        }
        .izq{text-align: right}
        .der{text-align: left}
        td{text-align: center;
        padding: 10px;
        }
#ojo{
	font-size:1.5em;
	margin:60px auto;
	padding:20px;	
	width:60%;
	background-color:#F00;
	text-align:center;
	color:#FFF;
}
    </style>
</head>
<body>

<?php
if($auntenticado==false) {
    if (!isset($_COOKIE["nombre_usuario"])) {
        include("formulario.html");
    }else{
        include "fotos.php";
    }


}else{
    include "fotos.php";
}



?>

</body>
</html>
