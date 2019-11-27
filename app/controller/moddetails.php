<?php 
include_once "../model/query.php";
$id=$_GET["id"];
$datos=showDetails($id);
include_once "../views/offerdetails.php";

   
 
?>