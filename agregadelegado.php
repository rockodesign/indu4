<?php
include("conectarse.php");
$link=Conectarse();
	$nombre = $_REQUEST['nombre'];
	$curso = $_REQUEST['curso'];
	$cargo = $_REQUEST['cargo'];
$Sql="insert into delegados
(nombre,curso,cargo) values
('$nombre','$curso', '$cargo')";
mysql_query($Sql,$link);
header("Location: ce-delegados.php");
?>