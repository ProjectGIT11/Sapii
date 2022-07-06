<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/nuevomenu.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid" Style="position:fixed;">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-4 pt-2 min-vh-100">
                
                    
                    <span class=" font-weight-bold d-flex  pb-3 mb-md-0 me-md-auto text-secondary text-decoration-none" style="margin-left: 50px; font-size: 40px; margin-top: 10px;">SAPI</span>
                    <hr>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu" style="margin-top: 100px;">
                    <li class="nav-item">
                        <a  href="Dashboard.php" class="nav-link align-middle px-100" style="margin-top: 20px;font-family: 'Josefin Sans', sans-serif;">
                            <img src="../../Recursos/De/ICONO_INICIO.png" alt="hugenerd" width="20" height="20">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-secondary">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a  href="MiPerfil.php" data-bs-toggle="collapse" class="nav-link px-100 align-middle" style="margin-top: 20px;font-family: 'Josefin Sans', sans-serif;">
                        <img src="../../Recursos/De/ICONO_PERFIL.png" alt="hugenerd" width="20" height="20">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-secondary">Perfil</span> 
                        </a>
                    </li>
                    <li> 
                        </a>
                    </li>
                    <li>
                        <a  href="MisProcesos.php" data-bs-toggle="collapse" class="nav-link px-100 align-middle " style="margin-top: 20px;font-family: 'Josefin Sans', sans-serif;">
                        <img src="../../Recursos/De/ICONO_MISPROCESOS.png" alt="hugenerd" width="20" height="20">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-secondary" >Mis solicitudes</span>
                        </a>
                    </li>
                    <li>
                        <a  href="MisProyectos.php" data-bs-toggle="collapse" class="nav-link px-100 align-middle " style="margin-top: 20px;font-family: 'Josefin Sans', sans-serif;">
                        <img src="../../Recursos/De/MIS_PROYECTOS.png" alt="hugenerd" width="20" height="20">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline text-secondary" >Mis proyectos</span> 
                        </a>
                    </li>
                    <li>
                </ul>
                <div class="col-8">
                <p class="nombre_id-perfil" ><?php echo $_SESSION['username']; ?>
                    <!-- <span style="font-family: 'Josefin Sans Light';font-size: 12px;">Último Ingreso
                        025/11/2021</span> --> </p>
                        
            </div>

                <div class="dropdown pb-4 " style="margin-left: 20px;
                margin-top:20px;">
                    <a href="../../Controladores/Transaccional/Sesion.php" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../../Recursos/De/ICONO_SALIDA.png" alt="hugenerd" width="20" height="20" style="margin-top:-80px;">
                        <span class="d-none d-sm-inline mx-1 text-secondary " style="margin-top:-80px;font-family: 'Josefin Sans', sans-serif;" >Salir</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="col py-3">
            Content area...

        
        </div>-->
    </div>
</div>



</body>
</html>