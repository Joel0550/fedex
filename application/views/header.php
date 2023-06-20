<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
	<meta charset="utf-8">
	<link rel="FEDEX" type="png"
	href="<?php echo base_url(); ?>/assets/images/icon.png">
	<title>FEDEX</title>
	<!-- importacionJquery -->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- IMPORTACION DE API KEY DE GOOGLE MAPS -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoObNZz2rn6AMxGvMKq1GDTFvd7CzGwdY&libraries=places&callback=initMap"></script>
</head>

<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url(); ?>">FEDEX</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTENIDO<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url() ?>/candidatos/nuevo">Sucursales</a>
							<ul class="dropdown">
								<li><a href="<?php echo site_url() ?>/candidatos/index">Listado de sucursales</a></li>
							</ul>
							</li>
							<li><a href="<?php echo site_url() ?>/clientes/nuevo">Clientes</a>
							<ul class="dropdown">
								<li><a href="<?php echo site_url() ?>/clientes/index">Listado de clientes</a></li>
							</ul>
							</li>
							<li><a href="<?php echo site_url() ?>/citas/nuevo">Pedidos</a>
							<ul class="dropdown">
								<li><a href="<?php echo site_url() ?>/citas/index">Listado de pedidos</a></li>
							</ul>
							</li>
						</ul>
						
						
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REPORTE <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url() ?>/mapasp">SUCURSALES</a></li>
							<li><a href="<?php echo site_url() ?>/mapascli">CLIENTES</a></li>
							<li><a href="<?php echo site_url() ?>/mapaspv">PEDIDOS</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTACTOS <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="<?php echo site_url() ?>/contactos/nuevo">Nuevo contacto</a>
						<li><a href="<?php echo site_url() ?>/contactos/index">Listado de contactos</a>
						</ul>
					</li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>