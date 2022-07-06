<?php

if (isset($_POST['formulario'])) {
    
    $frase = 'UNETE A NUESTRA COMUNIDAD';

    $correo = $_POST['correo'];
    $contenido_2 =
     '
    <h5 class="card-title">Nadie solo GIT //</h5>
    <p class="card-text">Si eres un programador interesado no dudes en unirte</p>
    <a href="http://localhost/sapi/PlataformaUpi/Servicios.php" type="buttom">Ingresa</a>
    <img src="https://4.bp.blogspot.com/-5zu2XEB_WK0/WpEtZqX4IzI/AAAAAAAF10Q/RjGsNo-Njagrz3rHwS12cjHtKlseCdaowCLcBGAs/s1600/d8559f57d2cfcc8db35f032b424f1fe8.gif" alt="" 
    style="width: 300px;height: 300px;
    animation-name: mymove;
    animation-duration: 10s; @keyframes mymove {
       from {left: 0px;}
       to {left: 100%;}">
       <h1>UNETE Y COMPARTE</h1>'
       
       
       .$frase . '';
       
        


    $contenido = $_POST['contenido'];
    include_once 'index.php';
}
?>
<form action="" method="POST">
    <input type="hidden" name="formulario">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="correo" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Contenido</label>
        <input type="text" class="form-control" name="contenido" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>