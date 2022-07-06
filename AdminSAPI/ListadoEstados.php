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
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 style="font-family: 'Josefin Sans Bold' !important;">Datos de Usuario</h4>
                        </div>
                        <div class="card-body" style="font-family: 'Josefin Sans Bold' !important;">
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
                                <p style="font-size: 40px;font-family: 'Josefin Sans Bold' !important;">Lista de Estados</p>
                            </div>
                        </div>
                        
                        <br>
                        <table class="table">
                            <thead>
                                <tr style="background-color: #23820B;color: white;">
                                    <th>Id</th>
                                    <th>Nombre</th>
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
        Consulta_Procesos();
    });

    function Consulta_Procesos() {
        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Procesos/ListaEstados/"
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data);
                    var html = "";
                    for (var i = 0; i < data['response'].length; i++) {
                        html = "<tr>" +
                                "<td>" + data['response'][i]['idestados'] + "</td>" +
                                "<td>" + data['response'][i]['nombre'] + "</td>" +
                                "</tr>";
                        $('#data').append(html);
                    }


                } else if (data['error']) {


                    $('#textoError').text(data['error']);

                }
            }
        }).fail(function (data) {
            console.log(data);
        });
    }

</script>