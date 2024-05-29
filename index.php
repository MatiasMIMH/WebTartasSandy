<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tartas Sandy</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <?php include("header.php")?>

  <section class="cabecera">
    <div class="logo"></div>
    <p>Deliciosas tartas para cualquier ocasión</p>
    <button class="boton"><a href="galeria.php">Ver más</a></button>
  </section>

  <section class="seccion-productos">
    <h2>Nuestros productos</h2>

      <div class="producto">
        <img src="imagenes/tartas/blancaChocolateOreo.png" alt="blancaChocolateOreo.png">
        <h3>Tarta de chocolate con Oreo</h3>
        <p>Deliciosa tarta de chocolate con una suave nata por encima.</p>
        <button class="boton"><a href="#">Ver más</a></button>
      </div>

      <div class="producto">
        <img src="imagenes/tartas/fresas.jpg" alt="fresas.jpg">
        <h3>Tarta de fresa</h3>
        <p>Fresca tarta de fresa con un toque de nata montada.</p>
        <button class="boton"><a href="#">Ver más</a></button>
      </div>

      <div class="producto">
        <img src="imagenes/tartas/queso.png" alt="queso.png">
        <h3>Tarta de queso</h3>
        <p>Cremosa tarta de queso con una base de galleta.</p>
        <button class="boton"><a href="#">Ver más</a></button>
      </div>

      <div class="producto">
        <img src="imagenes/tartas/colorVinoRosasColores.png" alt="colorVinoRosasColores.png">
        <h3>Fresa y Butercream</h3>
        <p>Tarta con sabor a fresa y buttercream decorada con crema pastelera.</p>
        <button class="boton"><a href="#">Ver más</a></button>
      </div>

      <div class="producto">
        <img src="imagenes/tartas/queso.jpg" alt="Tarta 3">
        <h3>Tarta de queso</h3>
        <p>Cremosa tarta de queso con una base de galleta.</p>
        <button class="boton"><a href="#">Ver más</a></button>
      </div>

      <div class="producto">
        <img src="imagenes/tartas/queso.jpg" alt="Tarta 3">
        <h3>Tarta de queso</h3>
        <p>Cremosa tarta de queso con una base de galleta.</p>
        <button class="boton"><a href="#">Ver más</a></button>
      </div>
    
  </section>

  <section class="seccion-sobre-nosotros">
    <h2>Sobre nosotros</h2>
    <p>Tartas Sandy es una pastelería artesanal que se dedica a crear deliciosas tartas para cualquier ocasión. Utilizamos solo ingredientes frescos y de alta calidad para garantizar que nuestras tartas sean deliciosas y memorables.</p>
    <button class="boton"><a href="#">Más información</a></button>
  </section>

  <?php include("footer.php")?>

  <div id="popup-contacto" class="popup">
    <div class="popup-contenido">
      <h2>Contacto</h2>
      <p>Correo electrónico: info@sweetbakery.es</p>
      <p>Teléfono: +34 91 123 45 67</p>
      <p>Ubicación: San Sebastián de los Reyes/Alcobendas</p>
      <button class="boton" onclick="cerrarPopupContacto()">Cerrar</button>
    </div>
  </div>

  <script src="js/scripts.js"></script>
</body>
</html>
