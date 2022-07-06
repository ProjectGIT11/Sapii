<html>
<link rel="stylesheet" href="Vista/Transaccional/css/footer1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
// Headers 
session_start();
// Incluir componentes para su funcionalidad
include_once 'Admin/modelo/database.php';
include_once 'Vista/HeadersServicios.php';
include_once 'Controladores/Public_Content/LaUpi.php';
include_once "nav.php";

?>

<body>
    <!-- While para correr las consultas en la base de datos y traer toda la información -->
    <?php
    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
    ?>
        <div class="container-fluid">
            
                <!-- Condicional para mostrar datos -->
                <?php if ($row > 0) { ?>
                    
                        <div>
                            <?php if ($row['imagenFondo'] == null || $row['imagenFondo'] == 'undefined' || $row['imagenFondo'] == '') {
                            } else { ?>

                               
                            <?php } ?>

                        </div>
                    </div>
                <?php } ?>
                <!-- Condicional para mostrar datos -->
                
                   
                            <?php if ($row['titulo'] == null ) {
                            } else {
                            ?>
                               
                            <?php
                            } ?>
                            <!-- Fin -->
                        
                                <?php if ($row['parrafo'] == '' ) {
                                } else {
                                ?>
                                <?php
                                } ?>
                    

                            <?php if ($row['boton1'] == '' ) {
                            } else {
                            ?>
                                <a style=" " href="#edit_<?php echo $row['id'];  ?> " data-toggle="modal"><img src="Recursos/De/CARD_PROPIEDAD_INDUSTRIAL.png" alt="" style=" width: 300px;height:300px ;"></a>
                            <?php
                            } ?>
                            <?php if ($row['boton2'] == '' ) { ?>
                            <?php } else {
                            ?>
                                <a style="" href="#edit2_<?php echo $row['id']; ?>" data-toggle="modal"><img src="Recursos/De/CARD_SIGNOS_DISTINTIVOS.png" alt="" style=" width: 300px;height:300px ;"></a>
                            <?php
                            } ?>
                            <?php if ($row['boton3'] == '' ) {
                            } else {
                            ?>
                                <a style="" href="#edit3_<?php echo $row['id']; ?>" data-toggle="modal"><img src="Recursos/De/CARD_NUEVAS_CREACIONES.png" alt="" style=" width: 300px;height:300px ;"></a>
                            <?php
                            } ?>
                             <?php if ($row['boton4'] == '') {
                            } else {
                            ?>
                                <a style="" href="#edit4_<?php echo $row['id']; ?>" data-toggle="modal"><img src="Recursos/De/CARD_DERECHO_AUTOR.png" alt="" style=" width: 300px;height:300px ;"></a>
                            <?php
                            } ?>
                            <?php if ($row['boton4'] == '') {
                            } else {
                            ?>
                                <a style="" href="#edit4_<?php echo $row['id']; ?>" data-toggle="modal"><img src="Recursos/De/CARD_OBTENCION_VEGETAL.png" alt="" style=" width: 300px;height:300px ;"></a>
                            <?php
                            } ?>
                       
                   
                
                <!-- Incluir los modals de cada boton -->
                <?php include "Vista/Modals/Boton_Info.php"; ?>
            </div>
        </div>

    <?php } ?>
    <?php
     // Se include el footer para cada página
     
     include "Vista/Footer.php" 
     
     ?>
</body>
</html>