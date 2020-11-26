<?php

$nama =$_POST['nama'];
$NIM =$_POST['NIM'];
$matkul =$_POST['matkul'];
$absen =$_POST['absen'];
$tugas =$_POST['tugas'];
$uts =$_POST['uts'];
$uas =$_POST['uas'];

$nilai_absen = $absen*1;
$nilai_tugas =$tugas*1;
$nilai_uts = $uts*1;
$nilai_uas = $uas*1;


$nilai_akhir = ($nilai_absen + $nilai_tugas +$nilai_uts + $nilai_uas)/4;

if ($nilai_akhir>=80)

 {
	$grade = "A";
}

elseif ($nilai_akhir>=70)
 {
	$grade = "B";
}

elseif ($nilai_akhir>=50)
 {
	$grade = "C";
}

elseif ($nilai_akhir>=40)
 {
	$grade = "D";
}

else
{
	$grade ="E";
}


echo
"
<h1>Hitung Nilai Akhir Mahasiswa</h1>

Nama Mahasiswa : $nama<br>
NIM         : $NIM<br>
Mata Kuliah : $matkul <br>
Nilai Absen : <b>$nilai_absen</b><br>
Nilai Tugas : <b>$nilai_tugas</b><br>
Nilai uts   : <b>$nilai_uts</b><br>
Nilai uas   : <b>$nilai_uas</b><br>

<h4>Nilai Akhir : $nilai_akhir</h4>
<h4>Grade : $grade</h4>

";

?>