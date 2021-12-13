<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<title>TV-TIME</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<h1 class="text-white">tvtime</h1>
		</nav>
	</header>

	<main class="container">
		<div class="row">
			<div class="col">
				<div class="carousel slide" id="slideshow" data-ride="carousel">
					<!-- Indicadores -->
					<ol class="carousel-indicators">
						<li data-target="#slideshow" class="active" data-slide-to="0"></li>
						<li data-target="#slideshow" data-slide-to="1"></li>
						<li data-target="#slideshow" data-slide-to="2"></li>
					</ol>

					<!-- Slides -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="views/img/s1.jpg" alt="" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="views/img/s2.png" alt="" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="views/img/s3.png" alt="" class="d-block w-100">
						</div>
					</div>

					<!-- Controles -->
					<a href="#slideshow" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a href="#slideshow" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="py-4 border-bottom">
					<h1 class="text-center">QUE VER? AQUI TE LO DECIMOS!</h1>
				</div>
			</div>
		</div>	

		<div class="row py-4">
			<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<div class="card">
					<img class="card-img-top" src="views/img/1.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">NETFLIX</h3>
						<a href="#" class="btn btn-sm btn-dark">Explorar</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<div class="card">
					<img class="card-img-top" src="views/img/2.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">HBO MAX</h3>
						<a href="#" class="btn btn-sm btn-dark">Explorar</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<div class="card">
					<img class="card-img-top" src="views/img/3.jpeg" alt="">
					<div class="card-body">
						<h3 class="card-title">DISNEY PLUS</h3>
						<a href="#" class="btn btn-sm btn-dark">Explorar</a>
						</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<div class="card">
					<img class="card-img-top" src="views/img/4.png" alt="">
					<div class="card-body">
						<h3 class="card-title">CLARO VIDEO</h3>
						<a href="#" class="btn btn-sm btn-dark">Explorar</a>
					</div>
				</div>
			</div>

			
	<footer class="container">
		<div class="row border-top py-5">
			<div class="col">
				
				<a href="#" class="btn btn-link text-dark">Nosotros</a>
				<a href="#" class="btn btn-link text-dark">Contacto</a>
			</div>
			<div class="col text-right">
				<a href="#" class="btn btn-link text-dark">Subir en Pagina</a>
			</div>
		</div>

		<nav class="navbar fixed-bottom navbar-dark bg-dark">
			<h3 class="lead text-white">oyasnier.com</h3>
		</nav>

	</footer>

	<script src="views/js/jquery-3.3.1.min.js"></script>
	<script src="views/js/popper.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>
</body>
</html>