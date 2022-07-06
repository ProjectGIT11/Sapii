<?
$conexion = mysqli_connect ('localhost','root','','supi');


if ($conexion -> connect_error)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_error().")".$conexion-> mysqli_connect_error());
}

?>