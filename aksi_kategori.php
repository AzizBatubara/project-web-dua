<?php
include('koneksi.php');
if ($_GET['proses']=='tambah') {
if (isset($_POST['submit']))
{
$tambah=mysql_query("INSERT INTO kategori
(id,nama_kategori,keterangan) 
VALUES ('$_POST[id]','$_POST[nama_kategori]','$_POST[keterangan]')");	

if ($tambah)
	header("location:index.php?page=kategori");
}
}
elseif($_GET['proses']=='hapus'){
$hapus = mysql_query ("DELETE FROM kategori where id='$_GET[id_hapus]'");
if($hapus)
header("location:index.php?page=kategori");
//skrip hapus
}
elseif($_GET['proses']=='update'){
$ubah=mysql_query("UPDATE kategori  SET
					id				='$_POST[id]',
					nama_kategori	='$_POST[nama_kategori]',
					keterangan		='$_POST[keterangan]' WHERE id='$_POST[id]'");
if($ubah){
header("location:index.php?page=kategori");
//skrip update
}
}
?>
