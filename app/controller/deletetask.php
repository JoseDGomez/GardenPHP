<?php 
include_once "../model/query.php";

$id=$_GET['id'];
deleteTask($id);
include_once "../views/tareas.php"; 

?>