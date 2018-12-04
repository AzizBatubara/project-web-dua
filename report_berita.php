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
$pdf->cell(190,7,'DAFTAR BERITA ',0,1,'C');
//memberikan space kebawah gaar tidak terlalu cepat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'NO',1,0,'C');
$pdf->Cell(15,6,'ID',1,0,'C');
$pdf->Cell(60,6,'JUDUL',1,0,'C');
$pdf->Cell(60,6,'ISI BERITA',1,0,'C');
$pdf->Cell(40,6,'TANGGAL',1,1,'C');
$pdf->SetFont('Arial','',10);
mysql_connect('localhost','root','');
mysql_select_db('db_kasus');
$berita = mysql_query("SELECT * FROM berita");
$no=1;
while($row=mysql_fetch_array($berita)){
	$pdf->Cell(15,6,$no,1,0);
	$pdf->Cell(15,6,$row['id_berita'],1,0);
	$pdf->Cell(60,6,$row['judul'],1,0);
	$pdf->Cell(60,6,$row['isi_berita'],1,0);
	$pdf->Cell(40,6,$row['tgl_posting'],1,1);
	$no++;
	
}
$pdf->Output();
?>