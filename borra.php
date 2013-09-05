<?php
include("conectarse.php");
$link=Conectarse();
$id = $_REQUEST['id'];
mysql_query("delete from delegados where id = $id",$link);
header("Location: ce-delegados.php");
?>