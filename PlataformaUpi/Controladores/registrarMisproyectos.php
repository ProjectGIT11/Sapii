<?php
include("../Modelo/Conexion_2.php");

if (isset($_POST['registrar'])) {

    $cedula = strftime($_POST['cedula']);
    $nombresc = strftime($_POST['nombresc']);
    $email = strftime($_POST['email']);
    $telefono = strftime($_POST['telefono']);
    $proyecto = strftime($_POST['proyecto']);
    //$registro = date($_POST["registro"]);
    $centror = strftime($_POST['centror']);
    $cargo = strftime($_POST['cargo']);
    $rol = strftime($_POST['rol']);
    $sectort = strftime($_POST['sectort']);
    $estado = strftime($_POST['estado']);
    $fechareg = date("y/m/d");

        $sql = "SELECT * FROM misproyectos WHERE proyecto='$proyecto' ";
        $result = mysqli_query($mysqli, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO misproyectos (cedula, nombresc, email, telefono, proyecto, centror, cargo, rol, sectort, estado, fecha_reg) 
            VALUES ('$cedula', '$nombresc','$email','$telefono','$proyecto','$centror','$cargo','$rol','$sectort','$estado','$fechareg')";
       $result = mysqli_query($mysqli, $sql);
       if($result) {
        header("location:../Vista/Transaccional/RegistroIndividual.php");
         $cedula = " ";
         $nombresc = " ";
         $email = " ";
         $telefono = " ";
         $proyecto = " ";
         //$registro = " ";
         $centror = " ";
         $cargo = " ";
         $rol = " ";
         $sectort = " ";
         $estado=" ";
       
     } else {
        echo "<script>alert('failed!')</script>";
     }
}else {
        echo "<script>alert('No puedes replicar un nombre del proyecto ya registrado')</script>";
    }
}else {
        echo "<script>alert('Error inesperado')</script>";
}



?>