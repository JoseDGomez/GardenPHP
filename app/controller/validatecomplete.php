<?php

function filter()
{
    $errores = [];


    $añoR = substr($_POST["fechaRealizacion"], 0, 4);
    $mesR = substr($_POST["fechaRealizacion"], 5, 2);
    $diaR = substr($_POST["fechaRealizacion"], 8, 8);


    if (empty($_POST["anotacionPos"])) {
        $errores[] = "<font color=\"red\">Inserte una anotacion</font><br>";
    }
    if (empty($_POST["fechaRealizacion"]) || !is_numeric($añoR) && !is_numeric($mesR) && !is_numeric($diaR)) {
        $errores[] = "<font color=\"red\">La fecha no es correcta</font><br>";
    }
    if (!isset($_POST["estado"])) {
        $errores[] = "<font color=\"red\">Selecciona un estado</font><br>";
    }
    return $errores;
}