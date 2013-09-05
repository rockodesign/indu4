<?php
include("conectarse.php");
$link=Conectarse();
$id = $_REQUEST['id'];
mysql_query("delete from futbol where id = $id",$link);
header("Location: inter-futbol.php");
?>