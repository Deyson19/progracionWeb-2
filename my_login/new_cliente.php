<?php include("../data/db.php"); ?>
<?php include("../includes/personalData.php"); ?>
<?php require_once 'templates/header.php'; ?>
<div class="content">
    <div class="container">
    <?php
               if (isset($_SESSION['message'])) {
               ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible">
                         <button type="button" class="close" data-dismiss="alert">&times;</button>
                         <?= $_SESSION['message']?>
                    </div>
               <?php session_unset(); } ?>
        <div class="col-md-8">
            <div class="card card-body">
                <form action="save_client.php" method="POST">
                    <?php
                    #region Realizar selects
                    $tipoDni = array_reverse(array("", "Cédula", "Pasaporte", "Cédula extranjería", "Tarjeta de Identidad"));
                    $estadoCivil = array_reverse(array("", "Soltero", "Casado", "Separado"));
                    $cantidadCuotas = [0, 6, 12, 18, 24, 36, 48, 60];
                    $personalData = new DatosPersonales();
                    #endregion
                    ?>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="valorPrestar">Cantidad que deseas prestar:</label>
                            <input type="text" class="form-control" name="cantidadPrestamo" onkeypress="pulsar()" required id="ensayo" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="valorPrestar">Selecciona la cantidad de cuotas/meses:</label>
                            <?php
                            echo $personalData->crear_listado_cantidad_cuotas(array_reverse($cantidadCuotas), "cuotas");
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="dni">Documento de identidad:</label>
                            <input type="text" class="form-control" id="dni" placeholder="Ingresa tu documento" name="numeroDni" required maxlength="10" minlength="7">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Seleccionar tipo de documento:</label>
                            <?php
                            echo $personalData->crearSelectListaDni($tipoDni, "selectTipoDni");
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="dni">Ingresa tu Nombre(es):</label>
                            <input type="text" class="form-control" id="dni" placeholder="Ingresa tu nombre" name="nombresCliente" required>
                        </div>
                        <div class="form-group">
                            <label for="dni">Ingresa tus apellidos:</label>
                            <input type="text" class="form-control" id="dni" placeholder="Ingresa tu nombre" name="apellidosCliente" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaNacimiento">Fecha de nacimiento:</label>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento">
                        </div>
                        <div class="form-group">
                            <label for="numCel">Ingresa Número celular:</label>
                            <input type="tel" class="form-control" id="numCel" placeholder="Número celular" name="numeroCelular" required minlength="7">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección de residencia:</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Ingresa tu dirección de residencia" name="direccionCasa" required>
                        </div>
                        <div class="form-group">
                            <label for="depto">Departamento de residencia:</label>
                            <input type="text" class="form-control" id="depto" placeholder="Ingresa tu departamento de residencia" name="deptoResidencia" required>
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad de residencia:</label>
                            <input type="text" class="form-control" id="ciudad" placeholder="Ingresa tu ciudad de residencia" name="ciudadResidencia" required>
                        </div>
                        <div class="form-group">
                            <label for="sel2">Seleccionar Estado Civil:</label>
                            <?php
                            echo $personalData->crear_listado_estado_civil($estadoCivil, "selectEstadoCivil");
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <input type="email" class="form-control" placeholder="Ingresa tu Email" id="correo" name="emailCliente" required>
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" required> Aceptar el envío de datos.
                            </label>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" value="Guardar" name="guardar_cliente">
                        <input type="reset" class="btn btn-danger btn-block"></input>
                </form>
            </div>
        </div>
    </div>
</div>