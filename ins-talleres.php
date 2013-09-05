<html>
	<?php 
		include ('header.php');
	?>
	<title>Talleres - Institucion - Industrial 4</title>
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
						<span class="titlegen1">institución</span> <!--Subtitulo-->
					</div>
					<div id="subtiz">talleres</div>
					<div id="cewdescri">
						Información...
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