<?php
include("../data/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM cliente Where id = '$id' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $documento = $row['dni'];
        $nombre = $row['nombres'];
        $apellidos = $row['apellidos'];
        $numCelular = $row['numeroCelular'];
        $direccion = $row['direccion'];
        $ciudad = $row['ciudad'];
    }

    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $documento = $_POST['dni'];
        $nombre = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $numCelular = $_POST['numeroCelular'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];

        $query = "UPDATE cliente set dni = '$documento', nombres ='$nombre', apellidos = '$apellidos',numeroCelular = '$numCelular',direccion = '$direccion',ciudad = '$ciudad' WHERE id = $id ";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Client Updated Successfully';
        $_SESSION['message_type'] = 'warning';
        header("Location: index.php");
    }
}

?>
<?php include("templates/header.php"); ?>
<div>
    <br>
    <hr>
    <h3>Datos del Cliente</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_client.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <label>Documento:</label>
                        <input type="text" name="dni" value="<?php echo $documento; ?>" class="form-control" placeholder="Update dni">
                    </div>
                    <div class="form-group">
                        <label>Nombres:</label>
                        <input type="text" name="nombres" value="<?php echo $nombre; ?>" class="form-control" placeholder="Update nombres">
                    </div>
                    <div class="form-group">
                        <label>Apellidos:</label>
                        <input type="text" name="apellidos" value="<?php echo $apellidos; ?>" class="form-control" placeholder="Update apellidos">
                    </div>
                    <div class="form-group">
                        <label>Número de Celular:</label>
                        <input type="text" name="numeroCelular" value="<?php echo $numCelular; ?>" class="form-control" placeholder="Update numeroCelular">
                    </div>
                    <div class="form-group">
                        <label>Dirección:</label>
                        <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control" placeholder="Update direccion">
                    </div>
                    <div class="form-group">
                        <label>Ciudad:</label>
                        <input type="text" name="ciudad" value="<?php echo $ciudad; ?>" class="form-control" placeholder="Update ciudad">
                    </div>
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>

            </div>
            
        </div>
    </div>
</div>
<?php include("templates/footer.php") ?>