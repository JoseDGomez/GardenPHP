<?php

include_once "../model/query.php";
include_once "../model/querylogin.php";

if(estaDentro() == false){
    include_once "../controller/logincontrol.php";
}else{
    if(esAdmin()){
        $provincia = getProvincias();
        $operario = getOperario();
        include_once "../views/formtarea.php";
    }else{
    include_once "../controller/gettask.php";
    } 
}