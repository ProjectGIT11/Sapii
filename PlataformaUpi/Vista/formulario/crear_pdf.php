<?php
//Incluimos el fichero de conexion
include_once("dbconect.php");
//Incluimos la libreria PDF
include_once('libs/fpdf.php');

class PDF extends FPDF
{
// Funcion encargado de realizar el encabezado
function Header()
{
// Logo
$this->Image('logo.jpg',10,-1,70);
$this->SetFont('Arial','B',13);
// Move to the right
$this->Cell(80);
// Title
$this->Cell(95,10,'Lista de Personal',1,0,'C');
// Line break
$this->Ln(20);
}
// Funcion pie de pagina
function Footer()
{
// Position at 1.5 cm from bottom
$this->SetY(-15);
// Arial italic 8
$this->SetFont('Arial','I',8);
// Page number
$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$db = new dbConexion();
$connString = $db->getConexion();
$display_heading = array('idp'=>'ID', 'personal_nombre'=> 'Nombre', 'personal_edad'=> 'Edad','personal_salario'=> 'Salario','fecha'=> 'Fecha',);

$result = mysqli_query($connString, "SELECT idp, personal_nombre, personal_edad, personal_salario, fecha FROM personal") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM personal");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
// Declaramos el ancho de las columnas
$w = array(15, 80, 20, 30,30);
//Declaramos el encabezado de la tabla
$pdf->Cell(15,12,'ID',1);
$pdf->Cell(80,12,'NOMBRE',1);
$pdf->Cell(20,12,'EDAD',1);
$pdf->Cell(30,12,'SALARIO',1);
$pdf->Cell(30,12,'FECHA',1);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
//Mostramos el contenido de la tabla
foreach($result as $row)
{
$pdf->Cell($w[0],6,$row['idp'],1);
$pdf->Cell($w[1],6,$row['personal_nombre'],1);
$pdf->Cell($w[2],6,$row['personal_edad'],1);
$pdf->Cell($w[3],6,number_format($row['personal_salario']),1);
$pdf->Cell($w[3],6,$row['fecha'],1);
$pdf->Ln();
}
$pdf->Output();