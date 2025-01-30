<?php
require_once "../MODELO/modelo.php";

$funcion = $_GET['funcion'];

switch ($funcion) {
    case "crear":

        agregarTarea();

        break;
    case "obtener":

        obtenerTarea();

        break;
    case "actualizar":



        break;

    case "borrar":



        break;
}


function agregarTarea()
{
    $nombre = $_GET['nombre'];
    $fecha = $_GET['fecha'];
    $hora = $_GET['hora'];
    $estado = $_GET['estado'];

    $resultado = (new tarea())->crearTarea($nombre, $fecha, $hora, $estado);
    echo json_encode($resultado);
}

function obtenerTarea()
{
    $resultado = (new tarea())->obtenerTarea();
    echo json_encode($resultado);
}

