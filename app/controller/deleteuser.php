<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";

if(!estaDentro() || !esAdmin()){
    header ("Location: ../controller/logincontrol.php");
}
else{
$id=$_GET['id'];
deleteUser($id);
include_once "../controller/userscontrol.php"; 
}
?>