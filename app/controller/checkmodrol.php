<?php 
include_once "../model/querylogin.php";
include_once "../model/query.php";
$id=$_GET['id'];
if(!estaDentro()){
    include_once "../controller/logincontrol.php";
}
if(esAdmin()){
include_once "../controller/moddetails.php";
}
elseif(esOperador()){
$datos = showDetails($id);
include_once "../views/completetask.php";
}
?>