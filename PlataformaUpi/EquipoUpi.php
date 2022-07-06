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
<link rel="stylesheet" href="Vista/Transaccional/css/equipoupi1.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>

</head>
<body>


    <img src="Recursos/De/Banner_FOTO_UPI.png" alt="" class="equipo-upi" >



<!--Columna # 1-->

<div class="colum-1">
<!--CAJA # 1-->
    <div class="caja-1">
        <!--IMAGEN # 1-->
    <img class="imagen" src="Recursos/SAPI/FOTO_JOSE_M.png" alt="" width="350px" height="305px">
    <h2>Jose Manuel</h2>
    <p class="text-1">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
         archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
         de las industrias desde el año 1500, cuando un impresor  .</p>     
    </div>
    <div class="caja-2">
    <img class="imagen" src="Recursos/SAPI/FOTO_JHON JADER_F.png" alt="" width="350px" height="305px">
    <h2>Jhon Jader</h2>
    <p class="text-2">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
         archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
         de las industrias desde el año 1500, cuando un impresor .</p>    
    </div>
    <div class="caja-3">
    <img class="imagen" src="Recursos/SAPI/FOTO_HASBLEIDI_F.png" alt="" width="350px" height="305px"
    height: 550px;>
    <h2>Ana Maria</h2>
    <p class="text-3">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
         archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
         de las industrias desde el año 1500, cuando un impresor .</p>    
    </div>
    </div>
<!--Columna # 2-->

<div class="colum-2" >
    <div  class="caja-4">
    <img class="imagen" src="Recursos/SAPI/FOTO_ALVARO_F.png" alt="" >
    <h2>Alvaro Medina</h2>
    <p class="text-4">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
         archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
         de las industrias desde el año 1500, cuando un impresor .</p>     
    </div>
    <div class="caja-5">
    <img  class="imagen" src="Recursos/SAPI/foto_final_ana99.png" alt="">
    <h2>Ana Maria Moreno</h2>
    <p class="text-5">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
         archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
         de las industrias desde el año 1500, cuando un impresor .</p>    
    </div>
    <div class="caja-6">
    <img   class="imagen-6" src="Recursos/SAPI/FOTO_AUPI_2.png" alt="">
    <h2>Lorem Ipsum</h2>
    <p class="text-6">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
         archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
         de las industrias desde el año 1500, cuando un impresor .</p>    
    </div>
    </div>
<!--Columna # 3-->

<div class="colum-3"  >
    <div class="caja-7">
    <img  class="imagen" src="Recursos/SAPI/FOTO_UPI 7.png" alt="">
    <h2>Lorem Ipsum</h2>
    <p class="text-7">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
         archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
         de las industrias desde el año 1500, cuando un impresor .</p>     
    </div>
    <div class="caja-8">
    <img class="imagen" src="Recursos/SAPI/FOTO_CAMILO_FINAL.png" alt="">
    <h2>Lorem Ipsum</h2>
    <p class="text-8">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
         archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
         de las industrias desde el año 1500, cuando un impresor .</p>    
    </div>
    <div class="caja-9">
    <img class="imagen" src="Recursos/SAPI/FOTO_AILIN.png" alt="">
    <h2>Lorem Ipsum</h2>
    <p class="text-9">Lorem Ipsum es simplemente el texto de relleno de las imprentas y
         archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar 
         de las industrias desde el año 1500, cuando un impresor .</p>    
    </div>
    </div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




    

    <?php
     // Se include el footer para cada página
     
     include "Vista/Footer.php" 
     
     ?>

</body>

</html>