<?php

/****************************************************************
Recibe los datos ingresados
****************************************************************/
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$comentario = $_POST['mensaje'];

if( empty($nombre) || empty($email) || empty($asunto) || empty($comentario) ) {
	$error = true;
}


/****************************************************************
Aquí debes ingresar el asunto del mail
****************************************************************/
$subject = 'Contacto desde internet de ' . $nombre ;
$comentario = stripcslashes($comentario);



/****************************************************************
Aquí se genera el cuerpo del mensaje
****************************************************************/
$mensaje = "De: $nombre \n
E-mail: $email \n
Asunto: $asunto \n
Mensaje: $comentario \n
\n";

$from = "From: $email\r\n";



/****************************************************************
ingresa mail receptor
****************************************************************/

if( !$error ) {
	mail("dimburvillsa@gmail.com", $subject, $mensaje, $from);
}
?>
				
<?php include ("code-head.php"); ?>

<body>
<?php include("header.php"); ?>
	
	<main id="content-area">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">
					
					<h1>Contacto</h1>
					
					<p>Gracias por enviar tus comentarios y/o sugerencias<br />
					En un lapso de 24 horas responderemos a su correo electr&oacute;nico.<br /><br />

					Atentamente,<br />

				BURVILL’S / Contenedores mar&iacute;timos<br /><br />

				Este mensaje fue enviado al siguiente correo electrónico: info@burvillsa.com </p>
				
				</div>
			</header><!-- /.page-header -->
			
			
			
			<div class="container page-content">
			
				<?php if( $error ) { ?>
				
					<div class="alerta">
						Hubo un error, por favor completa todos los campos.
					</div>
				
					<form action="enviar.php" method="post">
						
						<label for="nombre">Nombre:</label>
						<input type="text" id="nombre" name="nombre" placeholder="¿Cómo te llamas?" value="<?php echo $nombre; ?>" required />
						
						<label for="email">Email:</label>
						<input type="text" id="email" name="email" placeholder="¿A donde debería responderte?" value="<?php echo $email; ?>"  required />
						
						<label for="asunto">Asunto:</label>
						<input type="text" id="asunto" name="asunto" placeholder="¿Sobre qué quieres conversar?" value="<?php echo $asunto; ?>"  required />
						
						<label for="mensaje">Mensaje:</label>
						<textarea id="mensaje" name="mensaje" rows="8" placeholder="Aquí debes explayarte" required ><?php echo $comentario; ?></textarea>
						
						<input type="submit" value="Enviar mensaje" class="btn" />
					
					</form>
				
				<?php } else { ?>
				
					<p>Gracias por contactarte conmigo, responderé lo más pronto que pueda :)</p>
				
				<?php } ?>
			
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