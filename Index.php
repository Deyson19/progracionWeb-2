           <!DOCTYPE html>
           <html lang="es">

           <head>
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="stylesheet" href="styles.css">
               <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
               <script src="main.js"></script>
               <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

               <title>Banco MySavings</title>

           </head>

           <body>
               <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                   <!-- Logo de la web -->
                   <a class="navbar-brand" href="#">
                       <img src="Imagenes/logo_transparent.png" alt="Logo_empresa" style="width: 80px;">
                   </a>

                   <ul class="navbar-nav">
                       <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                       <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
                       <li class="nav-item"><a class="nav-link" href="#">Contactar</a></li>
                       <li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
                   </ul>
               </nav>

               <div class="container">
                   <h1 class="text-info text-center">Formulario para enviar información</h1>
                   <form name="formCuotas" method="POST" action="data.php" class="needs-validation" novalidate onKeypress="if(event.keyCode == 13) event.returnValue = false;">
                       <?php
                        #region Realizar selects
                        include("PersonalData.php");
                        $tipoDni = array_reverse(array("Cédula", "Pasaporte", "Cédula extranjería", "Tarjeta de Identidad"));
                        $estadoCivil = array_reverse(array("Soltero", "Casado", "Separado"));
                        $cantidadCuotas = [0, 6, 12, 18, 24, 36, 48, 60];
                        $personalData = new DatosPersonales();
                        #endregion
                        ?>
                       <div class="form-group">
                           <div class="form-group">
                               <label for="valorPrestar">Ingresar la cantidad que deseas prestar:</label>
                               <input type="text" class="form-control" name="cantidadPrestamo" placeholder="Ingresa la cabtidad a prestar" onkeypress="pulsar()" required id="ensayo">
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="valorPrestar">Selecciona la cantidad de cuotas/meses:</label>
                               <?php
                                echo $personalData->crear_listado_cantidad_cuotas(array_reverse($cantidadCuotas), "cuotas");
                                ?>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="dni">Documento de identidad:</label>
                               <input type="text" class="form-control" id="dni" placeholder="Ingresa tu documento" name="numeroDni" required>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="sel1">Seleccionar tipo de documento:</label>
                               <?php
                                echo $personalData->crearSelectListaDni($tipoDni, "selectTipoDni");
                                ?>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="dni">Ingresa tu Nombre(es):</label>
                               <input type="text" class="form-control" id="dni" placeholder="Ingresa tu nombre" name="nombresCliente" required>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="dni">Ingresa tus apellidos:</label>
                               <input type="text" class="form-control" id="dni" placeholder="Ingresa tu nombre" name="apellidosCliente" required>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="fechaNacimiento">Fecha de nacimiento:</label>
                               <input type="date" id="fechaNacimiento" name="fechaNacimiento">
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="numCel">Ingresa Número celular:</label>
                               <input type="tel" class="form-control" id="numCel" placeholder="Número celular" name="numeroCelular" required>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="direccion">Dirección de residencia:</label>
                               <input type="text" class="form-control" id="direccion" placeholder="Ingresa tu dirección de residencia" name="direccionCasa" required>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="depto">Departamento de residencia:</label>
                               <input type="text" class="form-control" id="depto" placeholder="Ingresa tu departamento de residencia" name="deptoResidencia" required>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="ciudad">Ciudad de residencia:</label>
                               <input type="text" class="form-control" id="ciudad" placeholder="Ingresa tu ciudad de residencia" name="ciudadResidencia" required>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="sel2">Seleccionar Estado Civil:</label>
                               <?php
                                echo $personalData->crear_listado_estado_civil($estadoCivil, "selectEstadoCivil");
                                ?>
                               <div class="valid-feedback">Campo completado</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group">
                               <label for="correo">Correo Electrónico:</label>
                               <input type="email" class="form-control" placeholder="Ingresa tu Email" id="correo" name="emailCliente" required>
                               <div class="valid-feedback">Valid.</div>
                               <div class="invalid-feedback">Por favor llena este campo.</div>
                           </div>
                           <div class="form-group form-check">
                               <label class="form-check-label">
                                   <input class="form-check-input" type="checkbox" name="remember" required> Aceptar el envío de datos.
                                   <div class="valid-feedback">Campo completado</div>
                                   <div class="invalid-feedback">Check this checkbox to continue.</div>
                               </label>
                           </div>

                           <button type="submit" class="btn btn-primary">Enviar datos</button>
                           <button type="reset" class="btn btn-danger">Limpiar campos</button>
                   </form>
               </div>

               <footer>
                   <?php include('footer.php');
                    ?>
               </footer>
           </body>
           <script>
               // Disable form submissions if there are invalid fields
               (function() {
                   'use strict';
                   window.addEventListener('load', function() {
                       // Get the forms we want to add validation styles to
                       var forms = document.getElementsByClassName('needs-validation');
                       // Loop over them and prevent submission
                       var validation = Array.prototype.filter.call(forms, function(form) {
                           form.addEventListener('submit', function(event) {
                               if (form.checkValidity() === false) {
                                   event.preventDefault();
                                   event.stopPropagation();
                               }
                               form.classList.add('was-validated');
                           }, false);
                       });
                   }, false);
               })();
           </script>

           <script src="boostrap/js/jquery.min.js">
               //jquery
           </script>
           <script src="boostrap/js/popper.min.js">
               //Popper
           </script>
           <script src="boostrap/js/bootstrap.min.js">
               //Boostrap
           </script>

           </html>