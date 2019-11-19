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
    <form>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Contacto</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Contacto" name="contacto">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Telefono</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Telefono" name="telefono">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Dirección</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="direccion">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Población</label>
                <input type="text" class="form-control" id="inputCity" name="poblacion">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Provincia</label>
                <select id="inputState" class="form-control" name="provincia">
                    <option selected>Selecciona una provincia</option>
                    <?php foreach ($provincia as $value => $prov) : ?>
                        <?php echo "<option value=" . $prov["nombre"] . ">" . $prov["nombre"] . "</option>"; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Codigo postal</label>
                <input type="text" class="form-control" id="inputZip" name="codPostal">
            </div>
        </div>
        <div>
            <label>Estado</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Pendiente (P)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Realizada (R)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3">Cancelada (C)</label>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFechaC">Fecha de creación</label>
                <input type="text" class="form-control" id="inputFechaC" placeholder="Fecha" name="fechaCreacion">
            </div>
            <div class="form-group col-md-6">
                <label for="inputFechaR">Fecha de realización</label>
                <input type="text" class="form-control" id="inputFechaR" placeholder="Fecha" name="fechaRealizacion">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="textarea1">Anotaciones anteriores</label>
                <textarea class="form-control" id="textArea1" rows="6" name="anotacionAnt"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="textArea2">Anotaciones posteriores</label>
                <textarea class="form-control" id="textArea2" rows="6" name="anotacionPos"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <?php include "menufooter.php" ?>

</body>

</html>