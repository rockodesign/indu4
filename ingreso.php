<?php
$user = $_REQUEST['usr'];
$clave = $_REQUEST['clave'];
//////////////////////////////////////
if ($user == 'rocko' and $clave == 'jejex')
{
	include ('admin-panel.php');
}
else
{
	if ($user == 'pepe' and $clave == '11')
	{
		echo "Bienvenido al catalogo de compras";
	}
	else
	{
		echo "NO puede hacer pedidos, solo mira el catalogo";
	}
}
?>