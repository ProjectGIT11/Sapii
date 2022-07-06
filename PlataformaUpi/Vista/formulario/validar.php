<?php

include('conexion.php');

session_start();

if (isset($_POST['register'])) {
	if(isset($_POST['email']) and isset($_POST['password'])){
		$email= $_POST['email'];
		$password= md5($_POST['password']);

		$sql = "SELECT * FROM datos WHERE email = '$email' AND password  ='$password' LIMIT 2";
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['id'];
			header("location:../Transaccional/Dashboard.php");
		}else{
			header("location:sesion.php");
		echo "<script>alert('Ups! error en el correo o en la contraseña')</script>";

		}
	}else{
		echo "<script>alert('Ups! error en el correo o en la contraseña')</script>";
	}

}

?>