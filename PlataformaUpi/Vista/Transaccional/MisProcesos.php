<html>
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../Transaccional/css/pienav.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../../formulario/datatables/datatables.min.css">
<?php
/* session_start();
if(!isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    header('Location: ../formulario/sesion.php');
} */
//sinclude_once '../../Vista/HeaderProcessos.php';
//include_once './../../Modelo/Conexion.php';

// Se valida que el usuario este logeado
//include_once '../../Controladores/Transaccional/Sesion.php';

//$id_perfil = $_SESSION['SESS_MEMBER_ID_PERFIL'];

//$result = $_SESSION['nombresc'];

// Se trae la consulta para la páginación y los procesos asociados al usuario


$conexion=mysqli_connect('localhost','root','','supi');
	$misproy = "misproyectos";
    $with_any_one_of = "";


    $queryCondition = "";
	if(!empty($_POST["search"])) {
		
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("with_any_one_of");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "with_any_one_of":
						$with_any_one_of = $v;
						for($i=0;$i<$wordsCount;$i++) {
							if(!empty($_POST["search"]["search_in"])) {
								$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $wordsAry[$i] . "%'";
							} else {
								$queryCondition .= "titulo LIKE '" . $wordsAry[$i] . "%' OR descripcion LIKE '" . $wordsAry[$i] . "%'";
							}
							if($i!=$wordsCount-1) {
								$queryCondition .= " OR ";
							}
						}
						break;
					case "with_the_exact_of":
						$with_the_exact_of = $v;
						if(!empty($_POST["search"]["search_in"])) {
							$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $v . "%'";
						} else {
							$queryCondition .= "titulo LIKE '%" . $v . "%' OR descripcion LIKE '%" . $v . "%'";
						}
						break;
					case "without":
						$without = $v;
						if(!empty($_POST["search"]["search_in"])) {
							$queryCondition .= $_POST["search"]["search_in"] . " NOT LIKE '%" . $v . "%'";
						} else {
							$queryCondition .= "titulo NOT LIKE '%" . $v . "%' AND descripcion NOT LIKE '%" . $v . "%'";
						}
						break;
					case "starts_with":
						$starts_with = $v;
						if(!empty($_POST["search"]["search_in"])) {
							$queryCondition .= $_POST["search"]["search_in"] . " LIKE '" . $v . "%'";
						} else {
							$queryCondition .= "titulo LIKE '" . $v . "%' OR descripcion LIKE '" . $v . "%'";
						}
						break;
					case "search_in":
						$search_in = $_POST["search"]["search_in"];
						break;
				}
			}
		}
	}
    $orderby = " ORDER BY id desc"; 
	$sql = "SELECT * FROM misproyectos " . $queryCondition;
	$result = mysqli_query($conexion,$sql);
?>
</head>
<body>

<img src="../../Recursos/De/LOGOS_SENNOVA_SENA.png" style="position: absolute;  margin-left: 80%; width:300px ; height:100px ;" class="float-end"alt="">
<div class="box">
            <div class="row content">
			<?php include 'Nuevomenu.php'; ?>
                <div class="col-8 text-center" Style="margin-left:20%;margin-right:10%;">
                    <div class="row">
                        <div class="col">
                            <br><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-left" style="margin:0px 150px 0px 15px;">
                            <h2 style="font-size:40px;" class="texto-titulo-perfil">MIS SOLICITUDES</h2>
                        </div>
                    </div>
                    <?php

?>
                               <!-- Barra de Busqueda -->
                               <nav class="navbar navbar-light bg-light">
                                    <div class="container-fluid">
                                        <a class="navbar-brand"></a>
                                        <form class="d-flex" name="form1" method="post">
                                
                                            <input type="text" name="search[with_any_one_of]"  class="form-control" value="<?php echo $with_any_one_of; ?>"	/>
                                            <input type="submit" name="busqueda" class="btn btn-" style="background:#000 , color#fff; " value="Buscar">
                                        </form>
    
                                        <?php 
			if (isset($_POST["busqueda"])){
				
			$number=0;
			while($row = mysqli_fetch_assoc($result)) { $number++;?>
			<div>
				<div><strong><?php echo $number;?>. <?php echo $row["cedula"]; ?></strong></div>
				<div class="verde"><strong><?php echo $row["nombresc"]; ?></strong></div>
				<div class="resultado_descripcion"><strong><?php echo $row["email"]; ?></strong></div>
				<div><strong><?php echo $number;?>. <?php echo $row["telefono"]; ?></strong></div>
				<div class="verde"><strong><?php echo $row["proyecto"]; ?></strong></div>
			</div>
			<?php } ?>
             <?php
$total = mysqli_num_rows($result);
if($total==0){
    echo 'No hay resultados encontrados';
}else{
    echo '<hr><b>Hay un total de '.$total.' resultados en su busqueda</b>';
}
			?>           
            <?php }else{
				echo"<div><strong>Ingrese la palabra clave a buscar.</strong></div>";
				} ?>
<br>

	<table style="border: solid #fc7323 2.0px;" >
		<tr>
	<td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px;  font-weight: 500;" >Cedula</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Nombre</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Email</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Telefono</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Proyecto</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Estado</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Fecha_Registro</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Dowload</td>
		</tr>

		<?php 
		$sql="SELECT * from misproyectos order By id desc";
		$result=mysqli_query($conexion,$sql);

		while($consulta=mysqli_fetch_array($result)){
		 ?>

		<tr>
		<td style="border: solid #fc7323 1.0px;"><?php echo $consulta['cedula']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;"><?php echo $consulta['nombresc']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['email']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['telefono']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['proyecto']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['estado']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php echo $consulta['fecha_reg']?></td>
    <td style="border: solid #fc7323 1.0px; padding:5px 5px "><form action="../formulario/excel.php" method="POST">
<button class="btn btn-outline" style=" color:#fff; border: none;margin-left:25px; " name="export"><img src="../../Recursos/De/sobresalir.png" alt="" style=" width: 40px; height: 40px;"></button>
<button class="btn btn-outline" style="  border: none;margin-left:20px;  " name="export"><img src="../../Recursos/De/pdf.png" alt="" style=" width: 45px; height: 45px;"></button></form></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
    </div>
                    </div>
					</div>
        
                    </div>
<!--Usar datatables-->
<script src="../../formulario/datatables/datatables.min.js" type="text/javascript"></script>


<script src="../../formulario/datatables/Buttons-2.2.3/js/dataTables.buttons.min.js" ></script>
<script src="../../formulario/datatables/JSZip-2.5.0/jszip.min.js" ></script>
<script src="../../formulario/datatables/pdfmake-0.1.36/pdfmake.min.js" ></script>
<script src="../../formulario/datatables/pdfmake-0.1.36/vfs_fontsjs" ></script>
<script src="../../formulario/datatables/Buttons-2.2.3/js/buttons.html5.min.js" ></script>



<script>
		/*function VerOcultarBusquedaAvanzada() {
			if(document.getElementById("advanced-search-box").style.display=="none") {
				document.getElementById("advanced-search-box").style.display = "block";
				document.getElementById("advance_search_submit").value= "1";
			} else {
				document.getElementById("advanced-search-box").style.display = "none";
				document.getElementById("with_the_exact_of").value= "";
				document.getElementById("without").value= "";
				document.getElementById("starts_with").value= "";
				document.getElementById("search_in").value= "";
				document.getElementById("advance_search_submit").value= "";
			}
		}*/
	</script>
<script src="../../formulario/"></script>
</body>

</html>



































































































































































































































<!--<html>
<head>
     CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../Transaccional/css/pienav.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../../formulario/datatables/datatables.min.css">
<?php
session_start();
//sinclude_once '../../Vista/HeaderProcessos.php';
//include_once './../../Modelo/Conexion.php';

// Se valida que el usuario este logeado
//include_once '../../Controladores/Transaccional/Sesion.php';

//$id_perfil = $_SESSION['SESS_MEMBER_ID_PERFIL'];

//$result = $_SESSION['nombresc'];

// Se trae la consulta para la páginación y los procesos asociados al usuario


//$conexion=mysqli_connect('localhost','root','','supi');
	//$misproy = "misproyectos";
?>
</head>
<body>

<img src="../../Recursos/De/LOGOS_SENNOVA_SENA.png" style="position: absolute;  margin-left: 80%; width:300px ; height:100px ;" class="float-end"alt="">
<div class="box">
            <div class="row content">
			<?php //include 'Nuevomenu.php'; ?>
                <div class="col-8 text-center" Style="margin-left:20%;margin-right:10%;">
                    <div class="row">
                        <div class="col">
                            <br><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-left" style="margin:0px 150px 0px 15px;">
                            <h2 style="font-size:40px;" class="texto-titulo-perfil">MIS SOLICITUDES</h2>
                        </div>
                    </div>
                    <?php


?>-->
                               <!-- Barra de Busqueda -->
                              <!-- <nav class="navbar navbar-light bg-light">
                                    <div class="container-fluid">
                                        <a class="navbar-brand"></a>
                                        <form class="d-flex" name="form1" method="post">
                                            <input class="form-control me-2" name="PalabraClave" type="search" placeholder="Search..." aria-label="Search">
                                            <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
                                            <button class="btn btn" style="color:white; background-color:#fc7323;" type="submit">Buscar</button>
                                        </form>
    

<br>

	<table style="border: solid #fc7323 2.0px;" >
		<tr>
	<td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px;  font-weight: 500;" >Cedula</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Nombre</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Email</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Telefono</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Proyecto</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Estado</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Fecha_Registro</td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px;font-size: 20px; font-weight: 500;">Dowload</td>
		</tr>

		<?php 
		//$sql="SELECT * from misproyectos order By id desc";
		//$result=mysqli_query($conexion,$sql);

		//while($consulta=mysqli_fetch_array($result)){
		 ?>

		<tr>
		<td style="border: solid #fc7323 1.0px;"><?php //echo $consulta['cedula']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px ;"><?php //echo $consulta['nombresc']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php// echo $consulta['email']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php //echo $consulta['telefono']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php //echo $consulta['proyecto']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php //echo $consulta['estado']?></td>
    <td style="border: solid #fc7323 1.0px; padding:10px 10px "><?php //echo $consulta['fecha_reg']?></td>
    <td style="border: solid #fc7323 1.0px; padding:5px 5px "><form action="../../../formulario/excel.php" method="POST">
<button class="btn btn-outline" style=" color:#fff; border: none;margin-left:25px; " name="export"><img src="../../Recursos/De/sobresalir.png" alt="" style=" width: 40px; height: 40px;"></button>
<button class="btn btn-outline" style="  border: none;margin-left:20px;  " name="export"><img src="../../Recursos/De/pdf.png" alt="" style=" width: 45px; height: 45px;"></button></form></td>
		</tr>
	<?php 
	//}
	 ?>
	</table>
    </div>
                    </div>
					</div>
        
                    </div>-->
<!--Usar datatables-->
<!--<script src="../../formulario/datatables/datatables.min.js" type="text/javascript"></script>


<script src="../../formulario/datatables/Buttons-2.2.3/js/dataTables.buttons.min.js" ></script>
<script src="../../formulario/datatables/JSZip-2.5.0/jszip.min.js" ></script>
<script src="../../formulario/datatables/pdfmake-0.1.36/pdfmake.min.js" ></script>
<script src="../../formulario/datatables/pdfmake-0.1.36/vfs_fontsjs" ></script>
<script src="../../formulario/datatables/Buttons-2.2.3/js/buttons.html5.min.js" ></script>




<script src="../../formulario/"></script>
</body>

</html>-->