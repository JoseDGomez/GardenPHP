<?php

/*Incluimos el fichero de la clase*/
require_once 'db.php';

function getTask()
{
   $bd = Db::getInstance();
   $sql = "SELECT * FROM tarea;";
   $tareas = [];
   $stmt = $bd->ejecutar($sql);
   while ($x = $bd->obtener_fila($stmt, 0)) {
      $tareas[] = $x;
   }
   return $tareas;
}

function delTask($id)
{
   $bd = Db::getInstance();
   $sql = ("DELETE FROM tarea " . "WHERE idTarea = '" . $id . "'");
   $stmt = $bd->ejecutar($sql);
}

function getTaskOp()
{
   $bd = Db::getInstance();
   $sql = "SELECT * FROM tarea".  " WHERE operario = '". $_SESSION['nombre']. "'";
   $tareas = [];
  
   $stmt = $bd->ejecutar($sql);
   while ($x = $bd->obtener_fila($stmt, 0)) {
      $tareas[] = $x;
   }
  
   return $tareas;
}

function getProvincias(){
   $bd = Db::getInstance();
   $sql = "SELECT * FROM tbl_provincias";
   $provincias = [];
   $stmt = $bd->ejecutar($sql);
   while ($x = $bd->obtener_fila($stmt, 0)) {
      $provincias[] = $x;
   }
  
   return $provincias;
}