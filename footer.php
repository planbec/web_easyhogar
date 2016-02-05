	<!-- Footer -->
	<footer id="main-footer">
		
		<div class="footer-call-to-action">
			
			<div class="contact">
				<h3>Cont&aacute;ctenos:</h3>
				Correo: info@burvillsa.com &nbsp; | &nbsp; mmartinez@burvillsa.com &nbsp; | &nbsp; eplaza@burvillsa.com &nbsp; | &nbsp; dimburvillsa@gmail.com<br>
				Celular: 0994067634 - 0959673655 &nbsp; | &nbsp; Tel&eacute;fono: (04) 2993083

				<!-- Footer-menu -->
				<!--nav id="footer-menu">
					<ul>
						<li><a href="index.php" <?php if($uri == 'index') echo 'class="active"'?> >Inicio</a></li>
						<li><a href="quienessomos.php" <?php if($uri == 'quienessomos') echo 'class="active"'?> >Quienes somos</a></li>
						<li><a href="productos.php" <?php if($uri == 'productos') echo 'class="active"'?> >Productos</a></li>
						<li><a href="contactos.php" <?php if($uri == 'contactos') echo 'class="active"'?> >Contactos</a></li>
					</ul>
				</nav -->

			</div>
			
		</div><!-- /.footer-call-to-action -->
		
		<div id="bottom-footer" class="container cf">
			
			<!-- Copyright -->
			<div class="copyright">
				&copy; Copyright 2015 BURVILL’S. Todos los derechos reservados.
			</div>

			<div class="planb">
				Desarrollado por 
				<a href="http://www.planb.ec" target="_blank"><img src="img/planb.jpg" title="PlanB.ec"></a>
			</div>
			

			
		</div><!-- /#bottom-footer -->
		
	</footer>


	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/rem.min.js"></script>
	<script src="js/functions.js"></script>
	
	<script>
		jQuery('document').ready(function($){
		
			$('.flexslider').flexslider({
				selector: ".slides > .testimonio",
				animation: "slide",
				controlNav: false,
				directionNav: true,
				prevText: "Anterior",
				nextText: "Siguiente", 
			});
		
		});
	</script>