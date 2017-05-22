<?php
include ("conexion.php");
$id=$_GET["id"];
$base->query("DELETE FROM crud WHERE Id='$id'");
header("Location:index.php");