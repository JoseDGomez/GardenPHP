<?php 

include_once "../model/querylogin.php";



   if($_POST){
    
    
          if(loginOK($_POST['name'],$_POST['pass'])){
            
            header("location: ../controller/gettask.php");
            
          }
          

        else{
           
        
            
            include_once "../views/login.php";
            
            
        }
  }
   else {
     
      include_once "../views/login.php";
      
     
   }
  

?>