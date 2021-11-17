<?php include("../data/db.php"); ?>
<?php include("../includes/personalData.php"); ?>
<?php require_once 'templates/header.php'; ?>
<link rel="stylesheet" type="text/css" href="dataTables/dataTable.css">
<script type="text/javascript" charset="utf8" src="dataTables/dataTablet.js"></script>
<div class="content">
	<div class="container">
		<div class="row">
			<?php
			if (isset($_SESSION['message'])) {
			?>
				<div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible" >
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<?= $_SESSION['message'] ?>
				</div>
			<?php //session_unset();
			} ?>
			<button class="btn btn-primary" onclick="borraCliente()">Ensayo eliminar</button>
			<div class="col-md-12">
				<table class="table table-bordered" id="example">
					<thead>
						<tr style="font-size: 13px;">
							<th>DNI</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Celular</th>
							<th>Direccion</th>
							<th>Ciudad</th>
							<th>Prestamo</th>
							<th>Meses</th>
							<th>F.Pago</th>
							<th>V.Cuota</th>
							<th>SubTotal</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = "SELECT * FROM cliente";
						$result_tasks = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_array($result_tasks)) { ?>

							<tr>
								<td><?php echo $row['dni'];  ?> </td>
								<td><?php echo $row['nombres'];  ?> </td>
								<td><?php echo $row['apellidos'];  ?> </td>
								<td><?php echo $row['numeroCelular'];  ?> </td>
								<td><?php echo $row['direccion'];  ?> </td>
								<td><?php echo $row['ciudad'];  ?> </td>
								<td><?php echo $row['cantidadPrestamo'];  ?> </td>
								<td><?php echo $row['cantidadMeses'];  ?> </td>
								<td><?php echo $row['fechaPago'];  ?> </td>
								<td><?php echo $row['valorCuota'];  ?> </td>
								<td><?php echo $row['subTotal'];  ?> </td>
								<td>

									<a href="edit_client.php?id=<?php echo $row['id']; ?>" class="btn btn-info">
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
											<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
											<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
										</svg>
									</a>
									<a href="delete_client.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="borraCliente()">
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
											<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
										</svg>
									</a>
								</td>
							</tr>

						<?php } ?>

					</tbody>

				</table>
			</div>

		</div>
		<?php require_once 'templates/sidebar.php'; ?>

	</div>
</div> <!-- /container -->
<?php require_once 'templates/footer.php'; ?>

<script src="../sweetalert2.all.min.js"></script>

<!-- 
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js"></script> 
-->

<script>
	function borraCliente() {
		Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Se ha eliminado un registro',
			showConfirmButton: true,
			timer: 3800
		})
	}
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>