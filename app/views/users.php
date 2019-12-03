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
    <link href="../vendor/modalstyle.css" rel="stylesheet">

</head>

<body>

    <?php include "menuhead.php" ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) : ?>
                <tr>
                    <?php $id = $usuario["idUsuario"]; ?>
                    <td><?php echo $usuario["nombre"] ?></td>
                    <td><?php echo $usuario["pass"] ?></td>
                    <td><?php if ($usuario["tipo"] == "A") {
                                echo "Administrador";
                            } else
                                echo "Operario";  ?></td>
                    <td><a href="../controller/deleteUser.php?id=<?php echo $id; ?>"><img title="Eliminar" src="../vendor/img/xbutton.png"></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <a href="../controller/register.php"><button type="button" class="btn btn-success">Añadir usuario</button></a>
    <?php include "menufooter.php"?>

</body>

</html>