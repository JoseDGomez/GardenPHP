<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";

if(!estaDentro() || !esAdmin()){
    header ("Location: ../controller/logincontrol.php");
}
else{
$id=$_GET['id'];
deleteUser($id);
if($id == $_SESSION["id"]){
    session_destroy();
    header ("Location: ../controller/logincontrol.php");
}
include_once "../controller/userscontrol.php"; 
}
?>