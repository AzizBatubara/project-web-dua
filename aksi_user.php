<?php
include('koneksi.php');
if ($_GET['proses']=='tambah') {
if (isset($_POST['submit']))
{
$tambah=mysql_query("INSERT INTO user
(username,password,level) 
VALUES ('$_POST[username]','$_POST[password]','$_POST[level]')");	

if ($tambah)
	header("location:index.php?page=user");
}
}
elseif($_GET['proses']=='hapus'){
$hapus = mysql_query ("DELETE FROM user where username='$_GET[id_hapus]'");
if($hapus)
header("location:index.php?page=user");
//skrip hapus
}
elseif($_GET['proses']=='update'){
$ubah=mysql_query("UPDATE user  SET
					username		='$_POST[username]',
					password		='$_POST[password]',
					level			='$_POST[level]' WHERE username='$_POST[id_hapus]'");
if($ubah){
header("location:index.php?page=user");
//skrip update
}
}
?>
