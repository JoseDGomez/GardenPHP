<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Garden PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../vendor/simple-sidebar.css" rel="stylesheet">
    <link href="../vendor/login.css" rel="stylesheet">
    <link href="../vendor/header.css" rel="stylesheet">

</head>

<body>

    <?php include "headerinicio.php"?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Iniciar sesión</h5>
                        <form class="form-signin" method="post" action="../controller/logincontrol.php">
                            <div class="form-label-group">
                                <input type="text" id="name" class="form-control" placeholder="Nombre" name="name" required autofocus>
                                <label for="name">Usuario</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="pass" class="form-control" placeholder="Contraseña" name="pass" required>
                                <label for="pass">Contraseña</label>
                            </div>

                           
                            <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Iniciar sesión">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>

</html>