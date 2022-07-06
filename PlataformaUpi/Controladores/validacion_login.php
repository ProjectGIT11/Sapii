<?php

include('../Modelo/Conexion_2.php');

session_start();

if (isset($_POST['registrar'])) {
$email= $_POST['email'];
$password= md5($_POST['password']);


$sql = "SELECT * FROM sesion WHERE email = '$email' AND password  ='$password' ";
$result = mysqli_query( $mysqli, $sql);
if ($result->num_rows > 0) {
	$row = mysqli_fetch_assoc($result);
	$_SESSION['email'] = $row['nombresc'];
	header("location:../Vista/Dashboard.php");
}else{
echo "<script>alert('Ups! error en el correo o en la contraseña')</script>";
}

}


?>