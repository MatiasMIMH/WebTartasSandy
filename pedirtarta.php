<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Pedido</title>
</head>
<body>
<?php include("firebaseSDK.php")?>
<?php
// Header
include 'header.php';
?>

<!-- Body -->
<div class="container">
  <h1>Pide tu tarta</h1>
  <p>Rellena el formulario para pedir tu tarta personalizada</p>
  <form action="pedirtarta.php" method="post">
    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required><br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required><br><br>

    <label for="descripcion">Descripción de la tarta:</label>
    <textarea id="descripcion" name="descripcion" required></textarea><br><br>

    <label for="alergias">Alergias o intolerancias:</label>
    <textarea id="alergias" name="alergias"></textarea><br><br>
    
    <input type="submit" value="Enviar pedido">
  </form>
</div>

<!-- Footer -->
<?php
include 'footer.php';
?>



</body>
</html>