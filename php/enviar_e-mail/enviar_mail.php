<?php

if(isset( $_POST["enviar"])) {

  if ($_POST["nombre"] == "" || $_POST["apellido"] == "" || $_POST["email"] == "" || $_POST["comentarios"] == "") {
    echo " Revisa los campos. " . "<br>";
    include "index.php";

  } else {

    $texto_mail = $_POST["comentarios"];
    $destinatario = $_POST["email"];
    $asunto = $_POST["asunto"];
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: Mensaje de prueba.< contacto@vaniusa.eu >\r\n";
    $exito = mail($destinatario, $asunto, $texto_mail, $headers);
  
  if ($exito) {
    echo "Mensage enviado con exito";
    require_once "index.php";
  } else {
    echo "Fallo de conexion, intenta otra vez.";
    require_once "index.php";
  }}
}
?>