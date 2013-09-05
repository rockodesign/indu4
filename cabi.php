<html>
	<?php 
		include ('header.php');
	?>
	<title>CABI - Industrial 4</title>
	<body>
		<?php 
			include ('encabezado.php');
			encabezado();
			include ('menuprincipal.php');
			menuprincipal();
		?>
		<div id="genweb"> <!-- General -->
			<div id="cew01">
				<div class="divizq"> <!--Menu Vertical-->
				 	<div>
				    	<?php 
							include ('menusecun.php');
							menusecun();
						?>
				    </div>
				</div>
				<div class="divder"> <!--Contenido Web-->
					<div id="titlece">
						<span class="titlegen1">COLEGIOS ABIERTOS</span> <!--Subtitulo-->
					</div>
					<div id="subtiz">Que es el cabi</div>
					<div id="cewdescri">
						Se llama Colegios Abiertos y es un espacio de participación e integración que se da a través de talleres, en los que se pretende reforzar los vínculos interpersonales, la participación comunitaria, la comunicación y el sentido de pertenencia a la comunidad e institución. 
						Para el CABI del Industrial 4 es importante reconocer la diversidad cultural a través del respeto hacia otras personas y a otras culturas, fomentando valores como la cooperación y la solidaridad.<br><br>
						Los talleres funcionan los días Sábados, desde las 14hs hasta las 20hs.<br><br>
					</div>
					<div id="subtiz">talleres</div>
					<div id="cewdescri">
						<table class="tabcabi" cellspacing="0" cellpadding="0">
							<tr>
								<td class="tabcabi2">
									<a href="cabi-revista.php">
										<img src="images/cabi-revista.jpg">
									</a>
								</td>
								<td class="tabcabi2">
									<a href="cabi-breakdance.php">
										<img src="images/cabi-breakdance.jpg">
									</a>
								</td>
							</tr>
							<tr>
								<td class="tabcabi2">
									<a href="cabi-futbol.php">
										<img src="images/cabi-futbol.jpg">
									</a>
								</td>
								<td class="tabcabi2">
									<a href="cabi-handball.php">
										<img src="images/cabi-handball.jpg">
									</a>
								</td>
							</tr>
							<tr>
								<td class="tabcabi2">
									<a href="cabi-guitarra.php">
										<img src="images/cabi-guitarra.jpg">
									</a>
								</td>
								<td class="tabcabi2">
									<a href="cabi-dibujo.php">
										<img src="images/cabi-dibujo.jpg">
									</a>
								</td>
							</tr>
							<tr>
								<td class="tabcabi2">
									<a href="cabi-murga.php">
										<img src="images/cabi-murga.jpg">
									</a>
								</td>
								<td class="tabcabi2">
									<a href="cabi-teatro.php">
										<img src="images/cabi-teatro.jpg">
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
		<?php 
			include ('piepagina.php');
			piepagina();
		?>
	</body>
</html>