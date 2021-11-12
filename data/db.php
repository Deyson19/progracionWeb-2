<?php

//session_start();


 $servidor = "localhost";
 $usuario ="root" ;
 $pass = "";
 $db ="bancomysavings";

 $conn = mysqli_connect(
      $servidor,
      $usuario,
      $pass,
      $db
 );

 $conn2 = mysqli_connect(
     $servidor,
     $usuario,
     $pass,
     $db
);

 if (!$conn) {
      die("No se pudo conectar");
 }
 if (!$conn2) {
     die("No se pudo conectar");
}



 

?>