<!DOCTYPE html>
<html>
<head>
	<title>Simpan Data Mahasiswa</title>
</head>
<body>
	<h1>Simpan Data Mahasiswa</h1>
	<?php
	$NRP = $_POST["NRP"];
	$Nama = $_POST["Nama"];
	$Foto = $_POST["Foto"];
	$Jurusan = $_POST["Jurusan"];
	$conn=mysqli_connect("localhost","root","")
	or die("koneksi gagal");
	mysqli_select_db($conn,	"itera"); echo "NRP     : $NRP <br>"; echo "Nama     : $Nama <br>";
	echo "Foto      : $Foto <br>"; echo "Jurusan     : $Jurusan <br>";
	$sqlstr="insert into mahasiswa(NRP,Nama,Alamat,ID_Jur) values ('$NRP','$Nama','$Foto','$Jurusan')";
	$hasil=mysqli_query($conn, $sqlstr);
	echo "Menyimpan data berhasil dilakukan";

	  ?>

</body>
</html>