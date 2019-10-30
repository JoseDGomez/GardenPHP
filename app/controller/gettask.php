<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";

if(!estaDentro()){
    include_once "../views/login.php";
}


else{
$tareas = getTask();

include_once "../views/tareas.php";
}
