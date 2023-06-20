<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1 style="color:red;"><b>ELECCIONES 2023</b></h1>
		</div>
	</div>
</div>
<br>
<br>




<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->

	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo base_url(); ?>/assets/images/1.jpg" alt="imagen 1" style="width: 100%; height: 600px;">
		</div>

		<div class="item">
			<img src="<?php echo base_url(); ?>/assets/images/2.jpg" alt="imagen 2" style="width: 100%; height: 600px;">
		</div>

		<div class="item">
			<img src="<?php echo base_url(); ?>/assets/images/3.jpg" alt="imagen 3" style="width: 100%; height: 600px;">
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="<?php echo base_url(); ?>/assets/images/p.jpg" alt="" style="width: 150px; height: 150px;">
				<div class="caption">
					<h3 class="text-center"><b>REGISTAR CANDIDATOS</b></h3>
					<h5 class="text-center">Ingrese para mas información.</h5>
					<p class="text-center"><a href="<?php echo site_url() ?>/candidatos/nuevo" class="btn btn-primary" role="button">Visitar</a></p>
				</div>

			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="<?php echo base_url(); ?>/assets/images/n.png" alt="" style="width: 150px; height: 150px;">
				<div class="caption">
					<h3 class="text-center"><b>CITAS<br> -</b></h3>
					<h5 class="text-center">Ingrese para mas información.</h5>
					<p class="text-center"><a href="<?php echo site_url() ?>/citas/nuevo" class="btn btn-primary" role="button">Visitar</a></p>
				</div>

			</div>
		</div>


		<div class="col-md-4">
			<div class="thumbnail">
				<img src="<?php echo base_url(); ?>/assets/images/p.png" alt="" style="width: 150px; height: 150px;">
				<div class="caption">
					<h3 class="text-center"><b>TRAMITES <br> -</b></h3>
					<h5 class="text-center">Ingrese para mas información.</h5>
					<p class="text-center"><a href="<?php echo site_url() ?>/tramites/nuevo" class="btn btn-primary" role="button">Visitar</a></p>
				</div>

			</div>
		</div>

	</div>
</div>