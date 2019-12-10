<?php

function filter()
{
    $errores = [];

   
    if ($_POST["tipo"] == "") {
        $errores[] = "<font color=\"red\">Selecciona una provincia</font><br>";
    }
    if (empty($_POST["nombre"])) {
        $errores[] = "<font color=\"red\">Campo nombre vacio</font><br>";
    }
    if (empty($_POST["pass"])) {
        $errores[] = "<font color=\"red\">Campo contraseña vacio</font><br>";
    }

    return $errores;
}
