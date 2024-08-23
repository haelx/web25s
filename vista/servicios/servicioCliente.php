<?php
include_once "../modelo/conexion/conexionBase.php";
class servicioCliente
{
    private $conexion;
    function __construct(){
        $this->conexion = new conexionBase();
    }
    public function listarEmpleados()
    {
        $this->conexion->createConnection();
        $sql="select codigo_empleado,nombre,apellido1 from empleado";
        return $this->conexion->executeQuery($sql);
    }
}
?>