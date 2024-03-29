
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
      <td><?php if($_SESSION["tipo"] == "A"){?><a href="../controller/confirmdeltask.php?id=<?php echo $id; ?>"><img title="Eliminar" src="../vendor/img/xbutton.png"></a><?php } ?>&nbsp&nbsp&nbsp&nbsp
              <a href="../controller/checkmodrol.php?id=<?php echo $id; ?>"><img title="Editar" src="../vendor/img/edit.png"></a>&nbsp&nbsp&nbsp&nbsp
              </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php include "menufooter.php" ?>

</body>

</html>