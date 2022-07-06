<?php
include_once "modelo/database.php";
include "vistas/Headers_admin.php";

session_start();
if (!isset($_SESSION['SESS_MEMBER_ID'])) {
    header('Location:../Login_Admin.php');
    // echo "No puedes ingresar";
}
$id_user = $_SESSION['SESS_MEMBER_ID'];
?>

<!DOCTYPE html>
<html lang="en">

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php include "Side_Menu/side_Menu.php"; ?>

            <!-- top navigation -->
            <?php include "Side_Menu/Top_Navigation.php" ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="dashboard_graph">
                            <div class="row x_title">
                                <div class="col-md-12 col-sm-12">
                                    <h3 class="text-center">ADMINISTRACIÓN DE CONTENIDO </h3>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <br />
                <!-- Contenido Principal -->
                <div class="row">
                    <div class="col-md col-sm-8"></div>
                    <div class="col-md-10 col-sm-8">
                        <form class="form_horizontal" method="POST" action="controladores/laUpi/crear.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="titulo" class="form-label">Titulo</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="parrafo" class="form-label">Parrafo</label>
                                    <input type="text" class="form-control" id="parrafo" name="parrafo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="boton1" class="form-label">Boton 1</label>
                                    <input type="text" class="form-control" id="boton1" aria-describedby="boton1" name="boton1">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="boton2" class="form-label">Boton 2</label>
                                    <input type="text" class="form-control" id="boton2" name="boton2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="boton3" class="form-label">Boton 3</label>
                                    <input type="text" class="form-control" id="boton3" name="boton3">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="boton4" class="form-label">Boton 4</label>
                                    <input type="text" class="form-control" id="boton4" aria-describedby="boton4" name="boton4">
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">IMAGEN FONDO:</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupFileAddon01">
                                                        <img src="<?php echo "controladores/Menu_Navegacion/Image/" . $row_Edit_M['imagenFondo']; ?>" style="width: 20px; border-radius:35px;">
                                                    </span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" accept="image/*" name="image_Fon">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="regisUpi" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                    <div class="col-md col-sm-8"></div>
                </div>
            </div>
        </div>
        <!-- Fin Contenido Principal -->
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            © 2021 Copyright:<a href="#">Sennova</a> | Gentelella - Bootstrap Admin Template
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>
    <?php include "production/js/admin/admin.php" ?>
</body>

</html>