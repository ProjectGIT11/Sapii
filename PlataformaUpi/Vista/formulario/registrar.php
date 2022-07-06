<?php 

include("conexion.php");

if (isset($_POST['register'])) {
	    $username = strftime($_POST['name']);
	    $email = strftime($_POST['email']);
	    $password = md5($_POST['password']);
	    $cpassword = md5($_POST['cpassword']);
		$rol = ($_POST['rol']);
	    $fechareg = date("y/m/d");

	    if($password = $cpassword) {
	    	$sql = "SELECT * FROM datos WHERE email='$email' ";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
            	$sql = "INSERT INTO datos (username, email, password, rol_idrol, fecha_reg) 
            	VALUES ('$username', '$email','$password','$rol','$fechareg')";
           $result = mysqli_query($conn, $sql);
           if($result) {
             echo "<script>alert('Registrado exitoso')</script>";
             header("location:sesion.php");
             $username = " ";
             $email = " ";
             $_POST['password'] = " ";
             $_POST['cpassword'] = " ";
         } else {
	    	echo "<script>alert('failed!')</script>";
	    }
	}else {
	    	echo "<script>alert('Error! el correo ya existe')</script>";
	    }
    }else {
	    	echo "<script>alert('Error password')</script>";
    }
}
?>