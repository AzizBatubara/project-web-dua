<?php
include('koneksi.php');
if ($_GET['proses']=='tambah') {
if (isset($_POST['submit']))
{
$tambah=mysql_query("INSERT INTO berita
(id_berita,id_kategori,id_user,judul,isi_berita,gambar,tgl_posting) 
VALUES ('$_POST[id_berita]','$_POST[id_kategori]','$_POST[id_user]','$_POST[judul]','$_POST[isi_berita]','$_POST[gambar]','$_POST[tgl_posting]')");	

if ($tambah)
	header("location:index.php?page=berita");
}
}
elseif($_GET['proses']=='hapus'){
$hapus = mysql_query ("DELETE FROM berita where id_berita='$_GET[id_hapus]'");
if($hapus)
header("location:index.php?page=berita");
//skrip hapus
}
elseif($_GET['proses']=='update'){
$ubah=mysql_query("UPDATE berita  SET
					id_berita	='$_POST[id_berita]',
					id_kategori	='$_POST[id_kategori]',
					id_user		='$_POST[id_user]',
					judul		='$_POST[judul]', 
					isi_berita	='$_POST[isi_berita]',
					gambar		='$_POST[gambar]',
					tgl_posting	='$_POST[tgl_posting]' WHERE id_berita='$_POST[id_berita]'");
if($ubah){
header("location:index.php?page=berita");
//skrip update
}
}
?>
