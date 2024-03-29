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
    <div class="confirm">
        <h1>Confirmacion de borrado</h1>
        <p>¿Estas seguro de que quieres borrar esta tarea?</p>
        <a href="../controller/gettask.php"><button class="btn btn-danger">Cancelar</button></a>
        <a href="../controller/deletetask.php?id=<?php echo $id; ?>"><button class="btn btn-success" autofocus>Confirmar</button></a>
    <?php include "menufooter.php" ?>

</body>

</html>