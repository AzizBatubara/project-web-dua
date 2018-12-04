<?php
//memanggil library FPDF
require('fpdf/fpdf.php');
//instance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF();

//membuat halaman baru
$pdf->AddPage();
//setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
//mencetak string
$pdf->cell(190,7,'POLITEKNIK NEGERI PADANG',0,1,'C');
//$pdf->SetFont('Arial','B',12);
$pdf->cell(190,7,'DAFTAR KATEGORI ',0,1,'C');
//memberikan space kebawah gaar tidak terlalu cepat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'NO',1,0,'C');
$pdf->Cell(15,6,'ID',1,0,'C');
$pdf->Cell(100,6,'KATEGORI BERITA',1,0,'C');
$pdf->Cell(60,6,'KETERANGAN',1,1,'C');
$pdf->SetFont('Arial','',10);
mysql_connect('localhost','root','');
mysql_select_db('db_kasus');
$kategori= mysql_query("SELECT * FROM kategori");
$no=1;
while($row=mysql_fetch_array($kategori)){
	$pdf->Cell(15,6,$no,1,0);
	$pdf->Cell(15,6,$row['id'],1,0);
	$pdf->Cell(100,6,$row['nama_kategori'],1,0);
	$pdf->Cell(60,6,$row['keterangan'],1,1);
	$no++;
	
}
$pdf->Output();
?>