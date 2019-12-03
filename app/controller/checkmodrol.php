<?php 
include_once "../model/querylogin.php";
$id=$_GET['id'];
if(!estaDentro()){
    include_once "../controller/logincontrol.php";
}
if(esAdmin())
include_once "../controller/moddetails.php";
elseif(esOperador())
include_once "../controller/modpsicologo.php";

?>