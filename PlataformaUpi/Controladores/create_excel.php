<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once " ../Modelo/Conexion_2.php";
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
					<tr>
					<td>Cedula</td>
					<td>Nombre</td>
					<td>Email</td>
					<td>Telefono</td>
					<td>Proyecto</td>
					<td>Fecha_Registro</td>
					
						</tr>
					</tr>
				<tbody>
		";
		
		$query = mysqli_query($mysqli, "SELECT * FROM `misproyectos`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
						<td>".$fetch['nombresc']."</td>
						<td>".$fetch['email']."</td>
						<td>".$fetch['telefono']."</td>
						<td>".$fetch['proyecto']."</td>
						<td>".$fetch['fecha_reg']."</td>
					</tr>
		";
		}
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>