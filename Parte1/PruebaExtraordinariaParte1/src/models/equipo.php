<?php
namespace PruebaExtraordinariaParte1\models;
/**
 *
 */
class equipo extends baseDatos
{
    private $usuario="";
    private $nombre="";
    private $apellidos="";
    private $edad=0;
    private $curso="";
    function __construct()
    {
        parent::__construct();
        parent::conectar();
    }
    public function lista(){
        $usuarios="select nombre from equipo";
        $resultado = parent::consultar($usuarios);
        foreach ($resultado as $fila) {
            echo "<option value='";
            echo $fila['equipo'];
            echo "'>";
            echo $fila['equipo'];
            echo "</option>";
        }
    }
    public function leerDatos(){
        $consulta="select nombre,participantes from equipo where nombre='".$_POST['nombre']."'";

        $consultaUsuario = parent::consultar($consulta);
        $this->nombre=$_POST['nombre'];
        foreach ($consultaUsuario as $fila) {
            $this->nombre=$fila['nombre'];
            $this->participantes=$fila['participantes'];
        }
    }
    public function insertarEquipo($nombre,$participantes){
        $insertar="insert into equipo (nombre,participantes) values
    ('".$nombre."','".$participantes."')";
        //echo $insertar;
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
