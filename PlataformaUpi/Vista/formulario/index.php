<?php 

	$conexion=mysqli_connect('localhost','root','','supi');
	$misproy = "misproyectos";

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table style="border: 1;">
		<tr>
	<td>cedula</td>
    <td>nombre</td>
    <td>email</td>
    <td>telefono</td>
    <td>proyecto</td>
    <td>fecha_registro</td>
		</tr>

		<?php 
		$sql="SELECT * from misproyectos";
		$result=mysqli_query($conexion,$sql);

		while($consulta=mysqli_fetch_array($result)){
		 ?>

		<tr>
		<td style="border: solid #fc7323 0.5px;"><?php echo $consulta['cedula']?></td>
    <td style="border: solid #fc7323 0.5px;"><?php echo $consulta['nombresc']?></td>
    <td style="border: solid #fc7323 0.5px;"><?php echo $consulta['email']?></td>
    <td style="border: solid #fc7323 0.5px;"><?php echo $consulta['telefono']?></td>
    <td style="border: solid #fc7323 0.5px;"><?php echo $consulta['telefono']?></td>
    <td style="border: solid #fc7323 0.5px;"><?php echo $consulta['fecha_reg']?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

<!--INDEX-PDF-->

	<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Generar archivo PDF a partir de MySQL usando PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
//Incluimos el fichero de conexion
include_once("conexion.php");
?>
</head>
<body>
<div class="container" style="padding-top:50px">
<h2>Generar archivo PDF a partir de MySQL usando PHP</h2>
<form class="form-inline" method="post" action="crear_pdf.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>
Exportar PDF</button>
</form>
</fieldset>
<hr>
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">Nombre</th>
<th scope="col">Edad</th>
<th scope="col">Salario</th>
<th scope="col">Fecha</th>
</tr>
</thead>
<tbody>

<?php 
/* 
$db = new dbConexion();
$connString = $db->getConexion();

$result = mysqli_query($connString, "SELECT idp, personal_nombre, personal_edad, personal_salario, fecha FROM personal") or die("database error:". mysqli_error($connString));
foreach($result as $row)
{
echo '<tr>
<th scope="row">'.$row['idp'].'</th>
<td>'.$row['personal_nombre'].'</td>
<td>'.$row['personal_edad'].'</td>
<td>'.number_format($row['personal_salario']).'</td>
<td>'.$row['fecha'].'</td>
</tr>';
} 
*/
?>
</tbody>
</table>
</div>
</body>
</html>
</body>
</html>