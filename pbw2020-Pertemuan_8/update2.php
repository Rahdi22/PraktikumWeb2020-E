<?php 

include 'koneksi.php';
 
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
 
mysqli_query($koneksi,"update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where id='$id'");
 
header("location:halaman_pegawai.php");
 
?>