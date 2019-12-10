<?php 
include_once "../model/query.php";
include_once "../controller/validatecomplete.php";
include_once "../model/querylogin.php";
$datos = array();
$id=$_GET["id"];
$datos=showDetails($id);
include_once "../views/completetask.php";

     
     if($_POST){
        
        $datos["estado"]=$_POST["estado"];
        $datos["anotacionPos"]=$_POST["anotacionPos"];
        $datos["fechaRealizacion"]=$_POST["fechaRealizacion"];
    
        $errores=filter();
        if($errores){
           foreach($errores as $valor)
           echo $valor;
     
        }else{
          
        completeTask($id, $datos);
        echo "Oferta actualizada";
        
        }
        
     }
     



  
 ?>
 