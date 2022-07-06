<?php

include('../Modelo/Conexion.php');

session_start();

if (isset($_POST['registrar'])) {
$name= $_POST['name'];
$email= $_POST['email'];
$password= md5($_POST['password']);


$sql = "INSERT INTO sesion(name, email, password) VALUES ('$name','$email','$password') ";
$result = mysqli_query($link, $sql);
if ($result->num_rows > 0) {
	$row = mysqli_fetch_assoc($result);
	$_SESSION['name'] = $row['name'];
	header("location:../Vista/Transacional/MiPerfil.php");
}else{echo "<script>alert('Ups! error en el correo o en la contraseña')</script>";
}

}


?>