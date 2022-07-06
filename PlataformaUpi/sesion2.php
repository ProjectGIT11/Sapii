<?php

error_reporting(0);

if(isset($_SESSION['username'])){
    header("location: index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>registrate</title>
</head>
<body>
<div class="login">
  <div class="form">
    <h2>BIENVENIDO ADMIN</h2>

<form action="sin/validar.php" method="post">
<input type="text" id="user" class="login-username" placeholder="ingresa el correo" name="email" required value="<?php echo $_POST['email']; ?>">
<input type="password"   class="login-password" placeholder="ingrese su contraseña" name="password"  required value="<?php echo $_POST['password']; ?>">

<input type="submit" value="ingresar "  id="login-button" class="submit" name="register">
        <h2>registrate <a href="registro.php">Aqui</a></h2>

</form>
</div>
</div>
</body>
</html>