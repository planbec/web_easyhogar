<?php include ("code-head.php"); ?>

<body>
<?php include("header.php"); ?>
	
	<main id="content-area">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">
					
					<h1><i class="fa fa-envelope-o"></i> Contactos</h1>					
				
				</div>
			</header><!-- /.page-header -->
			
			
			<div class="container contactos page-content">

					<p>Para comunicarte con nosotros puedes llamarnos a nuestros <strong>tel&eacute;fonos:</strong> 099 617 9227 - 099 617 1061, escribirnos al <strong>correo:</strong> <a href="mailto:info@easyhogar.com">info@easyhogar.com</a> o solo llena y env&iacute;a el siguiente formulario y nos pondremos en contacto a la brevedad posible.</p>

			
				<form action="enviar.php" method="post">
					
					<input type="text" id="nombre" name="nombre" placeholder="Nombre:" required />
					
					<input type="text" id="email" name="email" placeholder="Email:" required />
					
					<input type="text" id="asunto" name="asunto" placeholder="Asunto:" required />
					
					<textarea id="mensaje" name="mensaje" rows="8" placeholder="Mensaje:" required ></textarea>
					
					<input type="submit" value="Enviar mensaje" class="btn" />
				
				</form>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</main><!-- /#content-area -->
	
	
	
<?php include("footer.php"); ?>
	
</body>
</html>