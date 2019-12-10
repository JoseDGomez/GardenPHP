<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";

if(estaDentro() == false){
    include_once "../controller/logincontrol.php";
}


else{
    if(esAdmin()){
        $tareas = getTask();
    }else{
        $tareas = getTaskOp();
        
    }


include_once "../views/tareas.php";
}
