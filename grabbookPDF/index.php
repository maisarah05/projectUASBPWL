<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
$pdf->Image('img/logo.png', 5, 5);
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(190,7,'DATA KUBUTAKI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Data Buku yang Diminati',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'JENIS BUKU',1,0);
$pdf->Cell(85,6,'PRESENTASE BUKU',1,0);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$penjualanbuku = mysqli_query($connect, "select * from penjualanbuku");
while ($row = mysqli_fetch_array($penjualanbuku)){
    $pdf->Cell(20,6,$row['jenisbuku'],1,0);
    //$pdf->Cell(85,6,$row['presentase'],1,0);
}

$pdf->Output();
?>
