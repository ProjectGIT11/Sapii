<html>

    <link rel="stylesheet" href="css/dashboard.css">
<!-- Headers -->
<?php
session_start();
if(!isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    header('Location: ../formulario/sesion.php');
}

include_once '../../Vista/Headers.php';

// Se valida que el usuario este logeado
?>
<link rel="stylesheet" href="../Transaccional/css/pienav.css">
<body>
<a href="Documentos/Guía-Instructivo-registro-derechos-de-autor.pdf" download="" style=""><img src="../../Recursos/De/LOGOS_SENNOVA_SENA.png" style="position: absolute;  margin-left: 80%; width:300px ; height:100px ; z-index: 10;" class="float-end"alt=""></a>
    <div class="box">
        <div class="row content">
            <?php include 'Nuevomenu.php'; ?>
            <div class="col-8 text-center">
               
                    <div class="col">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col" Style="margin-left:30%;margin-right:10%;">
                        <div class="card" style="border: none;font-family: 'Josefin Sans Bold' !important;">
                            <div class="card-body" style="margin: 0px 30px;">
                                <h1 style="text-align: left;color: #FF6600;">INICIO</h1>
                                <br>
                                <p class="text-justify">
                                Bienvenidos al Sistema de Atención de la Propiedad Intelectual SAPI. El objetivo principal de esta plataforma consiste en crear solicitudes de registro de marcas, nuevas creaciones (propiedad industrial), derechos de autor y derechos de obtentor para ser presentadas ante las oficinas nacionales que gestionan la propiedad intelectual en el país; de igual manera, podrá verificar las solicitudes realizadas y llevar a cabo el seguimiento de cada uno de los trámites. <span style="color:blue;">upisennova@sena.edu.co</span>
                                </p>

                                <!--LINK DE DESCARGA DEL DOCUMENTO-->
                                <div class="link">
                                <!--<li><a href="Documentos/Guía-Instructivo-registro-derechos-de-autor.pdf" download="" style="">Descargue el Instructivo de registro de propiedad intelectual aquí.</a></li></div>-->

                                <!--Pie de pagina-->
                          

</div>

</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>