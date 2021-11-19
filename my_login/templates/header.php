<?php
ob_start();
session_start();
require_once 'config.php';
if (!isset($_SESSION['logged_in'])) {
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Deyson Vente">
	<title>Página de inicio</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/fontAwesome/fontawesome.css">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

	<!--FontAwesome-->
	<script src="/fontAwesome/all.js">
	</script>
	<!--FontAwesome-->
	<script src="/fontAwesome/fontawesome.min.js">
	</script>
</head>

<body>

	<!-- Static navbar -->
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
			</div>
			<?php //$uri = end( explode("/",$_SERVER['REQUEST_URI']));
			$uris = explode("/", $_SERVER['REQUEST_URI']);
			$uri = end($uris);
			?>
			<div>
				<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
					<ul class="nav navbar-nav">
						<li <?php if ($uri == 'home.php') echo "class='active'"; ?>><a href="home.php">Inicio</a></li>
						<li <?php if ($uri == 'info.php') echo "class='active'"; ?>><a href="info.php">info</a>
						<li <?php if ($uri == 'new_client.php') echo "class='active'"; ?>><a href="new_cliente.php">Nuevo Cliente</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
								Hola,

								<?php if ($_SESSION['logged_in']) { ?>
									<?php echo $_SESSION['name']; ?>
									<span class="caret"></span>
							</a>
							<ul role="menu" class="dropdown-menu">
								<li>
									<a href="account.php">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
											<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
											<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
										</svg>
										Mi cuenta
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="logout.php">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
											<path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
										</svg>
										Salir
									</a>
								</li>
							</ul>
						<?php } ?>
						</li>

					</ul>
				</nav>
			</div>
			
			<!--/.nav-collapse -->
		</div>
	</div>