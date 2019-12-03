<?php 
include_once "../model/query.php";

include_once "../model/querylogin.php";

$nombre=$_GET["nombre"];



if(!estaDentro()){
    header ("Location: ../controller/logincontrol.php");
}
else{
    $datos = getUserData($nombre);
include_once "../views/changeprofile.php"; 
}
?>