<?php 
include_once "../model/query.php";
include_once "../controller/validate.php";
include_once "../model/querylogin.php";
$datos = array();
$id=$_GET["id"];
$datos=showDetails($id);
$provincia = getProvincias();
$operario = getOperario();
include_once "../views/modtask.php";

     
     if($_POST){
        $datos["descripcion"]=$_POST["descripcion"];
        $datos["contacto"]=$_POST["contacto"];
        $datos["telefono"]=$_POST["telefono"];
        $datos["correo"]=$_POST["correo"];
        $datos["direccion"]=$_POST["direccion"];
        $datos["codPostal"]=$_POST["codPostal"];
        $datos["poblacion"]=$_POST["poblacion"];
        $datos["provincia"]=$_POST["provincia"];
        $datos["estado"]=$_POST["estado"];
        $datos["fechaCreacion"]=$_POST["fechaCreacion"];
        $datos["operario"]=$_POST["operario"];
        $datos["anotacionAnt"]=$_POST["anotacionAnt"];
        $datos["anotacionPos"]=$_POST["anotacionPos"];
        $datos["fechaRealizacion"]=$_POST["fechaRealizacion"];
    
        $errores=filter();
        if($errores){
           foreach($errores as $valor)
           echo $valor;
     
        }else{
          
        updateTask($id, $datos);
        echo "Oferta actualizada";
        
        }
        
     }
     



  
 ?>
 
