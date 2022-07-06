<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP CRUD Application</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- custom css -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../Recursos/css.scss">


</head>

<body>
  <!-- Menu -->
  <?php
/*   require_once "../Side_Menu/menuBootst.php"; */
  ?>
  <!-- Termina menu -->
    <!-- TOP -->
    <?php /* include "../Side_Menu/Top_Navigation.php"; */ ?>
  <!-- TOP -->
  <!-- Estilos del menu -->
  <?php /* include "../vistas/Headers_admin.php";  */?>
  <!-- Termina estilo del menu -->
  <!-- Comienza el menu -->
  <?php /* include ("../Side_Menu/menuCrud.php"); */ ?>
  <!-- Termina el estilo del menu -->
  <div class="container">
    <div class="row"></div>
    <a href="create.php" class="btn btn-secondary my-4">
      <i class="bi bi-plus-circle"></i> Crear Usuario
    </a>
    <a href="../index.php" class="btn btn-primary my-4">
      <i class="bi bi-chevron-double-left"></i> Volver
    </a>






    <table class="table table-bordered table-striped align-middle">
      <thead>
        <tr>
          <th>#</th>
          <th>Documento</th>
          <th>nombre_completos completos</th>
          <th>Correo Electronico</th>
          <th>Centro</th>
          <th>Rol SENNOVA</th>
          <th>vinculación</th>
          <th>Genero</th>
          <th>Rol</th>
          <th>Contraseña</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <?php
        // Include config file
        require_once "config.php";
        $orderby = " ORDER BY id desc";
        $sql = "SELECT * FROM cargos1 WHERE datos_id_rol = 3 LIMIT 10"; /* Se edita --------------->>>>>>>>>>>>>>>> */

        if ($result = mysqli_query($link, $sql)) {
          if (mysqli_num_rows($result) > 0) {
            // Fetch the records
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $count = 1;
            foreach ($rows as $row) { ?>
              <tr>
                <td><?= $count++; ?>.</td>
                <!-- nombre_completo, email, centro, rol_sennova, vinculacion, genero, documento, rol, -->
                <td><?= ucwords($row["documento"]); ?></td>
                <td><?= ucfirst($row["nombre_completo"]); ?></td> 
                <td><?= ($row["email"]); ?></td>
                <td><?= $row["centro"]; ?></td>
                <td><?= strtoupper($row["rol_sennova"]); ?></td>
                <td><?= $row["vinculacion"]; ?></td>
                <td><?= ucfirst($row["genero"]); ?></td>
                <td><?= ucwords($row["datos_id_rol"]); ?></td>
                <td><?= ucwords($row["password"]); ?></td>
                <td>
                  <a href="read.php?id=<?= $row["id"]; ?>" class="btn btn-info btn-sm">
                    <i class="bi bi-eye-fill"></i>
                  </a>&nbsp;
                  <a href="update.php?id=<?= $row["id"]; ?>" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil-square"></i>
                  </a>&nbsp;
                  <a href="delete.php?id=<?= $row["id"]; ?>" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i>
                  </a>
                </td>
              </tr>
            <?php
            }
          } else { ?>
            <tr>
              <td class="text-center text-danger fw-bold" colspan="9">* No Record Found *</td>
            </tr>
        <?php
          }
        } else {
          echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
        }
        // Close conection 
        mysqli_close($link);
        ?>
      </tbody>
    </table>
  </div>
      </div>

  <!-- custom js -->
  <script>
    const delBtnEl = document.querySelectorAll(".btn-danger");
    delBtnEl.forEach(function(delBtn) {
      delBtn.addEventListener("click", function(event) {
        const message = confirm("Are you sure you want to delete this record?");
        if (message == false) {
          event.preventDefault();
        }
      });
    });
  </script>
  <script>
  (function(){
  $('#msbo').on('click', function(){
    $('body').toggleClass('msb-x');
  });
}());
</script>
</body>
</html>