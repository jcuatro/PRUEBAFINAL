<?php
namespace Parte1Examen\models;
class Juego extends baseDatos
{
    private $nombre="";
    private $curso="";
    function __construct()
    {
        parent::__construct();
        parent::conectar();
    }
    public function listarEquipos(){
        $juegos="select nombre from equipo";
        $resultado = parent::consultar($juegos);
        foreach ($resultado as $fila) {
            echo "<option value='";
            echo $fila['nombre'];
            echo "'>";
            echo $fila['nombre'];
            echo "</option>";
        }
    }
    public function insertarEquipos($nombre,$participantes){
        $insertar="insert into equipo (nombre,participantes) values
    ('".$nombre."',".$participantes.")";
        //var_dump($insertar);
        $registro = parent::consultar($insertar);
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getParticipantes()
    {
        return $this->participantes;
    }
    public function setParticipantes($participantes)
    {
        $this->participantes = $participantes;
    }
}
