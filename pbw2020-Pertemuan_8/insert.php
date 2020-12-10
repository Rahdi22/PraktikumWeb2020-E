<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="style3.css">
</head>
<body>
 
	<h2>Data Mahasiswa/i</h2>
	<br/>
	<h3>Tambah Data Mahasiswa</h3>
	<form method="post" action="insert_aksi.php">
		<table cellpadding="13">
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
            <tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	<br/>
	<div class="box">
	<a href="halaman_admin.php">KEMBALI</a>
	</div>
</body>
</html>