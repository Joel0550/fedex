<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>FEDEX</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('plantilla/css/bootstrap.min.css') ?>">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('plantilla/css/style.css') ?>">
	<!-- Responsive-->
	<link rel="stylesheet" href="<?php echo base_url('plantilla/css/responsive.css') ?>">
	<!-- fevicon -->
	<link rel="icon" href="<?php echo base_url('plantilla/images/fevicon.png') ?>" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url('plantilla/css/jquery.mCustomScrollbar.min.css') ?>">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<!-- owl stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('plantilla/css/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('plantilla/css/owl.theme.default.min.css') ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<!-- IMPORTACION DE API KEY DE GOOGLE MAPS -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoObNZz2rn6AMxGvMKq1GDTFvd7CzGwdY&libraries=places&callback=initMap"></script>
</head>

<body>

	<!-- header section start -->
	<div class="header_section">
		<nav class="destop_header navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url() ?>">Home</a>
						<ul>
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url() ?>/mapaspe">Mapa Pedidos</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url() ?>/sucursales/nuevo">Sucursal</a>
					<ul>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url() ?>/sucursales/index">listado sucursales</a>
					</li>
					</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url() ?>/clientes/nuevo">Cliente</a>
					<ul>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url() ?>/clientes/index">listado clientes</a>
					</li>
					</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url() ?>/pedidos/nuevo">Pedidos</a>
					<ul>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url() ?>/pedidos/index">listado pedidos</a>
					</li>
					</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url() ?>/mapassu">Mapa Sucursal</a>
					<ul>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url() ?>/mapascli">Mapa Cliente</a>
					</li>
					</ul>
					</li>

			
					
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li> -->
				</ul>
			</div>
		</nav>
	<!--
		<nav class="mobile_header navbar navbar-expand-lg navbar-light bg-light">
			<div class="logo_main"><a href="index.html"><img src="<?php echo base_url(); ?>plantilla/images/logo.png"></a></div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent2">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="logo_main" href="index.html"><img src="<?php echo base_url(); ?>plantilla/images/logo.png"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Blog.html">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><img src="<?php echo base_url(); ?>plantilla/images/search-icon.png"></a>
					</li>
				</ul>
			</div>
		</nav>
	</div> -->
	<!-- header section end -->



	<!--<li class="nav-item">
						<a class="logo_main" href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" style="width: 100%; height: 100%;"></a>
					</li>-->

	<!--
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown link
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>
		</div>
	</nav> -->