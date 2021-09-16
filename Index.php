<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
    <script src="main.js"></script>
    <title>Banco MySavings</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Logo de la web -->
        <a class="navbar-brand" href="#">
            <img src="Imagenes/logo_transparent.png" alt="Logo_empresa" style="width: 80px;">
        </a>

        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contactar</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
        </ul>
    </nav>

    <div class="container">
        <form name="formCuotas" method="POST" action="data.php" class="container" onKeypress="if(event.keyCode == 13) event.returnValue = false;">
            <div class="form-group">
                <div class="form-group">
                    <label for="valorPrestar">Ingresar valor a presatar:</label>
                    <input type="text" class="form-control" name="cantidadPrestamo" onkeypress="pulsar()">
                </div>
                <div class="form-group">
                    <label for="valorPrestar">Selecciona la cantidad de cuotas/meses:</label>
                    <select class="form-control" name="cuotas" required id="cuotas" aria-label="Default select example">
                        <option value="0">Seleccionar</option>
                        <option value="1">6</option>
                        <option value="2">12</option>
                        <option value="3">18</option>
                        <option value="4">24</option>
                        <option value="5">36</option>
                        <option value="6">48</option>
                        <option value="7">60</option>
                    </select>
                    <input id="clic" type="submit" value="Consultar">
                </div>
            </div>
        </form>
        <button onclick="validar()" class="btn-info">
            Enviar
        </button>
    </div>

    <footer>
        <?php include('footer.php');
        ?>
    </footer>
</body>


<script src="boostrap/js/jquery.min.js">
    //jquery
</script>
<script src="boostrap/js/popper.min.js">
    //Popper
</script>
<script src="boostrap/js/bootstrap.min.js">
    //Boostrap
</script>

</html>