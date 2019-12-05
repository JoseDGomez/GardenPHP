<?php 
include_once "../model/query.php";
include_once "../model/querylogin.php";

if(!estaDentro()){
    include_once "../controller/logincontrol.php";

}elseif(esAdmin()==false){
    include_once "../controller/gettask.php";
}
else{
$id=$_GET['id'];

include_once "../views/confirmdeleteuser.php"; 
}
?>