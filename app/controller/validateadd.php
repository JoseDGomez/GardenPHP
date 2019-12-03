<?php

function filter()
{
    $errores = [];
    $añoC = substr($_POST["fechaCreacion"], 0, 4);
    $mesC = substr($_POST["fechaCreacion"], 5, 2);
    $diaC = substr($_POST["fechaCreacion"], 8, 8);

  
    if (empty($_POST["descripcion"])) {
        $errores[] = "<font color=\"red\">Campo descripcion vacio</font><br>";
    }
    if ($_POST["operario"] == "0") {
        $errores[] = "<font color=\"red\">Selecciona un operario</font><br>";
    }
    if ($_POST["provincia"] == "0") {
        $errores[] = "<font color=\"red\">Selecciona una provincia</font><br>";
    }
    if (empty($_POST["direccion"])) {
        $errores[] = "<font color=\"red\">Campo dirección vacio</font><br>";
    }
    if (empty($_POST["poblacion"])) {
        $errores[] = "<font color=\"red\">Campo población vacio</font><br>";
    }
    if (empty($_POST["contacto"])) {
        $errores[] = "<font color=\"red\">Campo persona de contacto vacio</font><br>";
    }
    if (empty($_POST["anotacionAnt"])) {
        $errores[] = "<font color=\"red\">Inserte una anotacion</font><br>";
    }
    if (empty($_POST["telefono"]) || !preg_match(" /^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/", $_POST["telefono"])) {
        $errores[] = "<font color=\"red\">El campo Telefono esta vacio o no tiene un formato valido</font><br>";
    }
    if ($_POST['correo'] == '' || !preg_match(" /^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $_POST['correo'])) {
        $errores[] = "<font color=\"red\">El campo correo esta vacio o no tiene un formato valido</font><br>";
    }
    if (empty($_POST["codPostal"]) || !is_numeric($_POST["codPostal"]) || !preg_match("/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/", $_POST["codPostal"])) {
        $errores[] = "<font color=\"red\">El código postal no es correcto</font><br>";
    }

    if (empty($_POST["fechaCreacion"]) || !is_numeric($añoC) && !is_numeric($mesC) && !is_numeric($diaC)) {
        $errores[] = "<font color=\"red\">La fecha no es correcta</font><br>";
    }

    if (!isset($_POST["estado"])) {
        $errores[] = "<font color=\"red\">Selecciona un estado</font><br>";
    }
    return $errores;
}
