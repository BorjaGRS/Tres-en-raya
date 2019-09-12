<?php

function casillavacia($tablero) {
    $resultado = false;

    foreach ($tablero as $indFila => $fila) {

        foreach ($fila as $indColumna => $casilla) {

            if ($casilla == "") {

                $resultado = true;
                break 2;
            }
        }
    }
    return $resultado;
}

function compruebaganador($tablero) {
   
    $posiciones = [];
    
    
    foreach ($tablero as $index => $fila) {
        $posiciones[] = $fila;
        $posiciones[] = array_column($tablero, $index);
        $posiciones['diag1'][$index] = $tablero[$index][$index];
        $posiciones['diag2'][$index] = $tablero[$index][count ($fila) - $index - 1];
    }
    //$posiciones[] = [$tablero[1][1], $tablero[2][2], $tablero[3][3]];
    //$posiciones[] = [$tablero[1][3], $tablero[2][2], $tablero[3][1]];
   
    //comprobacion
     $comprobar=array_filter($posiciones, function($a) {
         return (!empty($a[1]) && count(array_unique($a))==1);
            });

    return $comprobar;
}

function jugadaIA($tablero) {

    foreach ($tablero as $fila => $columnas) {

        foreach ($columnas as $columna => $casilla) {

            $fila = rand(0, 2);
            $columna = rand(0, 2);
            $casilla = $tablero[$fila][$columna];

            if ($casilla == "") {

                $tablero[$fila][$columna] = 'o';
                return $tablero;
            }
        }
    }
}
