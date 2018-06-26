<?php
require_once __DIR__.'/../vendor/autoload.php';
use PruebaExtraordinariaParte1\models\equipo;
$baseDatos=new equipo();
if (isset($_POST["crear"])){
  $baseDatos->insertarEquipo($_POST['nombre'],$_POST['participantes']);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Equipos</title>
    <link rel="stylesheet" href="css/Usuario.css">
  </head>
  <body>
    <h1>Sean bienvenidos</h1>
    <br><br>
      <fielset>
        <legend>Selecciona un equipo.</legend>
        <form class="form" action="" method="post" name="form">
          <select class="" name="usuario">
            <option value=""> Selecciona uno </option>
            <?php
            $baseDatos->listarEquipos();
            ?>
          </select>
          <input type="submit" value="Empezar"></input>
        </form>
      </fielset>
    <br><br>
      <fielset>
        <legend>Crear nuevo usuario.</legend>
        <button type="button" name="button" onclick="location.href='insertarEquipo.php'">Crear nuevo equipo</button>
      </fielset>
    <br><br>
  </body>
</html>
