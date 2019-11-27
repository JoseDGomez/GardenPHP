<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";
$datos = array();
if(!estaDentro() || !esAdmin()){
    include_once "logincontrol.php";
}


    if($_POST){
        
        
          if(!exists($_POST["nombre"])){
            $datos["nombre"]=$_POST["nombre"];
            $datos["pass"]=$_POST["pass"];
            $datos["tipo"]=$_POST["tipo"];
            addUser($datos);
            
            include_once "userscontrol.php";
          }


        else{
            echo "Ya existe un usuario con ese nombre. Por favor utilize uno diferente.";
            include_once "../views/adduser.php";
        }
  }
   else {

      include_once "../views/adduser.php";
   }
