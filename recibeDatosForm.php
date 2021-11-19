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

foreach ($_POST as $key => $value) {
     echo "<br>".$key.": \n";
     echo $value.":";
}
?>