<!DOCTYPE html>
<html lang="es">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <script type="languaje/js" src="main.js"></script>
     <title></title>
</head>

<body>

     <?php
     //Variables

     $valorPrestamo = 0;
     $cuotaInicial = 0;
     $saldoPrestamo = 0;
     $numeroCuotas = 0;
     $valorCuota = 0;
     $cantidadMeses = 0;
     $recorrido = 0;

     //campo cuota

     //Capturar select
     $cuotasSeleccionadas = ($_POST["cuotas"]);

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

     ?>

     <table class="table table-striped">
          <thead>
               <tr>
                    <th>No Cuotas</th>
                    <th>Fecha de pago</th>
                    <th>Valor Cuota</th>
                    <th>Subtotal pagado</th>
               </tr>
          </thead>
          <tbody>
               <?php 
               for ($i = 1; $i < $cantidadMeses + 1; $i++) {
                    print "<tr>";
                    echo "<td>";
                    echo $i . " " ;
                    echo "</td>";
                    echo "<td>Jill</td>";
                    echo "<td>Smith</td>";
                    echo "<td>50</td>";
                    print "</tr>";
               }
                    ?>

          </tbody>

     </table>

</body>

</html>