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
    <form method="POST" action="../controller/moddetails.php?id=<?php echo $id; ?>">
        
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"><?php echo $dato["descripcion"] ?></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputOperario">Operario</label>
                    <select id="inputOperario" class="form-control" name="operario">
                        <option value="0">Selecciona un operario</option>
                        <option selected value="<?php echo $dato["operario"] ?>"><?php echo $dato["operario"] ?></option>
                        <?php foreach ($operario as $value => $op) : ?>
                            <?php echo "<option value=" . $op["nombre"] . ">" . $op["nombre"] . "</option>"; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputemail">Correo</label>
                    <input type="text" class="form-control" id="inputemail" name="correo" value="<?php echo $dato["correo"] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Contacto</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Contacto" name="contacto" value="<?php echo $dato["personaCont"] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Telefono</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Telefono" name="telefono"value="<?php echo $dato["telefono"] ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Dirección</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="direccion" value="<?php echo $dato["direccion"] ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Población</label>
                    <input type="text" class="form-control" id="inputCity" name="poblacion" value="<?php echo $dato["poblacion"] ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Provincia</label>
                    <select id="inputState" class="form-control" name="provincia">
                        <option value="0" >Selecciona una provincia</option>
                        <option selected value="<?php echo $dato["provincia"] ?>"><?php echo $dato["provincia"] ?></option>
                        <?php foreach ($provincia as $value => $prov) : ?>
                            <?php echo "<option value=" . $prov["nombre"] . ">" . $prov["nombre"] . "</option>"; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Codigo postal</label>
                    <input type="text" class="form-control" id="inputZip" name="codPostal" value="<?php echo $dato["codPostal"] ?>">
                </div>
            </div>
            <div>
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
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFechaC">Fecha de creación</label>
                    <input type="text" class="form-control" readonly id="inputFechaC" placeholder="Fecha" name="fechaCreacion" value="<?php echo $dato["fechaCreacion"] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputFechaR">Fecha de realización</label>
                    <input type="text" class="form-control" id="inputFechaR" placeholder="Fecha" name="fechaRealizacion" value="<?php echo $dato["fechaRealizacion"] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="textarea1">Anotaciones anteriores</label>
                    <textarea class="form-control" id="textArea1" readonly rows="6" name="anotacionAnt"><?php echo $dato["anotacionAnt"] ?></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="textArea2">Anotaciones posteriores</label>
                    <textarea class="form-control" id="textArea2" rows="6" name="anotacionPos"><?php echo $dato["anotacionPos"] ?></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-primary">Sign in</button><a>
            <?php endforeach; ?>
    </form>
    <?php include "menufooter.php" ?>

</body>

</html>