<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema login</title>
    <style>
        h1{text-align: center}
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
session_start();
if(!isset($_SESSION["usuario"])){
    echo "Introduzca su datos o registrate.";
}else{
	echo "Usuario registrado correctamente, introduzca su datos.";
	}
?>
<h1> Registrate Aqui.</h1>
<form action="registra_usuario.php" method="post">
    <table>
        <tr><td class="izq">
        Login:</td><td class="der"><input type="text" name="login"></td> </tr>
        <tr><td class="izq">Password:</td><td class="der"><input type="password" name="password"></td> </tr>
        <tr><td colspan="2"><input type="submit" name="enviar" value="Registrate"> </td> </tr>
    </table>
</form>
<h1>Entra en la pagina</h1>
<form action="comprueba_login.php" method="post">
    <table>
        <tr><td class="izq">
        Login:</td><td class="der"><input type="text" name="login"></td> </tr>
        <tr><td class="izq">Password:</td><td class="der"><input type="password" name="password"></td> </tr>
        <tr><td colspan="2"><input type="submit" name="enviar" value="Entrar"> </td> </tr>
    </table>
</form>

<p id="ojo">Al registrarte o al entrar en la pagina, se crea automaticamente una SESSION para el usuario registrado.</p>

</body>
</html>