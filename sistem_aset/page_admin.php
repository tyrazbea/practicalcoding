<?php 

	session_start();
	if(!$_SESSION['email'])
	{
		header("Location: index.php");
	}

	include('cek_admin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SISTEM PENGURUSAN ASET SEKOLAH</title>
</head>
<body>
<center>
	<h2>SELAMAT DATANG KE DASHBOARD PENTADBIR</h2>
	<h3>MENU UTAMA SISTEM</h3>

	<a href="daftar_asetbaru.php">Daftar Aset Baru</a></br>
	<a href="update_jenis.php">Kemaskini Jenis Aset</a></br>
	<a href="update_lokasi.php">Kemaskini Maklumat Aset</a></br>
	<a href="senarai_aset.php">Senarai Maklumat Aset</a></br>
	<a href="hapus_aset.php">Hapus Maklumat Aset</a></br>
	<a href="logout.php">Log Keluar</a></br>

</center>
</body>
</html>