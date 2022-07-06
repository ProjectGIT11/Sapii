<?php
include "config.php";

function generateRandomString($length = 10)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}


 generateRandomString();

// Define variables and initialize with empty values
$nombre_completo_err = $email_err = $centro_err = $rol_sennova_err = $vinculacion_err =
  $genero_err = $documento_err = $datos_id_rol_err = $password_err = "";
$nombre_completo = $email = $centro = $rol_sennova = $vinculacion = $genero = $documento = $datos_id_rol = $password = "";

// Process update operation when form is submit
if (isset($_POST["id"]) && !empty($_POST["id"])) {
  // Get post id
  $id = $_POST["id"];

  if (empty($_POST["nombre_completo"])) {
    $nombre_completo_err = "This field is required*";
  } else {
    $nombre_completo = trim($_POST["nombre_completo"]);
  }

  if (empty($_POST["email"])) {
    $email_err = "This field is required*";
  } else {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Please enter a valid email address";
    }
  }

  if (empty($_POST["centro"])) {
    $centro_err = "This field is required*";
  } else {
    $centro = trim($_POST["centro"]);
  }

  if (empty($_POST["rol_sennova"])) {
    $rol_sennova_err = "This field is required*";
  } else {
    $rol_sennova = trim($_POST["rol_sennova"]);
  }

  if (empty($_POST["vinculacion"])) {
    $vinculacion_err = "This field is required*";
  } else {
    $vinculacion = trim($_POST["vinculacion"]);
  }

  if (empty($_POST["genero"])) {
    $genero_err = "This field is required*";
  } else {
    $genero = trim($_POST["genero"]);
  }

  if (empty($_POST["documento"])) {
    $state_err = "This field is required*";
  } else {
    $state = trim($_POST["documento"]);
  }
  if (empty($_POST["datos_id_rol"])) {
    $rol_err = "This field is required*";
  } else {
    $rol = trim($_POST["datos_id_rol"]);
  }
  if (empty($_POST["password"])) {
    $password_err = "This field is required*";
  } else {
    $password = trim($_POST["password"]);
  }

  // Check input errors before updating record
  if (
    empty($nombre_completo_err) && empty($email_err) && empty($centro_err) && empty($rol_sennova_err)
    && empty($vinculacion_err) && empty($genero_err) && empty($documento_err) && empty($rol_err)
    && empty($password_err)
  ) {

    // Prepare a update statement
    $sql = "UPDATE cargos1 SET nombre_completo = ?, email = ?, centro = ?, rol_sennova = ?, vinculacion = ?, genero = ?, documento = ?, datos_id_rol = ?, password = ? WHERE id = ? ";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssssssss", $nombre_completo, $email, $centro, $rol_sennova, $vinculacion, $genero, $documento, $datos_id_rol, $password, $id);

      // Execute the statement
      if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Updated successfully');</script>";
        echo "<script>window.location.href='http://localhost/sapi/PlataformaUpi/Admin/CRUD2/';</script>";
        exit;
      } else {
        echo "Oops, Something went wrong. Please try again later.";
      }
    }
    // Close statement
    mysqli_stmt_close($stmt);
  }
  // Close connection
  mysqli_close($link);
} else {
  // Check if url contains id parameter
  if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Get id from url
    $id = trim($_GET["id"]);

    // Prepare a select statement
    $sql = "SELECT * FROM cargos1 WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variable to a statement as parameter
      mysqli_stmt_bind_param($stmt, "i", $id);

      // Execute the statement
      if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
          // Fetch the record
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          // Retrieve individual field value
          $nombre_completo = $row["nombre_completo"];
          $email = $row["email"];
          $centro = $row["centro"];
          $rol_sennova = $row["rol_sennova"];
          $vinculacion = $row["vinculacion"];
          $genero = $row["genero"];
          $documento = $row["documento"];
          $datos_id_rol = $row["datos_id_rol"];
          $password = $row["password"]; /* generateRandomString() */
          /* $row["password"] */
        } else {
          // Redirect id url doesn't contain valid id parameter
          echo "<script>window.location.href='http://localhost/sapi/mutanyte/PHP/';</script>";
          exit;
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
    }
    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
  } else {
    // Redirect if url doesn't contain id parameter
    echo "<script>window.location.href='http://localhost/sapi/mutanyte/PHP/';</script>";
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data - PHP CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- custom css -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center pt-5">
      <div class="col-lg-6">
        <!-- form start -->
        <form action="<?= htmlspecialchars(basename($_SERVER["REQUEST_URI"])); ?>" method="post" class="bg-light p-4 shadow-sm" novalidate>
          <div class="row">
            <div class="col-lg-6 mb-3">
              <label for="nombre_completo" class="form-label">nombre_completos Completos</label>
              <input type="text" name="nombre_completo" class="form-control" id="nombre_completo" value="<?= $nombre_completo; ?>">
              <small class="text-danger"><?= $nombre_completo_err; ?></small>
            </div>

            <div class="col-lg-6 mb-3">
              <label for="email" class="form-label">Correo</label>
              <input type="text" name="email" class="form-control" id="email" value="<?= $email; ?>">
              <small class="text-danger"><?= $email_err; ?></small>
            </div>

            <div class="col-lg-12 mb-3">
              <label for="centro" class="form-label">Centro</label>
              <input type="text" name="centro" class="form-control" id="centro" value="<?= $centro; ?>">
              <small class="text-danger"><?= $centro_err; ?></small>
            </div>
            <!-- nombre_completo, email, centro, rol_sennova, vinculacion, genero, documento, rol, -->
            <div class="col-lg-12 mb-3">
              <label for="rol_sennova" class="form-label">rol_sennova</label>
              <input type="text" name="rol_sennova" class="form-control" id="rol_sennova" value="<?= $rol_sennova; ?>">
              <small class="text-danger"><?= $rol_sennova_err; ?></small>
            </div>

            <div class="col-lg-12 mb-3">
              <label for="vinculacion" class="form-label">Vinculacion</label>
              <input type="text" name="vinculacion" class="form-control" id="vinculacion" value="<?= $vinculacion; ?>">
              <small class="text-danger"><?= $vinculacion_err; ?></small>
            </div>

            <div class="col-lg-12 mb-3">
              <label for="genero" class="form-label">genero</label>
              <input type="text" name="genero" class="form-control" id="genero" value="<?= $genero; ?>">
              <small class="text-danger"><?= $genero_err; ?></small>
            </div>

            <div class="col-lg-6 mb-3">
              <label for="documento" class="form-label">documento</label>
              <input type="text" name="documento" class="form-control" id="documento" value="<?= $documento; ?>">
              <small class="text-danger"><?= $documento_err; ?></small>
            </div>
            <div class="col-lg-12 mb-3">
              <label for="datos_id_rol" class="form-label">datos_id_rol</label>
              <input type="text" name="datos_id_rol" class="form-contdatos_id_rol" id="datos_id_rol" value="<?= $datos_id_rol; ?>">
              <small class="text-danger"><?= $datos_id_rol_err; ?></small>
            </div>
            </div>
            <div class="col-lg-6 mb-3">
              <label for="password" class="form-label">password</label>
              <input type="text" name="password" class="form-control" id="password" value="<?= $password; ?>">
              <small class="text-danger"><?= $password_err; ?></small>
            </div>

            <div class="col-lg-12 mt-1">
              <input type="hidden" name="id" class="form-control" value="<?= $id; ?>">
              <input type="submit" class="btn btn-secondary btn-block w-100" value="Update Record">
            </div>
          </div>
        </form>
        <!-- form end -->
      </div>
    </div>
  </div>
</body>

</html>