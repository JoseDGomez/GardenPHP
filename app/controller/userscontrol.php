<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";

if(estaDentro() == false ){
    include_once "../controller/logincontrol.php";
}


else{
    if($_SESSION["tipo"] != "A"){
        include_once "../controller/gettask.php";
    }else
    $usuarios = getUsers();
    

include_once "../views/users.php";
}