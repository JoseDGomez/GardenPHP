<?php

include_once "../model/query.php";
include_once "../model/querylogin.php";
$id = $_GET["id"];
if(estaDentro() == false){
    include_once "../controller/logincontrol.php";
}else{
    if(!esAdmin()){
        include_once "../controller/gettask.php";
        
    }else{
        $provincia = getProvincias();
        $operario = getOperario();
        $datos = showDetails($id);
    } 
    include_once "../views/modtask.php";
}