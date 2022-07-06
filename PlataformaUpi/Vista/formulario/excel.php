<?php
$conexion=mysqli_connect('localhost','root','','supi');
$misproy = "misproyectos";

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= archivo.xls");


?>


<table style="border: solid #fc7323 2.0px;" >
		<tr>
	<td style="border: solid #fc7323 1.0px; padding:10px 10px ;" >Cedula</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;">Nombre</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;">Email</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;">Telefono</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;">Proyecto</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;">Estado</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;">Fecha_Registro</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;">Dowload</td>
		</tr>

		<?php 
		$sql="SELECT * from misproyectos";
		$result=mysqli_query($conexion,$sql);

		while($consulta=mysqli_fetch_array($result)){
		 ?>

		<tr>
		<td style="border: solid #fc7323 1.0px;"><?php echo $consulta['cedula']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;"><?php echo $consulta['nombresc']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['email']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['telefono']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['proyecto']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['estado']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['fecha_reg']?></td>
    <td style="border: solid #fc7323 1.0px; padding:5px 5px "><form action="../../Controladores/create_excel.php" method="POST">
<button class="btn btn-outline" style=" color:#fff; border: none;margin-left:25px; " name="export"><img src="../../Recursos/De/sobresalir.png" alt="" style=" width: 40px; height: 40px;"></button>
<button class="btn btn-outline" style="  border: none;margin-left:20px;  " name="export"><img src="../../Recursos/De/pdf.png" alt="" style=" width: 45px; height: 45px;"></button></form></td>
		</tr>
	<?php 
	}
	 ?>
	</table>