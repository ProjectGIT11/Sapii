<?php
/* session_start();

if ($_SESSION['ID_USER'] == null) {
    header('Location:index.php');
} */


$Usuario = $_SESSION['NOMBRE_USER'];
$id = $_GET['id'];
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
                                <p style="font-size: 40px;font-family: 'Josefin Sans Bold' !important;">Edición Gestor</p>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <form>
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $id; ?>" id="id_user" >
                                        <input type="text" class="form-control" value="" id="nombre-edit" placeholder="Nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="apellido" placeholder="Apellido" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="documento" placeholder="Documento" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" placeholder="email" required>
                                    </div>

                                    <div class="form-group text-center">
                                        <button type="button" onclick="Editar()" class="btn btn-success" style="width: 150px;">Editar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>

    $(document).ready(function () {
        var id = $('#id_user').val();
        Consulta_Procesos(id);
    });

    function Consulta_Procesos(id) {

        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Procesos/BucarGestor/" + id
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    var nombre = data['response'][0]['nombre'];
                    $('#nombre-edit').val(nombre);
                    $('#apellido').val(data['response'][0]['apellido']);
                    $('#documento').val(data['response'][0]['documento']);
                    $('#email').val(data['response'][0]['email']);
                    console.log(nombre)
                } else if (data['error']) {


                    $('#textoError').text(data['error']);

                }
            }
        }).fail(function (data) {
            console.log(data);
        });
    }




    function Editar() {
        var id = $('#id_user').val();
        var nombre = $('#nombre-edit').val();
        var apellido = $('#apellido').val();
        var documento = $('#documento').val();
        var email = $('#email').val();

        if (nombre == '') {
            alert('El campo Nombre no puede estar vacio.');
            return false;
        }

        if (apellido == '') {
            alert('El campo Apellido no puede estar vacio.');
            return false;
        }

        if (documento == '') {
            alert('El campo Documento no puede estar vacio.');
            return false;
        }


        if (email == '') {
            alert('El campo Email no puede estar vacio.');
            return false;
        }


        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Procesos/guardarGestor?id=" + id + "&nombre=" + nombre + '&apellido=' + apellido + '&documento=' + documento + '&email=' + email
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    alert('Usuario Actualizado');

                } else if (data['error']) {


                    $('#textoError').text(data['error']);

                }
            }
        }).fail(function (data) {
            console.log(data);
        });

    }
</script>