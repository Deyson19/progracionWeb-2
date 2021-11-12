<?php
/*
include("db.php");
include("../data.php");

$sql = "INSERT INTO cuenta(cantidad, cantidadMeses, fechaPago, valorCuota, subTotal) 
VALUES ('$cantidadPrestamo','$cantidadMeses','$fechaPago','$valorCuota','$subTotal')";
//VALUES ('6099997','12','2020-11-10','89000','6700')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("No se realizó el registro de la cuenta");
    echo "Cantidad: ".$cantidadPrestamo;
}


header("Location: ../index.php");

?>
