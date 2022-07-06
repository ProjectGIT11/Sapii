<?php 

error_reporting(0);
error_reporting(0);

if(isset($_SESSION['username'])){
    header("location: sesion.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style1/style.css">
</head>
<body>
    <div class="login">
  <div class="form">
    <form method="post" onsubmit="Fuction()" action="registrar.php">
    	<h2>Bienvenido</h2>
    	<input type="text" name="name" placeholder="Nombre completo" required value="<?php echo $username; ?>">
        <input type="email" name="email" placeholder="Email" required value="<?php echo $email; ?>">
        <input type="password" name="password" placeholder="Ingrese su contraseña" required 
        value="<?php echo $_POST['password']; ?>">
        <input type="password" name="cpassword" placeholder="confirme su contraseña" required 
        value="<?php echo $_POST['cpassword']; ?>">
        <input type="text" name="rol" value="1" placeholder="Rol" disabled>  
    	<input type="submit" name="register" class="submit">
        <center>
        <p class="p">Inicia sesion <a href="sesion.php">Aqui</a></p>
        </center>
    </form>
</div>
</div>
        <script>
function Fuction() {
  alert("The form was submitted");
}
</script>

</body>
</html>