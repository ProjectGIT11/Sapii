<?php

error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Transaccional/css/footer1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/sesion.css">
    <title>sesion</title>
</head>
<body>


<div class="login">
   <!-- <div class="titulo"Style="font-family: JosefinSans-Light;">SISTEMA DE ATENCIÓN <br><b>DE PROPIEDAD INTELECTUAL</b></div>-->
  <div class="form">
    <p class="sub-titulo">Iniciar Sesión</p>

<form action="validar.php" method="post" class="formulario">


    <div class="campo-1">
<label for="exampleInputEmail1" class="label" aria-describedby="emailHelp">Ingresar Correo Electrónico SENA </label><br><br>
<input type="text" id="user" class="input-1"  name="email"    minlength="4" maxlength="75" required value="<?php echo $_POST['email']; ?>">
</div>


<div class="campo-2">
<label for="exampleInputEmail1" class="label">Ingrese Contraseña</label><br><br>
<input type="password"   class="input-2"  name="password"   minlength="4" maxlength="32" required value="<?php echo $_POST['password']; ?>">
</div>

<div class="mb-3 text-left">
<input type="checkbox" class=""   id="exampleInputEmail1" aria-describedby="emailHelp" required>
<label for="exampleInputEmail1" class="form-label" style="color:#000;">Acepto los <a href="#" style="color:  rgb( 252, 115, 35);">Términos y Condiciones</a></label>
</div>


<input type="submit" value="ingresar"  id="login-button" class="boton" name="register">

</form>
<p class="olvide">¡Registrate!</p>
<p class="olvide1"><a href="registro.php" style="color:  rgb( 252, 115, 35);">¿Olvidaste tu Contraseña?</a></p>
</div>
<img src="img/LOGOS_SENNOVA_SENA.png" alt="" class="logo">
</div>

<?php
     // Se include el footer para cada página
     
     include "../Footer.php" 
     
     ?>
</body>
</html>


