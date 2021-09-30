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
     switch ($cuotasSeleccionadas) {
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
     }
     #endregion
     ?>

     <div class="container-sm pt-3">
          <table class="table table-striped">
               <?php
               $diaMes = "Debes pagar el: " . 25 . " de ";
               $months = [" ", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

               #region codigo de C#
               /* int conversion = Convert.ToInt32(campoPrestamo.Numero);
            cuotaInicial = (campoPrestamo.Prestamo) * 0.3; //30% ok
            float y =  (11.2f/100) / 12;
            double totalAPagarSegundoMes = (campoPrestamo.Prestamo - cuotaInicial)/conversion-1;//ok
            saldoPrestamo = ((cuotaInicial + (cuotaInicial * 0.11)) / 12);
            valorCuota = totalAPagarSegundoMes * conversion; //0.04
            */
               #endregion

               $cuotaInicial = ($cantidadPrestamo) * 0.3;

               $totalPagar2doMes = ($cantidadPrestamo - $cuotaInicial) / $cantidadMeses - 1;
               $pago2doMes = round($totalPagar2doMes, 0); //redondear número

               $saldoPrestamo = (($cuotaInicial + ($cuotaInicial * 0.11)) / 12);

               $valorCuota = $totalPagar2doMes * $cantidadMeses;

               $subTotal = $valorCuota - ($cuotaInicial - $pago2doMes);

               #region Imprimir calculos (ya solo los necesito en la tabla)
               echo "Cantidad solicitada: ".$cantidadPrestamo;
               echo "\n Cuota inicial: " . $cuotaInicial . "\n";
               echo "<br> Pagar a partir del segundo mes: " . $pago2doMes . ' pesos';
               echo "<br> Valor cuota: " . $valorCuota;
               echo "<br> Saldo prestamo: " . $saldoPrestamo;
               echo " 'subtotal =>' . $subTotal ";

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
                         <td>1</td>
                         <td><?php echo $diaMes . " " . $months[1] ?></td>
                         <td> <?php echo $cuotaInicial; ?></td>
                         <td> <?php echo $cuotaInicial - round($totalPagar2doMes,0) ?></td>
                    </tr>
                    <?php

                    for ($i = 2; $i < $cantidadMeses + 1; $i++) {
                         print "<tr>";
                         echo "<td>";
                         echo $i . " ";
                         echo "</td>";
                         echo "<td>" . $diaMes . " " . $months[$i] . "</td>"; //fecha de pago
                         echo "<td>   $pago2doMes  </td>"; //valor cuota
                         echo "<td> $subTotal </td>"; //subtotal pagado
                         print "</tr>";
                    }
                    
                    ?>

               </tbody>

          </table>

          <?php
          class CalcularFecha
          {
               public static function calculandoFecha()
               {
                    $i = new DateInterval('P30D');
                    $d1 = new Datetime();
                    $p = new DatePeriod($d1, $i, 5);

                    foreach ($p as $d) {
                         echo "<br>" . $d->format('Y-m-d') . "\n";
                    }
               }
          }
          ?>
     </div>

</body>

</html>