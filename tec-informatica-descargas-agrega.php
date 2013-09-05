<?php
include("conectarse.php");
$link=Conectarse();
	$titulo = $_REQUEST['titulo'];
	$curso = $_REQUEST['curso'];
	$asignatura = $_REQUEST['asignatura'];
$Sql="insert into descargainformatica
(titulo,curso,asignatura) values
('$titulo','$curso','$asignatura')";
mysql_query($Sql,$link);
header("Location: tec-informatica-descargas.php");
?>