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
               //echo "\n Imprimir el 30% " . "<br>"; //150000 si son 500000 => 70% = 350000

               //calcular el 70 %
               $value70 = ($cantidadPrestamo - $cuotaInicial);
               $saldoPrestamo = $value70 + (($value70) * 0.112);

               $totalPagar2doMes = ($saldoPrestamo) / $cantidadMeses;
               $pago2doMes = round($totalPagar2doMes, 0); //redondear número
               //echo "Pagar: " . $pago2doMes;

               $valorCuota = $pago2doMes;

               $subTotal = round($saldoPrestamo - $totalPagar2doMes, 0);

               #region Imprimir calculos (ya solo los necesito en la tabla)
               /* echo "<br> Cantidad solicitada: " . $cantidadPrestamo . "<br>";
               echo "\n Cuota inicial: " . $cuotaInicial . "\n";
               echo "<br> Pagar a partir del segundo mes: " . $pago2doMes . ' pesos';
               echo "<br> Valor cuota: +(11.2%) " . $valorCuota;
               echo "<br> Saldo prestamo: " . $saldoPrestamo;
               echo "<br> Subtotal . $subTotal "; */

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
                         $saldoPrestamoFormat = sprintf("%1\$.2f",$saldoPrestamo);
                         $cuotaInicialFormat = sprintf("%1\$.2f",$cuotaInicial);

                         $pago2doMesFormat = sprintf("%1\$.2f",$pago2doMes);
                         #endregion
                         ?>
                         <td>1</td>
                         <td><?php echo $diaMes . " " . $months[1] ?></td>
                         <td> <?php echo $cuotaInicialFormat ." $"; ?></td>
                         <td> <?php echo $saldoPrestamoFormat ." $"; ?></td>
                    </tr>
                    <?php
                    $b = 0;
                    for ($i = 2; $i < $cantidadMeses + 1; $i++) {
                         $saldoPrestamo -= $valorCuota;
                         $b = $saldoPrestamo;
                         $bFormato = sprintf("%1\$.2f",$b);
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