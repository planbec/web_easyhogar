	<!-- Main-header -->
	<header id="main-header" class="">
		<div class="header-cont">
			<!-- Logo-header -->
			<div class="logo-header">
				<h1 class="logo">
					<a href="index.php">
						<img src="img/logo-burvills.png" alt="Burvill's - Contenedores marítimos"  title="Burvill's - Contenedores marítimos" width="240"></h1>
					</a>
				<h2 class="slogan">Contenedores mar&iacute;timos</h2>
			</div>
			
			<span class="menu-trigger"><i class="fa fa-bars"></i></span>
			
			<!-- Main-menu -->
			<nav id="main-menu" role="navigation" class="closed">
				<ul>
					<li><a href="index.php" <?php if($uri == 'index') echo 'class="active"'?> >Inicio</a></li>
					<li><a href="quienessomos.php" <?php if($uri == 'quienessomos') echo 'class="active"'?> >Quienes somos</a></li>
					<li><a href="productos.php" <?php if($uri == 'productos') echo 'class="active"'?> >Productos</a></li>
					<li><a href="contactos.php" <?php if($uri == 'contactos') echo 'class="active"'?> >Contactos</a></li>
				</ul>
			</nav>
		</div>
	</header>