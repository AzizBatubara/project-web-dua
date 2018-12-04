<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iNSTall</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="https://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">iNSTall</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li class="selected"><a href="home.php"><i class="fa fa-bullseye"></i> Home</a></li>
                    <li><a href="kategori.php"><i class="fa fa-tasks"></i> Kategori</a></li>
                    <li><a href="berita.php"><i class="fa fa-globe"></i> Berita</a></li>
                    <li><a href="user.php"><i class="fa fa-font"></i> User</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">3</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">3 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Pendaftaran Berhasil</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Berita berhasil dimasukkan</span>
                                </a>
                            </li>
							<li class="divider"></li>
							<li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Selamat datang</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">7</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Aziz Batubara<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>

                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <form class="navbar-search">
                            <input type="text" placeholder="Search" class="form-control">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
case 'entri' :
?>
<strong><h1>Berita</h1></strong>
<form action="aksi_berita.php?proses=tambah" method="post">
<table>	
		<div class="form-group">
				<label class="control-label col-sm-2" for="id_berita">ID. Berita</label>
				<div class="col-sm-15">
					<input type="text" name="id_berita" >
				</div>
			</div>
		<div class="form-group">
				<label class="control-label col-sm-2" for="id_kategori">ID. Kategori</label>
				<div class="col-sm-15">
					<input type="text" name="id_kategori" >
				</div>
			</div>
		<div class="form-group">
				<label class="control-label col-sm-2" for="id_user">ID. User</label>
				<div class="col-sm-15">
					<input type="text" name="id_user" >
				</div>
			</div>
		<div class="form-group">
				<label class="control-label col-sm-2" for="judul">Judul</label>
				<div class="col-sm-15">
					<input type="text" name="judul" >
				</div>
			</div>
		<div class="form-group">
				<label class="control-label col-sm-2" for="id_jurusan">Isi Berita</label>
				<div class="col-sm-15">
					<textarea name="isi_berita" ></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="gambar">Gambar</label>
				<div class="col-sm-15">
					<input type="file" name="gambar" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="tgl_posting">Tanggal Posting</label>
				<div class="col-sm-15">
					<input type="text" name="tgl_posting" >
				</div>
			</div>
		<td></td>
		<td>
			<input type="submit" value="Simpan" name="submit" class="btn btn-success">
			<input type="reset" value="Reset" name="reset" class="btn btn-warning">
		</td>
	</form>
</table>
<?php
	break;
	case 'list' :
?>
<h1> Data Berita</h1>
<a href="?page=berita&aksi=entri"class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Entri Berita</a>
<a href="report_berita.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Cetak</a>
<table class="table table-hover" id="dataTables-example">
<thead>
	<tr>	
	<th>No</th>
	<th>ID. Berita</th>
	<th>ID. Kategori</th>
	<th>ID. User</th>
	<th>Judul</th>
	<th>Isi Berita</th>
	<th>Gambar</th>
	<th>Tanggal Posting</th>
	<th width=1%>Aksi</th>
	</tr>
</thead>	
<?php
$q=mysql_query("SELECT * FROM berita");
$no=1;
while ($data=mysql_fetch_array($q)) {
?>
<tr>
	<td> <?php echo $no; ?> </td>
	<td><?php echo $data['id_berita']?> </td>
	<td><?php echo $data['id_kategori']?> </td>
	<td><?php echo $data['id_user']?> </td>
	<td><?php echo $data['judul']?> </td>
	<td><?php echo $data['isi_berita']?> </td>
	<td><?php echo $data['gambar']?> </td>
	<td><?php echo $data['tgl_posting']?> </td>
	<td align="center"><a href="aksi_berita.php?proses=hapus&id_hapus=<?php echo $data['id_berita'] ?>" onclick="return confirm('Data akan Dihapus?')"class="btn btn-danger"><i class="fa fa-trash-o"></i>Delete</a> 
		<a href="?page=berita&aksi=edit&id_edit=<?php echo $data['id_berita'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a></td>	
</tr>
<?php
$no++;
}
?>	
</table>
<?php
	break;
	case 'edit' :
?>
<?php
$ambil=mysql_query("SELECT * FROM berita WHERE id_berita='$_GET[id_edit]'");
$data=mysql_fetch_array($ambil);
?>
<h2>Edit Berita</h2>
<div class="form-group">
		<form action="aksi_berita.php?proses=update" method="post">
			<label></label>
			<td><input type="hidden" value="<?php echo $data['id_berita']?>"  name="id" required></td>
		</div>
		<div class="form-group">
				<label class="control-label col-sm-2" for="id_berita">ID. Berita</label>
				<div class="col-sm-15">
					<input type="text" value="<?php echo $data['id_berita']?>" name="id_berita" >
				</div>
			</div>
		<div class="form-group">
				<label class="control-label col-sm-2" for="id_kategori">ID. Kategori</label>
				<div class="col-sm-15">
					<input type="text" value="<?php echo $data['id_kategori']?>" name="id_kategori" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_user">ID. User</label>
				<div class="col-sm-15">
					<input type="text" value="<?php echo $data['id_user']?>" name="id_user" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="judul">Judul</label>
				<div class="col-sm-15">
					<input type="text" value="<?php echo $data['judul']?>" name="judul" >
				</div>
			</div>
		<div class="form-group">
				<label class="control-label col-sm-2" for="id_jurusan">Isi Berita</label>
				<div class="col-sm-15">
					<input type="text" value="<?php echo $data['isi_berita']?>" name="isi_berita" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="gambar">Gambar</label>
				<div class="col-sm-15">
					<input type="file" value="<?php echo $data['gambar']?>" name="gambar" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="tgl_posting">Tanggal Posting</label>
				<div class="col-sm-15">
					<input type="text" value="<?php echo $data['tgl_posting']?>" name="tgl_posting" >
				</div>
			</div>
		<div class="form-group">
			<label></label>
			<input type="submit" name="Simpan" value="Submit" class="btn btn-success">
			<input type="reset" name="Reset" value="reset" class="btn btn-warning">
		</div>	
	</form>
<?php
	break;
	}
?>	
	    </script>
</body>
</html>