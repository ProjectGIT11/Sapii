<html>
<!-- Headers -->
<?php
session_start();
if(!isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    header('Location: ../formulario/sesion.php');
}
include_once '../../Vista/HeadersPerfil.php';
include_once '../../Modelo/Conexion.php';
 //Se valida que el usuario este logeado
//include_once '../../Controladores/Transaccional/Sesion.php';

$id_perfil = $_SESSION['id'];
//$perfil_sol=$_SESSION['SESS_MEMBER_ID_TECNO'];

?>

<body>
<img src="../../Recursos/De/LOGOS_SENNOVA_SENA.png" style="position: absolute;  margin-left: 80%; width:300px ; height:100px ; z-index: 10;" class="float-end"alt="">
    <div class="box">
        <div class="row content">
        <?php include 'Nuevomenu.php'; ?>
            <div class="col-8 text-center" Style="margin-left:30%;margin-right:10%;">
                <div class="row">
                    <div class="col">
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-left">
                        <h1 class="texto-titulo-perfil" style="margin-left: 20%; margin-bottom:-45px;">MI PERFIL</h1>
                    </div>
                </div>
                <br>
                <br>
                <?php
                //Consulta de datos de usuario
                if ($resultOfertas = mysqli_query($link, "SELECT * FROM datos WHERE id=$id_perfil")) {
                    //print_r($resultOfertas);die;
                    while ($row = $resultOfertas->fetch_assoc()) {
                        // print_r($row);
                ?>

                        <div class="row">
                            <div class="col" style="  border: none;">
                                <div class="card deliniar-perfil" style="  border: none;">
                                    <div class="card-body perfill" style="  border: none;">
                                        <form>
                                            <div class="table">
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Nombre de Usuario:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['username']; ?>" class="form-control campo-perfil" readonly name="nombre">
                                                    </div>
                                                </div>
                                                <!-- <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Tipo de documento:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['tipo_documento'] == 1) {
                                                            $tipo = "Tarjeta de Identidad";
                                                        } else if ($row['tipo_documento'] == 2) {
                                                            $tipo = "Cedula Ciudadania";
                                                        } else if ($row['tipo_documento'] == 3) {
                                                            $tipo = "Cedula Extranjeria";
                                                        } else if ($row['tipo_documento'] == 2) {
                                                            $tipo = "Pasaporte";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $tipo; ?>" class="form-control campo-perfil" readonly name="tipo">
                                                    </div>
                                                </div> -->
                                                <!-- <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Documento:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['documento']; ?>" class="form-control campo-perfil" readonly name="documento">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Teléfono:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['telefono']; ?>" class="form-control campo-perfil" readonly name="telefono">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Celular:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['celular']; ?>" class="form-control campo-perfil" readonly name="celular">
                                                    </div>
                                                </div> -->
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">E-mail:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['email']; ?>" class="form-control campo-perfil" readonly name="email">
                                                    </div>
                                                </div>
                                                <!-- <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Departamento:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['departamento'] == 1) {
                                                            $depart = "Cundinamarca";
                                                        } else if ($row['departamento'] == 0) {
                                                            $depart = 'N/A';
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $depart; ?>" class="form-control campo-perfil" readonly name="depart">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Ciudad:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['ciudad_recidencia'] == 1) {
                                                            $ciudad = "Bogotá";
                                                        }
                                                        if ($row['ciudad_recidencia'] == 0) {
                                                            $ciudad = "N/A";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $ciudad; ?>" class="form-control campo-perfil" readonly name="ciudad">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Fecha de nacimiento:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['fecha_nacimiento']; ?>" class="form-control campo-perfil" readonly name="fecha_ini">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Nivel académico:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['nivel_academico'] == 1) {
                                                            $academic = "Tecnologico";
                                                        } else if ($row['nivel_academico'] == 0) {
                                                            $academic = "N/A";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $academic; ?>" class="form-control campo-perfil" readonly name="acadec">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Institución perteneciente:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['institucion_perteneciente'] == 1) {
                                                            $institu = "SENA";
                                                        } else if ($row['institucion_perteneciente'] == 0) {
                                                            $institu = "N/A";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $institu; ?>" class="form-control campo-perfil" readonly name="intitu">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Sede:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['sede'] == 2) {
                                                            $sede = "CIDE";
                                                        } else if ($row['sede'] == 0) {
                                                            $sede = "N/A";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $sede; ?>" class="form-control campo-perfil" readonly name="sede">
                                                    </div>
                                                </div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-header" style="  border: none;">
                                        <h1 class="texto-titulo-perfil" style="margin-left:-20%;font-size: 40px;">CREDENCIALES DE ACCESO</h1>
                                    </div>
                                    <div class="card-body" style="  border: none;">
                                        <form> -->
                                            <!-- <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Usuario:</span>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" value="<?php echo $row['documento']; ?>" class="form-control campo-perfil" name="user">
                                                </div>
                                            </div>--> 
                                            <!-- <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Contraseña:</span>
                                                </div>
                                                <div class="col-6 text-left">
                                                    <input type="submit" value="Cambiar Contraseña" class="btn btn-warning" style="background-color: #fc7323; border-color: transparent;color: white;" />
                                                    <input type="text" value="<?php echo $row['passsword']; ?>" class="form-control campo-perfil"  name="documento">
                                                </div>
                                            </div>  -->
                                    <!-- </div>
                                    </form> -->
                                </div>
                            </div>
                        </div>
            </div>
    <?php
                    }
                }
    ?>
        </div>
    </div>
         
</body>

</html>