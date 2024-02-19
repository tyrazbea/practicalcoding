<?php 

	session_start();
	if(!$_SESSION['email'])
	{
		header("Location: index.php");
	}

	include('cek_pengguna.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SISTEM PENGURUSAN ASET SEKOLAH</title>
</head>
<body>
<center>
	<h2>SELAMAT DATANG KE DASHBOARD PENGGUNA</h2>
	<h3>MENU UTAMA SISTEM</h3>
	<h4>Selamat datang <?php echo $_SESSION['email']; ?></h4>
	<fieldset>

	<a href="laporan_lokasi.php">Laporan Lokasi Aset</a></br>
	<a href="laporan_jenis.php">Laporan Jenis Aset</a></br>
	<a href="logout.php">Log Keluar</a></br>

</fieldset>
</center>
</body>
</html>