<?php

require_once "../CONEXION/conexion.php";




class tarea
{
    function crearTarea($nombre,$fecha,$hora,$estado)
    {
        $conexion = new con;
        $con = $conexion->conexion();
        $sql = "INSERT INTO tareas (`nombre`, `fecha`, `hora`, `estado`) VALUES (0,'$nombre','$fecha','$hora','$estado');";
        $respuesta = $con->query($sql);
        return $respuesta;
    }
    function obtenerTarea()
    {
        $conexion = new con;
        $con = $conexion->conexion();
        $sql = "SELECT * FROM tareas;";
        $respuesta = $con->query($sql);
        $tareas = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $tareas;
    }


    function actualizarTarea($id,$nombre,$fecha,$hora,$estado)
    {
        $conexion = new con;
        $con = $conexion->conexion();
        $sql = "UPDATE tarea SET nombre = '$nombre', fecha= '$fecha', hora = '$hora', estado = '$estado' WHERE id='$id';";
        $respuesta = $con->query($sql);
        return $respuesta;
    }
    
    function eliminarTarea($id)
    {
        $conexion = new con;
        $con = $conexion->conexion();
        $sql = "DELETE FROM tarea WHERE(id='$id');";
        $respuesta = $con->query($sql);
        return $respuesta;
    }



}


























?>