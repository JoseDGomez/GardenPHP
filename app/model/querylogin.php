<?php
require_once "db.php";
session_start();

function loginOK($name, $pass)
{

    if (queryLogin($name, $pass)) {
        $_SESSION['dentro'] = TRUE;

        $_SESSION['tipo'] = getTipo($name, $pass);
        $_SESSION['nombre'] = $name;
        return TRUE;
    }

    return false;
}

function queryLogin($name, $pass)
{
    $bd = Db::getInstance();

    $query = ("SELECT * FROM usuario WHERE nombre = '$name' AND pass = '$pass' ");
    $stmt = $bd->ejecutar($query);



    if ($stmt->num_rows == 0) {
        return false;
    } else {

        return true;
    }
}

function estaDentro()
{
    
    if ($_SESSION['dentro']) {
        return true;
    }
    return false;
}

function esAdmin()
{
    if ($_SESSION['tipo'] == 'A')
        return true;
    return false;
}

function esOperador()
{
    if ($_SESSION['tipo'] == 'O')
        return true;
    return false;
}

function getTipo($name, $pass)
{
    $bd = Db::getInstance();
    $query = ("SELECT tipo from usuario WHERE nombre ='$name'AND pass ='$pass '");

    $stmt = $bd->ejecutar($query);

    $datos = $stmt->fetch_assoc();
    return $datos['tipo'];
}
