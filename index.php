<?php

include ("funciones.php");

if (empty($_POST) || isset($_POST["volver"])) {

    $tablero = array_fill(0, 3, array_fill(0, 3, ""));

    include ("vistas/jugada.php");
} else if (isset($_POST["enviajugada"])) {

    $tablero = $_POST["tablero"];

    if (!empty(compruebaganador($tablero))) {
        $resultado = 'Has ganado';
        include ("vistas/resultado.php");
        
    } else if (!casillavacia($tablero)) {
        $resultado = 'Tablas';
        include ("vistas/resultado.php");
        
    } else {

        $tablero = jugadaIA($tablero);

        if (!empty(compruebaganador($tablero))) {
            $resultado = 'Ha ganado la IA ';
            include ("vistas/resultado.php");
        } else if (!casillavacia($tablero)) {
            $resultado = 'tablas';
            include ("vistas/resultado.php");
        } else {
            include ("vistas/jugada.php");
        }
    }
}
?>