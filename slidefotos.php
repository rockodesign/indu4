<!-- Skitter Styles -->
	<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	
	<!-- Skitter JS -->
	<script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
	
	<!-- Init Skitter -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: true, 
				dots: true, 
				preview: true
			});
		});
	</script>
<?php
	function slidefotos()
	{
		?>
			<div id="borslide">
				<div class="eslay">
					<div class="border_box" align="center">
						<div class="box_skitter box_skitter_large" align="left">
							<ul>
								<li>
									<!-- <a href="#cube"> -->
										<img src="images/example/001.jpg" class="cube"/>
									<!-- </a>-->
									<div class="label_text">
										<p>Hinchada Intercolegiales 2010</p>
									</div>
								</li>
								<li>
										<img src="images/example/002.jpg" class="cubeRandom"/>
									<div class="label_text">
										<p>Colegio desde afuera</p>
									</div>
								</li>
								<li>
										<img src="images/example/003.jpg" class="block"/>
									<div class="label_text">
										<p>Bloque 3</p>
									</div>
								</li>
								<li>
										<img src="images/example/004.jpg" class="cubeStop"/>
									<div class="label_text">
										<p>Bloque 4</p>
									</div>
								</li>	
							</ul>
						</div>
					</div>
				</div>
			</div>
		<?php
	}
?>