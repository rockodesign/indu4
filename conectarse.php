<?php
function Conectarse()
{
	if
	(!($link=mysql_connect("localhost","root","")))
	{
		echo "Error conectando a la base de datos.";
		exit();
	}
	if (!mysql_select_db("indu4",$link))
	{
		echo "Error seleccionando la base de datos.";
		exit();
	}
	return $link;
}
Conectarse();
//echo "Conexi�n con la base de datos exitosa.<br>";
?>