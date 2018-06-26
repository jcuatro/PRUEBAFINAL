<?php
require_once __DIR__.'/../vendor/autoload.php';
use PruebaExtraordinariaParte1\models\Juego;
$baseDatos=new Juego();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="css/Usuario.css">
  </head>
  <body>
    <h1>Insertar equipo</h1>
    <form method="post" action="formularioEquipo.php" onsubmit="return Vacios()">
      <fieldset class="caja">
        <p>Nombre <b>*</b><br>
        <input type="text" name="nombre" value="" id="nombre" placeholder="Introduce el nombre" required></p>
        <p>Participantes: <br>
        <input type="text" name="edad" id="participantes" placeholder="Introduce la edad"></p>
      </fieldset>
      <input type="submit" name="crear" value="Crear equipo">
    </form>
    <button type="button" name="button" onclick="location.href='formularioEquipo.php'">Volver</button>
      <script type="text/javascript" src="js/Insertar.js" charset="utf-8"></script>
  </body>
</html>
