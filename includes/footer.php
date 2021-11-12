
    <style>
        img {
            float: left;
        }
    </style>

<body>
    <?php
    $companyName = "Banco MySavigns";
    $companyMail = "info@mysavings.com";
    $companyNumbers = ['312 234 56 88', '320 234 56 78'];
    $companyProducts = ['Créditos', 'Tarjetas', 'Prestamos', 'Cuentas'];
    $direccion = "UNAD - Colombia ";
    $autor = " Deyson Vente ";
    $creditos = "MDBootstrap y a Bootstrap";
    ?>
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: darkgray;">
            <div class="container">
                <hr>
                <!-- Footer Links -->
                <div class="container text-center text-md-left mt-5">

                    <!-- Grid row -->
                    <div class="row mt-3">

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                            <!-- Content -->
                            <h6 class="text-uppercase font-weight-bold">
                                <?php echo $companyName; ?>
                            </h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <img src="Imagenes/logo.png" class="img-fluid rounded float-start" alt="Logo" style="width: 200px;;">
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                            <!-- Links -->
                            <h6 class="text-uppercase font-weight-bold">Servicios y Productos</h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <?php
                            foreach ($companyProducts as $i) {
                                echo "<p>";
                                echo "<a href='#!'> $i</a>";
                                echo "</p>";
                            }
                            ?>


                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                            <!-- Links -->
                            <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <i class="fas fa-home mr-3"></i>        <?php echo $direccion ?>
                            </p>
                            <p>
                                <i class="fas fa-envelope mr-3"></i> <?php echo $companyMail ?>
                            </p>
                            <p>
                                <i class="fas fa-phone mr-3"></i> <?php echo  $companyNumbers[0] ?>
                            </p>
                            <p>
                                <i class="fas fa-print mr-3"></i> <?php echo $companyNumbers[1] ?>
                            </p>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Footer Links -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© <?php echo date('Y'); ?> Copyright:
                    <a href="#"> <?php print $companyName ?></a>
                </div>
                <!-- Copyright -->
            </div>
        </div>



    </footer>
    <!-- Footer -->
    <script src="../bootstrap/js/jquery.min.js">
     //jquery
</script>
<script src="../bootstrap/js/popper.min.js">
     //Popper
</script>
<script src="../bootstrap/js/bootstrap.min.js">
     //Boostrap
</script>
<script src="../fontAwesome/js/all.js">
     //FontAwesome
</script>
<script src="sweetalert2.all.min.js"></script>

</body>

</html>