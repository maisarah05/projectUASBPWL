<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
$pdf->Image('img/logo.png', 70,20,70 );
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(50,7,'',0,10);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(27,6,'NO HP',1,0);
$pdf->Cell(25,6,'TANGGAL LHR',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,$row['nim'],1,0);
    $pdf->Cell(85,6,$row['nama_lengkap'],1,0);
    $pdf->Cell(27,6,$row['no_hp'],1,0);
    $pdf->Cell(25,6,$row['tanggal_lahir'],1,1); 
	

}
$pdf->Cell(300,7,'Pekanaru',0,1,'C');
$pdf->Cell(300,7,'Darmanto_marbun',0,1,'C');




$pdf->AddPage();
$pdf->Image('img/logo.png', 70,20,70   );
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(28,6,'NIP',1,0);
$pdf->Cell(85,6,'NAMA DOSEN',1,0);
$pdf->Cell(27,6,'MATKUL',1,0);
$pdf->Cell(29,6,'SKS',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$matakuliah= mysqli_query($connect, "select * from matakuliah");
while ($row = mysqli_fetch_array($matakuliah)){
    $pdf->Cell(28,6,$row['nip_dosen'],1,0);
    $pdf->Cell(85,6,$row['nama_dosen'],1,0);
    $pdf->Cell(27,6,$row['mata_kuliah'],1,0);
    $pdf->Cell(29,6,$row['jml_sks'],1,1);
}
$pdf->Cell(300,7,'',0,1,'C');
$pdf->Cell(300,7,'Pekanbaru, 02 Juli 2018',0,1,'C');
$pdf->Cell(300,7,'',0,1,'C');

$pdf->Cell(300,7,'Darmanto_marbun',0,1,'C');








$pdf->Output();



?>
