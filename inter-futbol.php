<html>
	<?php 
		include ('header.php');
	?>
	<title>Futbol - Intercolegiales - Industrial 4</title>
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
						<span class="titlegen1">Intercolegiales</span><br> <!--Subtitulo-->
					</div>
					<div id="subtiz">Fútbol</div>
					<div id="cewdescri">
						Información...<br><br><br>
						<?php 
							include ('inter-futbolsql.php');
							interfutbol();
						?>
						<br><br><br>
						<!-- Nuevo Artículo -->
							<div id="campreg">
								<span class="nuevdel">- Nuevo Jugador -</span><br><br>
								<form action="agregafutbol.php">
											<input type="text" class="inpdel" name="jugador" placeholder="Nombre y Apellido" size="50" maxlength="50"><br><br>
											<input type="text" class="inpdel" name="curso" placeholder="Curso" size="50" maxlength="50"><br><br>
											<input type="text" class="inpdel" name="edad" placeholder="Edad" size="50" maxlength="50"><br><br>
											<input type="radio" name="categoria" value="Sub16" class="inradio"><span class="deltext">Sub 16</span>
											<input type="radio" name="categoria" value="Sub19" class="inradio"><span class="deltext">Sub 19</span><br><br>
											<input type="submit" class="agredel" name="accion" value="Agregar" class="ingresar">
								</form>
							</div>
						<!-- Nuevo Artículo -->
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