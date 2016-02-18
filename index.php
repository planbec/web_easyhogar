<?php include ("code-head.php"); ?>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php include("header.php"); ?>
	
	<main id="content-area">

	<!-- Flexslider -->
	<aside id="testimonios-area">
		<?php include("flexslider.php"); ?>
	</aside>
		
	<!-- Servicios -->	
		<?php include("servicios-home.php"); ?>
	
	</main>
	

	<!-- Livemotive -->
	<section>
		<?php include("widget-home.php"); ?>
	</section>
	
	
<?php include("footer.php"); ?>

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

</body>
</html>