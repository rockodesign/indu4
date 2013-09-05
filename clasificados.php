<html>
	<?php 
		include ('header.php');
	?>
	<title>Clasificados - Industrial 4</title>
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
						<span class="titlegen1">Clasificados</span><br> <!--Subtitulo-->
					</div>
					<div id="cewdescri">
						Si tenés algún libro, mameluco o tablero de dibujo que ya no usas, publicalo en este espacio. Seguro alguién te va a comunicar.<br><br>
						<center><img src="images/clasititl.png"><br><br>
						</center>
						<!-- Comentarios Facebook -->
							<div id="fb-root"></div> 
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
							<div class="fb-comments" data-href="http://www.industrial4.com.ar/clasificados" data-width="600"></div>
						<!-- Comentarios Facebook -->
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