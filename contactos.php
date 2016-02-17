<?php include ("code-head.php"); ?>

<body>
<?php include("header.php"); ?>
	
	<main id="content-area">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">
					
					<h1>Contactos</h1>
					
					<p>Si deseas comunicarte con nosotros puedes llamarnos a nuestros tel&eacute;fonos <br>o solo llena y env&iacute;a el siguiente formulario y nos pondremos en contacto a la brevedad posible.</p>
				
				</div>
			</header><!-- /.page-header -->
			
			
			
			<div class="container page-content">

				<div class="contactos">
					<p><strong>Correo:</strong> info@burvillsa.com   -   dimburvillsa@gmail.com<br>
					<strong>Celular:</strong> 0994067634 - 0959673655<br> 
					<strong>Teléfono:</strong> (04) 2993083</p>
				</div>



			
				<form action="enviar.php" method="post">
					
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" placeholder="¿Cual es tu nombre?" required />
					
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" placeholder="¿A donde debería responderte?" required />
					
					<label for="asunto">Asunto:</label>
					<input type="text" id="asunto" name="asunto" placeholder="¿Sobre qué producto te interesaría saber más?" required />
					
					<label for="mensaje">Mensaje:</label>
					<textarea id="mensaje" name="mensaje" rows="8" placeholder="Escribe aquí tus comentarios" required ></textarea>
					
					<input type="submit" value="Enviar mensaje" class="btn" />
				
				</form>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</main><!-- /#content-area -->
	
	<!-- Livemotive -->
	<section>
		<?php include("livemotive.php"); ?>
	</section>
	
	
<?php include("footer.php"); ?>
	
</body>
</html>