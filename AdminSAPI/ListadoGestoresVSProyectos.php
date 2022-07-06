<?php
/* session_start();

if ($_SESSION['ID_USER'] == null) {
    header('Location:index.php');
} */


$Usuario = $_SESSION['NOMBRE_USER'];
?>

<html>
    <?php
    include_once './Elementos/Heasers.php';
    ?>
    <body>
        <?php
        include_once './Elementos/MenuNav.php';
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <br>
                    <div class="card" style="font-family: 'Josefin Sans Bold' !important;">
                        <div class="card-header text-center">
                            <h4>Datos de Usuario</h4>
                        </div>
                        <div class="card-body">
                            <p>Nombre:  <span id="nombre"><?php echo $Usuario; ?></span></p>
                            <p>Rol:  <span id="nombre">Gestor</span></p>
                            <br>
                            <br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col text-center">
                                        <h3>MENU</h3>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                            <li>
                                                <a href="Dashboard.php">Listado registros</a>
                                            </li>
                                            <li>
                                                <a href="ListadoGestores.php">Listado Gestores</a>
                                            </li>
                                            <li>
                                                <a href="ListadoGestoresVSProyectos.php">Listado Gestores VS Proyectos</a>
                                            </li>
                                            <li>
                                                <a href="ListadoEstados.php">Listado de estados</a>
                                            </li>
                                            <li>
                                                <a href="Controller/Salir.php">Salir</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-center">
                                <p style="font-size: 40px;font-family: 'Josefin Sans Bold' !important;">Lista de Proyectos VS Gestores</p>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr style="background-color: #23820B;color: white;">
                                    <th>Id</th>
                                    <th>Codigo Proyecto</th>
                                    <th>Gestor Asignado</th>
                                    <th>Estado</th>
                                    <!--<th>Acciones</th>-->
                                </tr>
                            </thead>
                            <tbody id="data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </body>




</html>

<script>

    $(document).ready(function () {

        Gestores();
    });




    function Gestores() {
        var html = "";
        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Proyectos/LisaGestoresVProyecto/"
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data);
                    
                    
                    for(var i=0; i<data['response'].length;i++){
                        html = "<tr>" +
                            "<td>" + data['response'][i].idRegistro_full + "</td>" +
                            "<td>" + data['response'][i].Codigo_Proyecto + "</td>" +
                            "<td>" + data['response'][i].nombreUser + " " + data['response'][i].apellido + "</td>" +
                            "<td>" + data['response'][i].nombre + "</td>" +
                            "</tr>";
                    }
                  
                    
                    $('#data').append(html);
                } else if (data['error']) {


                    $('#textoError').text(data['error']);
                }
            }
        }).fail(function (data) {
            console.log(data);
        });
    }
</script>