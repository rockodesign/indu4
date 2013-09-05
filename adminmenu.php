<?php
	function adminmenu()
	{
		?>
			<div id="admintitle">
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
							<span class="titlegen1">electromecánica</span><br> <!--Subtitulo-->
						</div>
						<div id="subtiz">Información</div>
						<div id="cewdescri">
							Información...
						</div>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		<?php
	}
?>