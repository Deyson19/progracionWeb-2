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

$docAbreviado = null;

//Voy a ver que tipo de documento escogio
switch ($tipoDni) {
    case 'Cédula':
        $docAbreviado = "CC";
        break;
    case 'Pasaporte':
        $docAbreviado = "P";
        break;
    case 'Cédula extranjería':
        $docAbreviado = "CE";
        break;
    case 'Tarjeta de Identidad':
        $docAbreviado = "TI";
        break;
    default:
        $docAbreviado = null;
        break;
}
$diaMes = "Tu pago está programado para el: " . 18 . " de ";
$months = [" ", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
$fechaPago = $diaMes . $months[1];
$cantidadPrestamo = ($_POST["cantidadPrestamo"]);
$valorPrestamo = $cantidadPrestamo;
$cuotasSeleccionadas = ($_POST["cuotas"]);
$cantidadMeses = $cuotasSeleccionadas;

$cuotaInicial = ($cantidadPrestamo) * 0.3;

$value70 = ($cantidadPrestamo - $cuotaInicial);
$saldoPrestamo = $value70 + (($value70) * 0.112);

$totalPagar2doMes = ($saldoPrestamo) / $cantidadMeses;
$pago2doMes = round($totalPagar2doMes, 0); //redondear número


$valorCuota = $pago2doMes;

$subTotal = round($saldoPrestamo - $totalPagar2doMes, 0);
#endregion

#region Variable con formato
$saldoPrestamoFormat = sprintf("%1\$.2f", $saldoPrestamo);
$cuotaInicialFormat = sprintf("%1\$.2f", $cuotaInicial);

$pago2doMesFormat = sprintf("%1\$.2f", $pago2doMes);
#endregion
$b = 0;
for ($i = 2; $i < $cantidadMeses + 1; $i++) {
    $saldoPrestamo -= $valorCuota;
    $c = 0;
    $b = $saldoPrestamo;
    $bFormato = sprintf("%1\$.2f", $b);
    $c = $b - $pago2doMesFormat;
}


?>

<?php

include("../data/db.php");

if (isset($_POST['guardar_cliente'])) {


    try {
        $query = "INSERT INTO `cliente` (`dni`, `tipoDni`, `nombres`, `apellidos`, `fechaNacimiento`, `numeroCelular`, `direccion`, `deptoResidencia`, `ciudad`, `estadoCivil`, `correo`, `cantidadPrestamo`, `cantidadMeses`, `fechaPago`, `valorCuota`, `subTotal`, `fechaRegistro`) 
   VALUES ('$dni', '$docAbreviado', '$nombres', '$apellidos', '$fechaNacimiento', '$numCelular', '$direccionResidencia', '$deptoResidencia', '$ciudadResidencia', '$estadoCivil', '$correo', '$cantidadPrestamo', '$cantidadMeses', '$fechaPago', '$valorCuota', '$subTotal', current_timestamp())";
        $result = mysqli_query($conn, $query);

        if (!$result) {
             die("No se realizó el registro principal");
             echo "Error" . mysqli_error($conn);
        }
        
   } catch (\Throwable $th) {
        echo $th;
   }
   $conn->close();

    $_SESSION['message'] = 'Cliente Guardado';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");

}



?>