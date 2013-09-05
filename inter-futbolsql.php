<?php
	function interfutbol()
	{
		?>
			<?php
				include("conectarse.php");
				$link=Conectarse();	
				$result=mysql_query("select * from futbol order by jugador",$link);

			?>
			<table cellpadding="0" cellspacing="0" class="sqproduc">
				<tr>
					<td class="sqprod01">Jugador</td>
					<td class="sqprod02">Curso</td>
					<td class="sqprod02">Edad</td>
					<td align="center" class="sqprod02">Categ.</td>
					<td align="center" class="sqprod03">Eliminar</td>
				</tr>
				<?php
					while($row = mysql_fetch_array($result)) {
						printf("
							<tr class=filadato>
								<td>&nbsp;%s</td>
								<td>&nbsp;%s&nbsp;</td>
								<td align=center>&nbsp;%s&nbsp;</td>
								<td align=center>&nbsp;%s&nbsp;</td>
								<td align=center>
									<a href=\"borrafutbol.php?id=%d\">
										<img src=\"images/borrar1.png\">
									</a>
								</td>
							</tr>",
						$row["jugador"],$row["curso"],$row["edad"],$row["categoria"],$row["id"]);
					}
					mysql_free_result($result);
				?>
			</table>
		<?php
	}
?>