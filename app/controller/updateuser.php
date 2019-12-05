<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";
$datos = array();
$id = $_GET["id"];
if(!estaDentro()){
    include_once "logincontrol.php";
}


    if($_POST){
        
        
          if(!exists($_POST["nombre"])){
            $datos["nombre"]=$_POST["nombre"];
            $datos["pass"]=$_POST["pass"];
           
            updateUser($id, $datos);
            $_SESSION["nombre"] = $datos["nombre"];
            $_SESSION["pass"] = $datos["pass"];
            include_once "gettask.php";
          }


        else{
            echo "Ya existe un usuario con ese nombre. Por favor utilize uno diferente.";
            include_once "../views/changeprofile.php";
        }
  }
   else {

      include_once "../views/gettask.php";
   }
