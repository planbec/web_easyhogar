<?php

/****************************************************************
Recibe los datos ingresados
****************************************************************/
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$asunto = $_POST['asunto'];
$comentario = $_POST['mensaje'];

if( empty($nombre) || empty($email) || empty($telefono) || empty($celular) || empty($asunto) || empty($comentario) ) {
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
Telefono: $telefono \n
Celular: $celular \n
Asunto: $asunto \n
Mensaje: $comentario \n
\n";

$from = "From: $email\r\n";



/****************************************************************
ingresa mail receptor
****************************************************************/

if( !$error ) {
	mail("info@easyhogar.com", $subject, $mensaje, $from);
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

				EASYHOGAR - Servicio dom&eacute;stico de confianza<br /><br />

				Este mensaje fue enviado al siguiente correo electrónico: info@easyhogar.com </p>
				
				</div>
			</header><!-- /.page-header -->
			
			
			
			<div class="container page-content">
			
				<?php if( $error ) { ?>
				
					<div class="alerta">
						Hubo un error, por favor completa todos los campos.
					</div>
				
				<form action="enviar.php" method="post">
					
					<input type="text" id="nombre" name="nombre" placeholder="Nombre:" required />
					
					<input type="text" id="email" name="email" placeholder="Email:" required />

					<input type="num" id="telefono" name="telefono" placeholder="Teléfono convencional:" required />

					<input type="num" id="celular" name="celular" placeholder="Celular:" required />
					
					<input type="text" id="asunto" name="asunto" placeholder="Asunto:" required />
					
					<textarea id="mensaje" name="mensaje" rows="8" placeholder="Mensaje:" required ></textarea>
					
					<input type="submit" value="Enviar mensaje" class="btn" />
				
				</form>
				
				<?php } else { ?>
				
					<p>Gracias por contactarte con nosotros, en breve responderemos su correo.</p>
				
				<?php } ?>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</main><!-- /#content-area -->
	
	
<?php include("footer.php"); ?>
	
</body>
</html>