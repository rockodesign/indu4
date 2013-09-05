<!doctype html>
<html lang="es">
<?php
		include("conectarse.php");
		$link=Conectarse();

		include ('header.php');
	?>
	<title>Descargas - Informatica - Industrial 4</title>
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
						<span class="titlegen1">Informática</span> <!--Subtitulo-->
					</div>
					<div id="subtiz">Descargas</div>
					<div id="cewdescri">
						Area de descargas<br><br>
						<!-- Formulario para Subir Archivo -->
						<div id="upl1">
							<form action="upload-informatica.php" method="post" enctype="multipart/form-data">
								<input name="titulo" type="text" size="30" class="inpdel" placeholder="Título de Archivo: "/><br><br>
								<input name="curso" type="text" size="30" class="inpdel" placeholder="Curso: "/><br><br>
								<input name="asignatura" type="text" size="30" class="inpdel" placeholder="Asignatura: "/><br><br>
								<input name="archivo" type="file" size="35" class="agredel"/><br><br>
								<input name="enviar" type="submit" value="Subir Archivo" class="agredel"/><br>
								<input name="action" type="hidden" value="upload"/>     
							</form>
						</div>
						<!-- Muestra Archivos Directorio -->
						<?php
							$query = "SELECT * from descargainformatica ORDER BY id DESC";
							$consulta = mysql_query($query, $link);
							while ( $fila = mysql_fetch_array($consulta, MYSQL_ASSOC)){
								printf("<article>Titulo: %s <br> Curso: %s - %s <br> <a href='%s' target='_blank'>[descargar]</a></article>", $fila['titulo'], $fila['curso'], $fila['asignatura'], $fila['ruta']);
							}
							// $dir = "datos";
							// // Abre el directorio, y muestra el contenido
							// if (is_dir($dir)){
							//   if ($dh = opendir($dir)){
							//     while (($file = readdir($dh)) !== false){
							//       echo "Archivo: " . $file . "<br>";
							//     }
							//     closedir($dh);
							//   }
							// }
						?>
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