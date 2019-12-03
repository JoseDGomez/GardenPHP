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
    <?php foreach ($datos as $dato) : 
      $id = $dato["idUsuario"];  ?>
    <form class="was-validated" method="post" action="../controller/updateuser.php?id=<?php echo $id; ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $dato["nombre"] ?>" aria-describedby="emailHelp" placeholder="Nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $dato["pass"] ?>" placeholder="Password" name="pass" required>
        </div>
     <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    <?php endforeach; ?>
    <?php include "menufooter.php" ?>

</body>

</html>