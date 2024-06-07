<!DOCTYPE html>
<html>
<head>
	<title>Tartas Sandy - Galería</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php include("firebaseSDK.php")?>
  <?php include("header.php")?>
	<div class="gallery">
		<h2>Nuestra Galería</h2>
		<div class="gallery-carousel carousel-cakes">
			<div class="gallery-item">
				<img src="imagenes/tartas/azulConTrufas.jpg" alt="Azul con trufas">
			</div>
			<div class="gallery-item">
				<img src="imagenes/tartas/blancaCeleste.jpg" alt="Blanca y celeste">
		</div>
			<div class="gallery-item">
				<img src="imagenes/tartas/selvaNegra.jpg" alt="Selva Negra">
			</div>
			<div class="gallery-item">
				<img src="cake4.jpg" alt="Cake 4">
			</div>
			<div class="gallery-item">
				<img src="cake5.jpg" alt="Cake 5">
			</div>
		</div>
		<div class="gallery-carousel carousel-cupcakes">
			<div class="gallery-item">
				<img src="cupcake1.jpg" alt="Cupcake 1">
			</div>
			<div class="gallery-item">
				<img src="cupcake2.jpg" alt="Cupcake 2">
			</div>
			<div class="gallery-item">
				<img src="cupcake3.jpg" alt="Cupcake 3">
			</div>
			<div class="gallery-item">
				<img src="cupcake4.jpg" alt="Cupcake 4">
			</div>
			<div class="gallery-item">
				<img src="cupcake5.jpg" alt="Cupcake 5">
			</div>
		</div>
		<div class="gallery-carousel carousel-desserts">
			<div class="gallery-item">
				<img src="dessert1.jpg" alt="Dessert 1">
			</div>
			<div class="gallery-item">
				<img src="dessert2.jpg" alt="Dessert 2">
			</div>
			<div class="gallery-item">
				<img src="dessert3.jpg" alt="Dessert 3">
			</div>
			<div class="gallery-item">
				<img src="dessert4.jpg" alt="Dessert 4">
			</div>
			<div class="gallery-item">
				<img src="dessert5.jpg" alt="Dessert 5">
			</div>
		</div>
	</div>
	<button class="sticky" onclick="location.href='pedirtarta.php';">Pide tu tarta</button>
	<div class="footer">
		<p>&copy; 2023 Tartas Sandy. Todos los derechos reservados.</p>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
		$(document).ready(function() {
			$('.gallery-carousel').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 3000,
				arrows: true,
				prevArrow: $('.slick-prev'),
				nextArrow: $('.slick-next')
			});
		});
	</script>
</body>
</html>