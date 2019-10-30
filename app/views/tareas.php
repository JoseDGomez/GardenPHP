
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>
  
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../vendor/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <?php include "menuhead.php" ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Descripcion</th>
        <th scope="col">Contacto</th>
        <th scope="col">Telefono</th>
        <th scope="col">Dirección</th>
        <th scope="col">Provincia</th>
        <th scope="col">Estado</th>
        <th scope="col">Fecha Creacion</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tareas as $tarea) : ?>
        <tr>
          <?php $id = $tarea["idTarea"]; ?>
          <td><?php echo $tarea["descripcion"] ?></td>
          <td><?php echo $tarea["personaCont"] ?></td>
          <td><?php echo $tarea["telefono"] ?></td>
          <td><?php echo $tarea["direccion"] ?></td>
          <td><?php echo  $tarea["provincia"] ?></td>
          <td><?php echo $tarea["estado"] ?></td>
          <td><?php echo $tarea["fechaCreacion"] ?></td>
          <td><a href="../controller/deletetask.php?id=<?php echo $id; ?>"><button>Eliminar</button></a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php include "menufooter.php" ?>

</body>

</html>