<html>
<!-- Headers -->
<?php
session_start();
include_once '../../Vista/HeaderRgObtencionv.php';
include_once '../../Modelo/Conexion_2.php';
include_once '../../Modelo/Conexion.php';
// Se valida que el usuario este logeado
include_once '../../Controladores/Transaccional/Sesion.php';

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<body>
    <div class="fade" id="PanelDiv" style="width: 100%;height: 100%;z-index: 1000;background-color: #000005;position: fixed;opacity: 0.5;display: none;"></div>
    <input type="hidden" id="Numero" value="<?php echo $_SESSION['SESS_COD_PROD']; ?>">
    <div class="box">
        <div class="row content">
        <?php include 'Nuevomenutalento.php'; ?>
          <div class="col-8 text-center" Style="margin-left:25%;margin-right:10%;">
                <div class="row">
                    <div class="col">
                        <br><br>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <h1 class="texto-titulo-perfil" style="font-size:50px; text-align: center; margin-bottom:-45px;">DERECHOS DE AUTOR</h1>
                    </div>
                </div>
                <br>
                <br>
                <?php
                if (isset($_SESSION['status']) && $_SESSION != '') {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong><?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
                <br>
                <!-- Inicio de consulta tecnoparque -->

                <!-- Datos del Proyecto -->
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class='card-header'>
                                <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-folder"></i>&nbsp;&nbsp;Datos del proyecto</h5>
                            </div>
                            <div class="card-body">
                                <table id='tabla-data' class="tabala" style="width: 100%;">

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin de datos del Proyecto -->
                <br>
                <div class="row">
                    <div class="col-sm" style="overflow: auto; height: 700px">
                        <!-- Datos de Usuario y Titular -->
                        <div class="card">
                            <div class="card-header">
                                <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-folder"></i>&nbsp;&nbsp;Datos del usuario y/o titular</h5>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <table class="">
                                            <tbody>
                                                <tr>
                                                    <td>Tipo de usuario</td>
                                                    <td><input type="text" class="campo-Info" id="TipoUser" disabled></td>
                                                    <td>Nombre usuario</td>
                                                    <td><input type="text" class="campo-Info" id="NombreUser" disabled></td>
                                                    <td>Apellido usuario</td>
                                                    <td><input type="text" class="campo-Info" id="ApellidoUser" disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Correo usuario</td>
                                                    <td><input type="text" class="campo-Info" id="CorreoUser" disabled></td>
                                                    <td>Tel??fono</td>
                                                    <td><input type="text" class="campo-Info" id="TelefonoUser" disabled></td>
                                                    <td>Tipo documento</td>
                                                    <td><input type="text" class="campo-Info" id="IpoDocUser" disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>N??mero documento</td>
                                                    <td><input type="text" class="campo-Info" id="NumeroDocUser" disabled></td>
                                                    <td>Direcci??n</td>
                                                    <td><input type="text" class="campo-Info" id="DireccionUser" disabled></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin de datos de usuario y titular -->
                        <br>
                        <!-- Inicio de datos de empresa -->
                        <div class="card" id="DatosEmpresa">
                            <div class="card-header">
                                <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-folder"></i>&nbsp;&nbsp;Datos de la empresa</h5>
                            </div>
                            <div class="card-body">
                                <table class="" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>Nombre empresa</td>
                                            <td><input type="text" class="campo-Info" class="campo-Info" id="NombreEmpresa" disabled></td>
                                            <td>Nit</td>
                                            <td><input type="text" class="campo-Info" class="campo-Info" id="NitEmprea" disabled></td>
                                            <td>Tel??fono empresa</td>
                                            <td><input type="text" class="campo-Info" class="campo-Info" id="TelefonoEmpresa" disabled></td>
                                        </tr>
                                        <tr>
                                            <td>Correo empresa</td>
                                            <td><input type="text" class="campo-Info" class="campo-Info" id="CorreoEmpresa" disabled></td>
                                            <td>Direcci??n empresa</td>
                                            <td><input type="text" class="campo-Info" class="campo-Info" id="DireccionEmpresa" disabled></td>

                                        </tr>
                                        <tr>
                                            <td colspan='6'>
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr id="tr-titulo">
                                            <th colspan="6" class="text-center">
                                                <h5 style="font-family: 'Josefin Sans Bold';">&nbsp;&nbsp;Datos representante de la empresa</h5>
                                            </th>
                                        </tr>
                                        <tr id="tr-titulo2">
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr id="tr-titulo3">
                                            <td>Nombre representante</td>
                                            <td><input type="text"></td>
                                            <td>Tipo documento </td>
                                            <td><input type="text"></td>
                                            <td>N??mero documento</td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr id="tr-titulo4">
                                            <td>Tel??fono representante</td>
                                            <td><input type="text"></td>
                                            <td>Direcci??n representante</td>
                                            <td><input type="text"></td>
                                            <td>Correo representante</td>
                                            <td><input type="text"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Fin de datos de Empresa -->
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-folder"></i>&nbsp;&nbsp;Datos del registro
                            </div>
                            <!-- Selecci??n -->
                            <div class="card-body">
                                <div class="container-fluid">
                                    <!-- Inicio del Formulario -->
                                    <form method="POST" action="../../Controladores/RegistrarDerechosAutor.php" enctype="multipart/form-data">
                                        <input type="hidden" name="tipoRegistro" value="4">
                                        <!-- <input type="hidden" name="id_User" id="id_User"> -->
                                        <input type="hidden" name="id_User" value="<?php echo $_SESSION['SESS_MEMBER_ID_PERFIL'];?>">
                                        <input type="hidden" name="CodProd" value="<?php echo $_SESSION['SESS_COD_PROD']; ?>">
                                        <div class="row">
                                            <div class="col-sm-12 text-left">
                                                <span class="label-perfil"><b>TIPO DE REGISTRO: </b>Seleccione el tipo de registro.</span>
                                                <br><br>
                                                <select class="form-control campo-perfil" name="tipoSubRegistro" id="tipoSubRegistro" onchange="seleccion(this.value);" required>
                                                    <option selected value="Null">Seleccione...</option>
                                                    <option value="Registro de Software">Registro de Software </option>
                                                    <option value="Registro de fonograma">Registro de fonograma</option>
                                                    <option value="Obra Art??stica">Obra Art??stica</option>
                                                    <option value="Obra literaria">Obra literaria</option>
                                                    <option value="Obra Musical">Obra Musical</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 style="text-align: center;">INFORMACI??N GENERAL</h4>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Datos del formulario de Registro de Software -->
                                        <div id="marca_Software" style="display: none;">
                                            <label for="">La legislaci??n colombiana considera el software una obra literaria. Registro que se adelanta ante la Direcci??n Nacional de Derechos de Autor, con la finalidad de dar seguridad jur??dica a los titulares de sus obras.</label>
                                            <br>
                                            <br>
                                            <!-- Datos de autor -->
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfil"><b>Datos del autor:</b>Autor es la persona f??sica que realiza la creaci??n intelectual. Las personas jur??dicas no son consideradas como autores por nuestra legislaci??n. </span>
                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Nombre</span>
                                                            <input type="text" name="nombre_Autor" class="form-control campo-perfil" placeholder="Nombre del autor...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Nacionalidad</span>
                                                            <input type="text" name="naciona_autor" class="form-control campo-perfil" placeholder="Nacionalidad del autor...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">N??mero documento</span>
                                                            <input type="text" name="documento_autor" class="form-control campo-perfil" placeholder="N??mero de documento del autor...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Lugar de expedici??n</span>
                                                            <input type="text" name="lugar_autor" class="form-control campo-perfil" placeholder="Lugar de expedici??n...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Direcci??n completa</span>
                                                            <input type="text" name="direccion_autor" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Datos del reproductor -->
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfil"><b>Datos del productor (no siempre hay un productor):</b> Esta es la persona natural o jur??dica que tiene la iniciativa, la coordinaci??n y la responsabilidad en la producci??n de la obra (software); es quien fija, distribuye y comercializa el soporte l??gico (software). </span>
                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Nombre</span>
                                                            <input type="text" name="nombre_reprod" class="form-control campo-perfil" placeholder="Nombre del reproductor...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Correo elect??nico</span>
                                                            <input type="text" name="correo_reprod" class="form-control campo-perfil" placeholder="Correo elect??nico del reproductor...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Sitio web</span>
                                                            <input type="text" name="sitio_reprod" class="form-control campo-perfil" placeholder="Sitio web del reproductor...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Dirreci??n</span>
                                                            <input type="text" name="direccion_reprod" class="form-control campo-perfil" placeholder="Direcci??n del reproductor...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Ciudad</span>
                                                            <input type="text" name="ciudad_reprod" class="form-control campo-perfil" placeholder="Ciudad del reproductor...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Pa??s</span>
                                                            <input type="text" name="pais_reprod" class="form-control campo-perfil" placeholder="Pa??s del reproductor...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Datos de la obra -->
                                            <div id="datos_obra" style="display: show;">
                                                <div class="col-sm-12">
                                                    <h5 style="text-align: left;">Datos de la obra:</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">Estado de la obra</span>
                                                        <select class="form-control campo-perfil" name="estado_obra">
                                                            <option selected value="Null">Seleccione...</option>
                                                            <option value="In??dita ">In??dita</option>
                                                            <option value="Publicada">Publicada</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">T??tulo de la obra (el que figura en la obra) </span>
                                                        <input type="text" class="form-control campo-perfil" name="titulo_obra" placeholder="Titulo de la obra">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">A??o de creaci??n: La fecha en al que el autor la creo.</span>
                                                        <input type="date" class="form-control campo-perfil" name="fecha_creacion_obra">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">Fecha de publicaci??n: Cuando se hizo accesible al p??blico</span>
                                                        <input type="date" class="form-control campo-perfil" name="fecha_publi_obra">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">Pa??s de origen.</span>
                                                        <input type="text" class="form-control campo-perfil" name="pais_orign_obra" placeholder="Pa??s...">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">Categor??a de la obra </span>
                                                        <input type="text" class="form-control campo-perfil" name="categoria_obra" placeholder="Categor??a de la obra...">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Caracter de la obra -->
                                            <div id="caracter_de_obra" style="display: show;">
                                                <div class="col-sm-12">
                                                    <h5 style="text-align: left;">Car??cter de la obra:</h5>
                                                    <label class="form-check-label">
                                                        Por favor d??jenos saber a cu??les pertenece el software por sus caracter??sticas: resalte la respuesta correcta
                                                    </label>
                                                </div>
                                                <br>
                                                <div class="a_segun-su-crecion">
                                                    <div class="row">
                                                        <span class="label-perfil">a. Seg??n su creaci??n </span>
                                                        <div class="col-sm-6 text-left">
                                                            <input type="hidden" value="Null" name="segunMarca" selected>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra individual" name="segunMarca" id="OBIN">
                                                                <label class="form-check-label">
                                                                    <strong>Obra individual: </strong>
                                                                </label>
                                                                <label id="obin" style="display: none;" class="form-check-label">
                                                                    La que es producida por una sola persona natural. </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra en Colaboraci??n" name="segunMarca" id="OBCOL">
                                                                <label class="form-check-label">
                                                                    <strong>Obra en Colaboraci??n:</strong>
                                                                </label>
                                                                <label id="obcol" style="display: none;" class="form-check-label">
                                                                    La que es producida conjuntamente, por dos o m??s personas naturales
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra por Encargo" name="segunMarca" id="OBENCAR">
                                                                <label class="form-check-label">
                                                                    <strong>Obra por Encargo:</strong>
                                                                </label>
                                                                <label id="obencar" style="display: none;" class="form-check-label">
                                                                    Cuando la obra es creada en desarrollo de un contrato de prestaci??n de servicios, la ley presume que la titularidad de los derechos patrimoniales la tiene el contratante que ha se??alado el plan y que asume el costo y responsabilidad de la misma, aqu?? es necesario allegar el documento que acredite tal situaci??n. </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="b-segun-su-crecion">
                                                    <div class="row">
                                                        <span class="label-perfil">b. seg??n su origen </span>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="hidden" value="Null" name="seguncreacion" selected>
                                                                <input class="form-check-input" type="radio" value="Obra Originaria" name="seguncreacion" id="OBORIGIN">
                                                                <label class="form-check-label">
                                                                    <strong>Obra Originaria:</strong>
                                                                </label>
                                                                <label id="oborigin" style="display: none;" class="form-check-label">
                                                                    Aquella que resulta del trabajo intelectual del autor sin basarse en una obra preexistente.
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra Derivada" name="seguncreacion" id="OBDERIV">
                                                                <label class="form-check-label">
                                                                    <strong>Obra Derivada: </strong>
                                                                </label>
                                                                <label id="obderiv" style="display: none;" class="form-check-label">
                                                                    Es aquella obra basada en otra ya existente que resulta de la adaptaci??n, traducci??n u otra transformaci??n de una obra originaria
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="c-segun-autor">
                                                    <div class="row">
                                                        <span class="label-perfil">c, seg??n el autor</span>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="hidden" value="Null" name="segunautor" selected>
                                                                <input class="form-check-input" type="radio" value="Obra An??nima" name="segunautor" id="OBANOM">
                                                                <label class="form-check-label">
                                                                    <strong>Obra An??nima: </strong>
                                                                </label>
                                                                <label id="obanom" style="display: none;" class="form-check-label">
                                                                    Es aquella en donde no se menciona el nombre o seud??nimo de autor por voluntad del mismo o por ser ignorado
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra Seud??nima" name="segunautor" id="OBSEUD">
                                                                <label class="form-check-label">
                                                                    <strong>Obra Seud??nima: </strong>
                                                                </label>
                                                                <label id="obseud" style="display: none;" class="form-check-label">
                                                                    Es aquella en que el autor se oculta bajo un seud??nimo o nombre que no lo identifica.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="hidden" value="Null" name="segunautor" selected>
                                                                <input class="form-check-input" type="radio" value="Obra P??stuma" name="segunautor" id="OBPOST">
                                                                <label class="form-check-label">
                                                                    <strong>Obra P??stuma:</strong>
                                                                </label>
                                                                <label id="obPost" style="display: none;" class="form-check-label">
                                                                    Es aquella que ha sido dada a conocer al p??blico s??lo despu??s de la muerte del autor.
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Otra" name="segunautor" id="OTRA">
                                                                <label class="form-check-label">
                                                                    <strong>Otra:</strong>
                                                                </label>
                                                                <label id="otra" style="display: none;" class="form-check-label">
                                                                    Si el soporte l??gico no puede clasificarse en ninguno de los anteriormente descritos.
                                                                </label>
                                                                <br>
                                                                <input type="text" id="otro1" style="display: none;" name="otra_autor" class="form-control campo-perfil">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Breve descripci??n funciones -->
                                            <div class="Descripcion_funciones">
                                                <div class="col-sm-12">
                                                    <h5 style="text-align: left;">Breve descripci??n de funciones: </h5>
                                                    <label class="form-check-label">
                                                        Realice una descripci??n sucinta de las funciones del soporte l??gico (software) en no m??s de 500 caracteres.
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <textarea name="descripcion_breve" maxlength="500" class="form-control campo-perfill"></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Plataforma web XXXXXXXXXXX Entre las funciones que ofrece la plataforma se encuentran:</span>
                                                        <br>
                                                        <br>
                                                        <input type="text" name="funcion1_platform" class="form-control campo-perfil" placeholder="Descripci??n de las funciones...">
                                                        <input type="text" name="funcion2_platform" class="form-control campo-perfil" placeholder="Descripci??n de las funciones...">
                                                        <input type="text" name="funcion3_platform" class="form-control campo-perfil" placeholder="Descripci??n de las funciones...">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="label-perfil">Cu??les son las principales ventajas del desarrollo?</span>
                                                        <textarea name="principal_Ventajas" maxlength="500" class="form-control campo-perfill"></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="label-perfil">Cu??l es la poblaci??n que usara este desarrollo?</span>
                                                        <textarea name="poblacion_usara" maxlength="500" class="form-control campo-perfill"></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="label-perfil">Cu??l es la principal ventaja de este desarrollo?</span>
                                                        <textarea name="vantaja_desarrollo" maxlength="500" class="form-control campo-perfill"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <!--  Elementos del soporte l??gico -->
                                            <div class="elementos_soporte">
                                                <span class="label-perfil"><b>Elementos del soporte l??gico que se van a adjuntar: </b> Hay que indicar los elementos del soporte l??gico que se van a aportar al registro:</span>
                                                <br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <select class="form-control campo-perfil" name="elemen_soporte_logic" id="sopLogic" onchange="soporLogic(this.value);">
                                                            <option selected value="Null">Seleccione...</option>
                                                            <option value="Programa de computador">Programa de computador</option>
                                                            <option value="Descripci??n de programa">Descripci??n de programa: </option>
                                                            <option value="Material auxiliar">Material auxiliar: </option>
                                                        </select>
                                                    </div>
                                                    <label id="proCompu" style="display: none;" class="form-check-label">
                                                        La expresi??n de un conjunto organizado de instrucciones en lenguaje natural o codificado, independientemente del medio en que se encuentra almacenado, cuyo fin es el de hacer que una m??quina capaz de procesar informaci??n indique, realice u obtenga una funci??n o resultado espec??fico.
                                                    </label>
                                                    <label id="desprogra" style="display: none;" class="form-check-label">
                                                        Una presentaci??n completa de procedimientos de forma id??nea, lo suficientemente detallada para determina un conjunto de instrucciones que constituya el programa de computador correspondiente.
                                                    </label>
                                                    <label id="matauxili" style="display: none;" class="form-check-label">
                                                        Todo material distinto de un programa de computador o de una descripci??n de programa, creado para facilitar su comprensi??n o aplicaci??n, por ejemplo, descripci??n de problemas e instrucciones para el usuario.
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Transferencias -->
                                            <div class="transferencias">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h5 style="text-align: left;">Transferencias</h5>
                                                        <label class="form-check-label">
                                                            Si el titular de los derechos patrimoniales de la obra es distinto al autor deber?? indicarse el nombre o raz??n social y aportarse el documento de transferencia de derechos (puede ser contrato de cesi??n de derechos patrimoniales).
                                                        </label>
                                                        <input type="text" name="titu_patrimon_tranfe" class="form-control campo-perfil">
                                                        <br>
                                                        <span class="label-perfil">El documento de transferencia puede aportarse en original o en copia, puede ser autenticado ante notario. </span>
                                                        <input type="file" name="document_transfe" class="form-control campo-perfil">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Observaciones -->
                                            <div class="observaciones">
                                                <!-- <div class="col-sm-12"> -->
                                                <h5 style="text-align: left;">Observaciones</h5>
                                                <label class="form-check-label">
                                                    exprese de manera muy breve cualquier particularidad sobre la obra
                                                </label>
                                                <textarea type="text" name="expre_part_observacion" class="form-control campo-perfill"></textarea>
                                                <!-- </div> -->
                                            </div>
                                            <br>
                                            <!-- Datos del Solicitante-->
                                            <div class="Datos_Solicitante">
                                                <!-- <div class="col-sm-12"> -->
                                                <h5 style="text-align: left;">Datos del solicitante: </h5>
                                                <label class="form-check-label">
                                                    Es necesario que nos indique los datos de la persona natural que hace la solicitud (puede hacerse en representaci??n de una persona jur??dica), solo pueden hacerlo el autor, el editor o el titular de los derechos patrimoniales o sus representantes.
                                                </label>
                                                <br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Nombre</span>
                                                        <input type="text" name="nombre_solicitante" class="form-control campo-perfil" placeholder="Nombre solicitante...">
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">documento de identificaci??n</span>
                                                        <input type="text" name="document_solicitante" class="form-control campo-perfil" placeholder="Documento identificacion...">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">lugar de expedici??n</span>
                                                        <input type="text" name="lugar_expedi_solicitante" class="form-control campo-perfil" placeholder="Lugar expedici??n...">
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Representante legal</span>
                                                        <input type="text" name="repre_legal_solicitante" class="form-control campo-perfil" placeholder="Representante legal...">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">C??dula de Ciudadan??a</span>
                                                        <input type="text" name="cedula_ciudad_solicitante" class="form-control campo-perfil" placeholder="C??dula de ciudadania">
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Nacionalidad</span>
                                                        <input type="text" name="nacio_solicitante" class="form-control campo-perfil" placeholder="Nacionalidad...">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Direcci??n</span>
                                                        <input type="text" name="direccion_solicitante" class="form-control campo-perfil" placeholder="Direcci??n...">
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Pa??s</span>
                                                        <input type="text" name="pais_solicitante" class="form-control campo-perfil" placeholder="Pa??s...">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Ciudad</span>
                                                        <input type="text" name="ciud_solicitante" class="form-control campo-perfil" placeholder="Ciudad...">
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Tel??fono</span>
                                                        <input type="text" name="telefono_solicitante" class="form-control campo-perfil" placeholder="Tel??fono...">
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                            <br>
                                            <!-- Documentos -->
                                            <div class="Documentos">
                                                <h5 style="text-align: left;">Documentos</h5>
                                                <label class="form-check-label">
                                                    Con la solicitud de registro debe aportarse:
                                                </label>
                                                <br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <label for="">??? Si el solicitante no es el autor: el documento de cesi??n de derechos. Si a??n no cuenta con el documento solic??telo a upisennova@sena.edu.co.</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">??? Si el solicitante es una persona jur??dica o una sociedad, es necesario aportar el certificado de existencia y representaci??n legal.</span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                        <input type="file" name="certific_exist_document" class="form-control campo-perfil">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <label for="">??? Carta de declaraci??n derechos de autor. Sin aun no cuenta con el documento solic??telo a uoisennova@sena.edu.co</label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">??? Debemos aportar m??nimo uno de los tres elementos de soporte l??gico debidamente identificado (programa de computador, descripci??n de programa o material auxiliar).</span>
                                                        <input type="file" name="tres_documents" class="form-control campo-perfil">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">??? Manual del desarrollo</span>
                                                        <input type="file" name="manual_desarrollo" class="form-control campo-perfil">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">??? Carpeta Zip con informaci??n de c??digo fuente (en carpeta comprimida ZIP o RAR)</span>
                                                        <input type="file" name="cod_fuente_document" class="form-control campo-perfil">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Datos del formulario de Registro de Fonograma -->
                                        <div id="marca_Fonograma" style="display: none;">
                                            <label for="">El fonograma consiste en una obra musical que ha sido grabada, es decir incorporada en un soporte f??sico, sea de tipo USB, disco, CD, casette o cualquier soporte apto para la reproducci??n de este. Al igual, un fonograma puede ser una pista o track que integra un disco.</label>
                                            <br>
                                            <br>
                                            <!-- Datos de autor -->
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfil"><b>Datos del productor fonogr??fico: </b> Es la persona natural o jur??dica que realiza la ejecuci??n de una obra o de otros sonidos. Si esta fijaci??n se hace en el seno de una empresa, se considera productor del fonograma al titular de la empresa.</span>
                                                    <br><br>
                                                    <span>Por favor diligencie la informaci??n del productor o productores que hayan intervenido en la creaci??n del fonograma:</span>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Nombre completo</span>
                                                            <input type="text" name="nombre_fonografico" class="form-control campo-perfil" placeholder="Nombre del autor...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Nacionalidad</span>
                                                            <input type="text" name="naciona_fonografico" class="form-control campo-perfil" placeholder="Nacionalidad del autor...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Tipo de documento</span>
                                                            <select class="form-control campo-perfil" name="tpDocumentFono">
                                                                <option selected value="Null">Seleccione...</option>
                                                                <option value="C??dula de ciudan??a">C??dula de ciudan??a</option>
                                                                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                                                <option value="C??dula de extranger??a">C??dula de extranger??a</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">N??mero de documento</span>
                                                            <input type="text" name="numero_doc_fonografico" class="form-control campo-perfil" placeholder="Lugar de expedici??n...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Lugar de expedici??n</span>
                                                            <input type="text" name="lugar_expedi_fonografico" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Direcci??n completa</span>
                                                            <input type="text" name="direccion_fonografico" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Ciudad</span>
                                                            <input type="text" name="ciudad_fonografico" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Email</span>
                                                            <input type="text" name="email_fonografico" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Datos de la obra -->
                                            <div id="datos_obra_fonograma" style="display: show;">
                                                <div class="col-sm-12">
                                                    <h5 style="text-align: left;">Datos de la obra:</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">T??tulo de la obra</span>
                                                        <input type="text" class="form-control campo-perfil" name="titulo_obra_fonografico" placeholder="Titulo de la obra">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">A??o de primera fijaci??n</span>
                                                        <input type="date" class="form-control campo-perfil" name="fecha_pri_fija_fonografico">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">Pa??s de origen.</span>
                                                        <input type="text" class="form-control campo-perfil" name="pais_orign_obra_fono" placeholder="Pa??s...">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">Fecha de publicaci??n</span>
                                                        <input type="date" class="form-control campo-perfil" name="fecha_publi_fono" placeholder="Categor??a de la obra...">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">Editada:</span>
                                                        <input type="text" class="form-control campo-perfil" name="editada_fonografico" placeholder="Pa??s...">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">In??dita</span>
                                                        <input type="text" class="form-control campo-perfil" name="inedita_fonografico" placeholder="Categor??a de la obra...">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">El a??o en que se grab?? la primera canci??n o primer sonido</span>
                                                        <input type="date" class="form-control campo-perfil" name="year_cansion_fnografica" placeholder="Categor??a de la obra...">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Nombre de Obras -->
                                            <div id="nombre_obra_fonograma" style="display: show;">
                                                <div class="col-sm-12">
                                                    <h5 style="text-align: left;">Nombre de Obras fijadas en el Fonograma:</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">T??tulo de la obra</span>
                                                        <input type="text" class="form-control campo-perfil" name="titulo_obra_fija_fon" placeholder="Titulo de la obra">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">Nombre completo del interprete</span>
                                                        <input type="text" class="form-control campo-perfil" name="nombre_com_inter_fonografica" placeholder="Nombre del interprete...">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span class="label-perfil">Pa??s de origen.</span>
                                                        <input type="text" class="form-control campo-perfil" name="pais_orign_fonografica" placeholder="Pa??s...">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="label-perfil">*Diligencie en cada cuadro que sea necesario la informaci??n que corresponda para cada canci??n o sonido. en el orden que fue grabada</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                        </div>
                                        <!-- Datos del solicitante conjunto de datos (se reutiliza)-->
                                        <div class="datos_solicitante" id="datos_solicitante" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfil"><b>Datos del solicitante: </b> Es necesario que nos indique los datos de la persona natural que hace la solicitud (puede hacerse en representaci??n de una persona jur??dica), solo pueden hacerlo el autor, el editor o el titular de los derechos patrimoniales o sus representantes.</span>
                                                    <br><br>
                                                    <span>Si el solicitante es una persona jur??dica deber?? allegarse el certificado de existencia y representaci??n legal.</span>
                                                    <br>
                                                    <input type="file" name="certific_existen_soli" class="form-control campo-perfil">
                                                    <br>
                                                    <span>Si quien ser?? el solicitante act??a en representaci??n de otro, deber?? aportar un documento que acredite la representaci??n, en el caso de las personas jur??dicas el certificado de existencia y representaci??n basta.</span>
                                                    <br>
                                                    <input type="file" name="representa_soli_fonogra" class="form-control campo-perfil">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Nombre completo</span>
                                                            <input type="text" name="nombre_soli_fono" class="form-control campo-perfil" placeholder="Nombre completo...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Nacionalidad</span>
                                                            <input type="text" name="naciona_soli_fono" class="form-control campo-perfil" placeholder="Nacionalidad...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Tipo de documento</span>
                                                            <select class="form-control campo-perfil" name="tpDocument_soli_Fono">
                                                                <option selected value="Null">Seleccione...</option>
                                                                <option value="C??dula de ciudan??a">C??dula de ciudan??a</option>
                                                                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                                                <option value="C??dula de extranger??a">C??dula de extranger??a</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">N??mero de documento</span>
                                                            <input type="text" name="nume_doc_fono" class="form-control campo-perfil" placeholder="N??mero de documento...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Lugar de expedici??n</span>
                                                            <input type="text" name="expedicion_fono" class="form-control campo-perfil" placeholder="Lugar de expedicci??n...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Direcci??n completa</span>
                                                            <input type="text" name="direccion_soli_fono" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Ciudad</span>
                                                            <input type="text" name="ciudad_soli_fono" class="form-control campo-perfil" placeholder="Ciudad...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Email</span>
                                                            <input type="text" name="email_soli_fono" class="form-control campo-perfil" placeholder="Email...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Representante legal</span>
                                                            <input type="text" name="represen_soli_fono" class="form-control campo-perfil" placeholder="Representante legal...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Pa??s</span>
                                                            <input type="text" name="pais_soli_fono" class="form-control campo-perfil" placeholder="Pa??s...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Tel??fono</span>
                                                            <input type="text" name="telefono_soli_fono" class="form-control campo-perfil" placeholder="Tel??fono...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Datos de autor  (se reutiliza) -->
                                        <div id="datos_autor_3_form" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfil"><b>Datos del autor: </b> El autor es la persona f??sica que realiza la creaci??n intelectual. Las personas jur??dicas no son consideradas como autores por nuestra legislaci??n. </span>
                                                    <br><br>
                                                    <span>Por favor diligencie la informaci??n del autor o autores que hayan intervenido en la creaci??n de la obra: </span>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Nombre completo</span>
                                                            <input type="text" name="nombre_fonografico" class="form-control campo-perfil" placeholder="Nombre del autor...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Nacionalidad</span>
                                                            <input type="text" name="naciona_fonografico" class="form-control campo-perfil" placeholder="Nacionalidad del autor...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Tipo de documento</span>
                                                            <select class="form-control campo-perfil" name="tpDocumentFono">
                                                                <option selected value="Null">Seleccione...</option>
                                                                <option value="C??dula de ciudan??a">C??dula de ciudan??a</option>
                                                                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                                                <option value="C??dula de extranger??a">C??dula de extranger??a</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">N??mero de documento</span>
                                                            <input type="text" name="numero_doc_fonografico" class="form-control campo-perfil" placeholder="Lugar de expedici??n...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Lugar de expedici??n</span>
                                                            <input type="text" name="lugar_expedi_fonografico" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Direcci??n completa</span>
                                                            <input type="text" name="direccion_fonografico" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Ciudad</span>
                                                            <input type="text" name="ciudad_fonografico" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Email</span>
                                                            <input type="text" name="email_fonografico" class="form-control campo-perfil" placeholder="Direcci??n completa...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Datos de obra  (se reutiliza) -->
                                        <div id="datos_obra_re" style="display: none;">
                                            <span style="text-align: left;"><b>Datos de la obra</b></span>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">T??tulo de la obra:</span>
                                                            <input type="text" name="titu_obra_artis" class="form-control campo-perfil" placeholder="Titulo de la obra...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">A??o de creaci??n:</span>
                                                            <input type="date" name="a??o_creacion_artis" class="form-control campo-perfil" placeholder="A??o de creacion...">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Pa??s de origen:</span>
                                                            <input type="text" name="pais_origen_artis" class="form-control campo-perfil" placeholder="Pa??s de origen...">
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <span class="label-perfil">Editada:</span>
                                                            <input type="text" name="editada_artis" class="form-control campo-perfil" placeholder="Editada...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">In??dita:</span>
                                                    <input type="text" name="ineditada_artis" class="form-control campo-perfil" placeholder="In??dita...">
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Fecha de publicaci??n:</span>
                                                    <input type="date" name="fecha_publi_artis" class="form-control campo-perfil">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">N??mero de edici??n:</span>
                                                    <input type="text" name="num_edic_artis" class="form-control campo-perfil" placeholder="N??mero de edici??n...">
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Editor:</span>
                                                    <input type="text" name="editor_artis" class="form-control campo-perfil" placeholder="Editor...">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Direcci??n:</span>
                                                    <input type="text" name="direccion_artis" class="form-control campo-perfil" placeholder="Direcci??n...">
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Tipo de documento</span>
                                                    <select class="form-control campo-perfil" name="tpDocumentArtis">
                                                        <option selected value="Null">Seleccione...</option>
                                                        <option value="C??dula de ciudan??a">C??dula de ciudan??a</option>
                                                        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                                        <option value="C??dula de extranger??a">C??dula de extranger??a</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">N??mero de documento</span>
                                                    <input type="text" name="num_docum_artis" class="form-control campo-perfil" placeholder="N??mero de documento...">
                                                </div>

                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Nacionalidad:</span>
                                                    <input type="text" name="nacional_artis" class="form-control campo-perfil" placeholder="Nacionalidad...">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Impresor</span>
                                                    <input type="text" name="impresor_artis" class="form-control campo-perfil" placeholder="Impresor...">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfil">*El a??o de creaci??n es el a??o en que se finaliz?? la obra.</span>
                                                    <input type="date" name="cracionFinObra_Artis" class="form-control campo-perfil">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Caracter de la obra  (se reutiliza) -->
                                        <div id="caracter_de_obra_re" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <span style="text-align: left;"><b>Car??cter de la obra:</b></span>
                                                    <label class="form-check-label">
                                                        Por favor d??jenos saber a cu??les pertenece el software por sus caracter??sticas: resalte la respuesta correcta
                                                    </label>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="caracter_obra">
                                                    <div class="row">
                                                        <span class="label-perfil">Car??cter de la obra, Por favor d??jenos saber a cu??les pertenece la obra por sus caracter??sticas: </span>
                                                        <br>
                                                        <div class="col-sm-6 text-left">
                                                            <input type="hidden" value="Null" name="caractObra" selected>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra individual" name="caractObra" id="CAROBRA">
                                                                <label class="form-check-label">
                                                                    <strong>Obra individual:</strong>
                                                                </label>
                                                                <label id="carobra" style="display: none;" class="form-check-label">
                                                                    La que es producida por una sola persona natural. </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra en Colaboraci??n" name="caractObra" id="OBELABO">
                                                                <label class="form-check-label">
                                                                    <strong>Obra en Colaboraci??n:</strong>
                                                                </label>
                                                                <label id="obElabo" style="display: none;" class="form-check-label">
                                                                    La que es producida conjuntamente, por dos o m??s personas naturales
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra Colectiva" name="caractObra" id="OBCOLEC">
                                                                <label class="form-check-label">
                                                                    <strong>Obra Colectiva: </strong>
                                                                </label>
                                                                <label id="obcolec" style="display: none;" class="form-check-label">
                                                                    La que es producida por un grupo de autores por iniciativa y bajo la orientaci??n de una persona natural o jur??dica que la coordina, divulga y publica bajo su nombre.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="opcion_origen">
                                                    <div class="row">
                                                        <span class="label-perfil">Elija la opci??n que se ajuste seg??n el origen de la obra:</span>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="hidden" value="Null" name="orig_Obra" selected>
                                                                <input class="form-check-input" type="radio" value="Obra Originaria" name="orig_Obra" id="OBRAORIGN">
                                                                <label class="form-check-label">
                                                                    <strong>Obra Originaria:</strong>
                                                                </label>
                                                                <label id="obraorign" style="display: none;" class="form-check-label">
                                                                    Aquella que resulta del trabajo intelectual del autor sin basarse en una obra preexistente.
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra Derivada" name="orig_Obra" id="OBRADERIV">
                                                                <label class="form-check-label">
                                                                    <strong>Obra Derivada: </strong>
                                                                </label>
                                                                <label id="obraderiv" style="display: none;" class="form-check-label">
                                                                    Es aquella obra basada en otra ya existente que resulta de la adaptaci??n, traducci??n u otra transformaci??n de una obra originaria
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="forma_autor">
                                                    <div class="row">
                                                        <span class="label-perfil">Forma que se da a conocer el autor(es): </span>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="hidden" value="Null" name="forma_Conoser" selected>
                                                                <input class="form-check-input" type="radio" value="Obra An??nima" name="forma_Conoser" id="OBRANOMI">
                                                                <label class="form-check-label">
                                                                    <strong>Obra An??nima: </strong>
                                                                </label>
                                                                <label id="obranomi" style="display: none;" class="form-check-label">
                                                                    Es aquella en donde no se menciona el nombre o seud??nimo de autor por voluntad del mismo o por ser ignorado
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra Seud??nima" name="forma_Conoser" id="OBSEUDO">
                                                                <label class="form-check-label">
                                                                    <strong>Obra Seud??nima: </strong>
                                                                </label>
                                                                <label id="obseudo" style="display: none;" class="form-check-label">
                                                                    Es aquella en que el autor se oculta bajo un seud??nimo o nombre que no lo identifica.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Obra P??stuma" name="forma_Conoser" id="OBPOSTU">
                                                                <label class="form-check-label">
                                                                    <strong>Obra P??stuma:</strong>
                                                                </label>
                                                                <label id="obpostu" style="display: none;" class="form-check-label">
                                                                    Es aquella que ha sido dada a conocer al p??blico s??lo despu??s de la muerte del autor.
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Otra" name="forma_Conoser" id="NINGUNA">
                                                                <label class="form-check-label">
                                                                    <strong>Ninguna de las anteriores:</strong>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="forma_elaboracion">
                                                    <div class="row">
                                                        <span class="label-perfil">Forma de elaboraci??n:</span>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="hidden" value="Null" name="forma_elabora" selected>
                                                                <input class="form-check-input" type="radio" value="Obra por Encargo" name="forma_elabora" id="OBCARGO">
                                                                <label class="form-check-label">
                                                                    <strong>Obra por Encargo </strong>
                                                                </label>
                                                                <label id="obcargo" style="display: none;" class="form-check-label">
                                                                    Cuando la obra es creada en desarrollo de un contrato de prestaci??n de servicios, la ley presume que la titularidad de los derechos patrimoniales la tiene el contratante que ha se??alado el plan y que asume el costo y responsabilidad de la misma, aqu?? es necesario allegar el documento que acredite tal situaci??n.
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" value="Funcionario p??blico en ejercicio de sus funciones" name="forma_elabora" id="FUNEJERC">
                                                                <label class="form-check-label">
                                                                    <strong>Funcionario p??blico en ejercicio de sus funciones: </strong>
                                                                </label>
                                                                <label id="funejerc" style="display: none;" class="form-check-label">
                                                                    Allegar certificado laboral donde se especifique las funciones.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 text-left">
                                                            <div class="form-check">
                                                                <!-- <input class="form-check-input" type="hidden" value="Null" name="segunautor" selected> -->
                                                                <input class="form-check-input" type="radio" value="Obra" name="forma_elabora" id="OTRAA">
                                                                <label class="form-check-label">
                                                                    <strong>Obra:</strong>
                                                                </label>
                                                                <label id="otraa" style="display: none;" class="form-check-label">
                                                                    Si la obra no puede clasificarse en ninguno de los anteriormente descritos
                                                                </label>
                                                                <br>
                                                                <input type="text" class="form-control campo-perfil" style="display: none;" id="otra2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Transferencias de la obra -->
                                        <div id="transferencias_fonograma" style="display:none;">
                                            <span style="text-align: left;"><b>Transferencia</b></span>
                                            <label class="form-check-label">
                                                Si el titular de los derechos patrimoniales de la obra es distinto al autor deber?? indicarse el nombre o raz??n social y aportarse el documento de transferencia de derechos <span style="color:red;">(Cesi??n de derechos patrimoniales).</span>
                                            </label>
                                            <br>
                                            <input type="text" class="form-control campo-perfil" name="nom_razon_fonograma" placeholder="Nombre o raz??n social...">
                                            <br>
                                            <span>El documento de transferencia puede aportarse en original o en copia, puede ser autenticado ante notario.</span>
                                            <input class="form-control campo-perfil" type="file" name="trans_obra_fonograma">
                                        </div>
                                        <br>
                                        <!-- Categor??a de la obra (se reutiliza)-->
                                        <div id="categoria_de_obra" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <span style="text-align: left;"><b>Categor??a de la obra</b></span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="label-perfil">Tipo de obra</span>
                                                    <select class="form-control campo-perfil" name="catObraArtis">
                                                        <option selected value="Null">Seleccione...</option>
                                                        <option value="Arquitectura">Arquitectura</option>
                                                        <option value="Arte aplicado">Arte aplicado</option>
                                                        <option value="Arte digital">Arte digital</option>
                                                        <option value="Coreograf??a">Coreograf??a</option>
                                                        <option value="Croquis">Croquis</option>
                                                        <option value="Dibujo">Dibujo</option>
                                                        <option value="Dram??ticas">Dram??ticas</option>
                                                        <option value="Dram??tico musicales">Dram??tico musicales</option>
                                                        <option value="Esculturas">Esculturas</option>
                                                        <option value="Fotograf??a">Fotograf??a</option>
                                                        <option value="Registro de lema comercial">Grabado</option>
                                                        <option value="Grabado">Instalaci??n</option>
                                                        <option value="Litograf??a">Litograf??a</option>
                                                        <option value="Mapa">Mapa</option>
                                                        <option value="Pantomima">Pantomima</option>
                                                        <option value="Pintura">Pintura</option>
                                                        <option value="Planos">Planos</option>
                                                        <option style="display: none;" id="otroLiter1" value="Inter??s general">Inter??s general</option>
                                                        <option style="display: none;" id="otroLiter2" value="Did??ctico">Did??ctico</option>
                                                        <option style="display: none;" id="otroLiter3" value="Religioso">Cientifico</option>
                                                        <option style="display: none;" id="otroLiter4" value="Pantomima">Pantomima</option>
                                                        <option value="Otro tipo de obra">Otro tipo de obra</option>
                                                    </select>
                                                    <input type="text" class="form-control campo-perfil" name="otroTpObra" placeholder="Solo responda si es otro tipo de obra...">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Obra literar??a (Reutilizablr) -->
                                        <div id="datos_obra_literaria" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <span style="text-align: left;"><b>Obra Literar??a:</b></span>
                                                </div>
                                                <br>
                                                <br>
                                                <label for="">INEDITA: es aquella que no ha sido dada a conocer al p??blico y no ha pasado por un proceso de edici??n. </label>
                                                <br>
                                                <label for="">EDITADA: es aquella que ya ha sido publicada de manera f??sica o virtual</label>
                                                <div class="col-sm-12">
                                                    <span class="label-perfil">Tipo de obra literar??a</span>
                                                    <select class="form-control campo-perfil" name="obra_Litera">
                                                        <option selected value="Null">Seleccione...</option>
                                                        <option value="In??dita">In??dita</option>
                                                        <option value="Editada">Editada</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Obra musical (Reutilizablr) -->
                                        <div id="datos_obra_musical" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <span style="text-align: left;"><b>Obra Musical:</b></span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <span class="label-perfil">Tipo de obra Musical</span>
                                                    <select class="form-control campo-perfil" name="obra_Musical">
                                                        <option selected value="Null">Seleccione...</option>
                                                        <option value="Letra de canci??n">Letra de canci??n</option>
                                                        <option value="Canci??n grabada">Canci??n grabada</option>
                                                        <option value="Partitura">Partitura</option>
                                                        <option value="Otra">Otra</option>
                                                    </select>
                                                    <input type="text" class="form-control campo-perfil" name="tipoMusica" placeholder="Solo responder si es otra...">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Datos del formulario de Registro de Fonograma-->
                                        <div id="obra_artistia" style="display: none;">
                                            <!-- Obra artistica -->
                                            <div id="datos_obra_artistica">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span style="text-align: left;"><b>Obra Art??stica:</b></span>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <span class="label-perfil">Tipo de obra artistica</span>
                                                        <select class="form-control campo-perfil" name="obra_Artistic">
                                                            <option selected value="Null">Seleccione...</option>
                                                            <option value="Arquitectura">Arquitectura</option>
                                                            <option value="Arte aplicado">Arte aplicado</option>
                                                            <option value="Arte digital">Arte digital</option>
                                                            <option value="Coreograf??a">Coreograf??a</option>
                                                            <option value="Croquis">Croquis</option>
                                                            <option value="Dibujo">Dibujo</option>
                                                            <option value="Dram??ticas">Dram??ticas</option>
                                                            <option value="Dram??tico musicales">Dram??tico musicales</option>
                                                            <option value="Esculturas">Esculturas</option>
                                                            <option value="Fotograf??a">Fotograf??a</option>
                                                            <option value="Registro de lema comercial">Grabado</option>
                                                            <option value="Grabado">Instalaci??n</option>
                                                            <option value="Litograf??a">Litograf??a</option>
                                                            <option value="Mapa">Mapa</option>
                                                            <option value="Pantomima">Pantomima</option>
                                                            <option value="Pintura">Pintura</option>
                                                            <option value="Planos">Planos</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <!-- Datos de obra literar??a -->
                                        <div id="obra_literaria">
                                        </div>
                                        <br>
                                        <!-- Datos de solicitante afuera de formus para reutilizar -->
                                        <!-- Documentos   (se reutiliza)-->
                                        <div class="Documentos" id="documentos_solicitan" style="display: none;">
                                            <span style="text-align: left;"><b>Documentos</b></span>
                                            <label class="form-check-label">
                                                Con la solicitud de registro debe aportarse:
                                            </label>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <label for="">??? Si el solicitante no es el autor: el documento de cesi??n de derechos. Si a??n no cuenta con el documento solic??telo a upisennova@sena.edu.co.</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfil">??? Archivo de obra objeto a registro, el archivo debe contener la informaci??n que contiene la obra completa.</span>
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                    <input type="file" name="obra_objecto_regis_soli" class="form-control campo-perfil">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <label for="">??? Carta de declaraci??n derechos de autor. Sin aun no cuenta con el documento solic??telo a uoisennova@sena.edu.co</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfil">??? Si el solicitante va a ser la sociedad xxxxxx, es necesario aportar el certificado de existencia y representaci??n legal.</span>
                                                    <input type="file" name="cert_repre_leg_soli" class="form-control campo-perfil">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <br>
                                        <!-- Consulta del Talento por N??mero de documento -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div><br></div>
                                                        <a type="#" id="agregarTalento" name="" class="btn btn-lg btn-block" style="background-color: #fd7e14; color: white;" onclick="consultaUserDB()">Agregar Talento</a>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label for="" class="form-label">N??mero de documento</label>
                                                        <input type="number" style="padding: 0px; margin: 0px; width: 100%!important;" id="numUser" class="form-control campo-perfil">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin del campo del N??mero de documento -->
                                        <br>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="card">
                                                    <div class='card-header'>
                                                        <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-user"></i>&nbsp;&nbsp;Datos del Talento</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="container-fluid text-right">
                                                            <a onclick="Limpiar()" class="btn" style="background-color: #fd7e14; color: white;">Limpiar Lista</a>
                                                        </div>
                                                        <br>
                                                        <table class="tabala" style="width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre </th>
                                                                    <th>Apellido </th>
                                                                    <th>Documento </th>
                                                                    <th>Correo </th>
                                                                    <th>Aregar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id='tabla-user'>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm text-center">
                                                <input type="hidden" value="" id="DataUsersList" name="DataUsersList">
                                                <button type="submit" name="Derecho_Autor" class="btn btn-lg btn-block" style="background-color: #fd7e14; color: white;">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Salir()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <p>Por favor ingrese los datos del usuairo.</p>
                        <div class="container-fluid">
                            <div class="card deliniar-perfil">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12" id="ResponseMal" style="display: none;">
                                            <div class="alert alert-danger" role="alert">
                                                Atenci??n: A ocurrido un error inesperado, intentelo mas tarde.
                                            </div>
                                        </div>
                                        <div class="col-sm-12" id="ResponseBien" style="display: none;">
                                            <div class="alert alert-success" role="alert">
                                                Atenci??n: Usuario agregado exitosamente.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table" style="overflow: auto;height: 600px;overflow-x: hidden;">
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Nombre: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="nombre" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Apellido: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="apellido" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Tipo de documento: </span>
                                                <select class="form-control campo-perfil" id="tipo_documento" required>
                                                    <option value="0" required>Seleccione</option>
                                                    <?php
                                                    if ($resultOfertas = mysqli_query($link, "SELECT * FROM tipo_documento where activo=1")) {
                                                        //print_r($resultOfertas);die;
                                                        while ($row = $resultOfertas->fetch_assoc()) {
                                                    ?>
                                                            <option value="<?php echo $row['idtipo_documento']; ?>"><?php echo $row['nombre']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">N??mero de documento: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="numeroDoc" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Fecha de nacimiento: </span>
                                                <input type="date" value="" class="form-control campo-perfil" id="fechaNac" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Departamento expedici??n: </span>
                                                <select class="form-control campo-perfil" id="deparExpedi" required>
                                                    <?php
                                                    if ($resultOfertas = mysqli_query($link, "SELECT * FROM departamento")) {
                                                        while ($row = $resultOfertas->fetch_assoc()) {
                                                    ?>
                                                            <option value="<?php echo $row['iddepartamento']; ?>"><?php echo $row['nombre']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Ciudad de expedici??n: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="ciudExpedi" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Correo: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Tel??fono: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="telefono" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">N??mero de celular:</span>
                                                <input type="text" value="" class="form-control campo-perfil" id="celular" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Instituci??n Perteneciente:</span>
                                                <select class="form-control campo-perfil" id="institucion" name="institu" required>
                                                    <option value="0" required>Seleccione</option>
                                                    <?php
                                                    if ($resultOfertas = mysqli_query($link, "SELECT * FROM instituciones")) {
                                                        while ($row = $resultOfertas->fetch_assoc()) {
                                                    ?>
                                                            <option value="<?php echo $row['idinstituciones']; ?>"><?php echo $row['nombre']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Nuevo cont -->
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Usuario Sena: </span>
                                                <select class="form-select campo-perfil" id="UsuarioSena" aria-label="Default select example" required>
                                                    <option value="S??"> S??</option>
                                                    <option value="No"> No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Empresa donde trabaja:</span>
                                                <input type="text" value="" class="form-control campo-perfil" id="empresaTrabajo" placeholder="Solo responder si no es usuario sena" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Lugar de Trabajo:</span>
                                                <input type="text" value="" class="form-control campo-perfil" id="lugarTrabajo" placeholder="Solo responder si no es usuario sena" required>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Tipo de vinculaci??n: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="tipoVinc" placeholder="Solo responder si es usuario sena" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Centro de formaci??n: </span>
                                                <select class="form-control campo-perfil" id="sede" required>
                                                    <option value="0">Seleccione</option>
                                                    <?php
                                                    if ($resultOfertas = mysqli_query($link, "SELECT * FROM centros_formacion")) {
                                                        while ($row = $resultOfertas->fetch_assoc()) {
                                                    ?>
                                                            <option value="<?php echo $row['idcentros_formacion']; ?>"><?php echo $row['nombre']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Grupo sangu??neo: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="grupoSang" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Estrato: </span>
                                                <select class="form-control campo-perfil" id="estrato" required>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Etnias: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="etnias" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Eps: </span>
                                                <input type="text" value="" class="form-control campo-perfil" id="eps" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- onclick="RegistroTalento()" -->
                            <button class="btn btn-lg btn-block" onclick="RegistroTalento()" style="background-color: #fd7e14;color: white;">Agregar Usuario</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Scripts funcionalidades -->
    <script src="../../Recursos/js/Derechos_autor.js"></script>
    <script>
        var UserData;
        var DataUserTalent = new Object();
        var UserObj = [];

        $(document).ready(function() {
            DataResumenProyect();
        });

        function consultaUserDB() {

            var cedula = $('#numUser').val();
            // print_r(cedula);die;
            $.ajax({
                url: "http://localhost/ApiSupiDB/index.php/LoginServ/Consultar/" + cedula
                //url: "http://localhost/ApiSupiKey/index.php/LoginServ/Consultar/" + cedula
            }).then(function(data) {
                if (data != null || data != '' || data != 'undefined') {
                    if (data['response']) {

                        if (UserData == data['response'].idUsuarios) {
                            alert('El usuario ya se ha agregado');
                            return false;
                        }
                        // console.log(data['response']);
                        UserData = data['response'].idUsuarios;
                        var html = "<tr><td colspan='6'><br></td></tr><tr>" +
                            "<td id='CodigoArt'>" + data['response'].nombre + "</td>" +
                            "<td>" + data['response'].apellido + "</td>" +
                            "<td>" + data['response'].documento + "</td>" +
                            "<td>" + data['response'].email + "</td>" +
                            // "<td>" + data['response'].telefono + "</td>" +
                            "<td><a id='agreg" + data['response'].idUsuarios + "' href='#' style='background-color: #fd7e14; color: white;' class='btn' onclick='Agregar(" + data['response'].idUsuarios + ")'>+</a><span id='estado" + data['response'].idUsuarios + "' style='display: none;'><i class='fas fa-check' style='color: green;'></i></span></td>" +
                            "</tr>";
                        "<br/>"
                        $('#tabla-user').append(html);
                        DataArticulacion_pbt();
                    } else {
                        $('#ResponseMal').hide();
                        $('#ResponseBien').hide();
                        $('#PanelDiv').show('12ss');
                        $('#exampleModal').show('12s');
                        $('#numeroDoc').val(cedula);
                        $('#nombre').val('');
                        $('#apellido').val('');
                        $('#tipo_documento').val('');
                        //$('#numeroDoc').val('');
                        $('#fechaNac').val('');
                        $('#deparExpedi').val('');
                        $('#ciudExpedi').val('');
                        $('#email').val('');
                        $('#telefono').val('');
                        $('#celular').val('');
                        $('#institu').val('');
                        $('#UsuarioSena').val('');
                        $('#empresaTrabajo').val('');
                        $('#lugarTrabajo').val('');
                        $('#tipoVinc').val('');
                        $('#sede').val('');
                        $('#grupoSang').val('');
                        $('#estrato').val('');
                        $('#etnias').val('');
                        $('#eps').val('');


                    }
                }
            });
        }

        function Agregar(value) {

            UserObj.push({
                'Id': value
            });

            $('#estado' + value).show();
            $('#agreg' + value).hide();

            $('#DataUsersList').val(JSON.stringify(UserObj));
        }

        function Limpiar() {
            $('#tabla-user').html('');
            UserData = '';
        }

        function DataResumenProyect() {

            var codigo = $('#Numero').val();

            $.ajax({
                url: "http://localhost/ApiSupiKey/index.php/Proyectos/ConsultaProyectosCodProd/" + codigo
            }).then(function(data) {
                if (data != null || data != '' || data != 'undefined') {
                    if (data['response']) {
                        console.log(data['response']);
                        var idTalento = data['response'].id;
                        var html = "<tr>" +
                            "<th>Codigo del proyecto: </th>" +
                            "<th>Nombre del proyecto: </th>" +
                            "</tr>" +
                            "<tr>" +
                            "<td id='CodigoArt'>" + data['response'].codigo_actividad + "</td>" +
                            "<td>" + data['response'].nombre + "</td>" +
                            "</tr>";
                        $('#tabla-data').append(html);
                        DataArticulacion_pbt();
                    } else {
                        console.log(data);
                    }
                }
            });

        }

        function DataArticulacion_pbt() {

            var codigo = $('#CodigoArt').text();

            $.ajax({
                url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consulta_pbt_codigo/" + codigo
            }).then(function(data) {
                if (data != null || data != '' || data != 'undefined') {
                    if (data['response']) {
                        console.log(data['response'].id);

                        var id = data['response'].id;

                        $.ajax({
                            url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_talento_articulacion/" + id
                        }).then(function(data) {
                            if (data != null || data != '' || data != 'undefined') {
                                if (data['response']) {
                                    console.log(data['response']);

                                    var id_talento = data['response'].talento_id;

                                    $.ajax({
                                        url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Usuarios/" + id_talento
                                    }).then(function(data) {
                                        if (data != null || data != '' || data != 'undefined') {
                                            if (data['response']) {
                                                console.log(data['response']);

                                                var id_users = data['response'].user_id;

                                                $.ajax({
                                                    url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Usuarios_x_talentos/" + id_users
                                                }).then(function(data) {
                                                    if (data != null || data != '' || data != 'undefined') {
                                                        if (data['response']) {
                                                            .3
                                                            console.log(data['response']);
                                                            $('#id_User').val(data['response'].id);
                                                            $('#NombreUser').val(data['response'].nombres);
                                                            $('#ApellidoUser').val(data['response'].apellidos);
                                                            $('#CorreoUser').val(data['response'].email);
                                                            $('#TelefonoUser').val(data['response'].telefono);
                                                            $('#NumeroDocUser').val(data['response'].documento);
                                                            $('#DireccionUser').val(data['response'].direccion);
                                                            var tipoDoc = data['response'].tipodocumento_id;
                                                            var TipoDocText;
                                                            // console.log(data['response'].id);
                                                            $.ajax({
                                                                url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Tipo_Documento/" + tipoDoc
                                                            }).then(function(data) {
                                                                if (data != null || data != '' || data != 'undefined') {
                                                                    if (data['response']) {
                                                                        $('#IpoDocUser').val(data['response'].nombre);

                                                                    } else {

                                                                    }
                                                                }
                                                            });

                                                        } else {
                                                            console.log(data);
                                                        }
                                                    }
                                                });

                                                $.ajax({
                                                    url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_empresa_user/" + id_users
                                                }).then(function(data) {
                                                    if (data != null || data != '' || data != 'undefined') {
                                                        if (data['response']) {
                                                            //consola.log('Datos empresa user');
                                                            console.log(data['response']);
                                                            $('#TipoUser').val('Juridico');
                                                            $('#NombreEmpresa').val(data['response'].nombre);
                                                            $('#NitEmprea').val(data['response'].nit);

                                                            // Ocultar o esconder el tipo de documento si es Juridico que lo muestre
                                                            $('#DocumentoJuridico').hide();
                                                            $('#DocumentoNatural').show();
                                                            // 
                                                            $('#DocumentoJuridico2').hide();
                                                            $('#DocumentoNatural2').show();
                                                            // 
                                                            $('#DocumentoJuridico3').hide();
                                                            $('#DocumentoNatural3').show();

                                                            if (data['response'].telefono == '' || data['response'].telefono == null || data['response'].telefono == 'undefined') {
                                                                $('#TelefonoEmpresa').val('N/A');
                                                            } else {
                                                                $('#TelefonoEmpresa').val(data['response'].telefono);
                                                            }

                                                            $('#CorreoEmpresa').val(data['response'].email);
                                                            $('#DireccionEmpresa').val(data['response'].direccion);

                                                            if (data['response'].nombreRepresntante == null || data['response'].nombreRepresntante == '' || data['response'].nombreRepresntante == 'undefined') {
                                                                $('#tr-titulo').hide();
                                                                $('#tr-titulo2').hide();
                                                                $('#tr-titulo3').hide();
                                                                $('#tr-titulo4').hide();

                                                                // Ocultar o esconder el tipo de documento si es Natural que lo muestre
                                                                $('#DocumentoNatural').hide();
                                                                $('#DocumentoJuridico').show();

                                                                // 
                                                                $('#DocumentoNatural2').hide();
                                                                $('#DocumentoJuridico2').show();
                                                                // 
                                                                $('#DocumentoNatural3').hide();
                                                                $('#DocumentoJuridico3').show();
                                                                // 

                                                            }
                                                        } else {
                                                            if (data['error'] == 'Nada') {
                                                                $('#TipoUser').val('Natural');
                                                                $('#DatosEmpresa').hide();

                                                            }

                                                        }
                                                    }
                                                });

                                            } else {
                                                console.log(data);
                                            }
                                        }
                                    });


                                } else {
                                    console.log(data);
                                }
                            }
                        });

                    } else {
                        console.log(data);
                    }
                }
            });

        }

        function Salir() {
            $('#PanelDiv').hide('12ss');
            $('#exampleModal').hide('12s');
        }

        function RegistroTalento() {

            var Nombre = $('#nombre').val();
            var Apellido = $('#apellido').val();
            var TipoDoc = $('#tipo_documento').val();
            var NumDoc = $('#numeroDoc').val();
            var FechasNac = $('#fechaNac').val();
            var DepartExp = $('#deparExpedi').val();
            var CiudadExp = $('#ciudExpedi').val();
            var Email = $('#email').val();
            var Telefono = $('#telefono').val();
            var Celular = $('#celular').val();
            var Institu = $('#institu').val();
            var UsuarioSena = $('#UsuarioSena').val();
            var Empresa = $('#empresaTrabajo').val();
            var Lugar = $('#lugarTrabajo').val();
            var TipoVinc = $('#tipoVinc').val();
            var Sede = $('#sede').val();
            var GrupoSangre = $('#grupoSang').val();
            var Estrato = $('#estrato').val();
            var etnias = $('#etnias').val();
            var eps = $('#eps').val();

            // Inicio de Validaci??n de datos vacidos
            if (Nombre == '') {
                alert('Campo Nombre vacio');
                return false;
            }

            if (Apellido == '') {
                alert('Campo Apellido vacio');
                return false;
            }

            if (TipoDoc == '') {
                alert('Campo Tipo documento vacio');
                return false;
            }

            if (NumDoc == '') {
                alert('Campo N??mero de documento vacio');
                return false;
            }

            if (FechasNac == '') {
                alert('Campo Fecha de nacimiento vacio');
                return false;
            }

            if (DepartExp == '') {
                alert('Campo Departamento de expedicci??n vacio');
                return false;
            }

            if (CiudadExp == '') {
                alert('Campo Ciudad expedici??n vacio');
                return false;
            }

            if (Email == '') {
                alert('Campo Email vacio');
                return false;
            }

            if (Telefono == '') {
                alert('Campo Tel??fono vacio');
                return false;
            }

            if (Celular == '') {
                alert('Campo Celular vacio');
                return false;
            }

            if (Institu == '') {
                alert('Campo Instituci??n vacio');
                return false;
            }

            if (UsuarioSena == '') {
                alert('Campo Usuario sena vacio');
                return false;
            }

            if (Empresa == '') {
                alert('Campo Empresa vacio');
                return false;
            }

            if (Lugar == '') {
                alert('Campo Lugar vacio');
                return false;
            }

            if (TipoVinc == '') {
                alert('Campo Tipo vinculaci??n vacio');
            }

            if (Lugar == '') {
                alert('Campo Lugar vacio');
                return false;
            }

            if (Sede == '') {
                alert('Campo Sede vacio');
                return false;
            }

            if (GrupoSangre == '') {
                alert('Campo Grupo sanguineo vacio');
                return false;
            }

            if (Estrato == '') {
                alert('Campo Estrato vacio');
                return false;
            }

            if (etnias == '') {
                alert('Campo Etnias vacio');
                return false;
            }

            if (eps == '') {
                alert('Campo Eps vacio');
                return false;
            }

            DataUserTalent = {
                'Nombre': Nombre,
                'Apellido': Apellido,
                'TipoDoc': TipoDoc,
                'NumDoc': NumDoc,
                'FechasNac': FechasNac,
                'DepartExp': DepartExp,
                'CiudadExp': CiudadExp,
                'Email': Email,
                'Telefono': Telefono,
                'Celular': Celular,
                'Institu': Institu,
                'UsuarioSena': UsuarioSena,
                'Empresa': Empresa,
                'Lugar': Lugar,
                'TipoVinc': TipoVinc,
                'Sede': Sede,
                'GrupoSangre': GrupoSangre,
                'Estrato': Estrato,
                'etnias': etnias,
                'eps': eps,
            };
            $.ajax({
                url: "http://localhost/ApiSupiDB/index.php/Usuarios/guardar/?nombre=" + DataUserTalent['Nombre'] + "&apellido=" + DataUserTalent['Apellido'] + "&fecha_nacimiento=" + DataUserTalent['FechasNac'] + "&depExpedicion=" + DataUserTalent['DepartExp'] + "&ciudadExpe=" + DataUserTalent['CiudadExp'] + "&telefono=" + DataUserTalent['Telefono'] + "&email=" + DataUserTalent['Email'] + "&celular=" + DataUserTalent['Celular'] + "&UsuarioSena=" + DataUserTalent['UsuarioSena'] + "&empresaTrabajo=" + DataUserTalent['Empresa'] + "&lugarTrabajo=" + DataUserTalent['Lugar'] + "&tipoVinc=" + DataUserTalent['TipoVinc'] + "&centroForm=" + DataUserTalent['Sede'] + "&grupoSang=" + DataUserTalent['GrupoSangre'] + "&estrato=" + DataUserTalent['Estrato'] + "&etnias=" + DataUserTalent['etnias'] + "&eps=" + DataUserTalent['eps'] + "&clave='123456'&tipo_documento=" + DataUserTalent['TipoDoc'] + "&documento=" + DataUserTalent['NumDoc'] + "&nivel_academico='Generico'&ciudad_recidencia='Bogota'&departamento='N/A'&institucion_perteneciente=" + DataUserTalent['Institu'] + "&nit=123456&sede='N/A'&Rol_idRol=2"
                //url: "http://localhost/ApiSupiKey/index.php/LoginServ/Consultar/" + cedula
            }).then(function(data) {
                // console.log(NumDoc);
                if (data != null || data != '' || data != 'undefined') {
                    $('#ResponseBien').show();
                } else {
                    $('#ResponseMal').show();
                }
            });

        }
    </script>
</body>

</html>