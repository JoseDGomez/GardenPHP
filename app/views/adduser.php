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
    <form class="was-validated" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
        </div>
        <div class="form-group">
        <label for="selectTipo">Tipo</label>
            <select class="custom-select" id="selectTipo" name="tipo" required>
                <option value="">Tipo</option>
                <option value="A">Administrador</option>
                <option value="O">Operario</option>
            </select>
            <div class="invalid-feedback">Elige una opción valida</div>
        </div>
        <a href="../controller/register.php">  <button type="submit" class="btn btn-primary">Registrar</button> </a>
    </form>
    <?php include "menufooter.php" ?>

</body>

</html>