<html>
	<?php 
		include ('header.php');
	?>
	<title>Centro de Estudiantes - Industrial 4</title>
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
					<div id="subtiz">¿Que es?</div>
					<div id="cewdescri">
						Es una organización democrática de representación de los estudiantes dentro del colegio Industrial 4. Conformado por el alumnado de la Institución.<br><br>
					</div>
					<div id="subtiz">¿como funciona?</div>
					<div id="cewdescri">	
							Tres organismos dan forma y funcionamiento a los centros de Estudiantes: <br><br>
								<span class="vinncew">1) Asamblea general: </span>La asamblea general es el órgano máximo, y actúa como órgano 	máximo de apelación de las resoluciones emanadas del centro de estudiantes, y está conformada por todos los alumnos de la escuela, profesores, auxiliares de educación y autoridades.<br>
								<span class="vinncew">2) Delegados: </span>El cuerpo de delegados se conforma con un representante titular y otro suplente por cada año y división. La elección de los delegados es mediante votación entre los compañeros de curso, y se elige por simple mayoría de votos.<br>
								<span class="vinncew">3) Comisión Directiva: </span>La comisión directiva es el órgano ejecutivo del centro de estudiantes, y actúan de forma autónoma de las autoridades de la escuela. <br><br>
					</div>
					<div id="subtiz">Eventos</div>
					<div id="cewdescri">
						Para el cumplimiento de sus objetivos, el Centro de Estudiantes realiza diferentes actividades o eventos a
						lo largo del año, los cuales generan la recreación y conformación de la hermandad entre los alumnos
						de la Institución. entre ellos se destacan:<br><br>
						<ul>
							<li>Organización de certámenes deportivos.</li>
							<li>Participación e integración del alumnado en los talleres de CABI's (Colegios Abiertos).</li>
							<li>Semana de los Estudiantes (Interbandos).</li>
							<li>Participación de la Hinchada en los Juegos Intercolegiales.</li>
							<li>Elección de la Reina, Rey y Mariposón.</li>
							<li>Viajes de estudio, acantonamientos.</li>
							<li>Presentación de Carroza y Murga.</li>
							<li>Semana de la Educación Técnica.</li>
						</ul><br><br>
					</div>
					<div id="subtiz">remeras</div>
					<div id="cewdescri">
						<img src="images/RemeraCE1.jpg">
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