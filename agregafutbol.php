<?php
include("conectarse.php");
$link=Conectarse();
	$jugador = $_REQUEST['jugador'];
	$curso = $_REQUEST['curso'];
	$edad = $_REQUEST['edad'];
	$categoria = $_REQUEST['categoria'];
$Sql="insert into futbol
(jugador,curso,edad,categoria) values
('$jugador','$curso','$edad','$categoria')";
mysql_query($Sql,$link);
header("Location: inter-futbol.php");
?>