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

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>>Admin SAPI</title>

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

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Lista </strong> Solicitudes</h1>

					<!-- Se llama la conexion a la base de datos -->
		<?php
        include_once ("../Modelo/Conexion.php");
        ?>
		<!-- Se finalizaliza el llamado de la conexion -->
		<!-- Se inicia la tabla -->
		<?php 
		$host = "localhost";
	$usuario = "root";
	$contrasenia = "";
	$base_de_datos = "supi";
	$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
	if ($mysqli->connect_errno) {
		echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$queryCondition = "";
	if (!empty($_POST["search"])) {
		$busqueda = $_POST['search'];

		$resultado = $mysqli->query("SELECT * FROM misproyectos WHERE cedula LIKE '%$busqueda%' OR email LIKE '%$busqueda%'  OR id LIKE '%$busqueda%' OR proyecto LIKE '%$busqueda%' ORDER BY id desc");
		$result = $resultado->fetch_all(MYSQLI_ASSOC);
	} else {
		$resultado = $mysqli->query("SELECT * FROM misproyectos ORDER BY id desc");
		$result = $resultado->fetch_all(MYSQLI_ASSOC);
	}
	//$orderby = " ORDER BY id desc";
	//$sql = "SELECT * FROM misproyectos " . $queryCondition;
	//$result = mysqli_query($conexion, $sql);
	?>



<!-- Barra de Busqueda -->
				<nav class="navbar navbar-light bg-light">
					<div class="container-fluid">
						<a class="navbar-brand"></a>
						<form class="d-flex" name="form1" method="post">

							<input type="text" name="search" class="form-control" value="" />
							<input type="submit" name="busqueda" class="btn btn-" style="background:#000; color:#fff; " value="Buscar">
						</form>

						<?php
						if (isset($_POST["busqueda"])) {

							$number = 0;

							// while ($row = mysqli_fetch_assoc($result)) {
								foreach ($result as $row) { 

								$number++; ?>
							
							<?php } ?>
							
						<?php } else {
							echo "<div><strong>Ingrese la palabra clave a buscar.</strong></div>";
						} ?>
						<br>

						<table class="table table-striped">
							<tr>
								<td style="    text-align: center;  background: #FF6600;color: #FFF;padding:10px 10px;font-size: 20px;  font-weight: 500;">Id Caso</td>
								<td style="    text-align: center;  background: #FF6600;color: #FFF;padding:10px 10px;font-size: 20px; font-weight: 500;">Nombre</td>
								<td style="    text-align: center; background: #FF6600;color: #FFF;padding:10px 10px;font-size: 20px; font-weight: 500;">Email</td>
								<td style="    text-align: center; background: #FF6600;color: #FFF;padding:10px 10px;font-size: 20px; font-weight: 500;">Cedula</td>
								<td style="    text-align: center;  background: #FF6600;color: #FFF;padding:10px 10px;font-size: 20px; font-weight: 500;">Proyecto</td>
								<td style="    text-align: center;  background: #FF6600;color: #FFF;padding:10px 10px;font-size: 20px; font-weight: 500;">ROL 2</td>
								<td style="    text-align: center;  background: #FF6600;color: #FFF;padding:10px 10px;font-size: 20px; font-weight: 500;">Fecha Registro</td>
								<td style="    text-align: center;  background: #FF6600;color: #FFF;padding:10px 10px;font-size: 20px; font-weight: 500;">Descargas</td>
							</tr>

							<?php
							// $sql = "SELECT * from misproyectos order By id desc";
							// $result = mysqli_query($conexion, $sql);

							// while ($consulta = mysqli_fetch_array($result)) 
							foreach ($result as $consulta) { ?>
								<tr>
									<td style=""><?php echo $consulta['id'] ?></td>
									<td style=" padding:10px 10px ;"><?php echo $consulta['nombresc'] ?></td>
									<td style=" padding:10px 10px "><?php echo $consulta['email'] ?></td>
									<td style=" padding:10px 10px "><?php echo $consulta['cedula'] ?></td>
									<td style=" padding:10px 10px "><?php echo $consulta['proyecto'] ?></td>
									<td style=" padding:10px 10px "><?php echo $consulta['estado'] ?></td>
									<td style=" padding:10px 10px "><?php echo $consulta['fecha_reg'] ?></td>
									<td style=" padding:5px 5px ">
										<form action="../formulario/excel.php" method="POST">
											<button class="btn btn-outline" style=" color:#fff; border: none;margin-left:20px; " name="export"><img src="../../Recursos/De/sobresalir.png" alt="" style=" width: 25px; height: 20px;"></button>
											</form>
											<form action="../formulario/pdf.php" method="POST">
											<button class="btn btn-outline" style="  border: none;margin-left:15px;  " name="export"><img src="../../Recursos/De/pdf.png" alt="" style=" width: 30px; height: 25px;"></button>
										</form>
									</td>
								</tr>
							<?php
							}
							?>
						</table>

		<!-- Finaliza la tabla -->
		<html>
  <link
    rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    type="text/css"
  />
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script
    src=
"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
    type="text/javascript"
  ></script>
  <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
  <style>
    .container {
      width: 70%;
      margin: 15px auto;
    }
    body {
      text-align: center;
      color: green;
    }
    h2 {
      text-align: center;
      font-family: "Verdana", sans-serif;
      font-size: 30px;
    }
  </style>
  <body>
    <div class="container">
      <h2>Grafica</h2>
	  
      <div>
        <canvas id="myChart"></canvas>
      </div>
    </div>
				<!-- Inicia Pie de pagina -->
				<?php
			include_once "../Controlador/piedepagina.php";
			?>
			<!-- Termina el pie de pagina -->
  </body>
  
  <script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday",
        ],
        datasets: [
          {
            label: "work load",
            data: [2, 9, 3, 17, 6, 3, 7],
            backgroundColor: "rgba(153,205,1,0.6)",
          },
          {
            label: "free hours",
            data: [2, 2, 5, 5, 2, 1, 10],
            backgroundColor: "rgba(155,153,10,0.6)",
          },
        ],
      },
    });
  </script>
</html>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>