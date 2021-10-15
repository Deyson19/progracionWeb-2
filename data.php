<!DOCTYPE html>
<html lang="es">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <script type="languaje/js" src="main.js"></script>
     <title>Consulta Transferencia</title>
     
</head>

<body>

     <?php

     #region Recepción datos de los campos
     //recibe los datos del formulario
     $dni = $_POST["numeroDni"];
     $tipoDni = $_POST["selectTipoDni"];
     $nombres = $_POST["nombresCliente"];
     $apellidos = $_POST["apellidosCliente"];
     $fechaNacimiento = $_POST["fechaNacimiento"];
     $numCelular = $_POST["numeroCelular"];
     $direccionResidencia = $_POST["direccionCasa"];
     $deptoResidencia = $_POST["deptoResidencia"];
     $ciudadResidencia = $_POST["ciudadResidencia"];
     $estadoCivil = $_POST["selectEstadoCivil"];
     $correo = $_POST["emailCliente"];
     $acepta = $_POST["remember"];
     #endregion

     //Voy a ver que tipo de documento escogio
     $docBreviado = null;
     switch ($tipoDni) {
          case 'Cédula':
               $docBreviado = "CC";
               break;
          case 'Pasaporte':
               $docBreviado = "P";
               break;
          case 'Cédula extranjería':
               $docBreviado = "CE";
               break;
          case 'Tarjeta de Identidad':
               $docBreviado = "TI";
               break;
          default:
               $docBreviado = null;
               break;
     }

     echo $docBreviado;

     // foreach ($_POST as $key => $value) {
     //      echo "<br>" . $key . ": \n";
     //      echo $value . ":";
     // }
     ?>


     <?php
     #region Variables a utilizar
     //Variables
     $valorPrestamo  = 0;
     $cuotaInicial       = 0;
     $saldoPrestamo = 0;
     $numeroCuotas = 0;
     $valorCuota         = 0;
     $cantidadMeses = 0;
     $recorrido          = 0;
     #endregion

     #region Captura de datos

     //campo cantidad de dinero
     $cantidadPrestamo = ($_POST["cantidadPrestamo"]);
     $valorPrestamo = $cantidadPrestamo;

     /*
1:cuotaInicial debe ser el 30% del valor total del préstamo
2: saldoPrestamo debe ser el 70% del ValorPrestamo + 11.2% anual
3:  Generar el ValorCouta, de una lista desplegarle el total de cuotas a pagar, sabiendo que las cuotas deben ser a 6, 12, 18, 24, 36, 48 o máximo 60 meses.
*/
     //Capturar select
     $cuotasSeleccionadas = ($_POST["cuotas"]);
     #endregion

     #region Capturar el valor seleccionado en la lista "var = cantidadMeses"
     /*switch ($cuotasSeleccionadas) {
          case 1:
               $cantidadMeses = 6;
               break;
          case 2:
               $cantidadMeses = 12;
               break;
          case 3:
               $cantidadMeses = 18;
               break;
          case 4:
               $cantidadMeses = 24;
               break;
          case 5:
               $cantidadMeses = 36;
               break;
          case 6:
               $cantidadMeses = 48;
               break;
          case 7:
               $cantidadMeses = 60;
               break;

          default:
               echo "No es posible calcular los datos";
               break;
     }*/
     #endregion
     $cantidadMeses = $cuotasSeleccionadas;
     ?>

     <div class="container">
          <h2 class="text-center text-info">Información personal del Cliente</h2>
          <table class="table">
               <h3 class="text-primary">Datos básicos</h3>
               <thead class="thead-dark">
                    <tr>
                         <th class="text-center">Nombre</th>
                         <th class="text-center">Apellido</th>
                         <th class="text-center">Fecha de Nacimiento</th>
                         <th class="text-center">Estado Civil</th>
                         <th class="text-center">Tipo de Documento</th>
                         <th class="text-center">Número de Documento</th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <td class="text-center text-capitalize text-muted"><?php echo $nombres ;?></td>
                         <td class="text-center text-capitalize text-muted"><?php echo $apellidos ;?></td>
                         <td class="text-center text-capitalize text-muted"><?php echo $fechaNacimiento ;?></td>
                         <td class="text-center text-capitalize text-muted"><?php echo $estadoCivil ;?></td>
                         <td class="text-center text-capitalize text-muted"><?php echo $docBreviado ;?></td>
                         <td class="text-center text-capitalize text-muted"><?php echo $dni ;?></td>
                    </tr>
               </tbody>
          </table>

          <table class="table">
               <h3 class="text-primary">Datos de contacto</h3>
               <thead class="thead-dark">
                    <tr>
                         <th class="text-center">Número de Celular</th>
                         <th class="text-center">Correo</th>
                         <th class="text-center">Depto Residencia</th>
                         <th class="text-center">Ciudad Residencia</th>
                         <th class="text-center">Dirección</th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                    <td class="text-center text-capitalize text-muted"><?php echo $numCelular ;?></td>
                    <td class="text-center text-capitalize text-muted"><?php echo $correo ;?></td>
                    <td class="text-center text-capitalize text-muted"><?php echo $deptoResidencia ;?></td>
                    <td class="text-center text-capitalize text-muted"><?php echo $ciudadResidencia ;?></td>
                    <td class="text-center text-capitalize text-muted"><?php echo $direccionResidencia ;?></td>
                    </tr>
               </tbody>
          </table>

          <table class="table table-striped">
               <?php
               $diaMes = "Tu pago está programado para el: " . 18 . " de ";
               $months = [" ", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

               $cuotaInicial = ($cantidadPrestamo) * 0.3;
               //echo "\n Imprimir el 30% " . "<br>"; //150000 si son 500000 => 70% = 350000

               //calcular el 70 %
               $value70 = ($cantidadPrestamo - $cuotaInicial);
               $saldoPrestamo = $value70 + (($value70) * 0.112);

               $totalPagar2doMes = ($saldoPrestamo) / $cantidadMeses;
               $pago2doMes = round($totalPagar2doMes, 0); //redondear número
               //echo "Pagar: " . $pago2doMes;

               $valorCuota = $pago2doMes;

               $subTotal = round($saldoPrestamo - $totalPagar2doMes, 0);
               #endregion
               ?>
               <thead>
                    <tr class="table-info">
                         <th>N° Cuotas</th>
                         <th>Fecha de pago</th>
                         <th>Valor Cuota</th>
                         <th>Subtotal pagado</th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <?php
                         #region Variable con formato
                         $saldoPrestamoFormat = sprintf("%1\$.2f", $saldoPrestamo);
                         $cuotaInicialFormat = sprintf("%1\$.2f", $cuotaInicial);

                         $pago2doMesFormat = sprintf("%1\$.2f", $pago2doMes);
                         #endregion
                         ?>
                         <td>1</td>
                         <td><?php echo $diaMes . " " . $months[1] ?></td>
                         <td> <?php echo $cuotaInicialFormat . " $"; ?></td>
                         <td> <?php echo $saldoPrestamoFormat . " $"; ?></td>
                    </tr>
                    <?php
                    $b = 0;
                    for ($i = 2; $i < $cantidadMeses + 1; $i++) {
                         $saldoPrestamo -= $valorCuota;
                         $b = $saldoPrestamo;
                         $bFormato = sprintf("%1\$.2f", $b);
                         print "<tr>";
                         echo "<td>";
                         echo $i . " ";
                         echo "</td>";
                         echo "<td>" . $diaMes . " " . $months[$i] . "</td>"; //fecha de pago
                         echo "<td>   $pago2doMesFormat $  </td>"; //valor cuota
                         echo "<td> $bFormato $ </td>"; //subtotal pagado
                         print "</tr>";
                    }

                    ?>

               </tbody>

          </table>
     </div>

</body>

</html>