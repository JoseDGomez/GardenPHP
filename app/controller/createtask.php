<?php 
require_once "../model/querylogin.php";
require_once "../model/query.php";
$datos = array();
if(!estaDentro() || !esAdmin()){
   header ("Location: ../controller/logincontrol.php");
}

if($_POST){
    
    $datos["descripcion"]=$_POST["descripcion"];
    $datos["contacto"]=$_POST["contacto"];
    $datos["telefono"]=$_POST["telefono"];
    $datos["correo"]=$_POST["correo"];
    $datos["direccion"]=$_POST["direccion"];
    $datos["codPostal"]=$_POST["codPostal"];
    $datos["poblacion"]=$_POST["poblacion"];
    $datos["provincia"]=$_POST["provincia"];
    $datos["estado"]=$_POST["estado"];
    $datos["fechaCreacion"]=$_POST["fechaCreacion"];
    $datos["operario"]=$_POST["operario"];
    $datos["anotacionAnt"]=$_POST["anotacionAnt"];

    addTask($datos);

    
    
   include_once "../controller/gettask.php";
 }
else {
 
   include_once "../controller/movecreate.php";
}
