<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";

if(!estaDentro() || !esAdmin()){
    header ("Location: ../controller/gettask.php");
}
else{
$id=$_GET['id'];
delTask($id);
include_once "../controller/gettask.php"; 
}
?>