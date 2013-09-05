<html>
	<?php 
		include ('header.php');
	?>
	<title>Intercolegiales - Industrial 4</title>
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
						<span class="titlegen1">intercolegiales</span> <!--Subtitulo-->
					</div>
					<div id="subtiz">Información</div>
					<div id="cewdescri">
						Los Juegos Intercolegiales buscan la práctica activa de los alumnos en el deporte, ayudando 
						a una mejora en la calidad de vida y a afianzar valores como la solidaridad, compañerismo y 
						el respeto, para una mejor convivencia social.<br><br>
						Participan chicos del Tercer Ciclo de EGB, Polimodal, Educación Técnica y de jóvenes y adultos de 
						instituciones públicas y privadas del sistema educativo. El evento, organizado por la Coordinación 
						de los Juegos, del Area Infancia y Juventud del CPE, abarca las etapas locales y zonales, que se 
						extenderán durante octubre; la instancia provincial, en fecha a confirmar; y la nacional que se llevará 
						a cabo del 31 de octubre al 5 de noviembre en Mar del Plata.<br><br>
					</div>
					<div id="subtiz">nuestros deportistas</div>
					<div id="cewdescri">
						Nuestro Colegio Industrial desde hace años se destaca por sus exitosos resultados en los juegos
						Intercolegiales en diversos deportes. Esto marca la voluntad y el compromiso de nuestros jugadores
						a la hora de enfrentar una competencia de esta magnitud.
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