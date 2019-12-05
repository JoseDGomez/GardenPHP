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
   $sql = "SELECT * FROM tarea" .  " WHERE operario = '" . $_SESSION['nombre'] . "'";
   $tareas = [];

   $stmt = $bd->ejecutar($sql);
   while ($x = $bd->obtener_fila($stmt, 0)) {
      $tareas[] = $x;
   }

   return $tareas;
}

function getProvincias()
{
   $bd = Db::getInstance();
   $sql = "SELECT * FROM tbl_provincias";
   $provincias = [];
   $stmt = $bd->ejecutar($sql);
   while ($x = $bd->obtener_fila($stmt, 0)) {
      $provincias[] = $x;
   }

   return $provincias;
}

function getUsers()
{
   $bd = Db::getInstance();
   $sql = "SELECT * FROM usuario";
   $usuarios = [];
   $stmt = $bd->ejecutar($sql);
   while ($x = $bd->obtener_fila($stmt, 0)) {
      $usuarios[] = $x;
   }

   return $usuarios;
}

function getOperario()
{
   $bd = Db::getInstance();
   $sql = "SELECT * FROM usuario WHERE tipo = 'O'";
   $operario = [];
   $stmt = $bd->ejecutar($sql);
   while ($x = $bd->obtener_fila($stmt, 0)) {
      $operario[] = $x;
   }

   return $operario;
}

function addUser($datos)
{
   $bd = db::getInstance();
   $query = ("INSERT INTO usuario (nombre, pass, tipo)
   VALUES ('" . $datos["nombre"] . "','" . $datos["pass"] . "','" . $datos["tipo"] . "');");
   $stmt = $bd->ejecutar($query);
}

function exists($name)
{
   $bd = Db::getInstance();
   $query = ("SELECT nombre from usuario WHERE nombre ='$name'");

   $stmt = $bd->ejecutar($query);

   $datos = $stmt->fetch_assoc();
   return $datos['tipo'];
   if ($stmt->num_rows == 0) {
      return false;
   } else {

      return true;
   }
}
function addTask($datos)
{
   $bd = Db::getInstance();
   $sql = "INSERT INTO tarea (descripcion, personaCont, telefono, correo, direccion, poblacion, provincia, codPostal, estado, fechaCreacion, anotacionAnt, operario)
   VALUES ('" . $datos["descripcion"] . "','" . $datos["contacto"] . "','" . $datos["telefono"] . "','" . $datos["correo"] . "','" . $datos["direccion"] . "','" . $datos["poblacion"] . "','" . $datos["provincia"] . "','" . $datos["codPostal"] . "','" . $datos["estado"] . "','" . $datos["fechaCreacion"] . "','" . $datos["anotacionAnt"] . "','" . $datos["operario"] . "' );";
   $stmt = $bd->ejecutar($sql);
}


function showDetails($id)
{

   $bd = Db::getInstance();
   $sql = 'SELECT * FROM tarea WHERE idTarea=' . $id . ';';
   $datos = [];
   $stmt = $bd->ejecutar($sql);
   while ($x = $bd->obtener_fila($stmt, 0)) {
      $datos[] = $x;
   }
   return $datos;
}

function updateTask($id, $datos)
{
   $bd = Db::getInstance();
   $sql = ("UPDATE tarea " . "SET descripcion = '" . $datos["descripcion"] . "'," . "personaCont = '" . $datos["contacto"] . "'," .
      "telefono = '" . $datos["telefono"] . "'," . "correo = '" . $datos["correo"] . "'," .
      "codPostal = '" . $datos["codPostal"] . "'," . "direccion = '" . $datos["direccion"] . "'," .
      "poblacion = '" . $datos["poblacion"] . "'," . "provincia = '" . $datos["provincia"] . "'," .
      "estado = '" . $datos["estado"] . "'," . "fechaCreacion = '" . $datos["fechaCreacion"] . "'," .
      "fechaRealizacion = '" . $datos["fechaRealizacion"] . "'," . "anotacionAnt = '" . $datos["anotacionAnt"] . "'," .
      "anotacionPos = '" . $datos["anotacionPos"] . "'," . "operario = '" . $datos["operario"] . "'" .
      "WHERE idTarea = '" . $id . "'");
      $stmt = $bd->ejecutar($sql);
      

  
}

function completeTask($id, $datos){
   $bd = Db::getInstance();
   $sql = ("UPDATE tarea " . "SET fechaRealizacion = '" . $datos["fechaRealizacion"] . "'," . "anotacionAnt = '" . $datos["anotacionAnt"] . "'," .
      "estado = '" . $datos["estado"] .  "'" . "WHERE idTarea = '" . $id . "'");
      $stmt = $bd->ejecutar($sql);
}

function updateUser($id, $datos){
   $bd = Db::getInstance();
   $sql = ("UPDATE usuario " . "SET nombre = '" . $datos["nombre"] . "'," . "pass = '" . $datos["pass"] . "'" . "WHERE idUsuario = '" . $id . "'");
   $stmt = $bd->ejecutar($sql);
}

function getUserData($nombre){
   $bd = Db::getInstance();
   $sql = "SELECT * FROM usuario WHERE nombre = " . "'". $nombre ."'" ;
   $datos = [];
   $stmt = $bd->ejecutar($sql);
   while ($x = $bd->obtener_fila($stmt, 0)) {
      $datos[] = $x;
   }
   return $datos;
}

function deleteUser($id){
   $bd = Db::getInstance();
   $sql = ("DELETE FROM usuario " . "WHERE idUsuario = " . $id . ";");
   $stmt = $bd->ejecutar($sql);
}