<html>
	<?php 
		include ('header.php');
	?>
	<title>Delegados - Centro de Estudiantes - Industrial 4</title>
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
						<span class="titlegen1">Centro de estudiantes</span><br> <!--Subtitulo-->
					</div>
					<div id="subtiz">delegados y subdelegados</div>
					<div id="cewdescri">
						El cuerpo de delegados se conforma con un representante titular y otro suplente por cada año y división. La 
						elección de los delegados, se realiza pasado el mes de clases (para concercerse entre los alumnos) y es 
						mediante votación entre los compañeros de curso, y se elige por simple mayoría de votos.<br><br>
						El Delegado es el representante del curso y la voz cantante de cada curso del Industrial
						para la fluida comunicacion del alumnado con el Centro de Estudiantes.
						<br><br><br>
						<?php 
							include ('ce-delegadoslista.php');
							delegadoslista();
						?>
						<br><br>
						<!-- Nuevo Artículo -->
							<div id="campreg">
								<span class="nuevdel">- Nuevo delegado -</span><br><br>
								<form action="agregadelegado.php">
										<input type="text" class="inpdel" name="nombre" placeholder="Nombre" size="50" maxlength="50"><br><br>
										<input type="text" class="inpdel" name="curso" placeholder="Curso" size="50" maxlength="50"><br><br>
										<input type="radio" name="cargo" value="Delegado" class="inradio"><span class="deltext">Delegado</span>
										<input type="radio" name="cargo" value="Sub Delegado" class="inradio"><span class="deltext">Sub Delegado</span><br><br>
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