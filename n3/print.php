<?php
require('fpdf/fpdf.php'); 




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procument";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$supplier =$_GET['user_id'];
 $sql = "SELECT * FROM `supplier` WHERE `company`= '$supplier'";

   
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
/* $qty=$_POST['qty'];
$desc=$_POST['descr'];
$unit=$_POST['unit'];
$total=$_POST['total']; */
	





 
class PDF_reciept extends FPDF { 
    function __construct ($orientation = 'l', $unit = 'pt', $format = 'a5', $margin = 40) { 
        $this->FPDF($orientation, $unit, $format); 
        $this->SetTopMargin($margin); 
        $this->SetLeftMargin($margin); 
        $this->SetRightMargin($margin); 
        $this->SetAutoPageBreak(true, $margin); 
    } 


function Header() { 
    $this->SetFont('Arial', 'B', 20); 
    $this->SetFillColor(36, 96, 84); 
    $this->SetTextColor(225); 
    $this->Cell(0, 30, "DEVTECH+ Supply Form", 0, 1, 'C', true); 
}

function Footer() { 
    $this->SetFont('Arial', '', 12); 
    $this->SetTextColor(0); 
    $this->SetXY(0,-60); 
    $this->Cell(0, 20, "Thank you for doing business with DEVTECH+!", 'T', 0, 'C'); 
}



function PriceTable($qty,$desc){
	
	$this->SetFont('Arial', 'B', '12');
	$this->SetTextColor(0);
	$this->SetFillColor(36,140,129);
	$this->SetLineWidth(1);
	$this->Cell(120,25,"Quantity",'LTR', 0, 'C', true);
	$this->Cell(150,25,"Description",'LTR',0,'C',true);
	$this->Cell(120,25,"Unit Price",'LTR', 0, 'C', true);
	$this->Cell(120,25,"Total Price",'LTR',1,'C',true);
	

	
		$this->Cell(120,25,$_GET['qty'],'LTR', 0, 'C', false);
	$this->Cell(150,25,$_GET['descr'],'LTR',0,'C',false);
	$this->Cell(120,25,$_GET['unit'],'LTR', 0, 'C', false);
	$this->Cell(120,25,$_GET['total'],'LTR',1,'C',false);
	
	
	$this->SetFont('Arial', '');
	$this->SetFillColor(238);
	$this->SetLineWidth(0.2);
	$fill = false;
	
	
	
}





}
$pdf= new PDF_reciept();

$pdf->AddPage(); 
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY(100);

$pdf->Cell(100, 13, "Ordered to"); 
$pdf->SetFont('Arial', '' ); 
$pdf->Cell(100, 13, $_GET['user_id']);


$pdf->SetFont('Arial', 'B' ); 
$pdf->Cell(200, 13, ""); 
$pdf->Cell(200, 13, date('F j, Y'),0,1); 

$pdf->Cell(100, 13, "Address"); 
$pdf->SetFont('Arial', 'I');
$pdf->SetX(140);
$pdf->Cell(200,15,$_GET['address'],0,2);

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 13, "Order Number"); 
$pdf->SetFont('Arial', 'B' ); 
$pdf->Cell(100, 13, $_GET['order']);

$pdf->Ln(14);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 13, "Phone Number"); 
$pdf->SetFont('Arial', '' ); 
$pdf->Cell(100, 13, $_GET['phone']);

$pdf->Ln(14);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 13, "Email"); 
$pdf->SetFont('Arial', '' ); 
$pdf->Cell(100, 13, $_GET['email']);

$pdf->Ln(50);



$pdf->PriceTable($_GET['user_id'],$_GET['user_id']);

$pdf->Output();










}
}
	

		
?>