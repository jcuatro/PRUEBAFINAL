<?php
require_once __DIR__.'/../vendor/autoload.php';
use PruebaExtraordinariaParte2\models\Evento;

$evento = new Evento();

if (!isset($_POST["dni"]) || $_POST["nombre"]==""){
    $correcto=false;
}elseif ((isset($_POST["dni"])) && (isset($_POST["dni"]))){
    $correcto=true;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entrada Evento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body style="padding:10px">
      <div class="w3-row">
        <div class="w3-col w3-container" style="width:30%"></div>
        <div class="w3-col w3-card-4" style="width:40%">
          <header class="w3-container w3-blue">
            <h2>Registrado</h2>
          </header>
          <div class="w3-container">
            <?php
              if ($correcto==true){
                  echo "<p>Nuevo asistente</p>";
              }else{
                  echo "<p>El dni no coincide con los asistentes al evento<p>";
              }
            ?>
          </div>
        </div>
        <div class="w3-col w3-container" style="width:30%"></div>
      </div>
      <button type="button" name="button" onclick="location.href='index.php'">Volver</button>
  </body>
</html>
