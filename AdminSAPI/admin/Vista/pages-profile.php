<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

	<title>Profile | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Admin</span>
        </a>

		<!-- comienza Menu Lateral -->
		<?php
		include_once ("../Controlador/menu.php");
		?>
		<!-- Termina Menu Lateral -->
		<!-- Comienza Menu Superior -->
        <?php
        include_once ("../Controlador/menusuperior.php");
        ?>
		<!-- Termina Menu Superior -->
		<!-- Se llama la conexion a la base de datos -->
		<?php
        include_once ("../Modelo/Conexion.php");
        ?>
		<!-- Se finalizaliza el llamado de la conexion -->
			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">PERFIL</h1>
  </a>
					</div>
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Perfil Detalles</h5>
								</div>
								<?php 
                                        $query = "SELECT * FROM datos";
                                        $result = mysqli_query($conn, $query);
                                        while($row = mysqli_fetch_array($result)){ 
                                        #Obtiene una fila de resultados como un array asociativo, numérico, o ambos
                            ?>
								<div class="card-body text-center">
									<img src="img/avatars/avatar-2.jpg" alt="Christina Mason" class=" rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0"><?php echo $row['nombre']  ?></h5>
									<div class="text-muted mb-2">Abogado y magister en propiedad intelectual</div>

									<div>
										<a class="btn btn-primary btn-sm" href="#">Follow</a>
										<a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
									</div>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Habilidades</h5>
									<a href="#" class="badge bg-primary me-1 my-1"></a>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Sobre Mi</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#">San Francisco, SA</a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="#">GitHub</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a href="#">Boston</a></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><a href="#">staciehall.co</a></li>
										<li class="mb-1"><a href="#">Twitter</a></li>
										<li class="mb-1"><a href="#">Facebook</a></li>
										<li class="mb-1"><a href="#">Instagram</a></li>
										<li class="mb-1"><a href="#">LinkedIn</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Activities</h5>
								</div>
								<div class="card-body h-100">
									<!-- Comienza la tabla -->
<div class="col-md-8 mx-auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $row['id']  ?></td>
                                <td><?php echo $row['nombre']  ?></td>
                                <td><?php echo $row['dirrecion']  ?></td>
                                <td>**************</td>
                                <td>
                                    <a href="<?php  echo $row['id'] ?>" class="btn btn-secondary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?php echo $row['id'] ?>" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div> <!--End col-md-8-->
<!-- Termina la tabla -->
								</div>
						</div>
					</div>

				</div>
			</main>
			<!-- Comienza pie de paigina -->
			<?php
			include_once "../Controlador/piedepagina.php";
			?>
			<!-- Termina el pie de pagina -->
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>