<html>
<!-- Headers -->
<?php
session_start();
include_once './Admin/modelo/database.php';

include_once 'Vista/HeadersContactenos.php';
include_once "nav.php";
include_once 'Controladores/Public_Content/Contactenos.php';
?>
<head>
<link rel="stylesheet" href="Vista/Transaccional/css/footer1.css">
<link rel="stylesheet" href="Vista/Transaccional/css/contactenos1.css">
<link rel="stylesheet" href="Vista/Transaccional/css/pienav.css">
</head>
<body>




    <div class="fond-contact" style="background:#fff;">
<img src="Recursos/SAPI/ILUSTRACION CONTACTO.png" alt="" class="fond-2" style=" margin-left: 882px;">

            <p class="titulo"style="">Contáctanos</p>
            <div class="fond-formulario">
        <div class="formulario" style="background:none;  margin-left: 50px;  margin-button: 40%; position:absolute;" >
<form method="post" action="Controladores/RegistrarContactos.php">

             <label for="">Nombre</label>
            <input class="name" name="usuario"type="text" placeholder="   Nombre y Apellidos"  required style=" width: 400px; height:50px; font-family: 'Josefin Sans', sans-serif;">
            <label for="">Correo</label>
            <input class="mail" name="email"type="email" placeholder="   Correo SENA"  required style=" width: 400px; height:50px; font-family: 'Josefin Sans', sans-serif; ">
            <label for="">Telefono</label>
            <input class="tel" name="telefono"type="text" placeholder="   Telefono"  required style=" width: 400px; height:50px;  background: rgb(228, 228, 228);font-family: 'Josefin Sans', sans-serif;" >
            <label for="">Asunto</label>

<?php

error_reporting(0);

if (isset($_POST['Guardar'])) {

$x = $_POST['text'];

}


?>


<input type="text" class="text" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" name="text" value="<?php echo $x = $_POST['text']; ?>" placeholder="Mensaje" 
required style=" width: 400px;"></input>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Titulo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Mensaje</label>
            <textarea class="form-control" id="message-text" name="text" value="<?php echo $x ?>"></textarea>

          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" name="Guardar">Guardar</button>
      </div>
    </div>
  </div>
</div>
            <!--<input class="subtitulo" name="asunto"type="text" placeholder="   Asunto"  required style=" width: 400px; height:50px ; font-family: 'Josefin Sans', sans-serif;">
            <label for="">Mensaje</label>-->


    <button class="boton-form" name="register" type="submit" style=" width: 300px; font-family: 'Josefin Sans', sans-serif;" >Enviar</button>
 
</form>


</div>


</div>


</div>
<?php
     // Se include el footer para cada página
     
     include "Vista/Footer.php" 
     
     ?>



       
</body>
</html>