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
                                <p style="font-size: 40px;font-family: 'Josefin Sans Bold' !important;">Lista de Gestores</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop"">Agregar Gestor nuevo</a>
                            </div>
                        </div>
                        <br>
                        <table class="table">
                            <thead>
                                <tr style="background-color: #23820B;color: white;">
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Documento</th>
                                    <th>Email</th>
                                    <th>Asignaciones</th>
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


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="staticBackdropLabel">Nuevo Gestor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-8">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" id="nombre_Gestor" placeholder="Nombre">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Apellido</label>
                                    <input type="text" class="form-control" id="apellido_Gestor" placeholder="Apellido">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Documento</label>
                                    <input type="text" class="form-control" id="documento_Gestor" placeholder="Documento">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" id="email_Gestor" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Rol</label>
                                    <select class="form-control" id="rol_Gestor">
                                        <option value="0">Seleccione</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Interno</option>
                                        <option value="3">Publico</option>
                                    </select>
                                </div>

                            </form>
                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="Agregar()" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>F

<script>

    $(document).ready(function () {
        Consulta_Procesos();
    });

    function Consulta_Procesos() {
        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Procesos/BucarGestors/" + 4
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data);
                    var html = "";
                    for (var i = 0; i < data['response'].length; i++) {
                        html = "<tr>" +
                                "<td>" + data['response'][i]['idGestores'] + "</td>" +
                                "<td>" + data['response'][i]['nombre'] + "</td>" +
                                "<td>" + data['response'][i]['apellido'] + "</td>" +
                                "<td>" + data['response'][i]['documento'] + "</td>" +
                                "<td>" + data['response'][i]['email'] + "</td>" +
                                "<td><a href='editar.php?id=" + data['response'][i]['idGestores'] + "'><i class='fas fa-edit'></i> Editar</a></td>" +
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


    function Agregar() {

        var nombre = $('#nombre_Gestor').val();
        var apellido = $('#apellido_Gestor').val();
        var documento = $('#documento_Gestor').val();
        var email = $('#email_Gestor').val();
        var rol = $('#rol_Gestor').val();


        if (nombre == "") {
            alert('El campo Nombre no uede estar vacio');
            return false;
        }

        if (apellido == "") {
            alert('El campo Apellido no uede estar vacio');
            return false;
        }

        if (documento == "") {
            alert('El campo Documento no uede estar vacio');
            return false;
        }

        if (email == "") {
            alert('El campo Email no uede estar vacio');
            return false;
        }

        if (rol == 0) {
            alert('El campo Rol no uede estar vacio');
            return false;
        }


        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Usuarios/GuardarGestores?nombre=" + nombre + "&apellido=" + apellido + "&documento=" + documento + "&email=" + email + "&rol=" + rol
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data);
                    if (data) {
                        alert('Usuario creado');
                        document.location.href = 'ListadoGestores.php';

                    }
                } else if (data['error']) {


                    $('#textoError').text(data['error']);

                }
            }
        }).fail(function (data) {
            console.log(data);
        });


        //GuardarGestores_get
    }
</script>