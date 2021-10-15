<?php
#region Parametros
//recibido por el get
/*
numeroDni=897979
selectTipoDni=Cédula
nombresCliente=Santos
apellidosCliente=Guill
fechaNacimiento=2021-09-27
numeroCelular=79696969
direccionCasa=Calle+34+-+uh
deptoResidencia=Valle+
ciudadResidencia=Cali
selectEstadoCivil=Soltero
emailCliente=santos-guill08%40gmail.com
remember=on
*/
#endregion

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

foreach ($_POST as $key => $value) {
     echo "<br>".$key.": \n";
     echo $value.":";
}
?>