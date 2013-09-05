<?php
	function delegadoslista()
	{
		?>
			<?php
				include("conectarse.php");
				$link=Conectarse();	
				$result=mysql_query("select * from delegados order by curso",$link);

			?>
			<table cellpadding="0" cellspacing="0" class="sqproduc">
				<tr>
					<td class="sqprod01">Nombre</td>
					<td class="sqprod02">Curso</td>
					<td class="sqprod02">Cargo</td>
					<td align="center" class="sqprod03">Eliminar</td>
				</tr>
				<?php
					while($row = mysql_fetch_array($result)) {
						printf("
							<tr class=filadato>
								<td>&nbsp;%s</td>
								<td>&nbsp;%s&nbsp;</td>
								<td>&nbsp;%s&nbsp;</td>
								<td align=center>
									<a href=\"borra.php?id=%d\">
										<img src=\"images/borrar1.png\">
									</a>
								</td>
							</tr>",
						$row["nombre"],$row["curso"],$row["cargo"],$row["id"]);
					}
					mysql_free_result($result);
				?>
			</table>
		<?php
	}
?>