<?php include("../data/db.php"); ?>
<?php include("../includes/personalData.php"); ?>
<?php require_once 'templates/header.php'; ?>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>DNI</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>N° Celular</th>
							<th>Direccion</th>
							<th>Ciudad</th>
							<th>Prestamo</th>
							<th>Meses</th>
							<th>Fecha-Pago</th>
							<th>Valor Cuota</th>
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

									<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
										<i class="fas fa-edit"></i>
									</a>
									<a href="delete_task.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
										<i class="fas fa-trash-alt"></i>
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