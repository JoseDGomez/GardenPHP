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
    <link href="../vendor/profilestyle.css" rel="stylesheet">
</head>

<body>

    <?php include "menuhead.php" ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">

            <div class="col-md-12 ">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Mi perfil</h4>
                    </div>
                    <div class="panel-body">

                        <div class="box box-info">

                            <div class="box-body">
                                <div class="col-sm-6">
                                    <div align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">
                                    <br>
                                    <a href="../controller/moduser.php?nombre=<?php echo $_SESSION["nombre"]?>"><button type="button" class="btn btn-info">Cambiar datos</button></a>
                                        <!--Upload Image Js And Css-->
                                    </div>
                                    <br>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-sm-6">
                                    <h4 style="color:#00b1b1;"><?php echo $_SESSION["nombre"]?></h4></span>
                                        <p><?php if($_SESSION["tipo"] == "A"){
                                    echo "Administrador";
                                }else{
                                    echo "Operario";
                                } ?></p>
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">


                                <div class="col-sm-5 col-xs-6 title ">Nombre</div>
                                <div class="col-sm-7 col-xs-6 "><?php echo $_SESSION["nombre"]?></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 title ">Ocupación</div>
                                <div class="col-sm-7">
                                <?php if($_SESSION["tipo"] == "A"){
                                    echo "Administrador";
                                }else{
                                    echo "Operario";
                                } ?>
                                </div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                             


                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>


                    </div>
                </div>
            </div>








        </div>
    </div>
    <?php include "menufooter.php" ?>

</body>

</html>