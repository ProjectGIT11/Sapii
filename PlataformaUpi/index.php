<html>

<?php
session_start();
include_once './Admin/modelo/database.php';
include_once './Vista/HeadersIndex.php';
include_once "nav.php";
include_once './Controladores/Public_Content/Consultas_Index.php';
?>
<html lang="en">

<head>
    <link rel="stylesheet" href="Vista/Transaccional/css/footer1.css">
    <link rel="stylesheet" href="Vista/Transaccional/css/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>

</head>

<body>
    <div class="fond">
        <div class="fond-recursos"><img src="Recursos/SAPI/UNIDAD DE PROPIEDAD INTELECTUAL.png" alt="" class="recursos">
        </div>
        <div class="fond-upi"><img src="Recursos/SAPI/UPI.png" alt="" class="upi">
            <p>La Unidad de Propiedad Intelectual (UPI), es una estrategia de SENNOVA que pretende gestionar la
                protección de las creaciones, invenciones, obtenciones vegetales y cualquier otra creación, resultado de
                las actividades de investigación aplicada, desarrollo tecnológico e innovación de los proyectos
                adelantados en los centros de formación y en la oferta programática de apoyo.</p>
            <button type="submit" class="boton-1">Ver más</button>

        </div>
        <div class="fond-principal"><img src="Recursos/SAPI/ILUSTRACION PRINCIPAL.png" alt="" class="principal">
        </div>
    </div>
    <div class="contadores">
        <img src="Recursos/SAPI/1.png" alt="" class="uno" style="width:270px ;">
        <img src="Recursos/SAPI/2.png" alt="" class="dos" style="width:270px ;">
        <img src="Recursos/SAPI/3.png" alt="" class="tres" style="width:270px ;">
        <img src="Recursos/SAPI/4.png" alt="" class="cuatro" style="width:270px ;">
        <img src="Recursos/SAPI/5.png" alt="" class="cinco" style="width:270px ;">
    </div>
    <div class="banner">
        <img src="Recursos/SAPI/BANNER.png" alt="Servicios" class="banner-1">
        <div class="cont" style="margin-top:0px;">
            <p class="titulo" style="margin-top:60px;margin-left:130px;">Servicios</p>
            <div class="ul-1" style="margin-left:60px;margin-top:100px;">
                <ul>
                    <li>orientacion </li>
                    <li>asistencia </li>
                    <li>registro </li>
                </ul>
                <ul>
                    <li>Orientacion </li>
                    <li>Orientacion </li>
                    <li>Orientacion </li>
                </ul>
            </div>
            <button type="submit" class="boton-2" style="color: #2d98c6; margin-top:110px; z-index: 20;"> <a href="./Vista/formulario/sesion.php" target="_blank" style="color: #2d98c6;">INICIE AQUÍ</a></button>
        </div>
    </div>
    <!-- margin-top:19%;margin-left:20% -->
    <div class="btn-group d-block" role="group" arial-label="Basic example" style="margin-left:20%">
        <h3 class="interes-titulo">Enlaces de Interes</h3>
        <button type="button" class="boton_btn1"><a href="https://www.sic.gov.co/" target="_blank" style="color: #ffffff;">Industria y Comercio SuperIntendencia</a></button>
        <button type="button" class="boton_btn2"><a href="https://www.ica.gov.co/" target="_blank" style="color: #ffffff;">Instituto Colombiano Agropecuario</a></button>
        <button type="button" class="boton_btn3"><a href="http://derechodeautor.gov.co:8080/home" target="_blank" style="color: #ffffff;">Dirección Nacional de Derecho de Autor</a></button>
    </div>
    <?php
    // Se include el footer para cada página

    include "Vista/Footer.php"

    ?>
</body>

</html>