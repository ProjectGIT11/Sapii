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
                                <p style="font-size: 40px;font-family: 'Josefin Sans Bold' !important;">Lista de Procesos</p>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr style="background-color: #23820B;color: white;">
                                    <th>Id</th>
                                    <th>Codigo Proyecto</th>
                                    <th>Usuario vinculado</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Detalle Registro #<span id="id_registro"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    Tipo Registro:  
                                </td>
                                <td>
                                    <span id="tipo" style="font-weight: bold;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Codigo del Proyecto:  
                                </td>
                                <td>
                                    <span id="Codigo" style="font-weight: bold;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Usuario Vinculado  
                                </td>
                                <td>
                                    <span id="Usuario" style="font-weight: bold;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Estado  
                                </td>
                                <td>
                                    <span id="Estado" style="font-weight: bold;"></span>
                                </td>
                            </tr>
                        </table>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">

                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header bg-success" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <p class="text-white" style="font-weight: bold; font-size: 30px;">Informacion Relacionada</p>
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <table class="table table-bordered">
                                                        <tbody id="Contexto">

                                                        </tbody>                                   
                                                    </table>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Editar Registro #<span id="id_registro_Edit"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    Tipo Registro:  
                                </td>
                                <td>
                                    <span id="tipo_Edit" style="font-weight: bold;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Codigo del Proyecto:  
                                </td>
                                <td>
                                    <span id="Codigo_Edit" style="font-weight: bold;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Usuario Vinculado  
                                </td>
                                <td>
                                    <span id="Usuario_Edit" style="font-weight: bold;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Estado  
                                </td>
                                <td>
                                    <span id="Estado_Edit" style="font-weight: bold;"></span>
                                </td>
                            </tr>
                        </table>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">

                                    <div class="container-fluid" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header bg-success" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <p class="text-white" style="font-weight: bold; font-size: 20px;">Informacion a editar</p>
                                                    </button>
                                                </h2>
                                            </div>
                                            <br>
                                            <div class="container-fluid row">
                                                <div class="col">
                                                    <form>
                                                        <div class="form-group">
                                                            <p>Por favor seleccine el estado a asignar al registro</p>
                                                        </div>

                                                        <div class="form-group">
                                                            <select class="form-control" id="Estado_Id">
                                                                <option value="0">Seleccione</option>
                                                                <option value="1">Registrado</option>
                                                                <option value="2">Asignado</option>
                                                                <option value="3">Procesando Upi</option>
                                                                <option value="4">Radicado ante la entidad</option>
                                                                <option value="5">Seguimiento ante la entidad</option>
                                                                <option value="6">Recepción documentación</option>
                                                                <option value="7">Finalización</option>
                                                                <option value="8">Seguimeinto Post-Final</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Asignar Gestor:</label>


                                                            <select class="form-control" id="Gestor_id">
                                                                <option value="0">Seleccione</option>
                                                            </select>
                                                        </div>


                                                        <div class="form-group text-center">
                                                            <button type="button" onclick="EditarRegistro()" class="btn btn-success" style="width: 150px;">Editar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
    </body>




</html>

<script>

    $(document).ready(function () {
        Consulta_Procesos();
        Gestores();
    });
    function Consulta_Procesos() {
        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Procesos/BucarProyectos"
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    var html = "";
                    var boton = "";
                    for (var i = 0; i < data['response'].length; i++) {
                        var estado;
                        if (data['response'][i][6] == 1) {
                            estado = 'Registrado'
                            boton = "<button type='button' class='btn btn-success' onclick='Detalle(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModal'>Detalle</button><button class='btn btn-warning text-white' onclick='Editar(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModalEdit'>Editar Estado</button>";
                        } else if (data['response'][i][6] == 2) {
                            estado = 'Asignado';
                            boton = "<button type='button' class='btn btn-success' onclick='Detalle(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModal'>Detalle</button>";
                        } else if (data['response'][i][6] == 3) {
                            estado = 'Procesando Upi'
                            boton = "<button type='button' class='btn btn-success' onclick='Detalle(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModal'>Detalle</button><button class='btn btn-warning text-white' onclick='Editar(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModalEdit'>Editar Estado</button>";
                        } else if (data['response'][i][6] == 4) {
                            estado = 'Radicado ante la entidad'
                            boton = "<button type='button' class='btn btn-success' onclick='Detalle(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModal'>Detalle</button><button class='btn btn-warning text-white' onclick='Editar(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModalEdit'>Editar Estado</button>";
                        } else if (data['response'][i][6] == 5) {
                            estado = 'Seguimiento ante la entidad'
                            boton = "<button type='button' class='btn btn-success' onclick='Detalle(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModal'>Detalle</button><button class='btn btn-warning text-white' onclick='Editar(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModalEdit'>Editar Estado</button>";
                        } else if (data['response'][i][6] == 6) {
                            estado = 'Recepción documentación'
                            boton = "<button type='button' class='btn btn-success' onclick='Detalle(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModal'>Detalle</button><button class='btn btn-warning text-white' onclick='Editar(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModalEdit'>Editar Estado</button>";
                        } else if (data['response'][i][6] == 7) {
                            estado = 'Finalización'
                            boton = "<button type='button' class='btn btn-success' onclick='Detalle(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModal'>Detalle</button><button class='btn btn-warning text-white' onclick='Editar(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModalEdit'>Editar Estado</button>";
                        } else if (data['response'][i][6] == 8) {
                            estado = 'Seguimeinto Post-Final'
                            boton = "<button type='button' class='btn btn-success' onclick='Detalle(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModal'>Detalle</button><button class='btn btn-warning text-white' onclick='Editar(" + data['response'][i][5] + "," + JSON.stringify(data['response'][i][4]) + "," + JSON.stringify(data['response'][i][2]) + "," + JSON.stringify(estado) + ")' data-toggle='modal' data-target='#exampleModalEdit'>Editar Estado</button>";
                        }

                        html = "<tr>" +
                                "<td>" + data['response'][i][1] + "<input type='hidden'id='Id_Full' value='" + data['response'][i][1] + "'></td>" +
                                "<td>" + data['response'][i][4] + "</td>" +
                                "<td>" + data['response'][i][2] + "</td>" +
                                "<td>" + estado + "</td>" +
                                "<td>" + boton + "</td>" +
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


    function Detalle(id, codigo, user, estado) {
        //BuscarDetalleProyecto
        var html;
        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Proyectos/BuscarDetalleProyecto/" + id
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    console.log(data['response']);
                    if (data['response'][0].tipo_registro == 1) {

                        $('#tipo').text('Obtención Vegetal');
                        $('#id_registro').text(id);
                        $('#Codigo').text(codigo);
                        $('#Usuario').text(user);
                        $('#Estado').text(estado);
                        html = "";
                        html = "<tr>" +
                                "<td>condiciones_Variedad</td>" +
                                "<td>" +
                                data['response'][0].condiciones_Variedad +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>denominacion_propuesta</td>" +
                                "<td>" +
                                data['response'][0].denominacion_propuesta +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>descripcion_variedad</td>" +
                                "<td>" +
                                data['response'][0].descripcion_variedad +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>examen_Tecnico</td>" +
                                "<td>" +
                                data['response'][0].examen_Tecnico +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>indiqueSituacion</td>" +
                                "<td>" +
                                data['response'][0].indiqueSituacion +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>info_origen_genetico</td>" +
                                "<td>" +
                                data['response'][0].info_origen_genetico +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_especie_cultivo</td>" +
                                "<td>" +
                                data['response'][0].nombre_especie_cultivo +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>origen_Caracteres</td>" +
                                "<td>" +
                                data['response'][0].origen_Caracteres +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>origen_Nivel_Expresion</td>" +
                                "<td>" +
                                data['response'][0].origen_Nivel_Expresion +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>origen_Variedad</td>" +
                                "<td>" +
                                data['response'][0].origen_Variedad +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>origen_nota</td>" +
                                "<td>" +
                                data['response'][0].origen_nota +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>otras_Informacion</td>" +
                                "<td>" +
                                data['response'][0].otras_Informacion +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>referencia_obtentor_lg</td>" +
                                "<td>" +
                                data['response'][0].referencia_obtentor_lg +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>resistencia_Plagas</td>" +
                                "<td>" +
                                data['response'][0].resistencia_Plagas +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>situacion_variedad</td>" +
                                "<td>" +
                                data['response'][0].situacion_variedad +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>variedad_Caracter</td>" +
                                "<td>" +
                                data['response'][0].variedad_Caracter +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>variedad_Presentada</td>" +
                                "<td>" +
                                data['response'][0].variedad_Presentada +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>variedad_Similar</td>" +
                                "<td>" +
                                data['response'][0].variedad_Similar +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>variedad_denominacion_sd</td>" +
                                "<td>" +
                                data['response'][0].variedad_denominacion_sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>variedad_obtenida</td>" +
                                "<td>" +
                                data['response'][0].variedad_obtenida +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>variedad_transferida</td>" +
                                "<td>" +
                                data['response'][0].variedad_transferida +
                                "</td>" +
                                "</tr>";
                    } else if (data['response'][0].tipo_registro == 2) {
                        $('#tipo').text('Nuevas Creaciones');
                        $('#id_registro').text(id);
                        $('#Codigo').text(codigo);
                        $('#Usuario').text(user);
                        $('#Estado').text(estado);
                        html = "";
                        html = "<tr>" +
                                "<td>deseaRegistrar_Nc</td>" +
                                "<td>" +
                                data['response'][0].deseaRegistrar_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>resultado_Obtenido_Nc</td>" +
                                "<td>" +
                                data['response'][0].resultado_Obtenido_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_Proteccion_Nc</td>" +
                                "<td>" +
                                data['response'][0].tipo_Proteccion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>centro_Forma_Solicitante_Nc</td>" +
                                "<td>" +
                                data['response'][0].centro_Forma_Solicitante_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>regional_Solicitante_Nc</td>" +
                                "<td>" +
                                data['response'][0].regional_Solicitante_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>grupo_Investigacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].grupo_Investigacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_Proyecto_Nc</td>" +
                                "<td>" +
                                data['response'][0].nombre_Proyecto_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_Titular_Crea_Nc</td>" +
                                "<td>" +
                                data['response'][0].nombre_Titular_Crea_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_vinculacion_sena_Nc</td>" +
                                "<td>" +
                                data['response'][0].tipo_vinculacion_sena_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_Documento_Nc</td>" +
                                "<td>" +
                                data['response'][0].tipo_Documento_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>numero_Documento_Nc</td>" +
                                "<td>" +
                                data['response'][0].numero_Documento_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>direccion_Nc</td>" +
                                "<td>" +
                                data['response'][0].direccion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>telefono_Contacto_Nc</td>" +
                                "<td>" +
                                data['response'][0].telefono_Contacto_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>correo_Electonico_Nc</td>" +
                                "<td>" +
                                data['response'][0].correo_Electonico_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_Cotitulares_Nc</td>" +
                                "<td>" +
                                data['response'][0].nombre_Cotitulares_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cedula_Nit_Cotitulare_Nc</td>" +
                                "<td>" +
                                data['response'][0].cedula_Nit_Cotitulare_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>repre_Legal_Document_Nc</td>" +
                                "<td>" +
                                data['response'][0].repre_Legal_Document_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>dirrecion_Nc</td>" +
                                "<td>" +
                                data['response'][0].dirrecion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>telefono_Represent_Nc</td>" +
                                "<td>" +
                                data['response'][0].telefono_Represent_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>correo_Represent_Nc</td>" +
                                "<td>" +
                                data['response'][0].correo_Represent_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>porcent_Participacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].porcent_Participacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>acuerdo_Propiedad_Documento_Nc</td>" +
                                "<td>" +
                                data['response'][0].acuerdo_Propiedad_Documento_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>estado_Desarrollo_Nc</td>" +
                                "<td>" +
                                data['response'][0].estado_Desarrollo_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>electric_Electonica_Nc</td>" +
                                "<td>" +
                                data['response'][0].electric_Electonica_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ing_Mecanica_Nc</td>" +
                                "<td>" +
                                data['response'][0].ing_Mecanica_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>instrumentos_Nc</td>" +
                                "<td>" +
                                data['response'][0].instrumentos_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>quimica_Nc</td>" +
                                "<td>" +
                                data['response'][0].quimica_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>sector_Tecnologico_Nc</td>" +
                                "<td>" +
                                data['response'][0].sector_Tecnologico_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>otro_producto_consumo_Nc</td>" +
                                "<td>" +
                                data['response'][0].otro_producto_consumo_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>descripcion_Creacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].descripcion_Creacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ventajas_Bene_Creacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].ventajas_Bene_Creacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>caracteris_Novedosas_Nc</td>" +
                                "<td>" +
                                data['response'][0].caracteris_Novedosas_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>impacto_Solucion_Nc</td>" +
                                "<td>" +
                                data['response'][0].impacto_Solucion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>estado_Arte_Nc</td>" +
                                "<td>" +
                                data['response'][0].estado_Arte_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>publicacion_Divulgacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].publicacion_Divulgacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>indique_Otro_Nc</td>" +
                                "<td>" +
                                data['response'][0].indique_Otro_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>posibilidades_Mercado_Nc</td>" +
                                "<td>" +
                                data['response'][0].posibilidades_Mercado_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>contacto_acceso_Nc</td>" +
                                "<td>" +
                                data['response'][0].contacto_acceso_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>documento_diseño_creacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].documento_diseño_creacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>obserbacion_Adicional_Nc</td>" +
                                "<td>" +
                                data['response'][0].obserbacion_Adicional_Nc +
                                "</td>" +
                                "</tr>";
                    } else if (data['response'][0].tipo_registro == 3) {
                        $('#tipo').text('Signos Distintivos');
                        $('#id_registro').text(id);
                        $('#Codigo').text(codigo);
                        $('#Usuario').text(user);
                        $('#Estado').text(estado);
                        html = "";
                        html = "<tr>" +
                                "<td>Usuarios_idUsuarios</td>" +
                                "<td>" +
                                data['response'][0].Usuarios_idUsuarios +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_registro</td>" +
                                "<td>" +
                                data['response'][0].tipo_registro +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipoSubRegistro_Sd</td>" +
                                "<td>" +
                                data['response'][0].tipoSubRegistro_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_marca_Sd</td>" +
                                "<td>" +
                                data['response'][0].tipo_marca_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>marca_logos_Sd</td>" +
                                "<td>" +
                                data['response'][0].marca_logos_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>indiqueColores_Sd</td>" +
                                "<td>" +
                                data['response'][0].indiqueColores_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>codigoColor_Sd</td>" +
                                "<td>" +
                                data['response'][0].codigoColor_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_Color_Sd</td>" +
                                "<td>" +
                                data['response'][0].tipo_Color_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>otros_Colores_Sd</td>" +
                                "<td>" +
                                data['response'][0].otros_Colores_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>productos_Servicios_Sd</td>" +
                                "<td>" +
                                data['response'][0].productos_Servicios_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>caracteristicas_Tecnicas_Sd</td>" +
                                "<td>" +
                                data['response'][0].caracteristicas_Tecnicas_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>describaServicioFuturo_Sd</td>" +
                                "<td>" +
                                data['response'][0].describaServicioFuturo_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>seleccione_Marca_Sd</td>" +
                                "<td>" +
                                data['response'][0].seleccione_Marca_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>seleccione_Marca_Futuro_Sd</td>" +
                                "<td>" +
                                data['response'][0].seleccione_Marca_Futuro_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>documentos_Sd</td>" +
                                "<td>" +
                                data['response'][0].documentos_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_persona_orig_Sd</td>" +
                                "<td>" +
                                data['response'][0].tipo_persona_orig_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>origen_Registro_Origen_sd</td>" +
                                "<td>" +
                                data['response'][0].origen_Registro_Origen_sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>reglamento_Certif_Sd</td>" +
                                "<td>" +
                                data['response'][0].reglamento_Certif_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipoPersonaCertif_Sd</td>" +
                                "<td>" +
                                data['response'][0].tipoPersonaCertif_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>lemacomercial_Sd</td>" +
                                "<td>" +
                                data['response'][0].lemacomercial_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>activ_Comer_Name_Sd</td>" +
                                "<td>" +
                                data['response'][0].activ_Comer_Name_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombreComercial_Sd</td>" +
                                "<td>" +
                                data['response'][0].nombreComercial_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nomComer_nat_comer_Sd</td>" +
                                "<td>" +
                                data['response'][0].nomComer_nat_comer_Sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nomComer_jurid_dep_nom</td>" +
                                "<td>" +
                                data['response'][0].nomComer_jurid_dep_nom +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>colectivo_tp_Person_sd</td>" +
                                "<td>" +
                                data['response'][0].colectivo_tp_Person_sd +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cedula_ciudadania_nat_com</td>" +
                                "<td>" +
                                data['response'][0].cedula_ciudadania_nat_com +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>marca_log_graficos_nat_com</td>" +
                                "<td>" +
                                data['response'][0].marca_log_graficos_nat_com +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certi_ingreso_anterior_nat_com</td>" +
                                "<td>" +
                                data['response'][0].certi_ingreso_anterior_nat_com +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>divicion_porcentaje_nat_com</td>" +
                                "<td>" +
                                data['response'][0].divicion_porcentaje_nat_com +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certificado_existencia_jurid_com</td>" +
                                "<td>" +
                                data['response'][0].certificado_existencia_jurid_com +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cedula_ciudadania_jurid_com</td>" +
                                "<td>" +
                                data['response'][0].cedula_ciudadania_jurid_com +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>marca_logo_jurid_com</td>" +
                                "<td>" +
                                data['response'][0].marca_logo_jurid_com +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ingreso_sociedad_jurid_com</td>" +
                                "<td>" +
                                data['response'][0].ingreso_sociedad_jurid_com +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>copia_cedula_mar_Nat_col</td>" +
                                "<td>" +
                                data['response'][0].copia_cedula_mar_Nat_col +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>logo_Graficos_mar_Nat_col</td>" +
                                "<td>" +
                                data['response'][0].logo_Graficos_mar_Nat_col +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certificado_ingreso_mar_Nat_col</td>" +
                                "<td>" +
                                data['response'][0].certificado_ingreso_mar_Nat_col +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>divicion_porcentajes_mar_Nat_col</td>" +
                                "<td>" +
                                data['response'][0].divicion_porcentajes_mar_Nat_col +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certificado_existencia_mar_jurid_col</td>" +
                                "<td>" +
                                data['response'][0].certificado_existencia_mar_jurid_col +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cedula_ciudadania_mar_jurid_col</td>" +
                                "<td>" +
                                data['response'][0].cedula_ciudadania_mar_jurid_col +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>marca_logo_mar_jurid_col</td>" +
                                "<td>" +
                                data['response'][0].marca_logo_mar_jurid_col +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ingreso_sociedad_mar_jurid_col</td>" +
                                "<td>" +
                                data['response'][0].ingreso_sociedad_mar_jurid_col +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certifi_Existencia_certif_Cert</td>" +
                                "<td>" +
                                data['response'][0].certifi_Existencia_certif_Cert +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cedula_certif_Cert</td>" +
                                "<td>" +
                                data['response'][0].cedula_certif_Cert +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>logo_grafico_certif_cert</td>" +
                                "<td>" +
                                data['response'][0].logo_grafico_certif_cert +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certifi_existencia_origen</td>" +
                                "<td>" +
                                data['response'][0].certifi_existencia_origen +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cedula_certif_origen</td>" +
                                "<td>" +
                                data['response'][0].cedula_certif_origen +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>documento_geografico_origen</td>" +
                                "<td>" +
                                data['response'][0].documento_geografico_origen +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>rese_reputacion_origen</td>" +
                                "<td>" +
                                data['response'][0].rese_reputacion_origen +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>pruebas_certifi_origen</td>" +
                                "<td>" +
                                data['response'][0].pruebas_certifi_origen +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>expediente_SIC_Lema</td>" +
                                "<td>" +
                                data['response'][0].expediente_SIC_Lema +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>copia_cedula_Nat_comer</td>" +
                                "<td>" +
                                data['response'][0].copia_cedula_Nat_comer +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certificado_ingreso_Comer</td>" +
                                "<td>" +
                                data['response'][0].certificado_ingreso_Comer +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certif_exist_col_jurid_comer</td>" +
                                "<td>" +
                                data['response'][0].certif_exist_col_jurid_comer +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cedula_col_jurid_comer</td>" +
                                "<td>" +
                                data['response'][0].cedula_col_jurid_comer +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ingre_socie_col_jurid_comer</td>" +
                                "<td>" +
                                data['response'][0].ingre_socie_col_jurid_comer +
                                "</td>" +
                                "</tr>";
                    } else if (data['response'][0].tipo_registro == 4) {
                        $('#tipo').text('Derechos de Autor');
                        $('#id_registro').text(id);
                        $('#Codigo').text(codigo);
                        $('#Usuario').text(user);
                        $('#Estado').text(estado);
                        html = "";
                        html = "<tr>" +
                                "<td>nombre_Autor_Du</td>" +
                                "<td>" +
                                data['response'][0].nombre_Autor_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>naciona_autor_Du</td>" +
                                "<td>" +
                                data['response'][0].naciona_autor_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>documento_autor_Du</td>" +
                                "<td>" +
                                data['response'][0].documento_autor_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>lugar_autor_Du</td>" +
                                "<td>" +
                                data['response'][0].lugar_autor_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>direccion_autor_Du</td>" +
                                "<td>" +
                                data['response'][0].direccion_autor_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_reprod_Du</td>" +
                                "<td>" +
                                data['response'][0].nombre_reprod_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>correo_reprod_Du</td>" +
                                "<td>" +
                                data['response'][0].correo_reprod_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>sitio_reprod_Du</td>" +
                                "<td>" +
                                data['response'][0].sitio_reprod_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>direccion_reprod_Du</td>" +
                                "<td>" +
                                data['response'][0].direccion_reprod_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ciudad_reprod_Du</td>" +
                                "<td>" +
                                data['response'][0].ciudad_reprod_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>pais_reprod_Du</td>" +
                                "<td>" +
                                data['response'][0].pais_reprod_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>estado_obra_Du</td>" +
                                "<td>" +
                                data['response'][0].estado_obra_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>titulo_obra_Du</td>" +
                                "<td>" +
                                data['response'][0].titulo_obra_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>fecha_creacion_obra_Du</td>" +
                                "<td>" +
                                data['response'][0].fecha_creacion_obra_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>fecha_publi_obra_Du</td>" +
                                "<td>" +
                                data['response'][0].fecha_publi_obra_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>pais_orign_obra_Du</td>" +
                                "<td>" +
                                data['response'][0].pais_orign_obra_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>categoria_obra_Du</td>" +
                                "<td>" +
                                data['response'][0].categoria_obra_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>segunMarca_Du</td>" +
                                "<td>" +
                                data['response'][0].segunMarca_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>segunCreacion_Du</td>" +
                                "<td>" +
                                data['response'][0].segunCreacion_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>segunautor_Du</td>" +
                                "<td>" +
                                data['response'][0].segunautor_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>otra_autor_Du</td>" +
                                "<td>" +
                                data['response'][0].otra_autor_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>descripcion_breve_Du</td>" +
                                "<td>" +
                                data['response'][0].descripcion_breve_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>funcion1_platform_Du</td>" +
                                "<td>" +
                                data['response'][0].funcion1_platform_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>funcion2_platform_Du</td>" +
                                "<td>" +
                                data['response'][0].funcion2_platform_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>funcion3_platform_Du</td>" +
                                "<td>" +
                                data['response'][0].funcion3_platform_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>principal_Ventajas_Du</td>" +
                                "<td>" +
                                data['response'][0].principal_Ventajas_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>poblacion_usara_Du</td>" +
                                "<td>" +
                                data['response'][0].poblacion_usara_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>vantaja_desarrollo_Du</td>" +
                                "<td>" +
                                data['response'][0].vantaja_desarrollo_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>elemen_soporte_logic_Du</td>" +
                                "<td>" +
                                data['response'][0].elemen_soporte_logic_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>titu_patrimon_tranfe_Du</td>" +
                                "<td>" +
                                data['response'][0].titu_patrimon_tranfe_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>expre_part_observacion_Du</td>" +
                                "<td>" +
                                data['response'][0].expre_part_observacion_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_solicitante_Du</td>" +
                                "<td>" +
                                data['response'][0].nombre_solicitante_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>document_solicitante_Du</td>" +
                                "<td>" +
                                data['response'][0].document_solicitante_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>lugar_expedi_solicitante_Du</td>" +
                                "<td>" +
                                data['response'][0].lugar_expedi_solicitante_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>repre_legal_solicitante_Du</td>" +
                                "<td>" +
                                data['response'][0].repre_legal_solicitante_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cedula_ciudad_solicitante_Du</td>" +
                                "<td>" +
                                data['response'][0].cedula_ciudad_solicitante_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nacio_solicitante_Du</td>" +
                                "<td>" +
                                data['response'][0].nacio_solicitante_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>pais_solicitante_Du</td>" +
                                "<td>" +
                                data['response'][0].pais_solicitante_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ciud_solicitante_Du</td>" +
                                "<td>" +
                                data['response'][0].ciud_solicitante_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>telefono_solicitante_Du</td>" +
                                "<td>" +
                                data['response'][0].telefono_solicitante_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_fonografico_Du_Fon</td>" +
                                "<td>" +
                                data['response'][0].nombre_fonografico_Du_Fon +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>naciona_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].naciona_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tpDocumentFono_Du</td>" +
                                "<td>" +
                                data['response'][0].tpDocumentFono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>numero_doc_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].numero_doc_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>lugar_expedi_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].lugar_expedi_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>direccion_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].direccion_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ciudad_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].ciudad_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>email_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].email_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>titulo_obra_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].titulo_obra_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>fecha_pri_fija_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].fecha_pri_fija_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>pais_orign_obra_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].pais_orign_obra_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>fecha_publi_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].fecha_publi_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>editada_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].editada_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>inedita_fonografico_Du</td>" +
                                "<td>" +
                                data['response'][0].inedita_fonografico_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>year_cansion_fnografica_Du</td>" +
                                "<td>" +
                                data['response'][0].year_cansion_fnografica_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>titulo_obra_fija_fon_Du</td>" +
                                "<td>" +
                                data['response'][0].titulo_obra_fija_fon_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_com_inter_fonografica_Du</td>" +
                                "<td>" +
                                data['response'][0].nombre_com_inter_fonografica_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>pais_orign_fonografica_Du</td>" +
                                "<td>" +
                                data['response'][0].pais_orign_fonografica_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nom_razon_fonograma_Du</td>" +
                                "<td>" +
                                data['response'][0].nom_razon_fonograma_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_soli_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].nombre_soli_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>naciona_soli_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].naciona_soli_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tpDocument_soli_Fono_Du</td>" +
                                "<td>" +
                                data['response'][0].tpDocument_soli_Fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nume_doc_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].nume_doc_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>expedicion_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].expedicion_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>direccion_soli_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].direccion_soli_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ciudad_soli_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].ciudad_soli_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>email_soli_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].email_soli_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>represen_soli_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].represen_soli_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>pais_soli_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].pais_soli_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>telefono_soli_fono_Du</td>" +
                                "<td>" +
                                data['response'][0].telefono_soli_fono_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>obra_Artistic__Atis_Du</td>" +
                                "<td>" +
                                data['response'][0].obra_Artistic__Atis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>titu_obra_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].titu_obra_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>año_creacion_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].año_creacion_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>pais_origen_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].pais_origen_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>editada_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].editada_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ineditada_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].ineditada_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>fecha_publi_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].fecha_publi_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>num_edic_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].num_edic_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>editor_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].editor_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>direccion_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].direccion_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tpDocumentArtis_Du</td>" +
                                "<td>" +
                                data['response'][0].tpDocumentArtis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>num_docum_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].num_docum_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nacional_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].nacional_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>impresor_artis_Du</td>" +
                                "<td>" +
                                data['response'][0].impresor_artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cracionFinObra_Artis_Du</td>" +
                                "<td>" +
                                data['response'][0].cracionFinObra_Artis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>catObraArtis_Du</td>" +
                                "<td>" +
                                data['response'][0].catObraArtis_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>caractObra_Du</td>" +
                                "<td>" +
                                data['response'][0].caractObra_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>orig_Obra_Du</td>" +
                                "<td>" +
                                data['response'][0].orig_Obra_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>forma_Conoser_Du</td>" +
                                "<td>" +
                                data['response'][0].forma_Conoser_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>forma_elabora_Du</td>" +
                                "<td>" +
                                data['response'][0].forma_elabora_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>otroTpObra_Du</td>" +
                                "<td>" +
                                data['response'][0].otroTpObra_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>obra_Litera_Du</td>" +
                                "<td>" +
                                data['response'][0].obra_Litera_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipoMusica_Du</td>" +
                                "<td>" +
                                data['response'][0].tipoMusica_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>obra_Musical_Du</td>" +
                                "<td>" +
                                data['response'][0].obra_Musical_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>document_transfe_Du</td>" +
                                "<td>" +
                                data['response'][0].document_transfe_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certific_exist_document_Du</td>" +
                                "<td>" +
                                data['response'][0].certific_exist_document_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tres_documents_Du</td>" +
                                "<td>" +
                                data['response'][0].tres_documents_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>manual_desarrollo_Du</td>" +
                                "<td>" +
                                data['response'][0].manual_desarrollo_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cod_fuente_document</td>" +
                                "<td>" +
                                data['response'][0].cod_fuente_document +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>trans_obra_fonograma</td>" +
                                "<td>" +
                                data['response'][0].trans_obra_fonograma +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>certific_existen_soli</td>" +
                                "<td>" +
                                data['response'][0].certific_existen_soli +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>representa_soli_fonogra</td>" +
                                "<td>" +
                                data['response'][0].representa_soli_fonogra +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>obra_objecto_regis_soli</td>" +
                                "<td>" +
                                data['response'][0].obra_objecto_regis_soli +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cert_repre_leg_soli</td>" +
                                "<td>" +
                                data['response'][0].cert_repre_leg_soli +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>no_soli_cesion_Du</td>" +
                                "<td>" +
                                data['response'][0].no_soli_cesion_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>carta_declaracion_Du</td>" +
                                "<td>" +
                                data['response'][0].carta_declaracion_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>sesion_Derecho_Du</td>" +
                                "<td>" +
                                data['response'][0].sesion_Derecho_Du +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>carta_documento_Du</td>" +
                                "<td>" +
                                data['response'][0].carta_documento_Du +
                                "</td>" +
                                "</tr>";
                    } else if (data['response'][0].tipo_registro == 4) {
                        $('#tipo').text('Nuevas Creaciones');
                        $('#id_registro').text(id);
                        $('#Codigo').text(codigo);
                        $('#Usuario').text(user);
                        $('#Estado').text(estado);
                        html = "<tr>" +
                                "<td>deseaRegistrar_Nc</td>" +
                                "<td>" +
                                data['response'][0].deseaRegistrar_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>resultado_Obtenido_Nc</td>" +
                                "<td>" +
                                data['response'][0].resultado_Obtenido_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_Proteccion_Nc</td>" +
                                "<td>" +
                                data['response'][0].tipo_Proteccion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>centro_Forma_Solicitante_Nc</td>" +
                                "<td>" +
                                data['response'][0].centro_Forma_Solicitante_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>regional_Solicitante_Nc</td>" +
                                "<td>" +
                                data['response'][0].regional_Solicitante_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>grupo_Investigacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].grupo_Investigacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_Proyecto_Nc</td>" +
                                "<td>" +
                                data['response'][0].nombre_Proyecto_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_Titular_Crea_Nc</td>" +
                                "<td>" +
                                data['response'][0].nombre_Titular_Crea_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_vinculacion_sena_Nc</td>" +
                                "<td>" +
                                data['response'][0].tipo_vinculacion_sena_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>tipo_Documento_Nc</td>" +
                                "<td>" +
                                data['response'][0].tipo_Documento_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>numero_Documento_Nc</td>" +
                                "<td>" +
                                data['response'][0].numero_Documento_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>direccion_Nc</td>" +
                                "<td>" +
                                data['response'][0].direccion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>telefono_Contacto_Nc</td>" +
                                "<td>" +
                                data['response'][0].telefono_Contacto_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>correo_Electonico_Nc</td>" +
                                "<td>" +
                                data['response'][0].correo_Electonico_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>nombre_Cotitulares_Nc</td>" +
                                "<td>" +
                                data['response'][0].nombre_Cotitulares_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>cedula_Nit_Cotitulare_Nc</td>" +
                                "<td>" +
                                data['response'][0].cedula_Nit_Cotitulare_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>repre_Legal_Document_Nc</td>" +
                                "<td>" +
                                data['response'][0].repre_Legal_Document_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>dirrecion_Nc</td>" +
                                "<td>" +
                                data['response'][0].dirrecion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>telefono_Represent_Nc</td>" +
                                "<td>" +
                                data['response'][0].telefono_Represent_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>correo_Represent_Nc</td>" +
                                "<td>" +
                                data['response'][0].correo_Represent_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>porcent_Participacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].porcent_Participacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>acuerdo_Propiedad_Documento_Nc</td>" +
                                "<td>" +
                                data['response'][0].acuerdo_Propiedad_Documento_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>estado_Desarrollo_Nc</td>" +
                                "<td>" +
                                data['response'][0].estado_Desarrollo_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>electric_Electonica_Nc</td>" +
                                "<td>" +
                                data['response'][0].electric_Electonica_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ing_Mecanica_Nc</td>" +
                                "<td>" +
                                data['response'][0].ing_Mecanica_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>instrumentos_Nc</td>" +
                                "<td>" +
                                data['response'][0].instrumentos_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>quimica_Nc</td>" +
                                "<td>" +
                                data['response'][0].quimica_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>sector_Tecnologico_Nc</td>" +
                                "<td>" +
                                data['response'][0].sector_Tecnologico_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>otro_producto_consumo_Nc</td>" +
                                "<td>" +
                                data['response'][0].otro_producto_consumo_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>descripcion_Creacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].descripcion_Creacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>ventajas_Bene_Creacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].ventajas_Bene_Creacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>caracteris_Novedosas_Nc</td>" +
                                "<td>" +
                                data['response'][0].caracteris_Novedosas_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>impacto_Solucion_Nc</td>" +
                                "<td>" +
                                data['response'][0].impacto_Solucion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>estado_Arte_Nc</td>" +
                                "<td>" +
                                data['response'][0].estado_Arte_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>publicacion_Divulgacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].publicacion_Divulgacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>indique_Otro_Nc</td>" +
                                "<td>" +
                                data['response'][0].indique_Otro_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>posibilidades_Mercado_Nc</td>" +
                                "<td>" +
                                data['response'][0].posibilidades_Mercado_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>contacto_acceso_Nc</td>" +
                                "<td>" +
                                data['response'][0].contacto_acceso_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>documento_diseño_creacion_Nc</td>" +
                                "<td>" +
                                data['response'][0].documento_diseño_creacion_Nc +
                                "</td>" +
                                "</tr>" +
                                "<tr>" +
                                "<td>obserbacion_Adicional_Nc</td>" +
                                "<td>" +
                                data['response'][0].obserbacion_Adicional_Nc +
                                "</td>" +
                                "</tr>";
                    }

                    $('#Contexto').html(html);
                } else if (data['error']) {


                    $('#textoError').text(data['error']);
                }
            }
        }).fail(function (data) {
            console.log(data);
        });
    }


    function Editar(id, codigo, user, estado) {
        console.log(codigo);
        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Proyectos/BuscarDetalleProyecto/" + id
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    console.log(data['response']);
                    if (data['response'][0].tipo_registro) {

                        $('#tipo_Edit').text('Obtención Vegetal');
                        $('#id_registro_Edit').text(id);
                        $('#Codigo_Edit').text(codigo);
                        $('#Usuario_Edit').text(user);
                        $('#Estado_Edit').text(estado);
                    }
                }
            }
        })
    }


    function EditarRegistro() {
        var id = $('#id_registro_Edit').text();
        var estado = $('#Estado_Id').val();
        var gestor = $('#Gestor_id').val();
        var resgistro_ID = $('#Id_Full').val();
        
        if (estado == 0) {
            alert('Por favor seleccione un estado.');
            return false;
        }

        if (gestor == 0) {
            alert('Por favor seleccione un Gestor.');
            return false;
        }
        
        //EditEstados_get

        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Procesos/EditEstados?id=" + estado + "&registro=" + id + "&gestor=" + gestor + "&Re_full=" + resgistro_ID
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    alert('El Registro Fue editado exitosamente');
                }
            }
        })
    }

    function Gestores() {

        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Procesos/BucarGestors/" + 4
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data);
                    var html = "";
                    for (var i = 0; i < data['response'].length; i++) {
                        html = "<option value='" + data['response'][i]['idGestores'] + "'>" + data['response'][i]['nombre'] + " " + data['response'][i]['apellido'] + "</option>";
                        $('#Gestor_id').append(html);
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