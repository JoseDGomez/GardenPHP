<?php 
include_once "../model/query.php";
include_once "../controller/validate.php";
include_once "../views/modoffer.php";

$id=$_GET["id"];
$datos=showDetails($id);

if($_POST){
   $errores=filter();
   if($errores){
      foreach($errores as $valor)
      echo $valor;

   }else{
     
   updateOffer($id);
   echo "Oferta actualizada";
   
   }
   
}
else {
   include_once "../views/modoffer.php";
}
 
?>