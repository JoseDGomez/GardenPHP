<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";
$nombre = $_GET["nombre"];
if(estaDentro() == false ){
    include_once "../controller/logincontrol.php";
}


else{
   
        include_once "../views/perfil.php";
    
  
    


}