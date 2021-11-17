<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="../fontAwesome/all.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="main.js"></script>
    <script src="sweetalert2.all.min.js"></script>

    

    <title>Bienvenidos a Banco MySavings</title>

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Logo de la web -->
        <a class="navbar-brand" href="#">
            <img src="Imagenes/logo_transparent.png" alt="Logo_empresa" style="width: 80px;">
        </a>

        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home<i class="fas fa-home"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contactar<i class="fas fa-envelope"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="my_login/register.php">Registrarse<i class="fas fa-user-circle"></i></a></li>
            <li class="nav-item">
                <a href="my_login" id="btn_to_login" class="btn btn-primary">
                <i class="fas fa-sign-in-alt"></i>Entrar
                </a>
            </li>
        </ul>
        
    </nav>

   