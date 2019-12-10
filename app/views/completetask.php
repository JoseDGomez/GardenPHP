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
    <?php foreach ($datos as $value => $dato) : ?>
        <?php $id = $dato["idTarea"]; ?>
        <form method="POST" action="../controller/completetask.php?id=<?php echo $id; ?>">

            <label>Estado</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio1" value="P" name="estado">
                <label class="form-check-label" for="inlineRadio1">Pendiente (P)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio2" value="R" name="estado">
                <label class="form-check-label" for="inlineRadio2">Realizada (R)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio3" value="C" name="estado">
                <label class="form-check-label" for="inlineRadio3">Cancelada (C)</label>
            </div>
            </div>
            <div class="form-group col-md-6">
            <div class="form-group col-md-6">
                <label for="inputFechaR">Fecha de realización</label>
                <input type="text" class="form-control" id="inputFechaR" placeholder="Fecha" name="fechaRealizacion" value="<?php echo date('Y-m-d'); ?>">
            </div>
            </div>
            <div class="form-group col-md-6">
            <div class="form-group col-md-6">
                <label for="textArea2">Anotaciones posteriores</label>
                <textarea class="form-control" id="textArea2" rows="6" name="anotacionPos"><?php echo $dato["anotacionPos"] ?></textarea>
            </div>
            </div>
            <input type="submit" class="btn btn-primary"></button><a>
            <?php endforeach; ?>
        </form>
        <?php include "menufooter.php" ?>

</body>

</html>