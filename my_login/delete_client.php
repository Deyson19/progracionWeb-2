<?php 
include("../data/db.php"); 


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM cliente Where id = '$id' ";
    $result = mysqli_query($conn,$query);
    if (!$result) {
         die("No se pudo realizar la operación");
    }
    $_SESSION['message'] = 'Se ha eliminado el cliente.';
    $_SESSION['message_type'] = 'danger';

    header("Location: home.php");
}

?>

