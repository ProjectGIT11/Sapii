<?php
require_once "config.php";

// Define variables and initialize with empty values
$nombre_completo_err = $email_err = $centro_err = $rol_sennova_err = $vinculacion_err =
 $genero_err = $documento_err = $datos_id_rol_err = $password_err = "";
$nombre_completo = $email = $centro = $rol_sennova = $vinculacion = $genero = $documento = $datos_id_rol = $password = "";

// Processing input data when form is submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre_completo"])) {
    $nombre_completo_err = "This field is required*";
  } else {
    $nombre_completo = trim($_POST["nombre_completo"]);
    if (($nombre_completo)) {
    }
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
    $datos_id_rol_err = "This field is required*";
  } else {
    $datos_id_rol = trim($_POST["datos_id_rol"]);
  }
  if (empty($_POST["password"])) {
    $password_err = "This field is required*";
  } else {
    $password = trim($_POST["password"]);
  }

  // Check input errors before inserting data into database
  if (empty($nombre_completo_err) && empty($email_err) && empty($centro_err) && empty($rol_sennova_err) 
  && empty($vinculacion_err) && empty($genero_err) && empty($documento_err) && empty($datos_id_rol_err)
  && empty($password_err)) {
 
    // Prepare an insert statement
    $sql = "INSERT INTO cargos1 (nombre_completo, email, centro, rol_sennova, vinculacion, genero, documento, datos_id_rol, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $sql)) {

      // Bind variables to a prepared statement as parameters
    $a = mysqli_stmt_bind_param($stmt, "ssssssiis", $nombre_completo, $email, $centro, $rol_sennova, $vinculacion, $genero, $documento, $rol, $password);

      // Execute the statement
      if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Aceptar')</script>";
        echo "<script>window.location.href='http://localhost/sapi/PlataformaUpi/Admin/CRUD2/';</script>";
        exit;
      } else {
        echo "Oops! Something went wrong. Please try again later";
      }
    }
    // Close statement
    mysqli_stmt_close($stmt);
  }
  // Close connection
  mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD ROL2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- custom css -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center pt-5">
      <div class="col-lg-6">
        <!-- form start -->
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="bg-light p-4 shadow-sm" novalidate>
          <div class="row">
            <div class="col-lg-6 mb-3">
              <label for="nombre_completo" class="form-label">nombre_completos completos</label>
              <input type="text" name="nombre_completo" class="form-control" id="email" value="<?= $nombre_completo; ?>">
              <small class="text-danger"><?= $nombre_completo_err; ?></small>
            </div>
<!-- nombre_completo, email, centro, rol_sennova, vinculacion, genero, documento, rol, password -->
            <div class="col-lg-6 mb-3">
              <label for="email" class="form-label">Correo</label>
              <input type="email" name="email" class="form-control" id="email" value="<?= $email; ?>">
              <small class="text-danger"><?= $email_err; ?></small>
            </div>

            <div class="col-lg-12 mb-3">
              <label for="centro" class="form-label">Centro</label>
              <input type="text" name="centro" class="form-control" id="centro" value="<?= $centro; ?>">
              <small class="text-danger"><?= $centro_err; ?></small>
            </div>
<!-- nombre_completo, email, centro, rol_sennova, vinculacion, genero, documento, rol, state -->
<div class="col-lg-6 mb-3">
              <label for="vinculacion" class="form-label">vinculacion</label>
              <select  class="form-control" id="vinculacion" name="vinculacion" value="<?= $vinculacion; ?>">
                <option value="Contratista">Contratista</option>
                <option value="Funcionario">Funcionario</option>
              </select>
              <small class="text-danger"><?= $vinculacion_err; ?></small>
            </div>

            <div class="col-lg-6 mb-3">
              <label for="genero" class="form-label">genero</label>
              <select  class="form-control" id="genero" name="genero" value="<?= $genero; ?>">
                <option value="Contratista">Masculino</option>
                <option value="Funcionario">Femenino</option>
              </select>
              <small class="text-danger"><?= $genero_err; ?></small>
            </div>

            
    <div class="col-lg-6 mb-3">
    <label for="rol_sennova" class="form-label">rol_sennova</label>
    <select  class="form-control" id="rol_sennova" name="rol_sennova" value="<?= $rol_sennova; ?>">
    <option value="Articulador">Articulador</option>
    <option value="Dinamizador-Extensionismo">Dinamizador-Extensionismo</option>
    <option value="Dinamizador-Tecnoacademia">Dinamizador-Tecnoacademia</option>

    <option value="Lider de Investigación">Lider de Investigación</option>
    <option value="Orientador Junior">Orientador Junior</option>
    <option value="Orientador Senior">Orientador Senior</option>


    </select>
    <small class="text-danger"><?= $rol_sennova_err; ?></small>
    </div>

            <div class="col-lg-6 mb-3">
              <label for="documento" class="form-label">documento</label>
              <input type="text" name="documento" class="form-control" id="documento" value="<?= $documento; ?>">
              <small class="text-danger"><?= $documento_err; ?></small>
            </div>

            <div class="col-lg-6 mb-3">
              <label for="rol" class="form-label">rol</label>
              <select  class="form-control" id="rol" name="rol" value="<?= $rol; ?>">
                <option value="1">1</option>
                <option value="2">2</option>
              </select>
              <small class="text-danger"><?= $rol_err; ?></small>
            </div>


            </div>
            <div class="col-lg-6 mb-3">
              <label for="contraseña" class="form-label">Contraseña</label>
              <input type="password" name="password" class="form-control" id="password" value="<?= $password; ?>">
              <small class="text-danger"><?= $password_err; ?></small>
            </div>

            <div class="col-lg-12 mt-1">
              <input type="submit" class="btn btn-primary form-control" value="Create Record">
            </div>
          </div>
        </form>
        <!-- form end -->
      </div>
    </div>
  </div>
</body>

</html>