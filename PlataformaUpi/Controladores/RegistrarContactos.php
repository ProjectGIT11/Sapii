<?php
include("../Modelo/Conexion.php");

if (isset($_POST['register'])) {

    $usuario = strftime($_POST['usuario']);
    $email = strftime($_POST['email']);
    $telefono = strftime($_POST['telefono']);
    $asunto = strftime($_POST['asunto']);
    $mensaje = strftime($_POST['mensaje']);
    $fechareg = date("d/m/y");

        $sql = "SELECT * FROM usuariocontacto WHERE email='$email' ";
        $result = mysqli_query($link, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO usuariocontacto (usuario, email, telefono, asunto, mensaje, fecha_reg) 
            VALUES ('$usuario', '$email','$telefono','$asunto','$mensaje','$fechareg')";
       $result = mysqli_query($link, $sql);
       if($result) {
         echo "<script>alert('Registrado exitoso')</script>";
         $usuario = " ";
         $email = " ";
         $telefono = " ";
         $asunto = " ";
         $mensaje = " ";
       
     } else {
        echo "<script>alert('failed!')</script>";
     }
}else {
        echo "<script>alert('Error! fallo el envio de solicitud')</script>";
    }
}else {
        echo "<script>alert('Error inesperado')</script>";
}



?>